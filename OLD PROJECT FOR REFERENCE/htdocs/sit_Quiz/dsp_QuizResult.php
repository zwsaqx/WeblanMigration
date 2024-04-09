<?php


// Get the count of total questions
$totalQuestions = count($_SESSION["quizQuestions"]);
$correctAnswers = 0;
$unansweredQuestions = 0;

// Process answers
$userResult = "";
for ($i = 0; $i < $totalQuestions; $i++) {
  // Get question
  $userResult .= "<span class=\"darkBlueText\">" .htmlspecialchars($_SESSION["quizQuestions"][$i]["question"])."</span><br>\n";

  // Extract and compare answer
  $answerArray = explode("|||",$_SESSION["quizQuestions"][$i]["answers"]);
  $totalAnswers = count($answerArray);

  $correctAns = "";
  $answerOnce = "";
  $correctFound = false;
  $answeredCorrectly = false;
  for ($j = 0; $j < $totalAnswers; $j++) {
    $answerRow = explode("```", $answerArray[$j]);

    // If a answer is supplied
    if (isset($_SESSION["quizQuestions"][$i]["userAnswer"])) {
      // If a incorrect answer supplied
      if (($answerRow[0] == $_SESSION["quizQuestions"][$i]["userAnswer"]) && ($answerRow[1] == "f")) {
        // Show user's incorrect answer
        $answerOnce = "<div style=\"color:ff0000; margin-left:1em;\">You answered incorrectly: ".htmlspecialchars($answerRow[0])."</div>";
      // If a correct answer is supplied
      } else if (($answerRow[0] == $_SESSION["quizQuestions"][$i]["userAnswer"]) && ($answerRow[1] == "t")) {
        // Show user's correct answer
        $answeredCorrectly = true;
        $correctFound = true;
        $correctAnswers++;
        $answerOnce = "<div style=\"color:009933; margin-left:1em;\">You answered correctly: ".htmlspecialchars($answerRow[0])."</div><br>";
        $correctAns = "";
      // Get rest of answers
      } else if (($answerRow[0] != $_SESSION["quizQuestions"][$i]["userAnswer"]) && ($answerRow[1] == "t")) {
        // Show actual correct answer for multiple and single answer results
        $correctFound = true;
        if ($correctAns == "") {
          $correctAns = $answerRow[0];
        } else {
          $correctAns .= " or ".$answerRow[0];
        }
      }
    } else {
      // No answer entered, correct answer found
      if ($answerRow[1] == "t") {
        //$correctFound = true;
        // Show incorrect answer result
        $answerOnce = "<span style=\"margin-left:1em;\">You did not answer this question.</span><br>";
        // Show actual correct answer
        if ($correctAns == "") {
          $correctAns = $answerRow[0];
        } else {
          $correctAns .= " or ".$answerRow[0];
        }
      }
    }
  }
  // Count the number of unanswered and incorrect questions
  if ((!$correctFound) && (!$answeredCorrectly) && (!isset($_SESSION["quizQuestions"][$i]["userAnswer"]))) {
    $unansweredQuestions++;
  }

  // Remove answers if answered correctly
  if ($answeredCorrectly) {
    $correctAns = "";
    //$answerOnce = "";
  }

  // Only show correct answer if there is one to be displayed i.e. user has answered incorrectly so a correct one found
  if ($correctAns != "") {
    $correctAns = "<div style=\"margin-left:1em;\">The correct answer is: ".htmlspecialchars($correctAns)."</div><br>";
  }
  $userResult .= $answerOnce.$correctAns;
}
?>


<table border="0" cellpadding="20" cellspacing="0" class="normalText">
  <tr>
   <td>
     <table width="550" class="normalText">
        <tr>
          <td colspan="2" class="darkBlueTextJumbo">Quiz Summary</td>
        </tr>
        <tr>
          <td width="400">Correctly Answered:</td>
          <td><?php echo($correctAnswers); ?> Questions</td>
        </tr>
        <tr>
          <td>Incorrectly Answered:</td>
          <td><?php echo ($totalQuestions - $unansweredQuestions - $correctAnswers) ; ?> Questions</td>
        </tr>
        <tr>
          <td>Unanswered Questions:</td>
          <td><?php echo($unansweredQuestions); ?> Questions</td>
        </tr>
        <tr>
          <td>Total Questions:</td>
          <td><?php echo($totalQuestions); ?> Questions</td>
        </tr>
        <tr>
          <td>Score (Correctly Answered / Total Questions):</td>
          <td><?php echo (int)(($correctAnswers/$totalQuestions*100)); ?>%</td>
        </tr>
        <tr>
          <td>Score (Correctly Answered / Total Attempted):</td>
          <td>
            <?php
              if (($totalQuestions - $unansweredQuestions) == 0) {
                echo "0";
              } else {
                echo (int)(($correctAnswers/($totalQuestions - $unansweredQuestions) *100));
              }
            ?>%
          </td>
        </tr>
     </table>
   </td>
  </tr>
  <tr>
    <td>
      <?php echo($userResult); ?>
    </td>
  </tr>
  <tr>
    <td><a href="index.php?fuseaction=<?php
                                         if ($_SESSION["quizType"] == 1) {
                                        echo($XFA["wiredQuiz"]);
                                      } if ($_SESSION["quizType"] == 2){
                                        echo($XFA["wirelessQuiz"]);
                                      }
										if ($_SESSION["quizType"] == 3){
                                        echo($XFA["tcpipQuiz"]);
                                      }
										if ($_SESSION["quizType"] == 4){
                                        echo($XFA["dataQuiz"]);
                                      }
                                      ?>">Press here</a> if you would like to take the quiz again.
    </td>
  </tr>
</table>
