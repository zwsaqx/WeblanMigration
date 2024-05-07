<?php

namespace App\Http\Controllers;

  //Here we control what to do with the data in the table called Quiz
use App\Models\Quiz;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Continue_;

class QuizController extends Controller
{
  

    public function showAll(){
        $quizzes=Quiz::all();
        return view("Bluetooth.BluetoothQuiz",['quizzes'=>$quizzes]);
    }


    
    public function SubmitQuiz(Request $request){

      //Initiate the answers array that will save the option chosen
      $answers=[];
        //key is the Id of the question and value is the option chosen
      //Loop through the request data
      foreach ($request->all() as $key => $value) {
        // Skip the CSRF token
        if ($key == "_token") continue;

        // The key is in the format 'quiz<ID>', so we remove the 'quiz' prefix to get the ID
        $questionId = str_replace('quiz', '', $key);

        // Save the question ID and the chosen option in the associative array
        $answers[$questionId] = $value;
      }
      //echo($answers["1BT"]);
      foreach ($answers as $key => $value) {
        echo "Key: " . $key . "\n";
        echo "Value: " . $value . "\n";
    }
    }
}
