<?php

/******************************************************
  File:    qry_Conn.php
  Author:  Geoff Lee, Jeff Chang, Trung Ly
  Purpose: Database connection for handling database access
           Is a facade immitator
******************************************************/

define("ALL_QUESTIONS",0);

//----------------------------------------------------------------

function initDb() {
// Connect to and return the initialised database connnection
  // Get the database connection parameters
  include("./qry_ConnParams.php");

  // Connect to the database and return the initialised database
  @$db = mysql_connect($host, $user, $password);
  if (!$db) {
    $_SESSION['error'] .= "$database not started up.<br>Description: ".mysql_errno($db).": ".mysql_error($db)."<br>\n";
    header("location:?fuseaction=error.dataMissing");
  }
  @$dbSelected = mysql_select_db($database, $db);
  if (!$dbSelected) {
    $_SESSION['error'] .= "$database database missing.<br>Description: ".mysql_errno($db).": ".mysql_error($db)."<br>\n";
    //header("location:?fuseaction=error.dataMissing");
  }
  return $db;
}

//----------------------------------------------------------------

function execQuery($Sql, $Db) {
// Execute a query and return error if needed
  @$result = mysql_query($Sql,$Db);

  $error = mysql_error($Db);
  if ($error != "") {
    $_SESSION['error'] .= "Database problem encountered.<br>$Sql<br>Description: ".mysql_errno($Db).": ".mysql_error($Db)."<br>\n";
    //header("location:?fuseaction=error.dataProblem");
  }

  return $result;
}

//----------------------------------------------------------------

function extractQuiz($QuizType) {
  // Initialize quiz questions
  $db = initDb();

  // Get quiz questions
  $sql = "SELECT ID, Question, Answers, Visible FROM Quiz WHERE Type = '$QuizType' order by ID;";
  $result = execQuery($sql,$db);

  // Count the number of available questions
  $availableQuestions = mysql_numrows($result);

  // Only do the rest if there are questions available
  $questionArray = null;
  if ($availableQuestions > 0) {
    // Turn the questions dataset into an array
    for ($i = 0; $i < $availableQuestions; $i++) {
      $questionArray[$i]["id"] = trim(stripslashes(mysql_result($result, $i, "ID")));
      $questionArray[$i]["question"] = trim(stripslashes(mysql_result($result, $i, "Question")));
      $questionArray[$i]["answers"] = trim(stripslashes(mysql_result($result, $i, "Answers")));
      $questionArray[$i]["visible"] = trim(stripslashes(mysql_result($result, $i, "Visible")));
    }
  } else {
    // no questions found
  }

  return $questionArray;
}

//----------------------------------------------------------------

function extractAnswers($AnswerArrayString) {
  // Extract answer array from answer string
  $result = null;

  if (is_string($AnswerArrayString)) {
    // Extract answer set string(s) from answer string
    $answerArray = explode("|||",$AnswerArrayString);
    $totalAnswers = count($answerArray);
    // Extract answer pair from answer set string [answer string, is correct]
    for ($i = 0; $i < $totalAnswers; $i++) {
      $result[$i] = explode("```", $answerArray[$i]);
    }
  }

  return $result;
}

//----------------------------------------------------------------

function compressAnswers($AnswerArray) {
  // Convert answer array to string
  $result = "";

  if (is_array($AnswerArray)) {
    $totalAnswers = count($AnswerArray);
    for ($i = 1; $i <= $totalAnswers; $i++) {
      if (trim($AnswerArray[$i]["answer"]) != "") {
        if (trim($result)!="") {
          $result .= "|||";
        }
        $correct = "f";
        if ($AnswerArray[$i]["correct"]) {
          $correct = "t";
        }
        $result .= $AnswerArray[$i]["answer"]."```".$correct;
      }
    }
  }

  return $result;
}

//----------------------------------------------------------------

function addQuestion($Type, $Question, $Answers) {
  // Add a question
  $db = initDb();

  $Type = addslashes($Type);
  $Question = addslashes($Question);
  $Answers = addslashes($Answers);

  $sql = "INSERT INTO Quiz (`Type`, `Question`, `Answers`) VALUES ($Type, '$Question', '$Answers')";

  execQuery($sql,$db);
}

//----------------------------------------------------------------

function updateQuestion($ID, $Type, $Question, $Answers) {
  // Add a question
  $db = initDb();

  $ID = addslashes($ID);
  $Type = addslashes($Type);
  $Question = addslashes($Question);
  $Answers = addslashes($Answers);

  $sql = "UPDATE Quiz SET `Type` = '$Type', `Question` = '$Question', `Answers` = '$Answers' WHERE `ID` = $ID";

  execQuery($sql,$db);
}

//----------------------------------------------------------------

function makeInvisible($Type) {
  // Make question type invisible
  $db = initDb();

  $Type = addslashes($Type);

  $sql = "UPDATE Quiz SET `Visible` = 'F' WHERE `Type` = $Type";

  execQuery($sql,$db);
}

//----------------------------------------------------------------

function showQuestion($ID) {
  // Make a question visible
  $db = initDb();

  $ID = addslashes($ID);

  $sql = "UPDATE Quiz SET `Visible` = 'T' WHERE `ID` = $ID";

  execQuery($sql,$db);
}

//----------------------------------------------------------------

function deleteQuestion($ID) {
  // Delete a question
  $db = initDb();

  $ID = addslashes($ID);

  $sql = "DELETE FROM Quiz WHERE id = $ID";

  execQuery($sql,$db);
}

//----------------------------------------------------------------

function addVisibility() {
  // Alter question
  $db = initDb();

  $sql = "ALTER TABLE Quiz ADD COLUMN Visible CHAR (1) NOT NULL DEFAULT 'F' AFTER Answers;";

  execQuery($sql,$db);
}

?>


