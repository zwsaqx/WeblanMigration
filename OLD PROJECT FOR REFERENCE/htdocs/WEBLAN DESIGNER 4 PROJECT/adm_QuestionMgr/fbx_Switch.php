<?php
/*
<fusedoc fuse="fbx_Switch.php">
  <responsibilities>
    I am the switch statement that handles the fuseaction, delegating work to various fuses.
  </responsibilities>
  <io>
    <in>
      <string name="$Fusebox['fuseaction']" />
      <string name="$Fusebox['circuit']" />
    </in>
  </io>
</fusedoc>
*/

$BodyTitle = 'Lecture';
$Title = 'Quiz Modification';

$XFA["main"] = "home.main";
$XFA["feedback"] = "home.feedback";
$XFA["copyright"] = "home.copyright";
$XFA["links"] = "home.links";
$XFA["login"] = "home.login";
$XFA["register"] = "home.register";
$XFA["wired"] = "home.wired";
$XFA["wireless"] = "home.wireless";
$XFA["tcp/ip"] = "home.tcp/ip";
$XFA["data"] = "home.data";

$XFA["wiredTutorial"] = "tutorial.wired";
$XFA["wirelessTutorial"] = "tutorial.wireless";
$XFA["tcpipTutorial"] = "tutorial.tcpip";
$XFA["dataTutorial"] = "tutorial.data";

$XFA["wiredModelling"] = "modelling.wired";
$XFA["wirelessModelling"] = "modelling.wireless";
$XFA["tcpipModelling"] = "modelling.tcpip";
$XFA["dataModelling"] = "modelling.data";

$XFA["wiredQuiz"] = "quiz.wired";
$XFA["wirelessQuiz"] = "quiz.wireless";
$XFA["tcpipQuiz"] = "quiz.tcpip";
$XFA["dataQuiz"] = "quiz.data";

$XFA["wiredScenarios"] = "scenario.wired";
$XFA["wirelessScenarios"] = "scenario.wireless";
$XFA["tcpipScenarios"] = "scenario.tcpip";
$XFA["dataScenarios"] = "scenario.data";

$XFA["wiredKeyTerms"] = "reference.wired";
$XFA["wirelessKeyTerms"] = "reference.wireless";
$XFA["tcpipKeyTerms"] = "reference.tcpip";
$XFA["dataKeyTerms"] = "reference.data";

$XFA["wirelessReview"] = "review.wireless";
$XFA["wiredReview"] = "review.wired";
$XFA["tcpipReview"] = "review.tcpip";
$XFA["dataReview"] = "review.data";

$XFA["viewQuestion"] = "admin.main";
$XFA["addQuestion"] = "admin.add";
$XFA["editQuestion"] = "admin.edit";
$XFA["deleteQuestion"] = "admin.delete";
$XFA["visibleQuestion"] = "admin.visible";

@session_start();
switch($Fusebox["fuseaction"]) {
  case "main":
  case "Fusebox.defaultFuseaction":
    include("./qry_DbConn.php");
    include("./dsp_Main.php");
    break;
  case "add":
    include("./qry_DbConn.php");
    include("./dsp_QuestionAdd.php");
    break;
  case "edit":
    include("./qry_DbConn.php");
    include("./dsp_QuestionEdit.php");
    break;
  case "delete":
    include("./qry_DbConn.php");
    include("./dsp_QuestionDelete.php");
    break;
  case "visible":
    include("./qry_DbConn.php");
    include("./dsp_QuestionVisible.php");
    break;

  default:
    $_SESSION['error'] .= "I received a fuseaction called <b>'" . $Fusebox["fuseaction"] . "'</b> that circuit <b>'" . $Fusebox["circuit"] . "'</b> does not have a handler for.";
    header("location:?fuseaction=error.pageMissing");
    break;
}

?>