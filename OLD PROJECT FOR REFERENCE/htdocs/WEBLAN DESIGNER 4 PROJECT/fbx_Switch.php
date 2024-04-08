<?php
/****************************************************************
 Class   : fbx_Switch.php
 Author  : Geoff Lee
 Created : 14 July 2004
 Purpose : Fusebox file for selecting display file to be displayed
 Modification History:
 Version     Date     Author  Description
   0.1    14/07/2004    GL    Started fusebox
****************************************************************/
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
  case "feedback":
    $Title = 'WebLan-Designer Feedback';
    include("dsp_Feedback.php");
    break;
  case "copyright":
  $Title = 'Copyright';
    include("dsp_Copyright.php");
    break;
  
  case "links":
    $Title = 'WebLan-Designer Useful Links';
    include("dsp_Links.php");
    break;
	
  case "register":
  $Title = 'Register';
    include("dsp_register.php");
    break;
	
  case "login":
  $Title = 'Login';
    include("dsp_login.php");
    break;
	
  case "wired":
    $Title = 'Wired LAN Menu';
    include("dsp_WiredMenu.php");
    break;
	
  case "wireless":
    $Title = 'Wireless LAN Menu';
    include("dsp_WirelessMenu.php");
	break;
	
  case "tcp/ip":
    $Title = 'TCP/IP Menu';
    include("dsp_TCPIPMenu.php");
    break;

  case "bluetooth":
      $Title = 'Bluetooth Networking Menu';
      include("dsp_BluetoothMenu.php");
      break;
  
	
  case "data":
    $Title = 'Data Link Menu';
    include("dsp_DataMenu.php");
	break;



  default:
    header("location:?fuseaction=error.pageMissing");
    $Error = "I received a fuseaction called <b>'" . $Fusebox["fuseaction"] . "'</b> that circuit <b>'" . $Fusebox["circuit"] . "'</b> does not have a handler for.";
    break;
}

?>