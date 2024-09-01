<?php
namespace App\Http\Controllers;

// namespace App\Http\Controllers;

//   //Here we control what to do with the data in the table called Quiz
// use App\Models\Quiz;
// use App\Models\Answers;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

// use function PHPUnit\Framework\isEmpty;

// class QuizController extends Controller

  
  //Functions to show Quizzes from each category
  
//   //Bluetooth Quiz
//     public function showBluetoothQuiz(){
//       $BTquizzes=Quiz::where('ID','like','%BT')->get();
//       return view ("Bluetooth.BluetoothQuiz",["BTquizzes"=>$BTquizzes]);
     
//     }

//     //WiredLan Quiz
//     public function showWiredLanQuiz(){
//       $WRDquizzes=Quiz::where('ID','like','%WRD')->get();
//       return view ("WiredLan.WiredLanQuiz",["WRDquizzes"=>$WRDquizzes]);
//     }

//     //Wireless Lan Quiz

//     public function showWirelessLanQuiz(){
//       $WLquizzes=Quiz::where('ID','like','%WL')->get();
//       return view ("WirelessLan.WirelessLanQuiz",["WLquizzes"=>$WLquizzes]);
//     }

//     //TCPIP Quiz
//     public function showTCPIPQuiz(){
//       $TIquizzes=Quiz::where('ID','like','%TI')->get();
//       return view ("TCPIP.TCPIPQuiz",["TIquizzes"=>$TIquizzes]);
//     }

//     //DataLink Quiz

//     public function showDataLinkQuiz(){
//       $DLquizzes=Quiz::where('ID','like','%DL')->get();
//       return view ("DataLink.DataLinkQuiz",["DLquizzes"=>$DLquizzes]);
//     }

    



//     //Function to fetch the user's quiz with calculating the score according to their answers.
//     public function SubmitQuiz(Request $request){

//       //Initiate the answers array that will save the option chosen
//       $answers=[];
//       $QuizUniqueID='';
//         //key is the Id of the question and value is the option chosen
//       //Loop through the request data
//       foreach ($request->all() as $key => $value) {
//         // Skip the CSRF token
//         if ($key == "_token") continue;
        

//         // The key is in the format 'quiz<ID>', so we remove the 'quiz' prefix to get the ID
//         if (str_contains($key,"BTquiz")){
//         $questionId = str_replace('BTquiz', '', $key);
//         $QuizUniqueID='BT';

//         }
//         elseif(str_contains($key,"WRDquiz")){
//           $questionId=str_replace("WRDquiz",'',$key);
//           $QuizUniqueID='WRD';
//         }
//         elseif(str_contains($key,"WLquiz")){
//           $questionId=str_replace("WLquiz",'',$key);
//           $QuizUniqueID='WL';
//         }
//         elseif(str_contains($key,"DLquiz")){
//           $questionId=str_replace("DLquiz",'',$key);
//           $QuizUniqueID='DL';
//         }
//         else{
//           $questionId=str_replace("TIquiz",'',$key);
//           $QuizUniqueID='TI';
//         }
       



//         // Save the question ID and the chosen option in the associative array
//         $answers[$questionId] = $value;
//       }


//     $score = 0;
//     $wrongAnswers=0;
//     $chosenOptions=[];

//     // Loop through the $answers array
//     foreach ($answers as $questionId => $chosenOption) {
//         // Retrieve the correct answer for the question from the Answers table
//         $correctAnswer = Answers::where('ID', $questionId)->first()->Answer;
        



//         // Compare the chosen option with the correct answer
//         if (strcasecmp(trim($correctAnswer), trim($chosenOption)) == 0) {
//             // If the chosen option is correct, increment the score
//             $score++;
//         }
//         else{
//           $wrongAnswers++;
//         }
//         array_push($chosenOptions,$chosenOption);
//     }

   

//     //Handles the logic of what is going to be displayed upon Quiz submission:
//     //Getting every question in Quiz
//     $questions = DB::table('Quiz')->where('ID', 'like', '%' . "$QuizUniqueID" . '%')->get()->toArray();
//     $NumberofQuesions=DB::table('Quiz')->where('ID', 'like', '%' . "$QuizUniqueID" . '%')->count();
//     $CorrectAnswers=DB::table('Answers')->where('ID','like','%'."$QuizUniqueID".'%')->get()->toArray();

// //Sanities the user answers in case the user didn't answer every question:
//     for ($i=0;$i<($NumberofQuesions);$i++){
//       if ($chosenOptions[$i]==""){
//         $chosenOptions[$i]=" you didn't answer this question";
//       }
//     }

