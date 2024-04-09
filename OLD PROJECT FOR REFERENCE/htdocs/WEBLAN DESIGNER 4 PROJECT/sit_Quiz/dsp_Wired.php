<?php
// this is the wired quiz file...

/* test to prove that array_rand works
$data = array(array("row 1", "ans 1"),array("row 2", "ans 2"),array("row 3", "ans 3"),array("row 4", "ans 4"),array("row 5", "ans 5"),array("row 6", "ans 6"));
$randData = array_rand($data, 5);

$result = "";
for ($i = 0; $i <= 4; $i++) {
  $result .= $data[$randData[$i]][0].": ".$data[$randData[$i]][0]."<br>";
}
*/

// If need to then initialize quiz
if (($_SESSION[QUIZ_TYPE] != WIRED)||($_SESSION[QUIZ_STATUS] == INITIALIZING)) {
  // Define the quiz range
  $_SESSION["quizSettings"] = getQuizSettings();
  $_SESSION[QUIZ_TYPE] = WIRED;
  $_SESSION["quizPage"] = 0;

  // Fetch the questions
  $_SESSION["quizQuestions"] = initQuiz(WIRED, $_SESSION["quizSettings"]["tot"]);

  // Start the quiz
  $_SESSION[QUIZ_STATUS] = STARTED;
}

// Get the count of total questions
$totalQuestions = count($_SESSION["quizQuestions"]);

// Store answers if needed
if (isset($_POST["btnNext"]) || isset($_POST["btnBack"]) || isset($_POST["btnFinish"])) {
  // Store answers user entered
  $startQuestion = $_SESSION["quizSettings"]["qpp"]*$_SESSION["quizPage"];
  $maxQuestion = $_SESSION["quizSettings"]["qpp"]*($_SESSION["quizPage"]+1);
  // Go through every answer
  for ($i = $startQuestion; (($i < $totalQuestions)&&($i < $maxQuestion)); $i++) {
    if (isset($_POST["rad$i"])) {
      $_SESSION["quizQuestions"][$i]["userAnswer"] = $_POST["rad$i"];
    }
  }
}

// If next clicked then move to next quiz page if additional page is available
if (isset($_POST["btnNext"])) {
  if (($_SESSION["quizSettings"]["qpp"]*$_SESSION["quizPage"]) > $totalQuestions) {
    // End the quiz
    $_SESSION[QUIZ_STATUS] = FINISHED;
  } else {
    $_SESSION["quizPage"] = $_SESSION["quizPage"] + 1;
  }
} else if (isset($_POST["btnBack"])) {
  $_SESSION["quizPage"] = $_SESSION["quizPage"] - 1;
  $_SESSION[QUIZ_STATUS] = STARTED;
}

// If finished is clicked then go to finished
if (isset($_POST["btnFinish"])) {
  $_SESSION[QUIZ_STATUS] = INITIALIZING;
  $_SESSION["quizPage"] = 0;
  header("location: index.php?fuseaction=".$XFA["finish"]);
}

// If cancel is clicked then go to quiz menu
if (isset($_POST["btnCancel"])) {
  $_SESSION[QUIZ_STATUS] = INITIALIZING;
  $_SESSION["quizPage"] = 0;
  header("location: index.php?fuseaction=".$XFA["quiz"]);
}

// Show current quiz page
$quizOutput = "";
$isOnLastPage = false;
if (($_SESSION[QUIZ_STATUS] == STARTED)&&($totalQuestions > 0)) {
  $startQuestion = $_SESSION["quizSettings"]["qpp"]*$_SESSION["quizPage"];
  $maxQuestion = $_SESSION["quizSettings"]["qpp"]*($_SESSION["quizPage"]+1);
  $isOnLastPage = $totalQuestions <= $maxQuestion;

  // Go through every question
  for ($i = $startQuestion; (($i < $totalQuestions)&&($i < $maxQuestion)); $i++) {
    // Display quiz question
    $quizOutput .= "<span class=\"darkBlueText\">" .htmlspecialchars($_SESSION["quizQuestions"][$i]["question"])."</span><br>\n <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"normalText\">";

    // Display quiz answers
    $answerArray = explode("|||",$_SESSION["quizQuestions"][$i]["answers"]);
    $totalAnswers = count($answerArray);
    // Randomize the array
    //$answerArrayIndexes = array_rand($answerArray, $totalAnswers);
    for ($j = 0; $j < $totalAnswers; $j++) {
      //$answerRow = explode("```", $answerArray[$answerArrayIndexes[$j]]);
      $answerRow = explode("```", $answerArray[$j]);
      $selected = "";
      if (isset($_SESSION["quizQuestions"][$i]["userAnswer"])) {
        if ($_SESSION["quizQuestions"][$i]["userAnswer"] == $answerRow[0]) {
          $selected = "checked ";
        }
      }
      $quizOutput .= "<tr valign=\"top\"><td style=\"padding:2px;\"><input type=\"radio\" name=\"rad$i\" value=\"".htmlspecialchars($answerRow[0])."\" $selected></td><td class=\"answerPadding\">".htmlspecialchars($answerRow[0])."</td></tr>\n";
    }
    $quizOutput .= "</table><br>";
  }
}

?>

<div align="center" class="darkBlueTextJumbo">Wired LAN Quiz</div>
<br />
<form name="frmResults" action="" method="post">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="normalText">
    <tr>
      <td>
        <? if ($totalQuestions ==0) {
	         echo "There are currently no quiz questions available.";    
	       }
		?>
        <?php echo($quizOutput); ?>
		<?php 
		  if ($_SESSION["quizPage"] > 0 && $totalQuestions !=0) {
		    echo ('<input type="submit" name="btnBack" value="Back">');          
		  }
		  if ($isOnLastPage && $totalQuestions !=0) {
		    echo ('<input type="submit" name="btnFinish" value="Finish" onClick="return confirm(\'Are you sure you want to finish the quiz ?\');">');     
		    echo ('<input type="submit" name="btnCancel" value="Cancel">');
		  }
		  else {
		    if ($totalQuestions !=0) {
		      echo ('<input type="submit" name="btnNext" value="Next"><input type="submit" name="btnFinish" value="Finish" onClick="return confirm(\'Are you sure you want to finish the quiz ?\');">');
		    echo ('<input type="submit" name="btnCancel" value="Cancel">');    
		    } 
		  }
	    ?>
	</td>
    </tr>
  </table>
</form>