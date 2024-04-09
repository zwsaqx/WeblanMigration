<?php
// this is the main file...

$_SESSION[QUIZ_STATUS] = INITIALIZING;
$_SESSION["quizPage"] = 0;

if ($_SESSION[QUIZ_TYPE] == WIRED) {
  header("location: index.php?fuseaction=".$XFA["wiredQuiz"]);   
}
if ($_SESSION[QUIZ_TYPE] == WIRELESS) {
  header("location: index.php?fuseaction=".$XFA["wirelessQuiz"]);   
}
?>

<h1>Quiz Main!</h1>
<a href="index.php?fuseaction=<?php echo($XFA["wiredQuiz"]); ?>">Wired Networks Quiz</a><br>
<a href="index.php?fuseaction=<?php echo($XFA["wirelessQuiz"]); ?>">Wireless Networks Quiz</a>