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

function getQuizSettings() {
  // Get the quiz settings for a quiz
  $db = initDb();

  $sql = "SELECT QuestionsPerPage FROM QuizSettings;";

  $result = execQuery($sql,$db);

  $settings["qpp"] = trim(stripslashes(mysql_result($result, 0, "QuestionsPerPage")));
  $settings["tot"] = 0;

  return $settings;
}

//----------------------------------------------------------------

function initQuiz($QuizType, $TotalQuestions) {
  // Initialize wired quiz questions
  $db = initDb();

  // Get quiz questions
  $sql = "SELECT ID, Question, Answers FROM Quiz WHERE Type = $QuizType AND Visible = 'T' order by ID;";
  $result = execQuery($sql,$db);

  // Count the number of available questions
  $availableQuestions = mysql_numrows($result);

  // Only do the rest if there are questions available
  $resultArray = null;
  if ($availableQuestions > 0) {
    // Turn the questions dataset into an array
    $questionArray = null;
    for ($i = 0; $i < $availableQuestions; $i++) {
      $questionArray[$i]["question"] = trim(stripslashes(mysql_result($result, $i, "Question")));
      $questionArray[$i]["answers"] = trim(stripslashes(mysql_result($result, $i, "Answers")));
    }

    // Figure out how many to select
    if ($TotalQuestions == ALL_QUESTIONS) {
      $questionsSelected = $availableQuestions;
    } else if ($TotalQuestions > $availableQuestions) {
      $questionsSelected = $availableQuestions;
    } else {
      $questionsSelected = $TotalQuestions;
    }

    // Randomize the question order
    //$usedQuestionIndexes = array_rand($questionArray, $questionsSelected);

    // Get the finalised question set
    for ($i = 0; $i < $questionsSelected; $i++) {
      //$resultArray[$i] = $questionArray[$usedQuestionIndexes[$i]];
      $resultArray[$i] = $questionArray[$i];
    }
  }

  return $resultArray;
}

//----------------------------------------------------------------

?>