//     $percentage=($score/($NumberofQuesions))*100;
//     echo nl2br("your score is : $score\n");
//     echo nl2br("Your result in percentage:". round($percentage,1)."%"."\n");
//     echo nl2br("You have answered: ".$score." out of ".$NumberofQuesions."\n");
//     // echo nl2br("$questionId\n");
//     for($i=0;$i<($NumberofQuesions);$i++){
//       echo nl2br($questions[$i]->Questions. " The right answer is: ".$CorrectAnswers[$i]->Answer."\n");
//      echo nl2br($chosenOptions[$i]);
      
//     }


//     //html code to display a RedoQuiz button
//    echo "<button onclick='window.history.back()'>Retake the Quizz</button>";
//     }









//////////////////////////////////////////////////
/////////////////////////////////////////////////
////////////////////////////////////////////////////
 // Function to fetch the user's quiz with calculating the score according to their answers.




use App\Models\Quiz;
use App\Models\Answers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    // Functions to show Quizzes from each category

    // Bluetooth Quiz
    public function showBluetoothQuiz(){
        $BTquizzes = Quiz::where('ID', 'like', '%BT')->get();
        return view("Bluetooth.BluetoothQuiz", ["BTquizzes" => $BTquizzes]);
    }

    // WiredLan Quiz
    public function showWiredLanQuiz(){
        $WRDquizzes = Quiz::where('ID', 'like', '%WRD')->get();
        return view("WiredLan.WiredLanQuiz", ["WRDquizzes" => $WRDquizzes]);
    }

    // Wireless Lan Quiz
    public function showWirelessLanQuiz(){
        $WLquizzes = Quiz::where('ID', 'like', '%WL')->get();
        return view("WirelessLan.WirelessLanQuiz", ["WLquizzes" => $WLquizzes]);
    }

    // TCPIP Quiz
    public function showTCPIPQuiz(){
        $TIquizzes = Quiz::where('ID', 'like', '%TI')->get();
        return view("TCPIP.TCPIPQuiz", ["TIquizzes" => $TIquizzes]);
    }

    // DataLink Quiz
    public function showDataLinkQuiz(){
        $DLquizzes = Quiz::where('ID', 'like', '%DL')->get();
        return view("DataLink.DataLinkQuiz", ["DLquizzes" => $DLquizzes]);
    }

    // Function to fetch the user's quiz with calculating the score according to their answers.
    public function SubmitQuiz(Request $request){
        // Initiate the answers array that will save the option chosen
        $answers = [];
        $QuizUniqueID = '';

        // Loop through the request data
        foreach ($request->all() as $key => $value) {
            // Skip the CSRF token
            if ($key == "_token") continue;

            // The key is in the format 'quiz<ID>', so we remove the 'quiz' prefix to get the ID
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

            // Save the question ID and the chosen option in the associative array
            $answers[$questionId] = $value;
        }

        $score = 0;
        $chosenOptions = [];
        $NumberofAnswered=0;

        // Loop through the $answers array
        foreach ($answers as $questionId => $chosenOption) {
            // Retrieve the correct answer for the question from the Answers table
            $correctAnswer = Answers::where('ID', $questionId)->first()->Answer;

            // Compare the chosen option with the correct answer
            if (strcasecmp(trim($correctAnswer), trim($chosenOption)) == 0) {
                // If the chosen option is correct, increment the score
                $score++;
            }
            $chosenOptions[$questionId] = $chosenOption;
        }

        // Handles the logic of what is going to be displayed upon Quiz submission:
        // Getting every question in Quiz
        $questions = DB::table('Quiz')->where('ID', 'like', '%' . "$QuizUniqueID" . '%')->get()->toArray();
        $NumberofQuestions = DB::table('Quiz')->where('ID', 'like', '%' . "$QuizUniqueID" . '%')->count();
        $CorrectAnswers = DB::table('Answers')->where('ID', 'like', '%' . "$QuizUniqueID" . '%')->get()->toArray();

        // Sanitize the user answers in case the user didn't answer every question:
        foreach ($questions as $question) {
            if (!isset($chosenOptions[$question->ID])) {
                $chosenOptions[$question->ID] = "you didn't answer this question";
            }
            else{
              $NumberofAnswered++;
            }
            
           
        }

        $percentage = ($score / $NumberofQuestions) * 100;
        echo nl2br("Your score is: $score\n");
        echo nl2br("Your result in percentage: " . round($percentage, 1) . "%\n");
        echo nl2br("You have answered: ". $NumberofAnswered . " out of $NumberofQuestions\n");

        

        foreach ($questions as $index => $question) {

          //If the user answers right, their displayed answer will be: "right!"
          if ($chosenOptions[$question->ID]==$CorrectAnswers[$index]->Answer){
            $chosenOptions[$question->ID]="right!";
          }

            echo nl2br($question->Questions . " The right answer is: " . $CorrectAnswers[$index]->Answer .
             " Your answer is :".$chosenOptions[$question->ID]. "\n");
            echo "<br></br>";
         
        }

        // HTML code to display a RedoQuiz button
        echo "<button onclick='window.history.back()'>Retake the Quiz</button>";
    }
}

