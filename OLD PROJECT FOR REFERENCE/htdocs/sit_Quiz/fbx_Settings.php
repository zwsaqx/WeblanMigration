<?php
/*
<fusedoc fuse="fbx_Settings.php">
  <responsibilities>
    I set up the enviroment settings for this circuit. If this settings file is being inherited, then you can set a variable outright to override a value set in a parent circuit or use if(!isset(...)) to accept a value set by a parent circuit
  </responsibilities>
</fusedoc>
*/

//In case no fuseaction was given, I'll set up one to use by default.
if(!isset($attributes["fuseaction"])){ $attributes["fuseaction"] = "home.main"; }

//useful constants
if(!isset($GLOBALS["self"])){ $GLOBALS["self"] = "index.php"; }
$XFA = array();

//default values for layout files
$Fusebox["layoutDir"] = "";
$Fusebox["layoutFile"] = "fbx_DefaultLayout.php";

//should fusebox silently suppress its own error messages? default is FALSE
$Fusebox["suppressErrors"] = false;

if($Fusebox["isHomeCircuit"]) {
//put settings here that you want to execute only when this is the application's home circuit (for example: session_start(); )

} else {
//put settings here that you want to execute only when this is not an application's home circuit

}

//Put settings out here that should run regardless of whether this is the home app or not

  // Start sessions
  @session_start();

  // Define quiz status constants
  define("QUIZ_STATUS","quizStatus");
  define("INITIALIZING","0");
  define("STARTED","1");
  define("FINISHED","2");
  // Initialize quiz status
  if (!isset($_SESSION[QUIZ_STATUS])) {
    $_SESSION[QUIZ_STATUS] = INITIALIZING;
    // Set current page
    $_SESSION["quizPage"] = 0;
  }
  // Recorrect quiz status
  if ($_SESSION[QUIZ_STATUS] == INITIALIZING || $_SESSION[QUIZ_STATUS] == STARTED || $_SESSION[QUIZ_STATUS] == FINISHED) {
    // Do nothing
  } else {
    $_SESSION[QUIZ_STATUS] = INITIALIZING;
    // Set current page
    $_SESSION["quizPage"] = 0;
  }

  // Define quiz type constants
  define("QUIZ_TYPE","quizType");
  define("UNSPECIFIED","0");
  define("WIRED","1");
  define("WIRELESS","2");
 define("TCPIP","3");
  define("DataCom","4");
  // Initialize quiz type
  if (!isset($_SESSION[QUIZ_TYPE])) {
    $_SESSION[QUIZ_TYPE] = UNSPECIFIED;
  }
  // Recorrect quiz type
  if ($_SESSION[QUIZ_TYPE] == UNSPECIFIED || $_SESSION[QUIZ_TYPE] == WIRED || $_SESSION[QUIZ_TYPE] == WIRELESS|| $_SESSION[QUIZ_TYPE] == TCPIP|| $_SESSION[QUIZ_TYPE] == DataCom) {
    // Do nothing
  } else {
    $_SESSION[QUIZ_TYPE] = UNSPECIFIED;
  }

?>