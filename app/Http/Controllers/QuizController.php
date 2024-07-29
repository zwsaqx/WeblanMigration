<?php

namespace App\Http\Controllers;

  //Here we control what to do with the data in the table called Quiz
use App\Models\Quiz;
use App\Models\Answers;
use Illuminate\Http\Request;


class QuizController extends Controller
{
  
  //Functions to show Quizzes from each category
  
  //Bluetooth Quiz
    public function showBluetoothQuiz(){
      $BTquizzes=Quiz::where('ID','like','%BT')->get();
      return view ("Bluetooth.BluetoothQuiz",["BTquizzes"=>$BTquizzes]);
     
    }

    //WiredLan Quiz
    public function showWiredLanQuiz(){
      $WRDquizzes=Quiz::where('ID','like','%WRD')->get();
      return view ("WiredLan.WiredLanQuiz",["WRDquizzes"=>$WRDquizzes]);
    }

    //Wireless Lan Quiz

    public function showWirelessLanQuiz(){
      $WLquizzes=Quiz::where('ID','like','%WL')->get();
      return view ("WirelessLan.WirelessLanQuiz",["WLquizzes"=>$WLquizzes]);
    }

    //TCPIP Quiz
    public function showTCPIPQuiz(){
      $TIquizzes=Quiz::where('ID','like','%TI')->get();
      return view ("TCPIP.TCPIPQuiz",["TIquizzes"=>$TIquizzes]);
    }

    //DataLink Quiz

    public function showDataLinkQuiz(){
      $DLquizzes=Quiz::where('ID','like','%DL')->get();
      return view ("DataLink.DataLinkQuiz",["DLquizzes"=>$DLquizzes]);
    }



    //Function to fetch the user's quiz with calculating the score according to their answers.
    public function SubmitQuiz(Request $request){

      //Initiate the answers array that will save the option chosen
      $answers=[];
        //key is the Id of the question and value is the option chosen
      //Loop through the request data
      foreach ($request->all() as $key => $value) {
        // Skip the CSRF token
        if ($key == "_token") continue;
        

        // The key is in the format 'quiz<ID>', so we remove the 'quiz' prefix to get the ID
        if (str_contains($key,"BTquiz")){
        $questionId = str_replace('BTquiz', '', $key);
        }
        elseif(str_contains($key,"WRDquiz")){
          $questionId=str_replace("WRDquiz",'',$key);
        }
        elseif(str_contains($key,"WLquiz")){
          $questionId=str_replace("WLquiz",'',$key);
        }
        elseif(str_contains($key,"DLquiz")){
          $questionId=str_replace("DLquiz",'',$key);
        }
        else
          $questionId=str_replace("TIquiz",'',$key);
       



        // Save the question ID and the chosen option in the associative array
        $answers[$questionId] = $value;
      }


    $score = 0;
    $wrongAnswers=0;

    // Loop through the $answers array
    foreach ($answers as $questionId => $chosenOption) {
        // Retrieve the correct answer for the question from the Answers table
        $correctAnswer = Answers::where('ID', $questionId)->first()->Answer;  //Answer is the Column name 

        // Compare the chosen option with the correct answer
        if (strcasecmp(trim($correctAnswer), trim($chosenOption)) == 0) {
            // If the chosen option is correct, increment the score
            $score++;
        }
        else{
          $wrongAnswers++;
        }
    }
    $Percentage=($score/($score+$wrongAnswers))*100;
    echo nl2br("your score is : $score\n");
    echo nl2br("Your result in percentage:". $Percentage."%"."\n");


    //html code to display a RedoQuiz button
   echo "<button onclick='window.history.back()'>Retake the Quizz</button>";
    }
}
