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

$BodyTitle = 'Test Your Knowledge';
$Title = 'Quiz';

$XFA["main"] = "home.main";
$XFA["feedback"] = "home.feedback";
$XFA["copyright"] = "home.copyright";
$XFA["links"] = "home.links";
$XFA["login"] = "home.login";
$XFA["register"] = "home.register";
$XFA["wired"] = "home.wired";
$XFA["wireless"] = "home.wireless";
$XFA["tcp/ip"] = "home.tcp/ip";
$XFA["bluetooth"] = "home.bluetooth";
$XFA["data"] = "home.data";
$XFA["viewQuestion"] = "admin.main";

$XFA["wiredTutorial"] = "tutorial.wired";
$XFA["wirelessTutorial"] = "tutorial.wireless";
$XFA["tcpipTutorial"] = "tutorial.tcpip";
$XFA["bluetoothTutorial"] = "tutorial.bluetooth";
$XFA["dataTutorial"] = "tutorial.data";

$XFA["wiredModelling"] = "modelling.wired";
$XFA["wirelessModelling"] = "modelling.wireless";
$XFA["tcpipModelling"] = "modelling.tcpip";
$XFA["bluetoothModelling"] = "modelling.bluetooth";
$XFA["dataModelling"] = "modelling.data";

$XFA["wiredQuiz"] = "quiz.wired";
$XFA["wirelessQuiz"] = "quiz.wireless";
$XFA["tcpipQuiz"] = "quiz.tcpip";
$XFA["bluetoothQuiz"] = "quiz.bluetooth";
$XFA["dataQuiz"] = "quiz.data";

$XFA["wiredScenarios"] = "scenario.wired";
$XFA["wirelessScenarios"] = "scenario.wireless";
$XFA["tcpipScenarios"] = "scenario.tcpip";
$XFA["bluetoothScenarios"] = "scenario.bluetooth";
$XFA["dataScenarios"] = "scenario.data";

$XFA["wiredKeyTerms"] = "reference.wired";
$XFA["wirelessKeyTerms"] = "reference.wireless";
$XFA["tcpipKeyTerms"] = "reference.tcpip";
$XFA["bluetoothKeyTerms"] = "reference.bluetooth";
$XFA["dataKeyTerms"] = "reference.data";

$XFA["wirelessReview"] = "review.wireless";
$XFA["wiredReview"] = "review.wired";
$XFA["tcpipReview"] = "review.tcpip";
$XFA["bluetoothReview"] = "review.bluetooth";
$XFA["dataReview"] = "review.data";

include("qry_DbConn.php");

switch($Fusebox["fuseaction"]) {
  case "main":
  case "Fusebox.defaultFuseaction":
    include("dsp_Main.php");
    break;
  case "wired":
    $Title = 'WebLan-Designer Wired LAN Quiz';
    $XFA["self"] = "quiz.wired";
    $XFA["finish"] = "quiz.finished";
	$XFA["quiz"] = "quiz.wired";
    include("dsp_Wired.php");
    break;
  case "wireless":
    $Title = 'WebLan-Designer Wireless LAN Quiz';
    $XFA["self"] = "quiz.wireless";
    $XFA["finish"] = "quiz.finished";
	$XFA["quiz"] = "quiz.wireless";
    include("dsp_Wireless.php");
    break;
	case "tcpip":
    $Title = 'WebLan-Designer TCP/IP Quiz';
    $XFA["self"] = "quiz.tcpip";
    $XFA["finish"] = "quiz.finished";
	$XFA["quiz"] = "quiz.tcpip";
    include("dsp_TCPIP.php");
    break;

  case "bluetooth":
      $Title = 'WebLan-Designer Bluetooth Networking Quiz';
      include("dsp_Bluetooth.php");
      break;

  case "data":
    $Title = 'WebLan-Designer Data Communication Quiz';
    $XFA["self"] = "quiz.data";
    $XFA["finish"] = "quiz.finished";
	$XFA["quiz"] = "quiz.data";
    include("dsp_Data.php");
    break;
  case "finished":
    $Title = 'WebLan-Designer Quiz Result';
    $BodyTitle = "Your Quiz Results";
    include("dsp_QuizResult.php");
    break;

  default:
    $_SESSION['error'] .= "I received a fuseaction called <b>'" . $Fusebox["fuseaction"] . "'</b> that circuit <b>'" . $Fusebox["circuit"] . "'</b> does not have a handler for.";
    header("location:?fuseaction=error.pageMissing");
    break;
}

?>