<?php
namespace App\Http\Controllers;
use App\Models\Quiz;
use App\Models\Answers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    // Functions to show Quizzes from each category

    // Bluetooth Quiz
    public function showBluetoothQuiz()
    {
        $BTquizzes = Quiz::where('ID', 'like', '%BT')->get();
        return view("Bluetooth.BluetoothQuiz", ["BTquizzes" => $BTquizzes]);
    }

    // WiredLan Quiz
    public function showWiredLanQuiz()
    {
        $WRDquizzes = Quiz::where('ID', 'like', '%WRD')->get();
        return view("WiredLan.WiredLanQuiz", ["WRDquizzes" => $WRDquizzes]);
    }

    // Wireless Lan Quiz
    public function showWirelessLanQuiz()
    {
        $WLquizzes = Quiz::where('ID', 'like', '%WL')->get();
        return view("WirelessLan.WirelessLanQuiz", ["WLquizzes" => $WLquizzes]);
    }

    // TCPIP Quiz
    public function showTCPIPQuiz()
    {
        $TIquizzes = Quiz::where('ID', 'like', '%TI')->get();
        return view("TCPIP.TCPIPQuiz", ["TIquizzes" => $TIquizzes]);
    }

    // DataLink Quiz
    public function showDataLinkQuiz()
    {
        $DLquizzes = Quiz::where('ID', 'like', '%DL')->get();
        return view("DataLink.DataLinkQuiz", ["DLquizzes" => $DLquizzes]);
    }

    public function SubmitQuiz(Request $request)
    {
        // Initiate the answers array that will save the option chosen
        $answers = [];
        $QuizUniqueID = '';

        // Loop through the request data
        foreach ($request->all() as $key => $value) {
            if ($key == "_token")
                continue;

            // Determine quiz type and question ID
            if (str_contains($key, "BTquiz")) {
                $questionId = str_replace('BTquiz', '', $key);
                $QuizUniqueID = 'BT';
            } elseif (str_contains($key, "WRDquiz")) {
                $questionId = str_replace("WRDquiz", '', $key);
                $QuizUniqueID = 'WRD';
            } elseif (str_contains($key, "WLquiz")) {
                $questionId = str_replace("WLquiz", '', $key);
                $QuizUniqueID = 'WL';
            } elseif (str_contains($key, "DLquiz")) {
                $questionId = str_replace("DLquiz", '', $key);
                $QuizUniqueID = 'DL';
            } else {
                $questionId = str_replace("TIquiz", '', $key);
                $QuizUniqueID = 'TI';
            }

            $answers[$questionId] = $value;
        }

        $score = 0;
        $chosenOptions = [];
        $NumberofAnswered = 0;

        // Check the answers
        foreach ($answers as $questionId => $chosenOption) {
            $correctAnswer = Answers::where('ID', $questionId)->first()->Answer;

            if (strcasecmp(trim($correctAnswer), trim($chosenOption)) == 0) {
                $score++;
            }
            $chosenOptions[$questionId] = $chosenOption;
        }

        // Get quiz questions and correct answers
        $questions = DB::table('Quiz')->where('ID', 'like', '%' . "$QuizUniqueID" . '%')->get()->toArray();
        $NumberofQuestions = DB::table('Quiz')->where('ID', 'like', '%' . "$QuizUniqueID" . '%')->count();
        $CorrectAnswers = DB::table('Answers')->where('ID', 'like', '%' . "$QuizUniqueID" . '%')->get()->toArray();

        // Handle unanswered questions
        foreach ($questions as $question) {
            if (!isset($chosenOptions[$question->ID])) {
                $chosenOptions[$question->ID] = "you didn't answer this question";
            } else {
                $NumberofAnswered++;
            }
        }

        $percentage = ($score / $NumberofQuestions) * 100;

        // Pass data to the view
        return view('quiz_results', [
            'score' => $score,
            'NumberofQuestions' => $NumberofQuestions,
            'percentage' => round($percentage, 1),
            'NumberofAnswered' => $NumberofAnswered,
            'questions' => $questions,
            'chosenOptions' => $chosenOptions,
            'CorrectAnswers' => $CorrectAnswers
        ]);
    }

}

