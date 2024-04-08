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

$BodyTitle = 'Modelling';
$Title = 'Modelling';
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


switch($Fusebox["fuseaction"]) {
  case "main":
  case "Fusebox.defaultFuseaction":
    include("dsp_Main.php");
    break;
  case "wired":
    $Title = 'WebLan-Designer Wired LAN Modelling';
    include("dsp_Wired.php");
    break;
  case "wireless":
    $Title = 'WebLan-Designer Wireless LAN Modelling';
    include("dsp_Wireless.php");
    break;
  case "model1":
    include("dsp_WiredBusModel.php");
    break;
  case "model2":
    include("dsp_WiredStarModel.php");
    break;
  case "model3":
    include("dsp_WirelessAccessPointModel.php");
    break;
  case "model4":
    include("dsp_WirelessAdHocModel.php");
    break;
  case "tcpip":
    $Title = 'WebLan-Designer TCP/IP Modelling';
    include("dsp_TCPIP.php");
    break;
    case "bluetooth":
      $Title = 'WebLan-Designer Bluetooth Networking Modelling';
      include("dsp_Bluetooth.php");
      break;
  case "data":
    $Title = 'WebLan-Designer Data Communication Modelling 1';
    include("dsp_Data.php");
    break;
  case "data2":
    $Title = 'WebLan-Designer Data Communication Modelling 2';
    include("dsp_DataModel2.php");
    break;



	
 

  default:
    $_SESSION['error'] .= "I received a fuseaction called <b>'" . $Fusebox["fuseaction"] . "'</b> that circuit <b>'" . $Fusebox["circuit"] . "'</b> does not have a handler for.";
    header("location:?fuseaction=error.pageMissing");
    break;
}

?>