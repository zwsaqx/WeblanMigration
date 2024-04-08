<?php
// this is the main file...



@session_start();

define("MAX_DEVICES", 34);
define("WORKSTATIONS", 1);
define("PDA", 2);
define("PRINTERS", 3);

$deviceLayout = null;
$totalDevices = 0;
$accessPoint1 = "none";
$accessPoint2 = "none";
$accessPoint3 = "none";

for ($i = 0; $i < MAX_DEVICES; $i++) {
  $deviceLayout[$i] = "<img src=\"./images/Spacer.png\" width=\"60\" height=\"60\">";
}

if (isset($_SESSION["accessPoint"])) {
  // Define the image paths
  $workstation = "./images/Laptop.png";
  $pda = "./images/Pda.png";
  $printer = "./images/Printer.png";

  $devices = null;
  // Count the number of network devices
  if ($_SESSION["accessPoint"]["mobileWorkstations"] > 0) {
    $devices[WORKSTATIONS] = $_SESSION["accessPoint"]["mobileWorkstations"];
    $totalDevices += $devices[WORKSTATIONS];
  }
  if ($_SESSION["accessPoint"]["pdas"] > 0) {
    $devices[PDA] = $_SESSION["accessPoint"]["pdas"];
    $totalDevices += $devices[PDA];
  }
  if ($_SESSION["accessPoint"]["printers"] > 0) {
    $devices[PRINTERS] = $_SESSION["accessPoint"]["printers"];
    $totalDevices += $devices[PRINTERS];
  }

  // Generate device allocation table
  for ($i = 0; $i < $totalDevices; $i++) {
    $index = array_rand($devices);
    switch ($index) {
      case WORKSTATIONS:
        $devices[$index]--;
        if ($devices[$index] == 0) {
          unset($devices[$index]);
        }
        $deviceLayout[$i] = "<img src=\"$workstation\">";
      break;
      case PDA:
        $devices[$index]--;
        if ($devices[$index] == 0) {
          unset($devices[$index]);
        }
        $deviceLayout[$i] = "<img src=\"$pda\">";
      break;
      case PRINTERS:
        $devices[$index]--;
        if ($devices[$index] == 0) {
          unset($devices[$index]);
        }
        $deviceLayout[$i] = "<img src=\"$printer\">";
      break;
    }
  }
  // Choose Image for each Access Points
 if($totalDevices %3 == 0){
 $accessPoint1 = "<img src=\"./images/AP_Up_" .$totalDevices /3 .".png\">";
 $accessPoint2 = "<img src=\"./images/AP_Up_" .$totalDevices /3 .".png\">";
 $accessPoint3 = "<img src=\"./images/AP_Down_" .(int)$totalDevices /3 .".png\">";
	} 
 else if($totalDevices %3 == 1){
 $accessPoint1 = "<img src=\"./images/AP_Up_" .(int)($totalDevices /3 + 1).".png\">";
 $accessPoint2 = "<img src=\"./images/AP_Up_" .(int)($totalDevices /3) .".png\">";
 $accessPoint3 = "<img src=\"./images/AP_Down_" .(int)($totalDevices /3) .".png\">";
	}
 else if($totalDevices %3 == 2){
 $accessPoint1 = "<img src=\"./images/AP_Up_" .(int)($totalDevices /3 + 1).".png\">";
 $accessPoint2 = "<img src=\"./images/AP_Up_" .(int)($totalDevices /3 + 1).".png\">";
 $accessPoint3 = "<img src=\"./images/AP_Down_" .(int)($totalDevices /3).".png\">";
	}
}
?>

<table width="500" border="0 cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><b>Summary</b></td>
  </tr>
  <tr>
    <td width="200">Topology :</td>
    <td width="300" align="left">Infrastructure</td>
  </tr>
  <tr>
    <td>Mobile Workstations:</td>
    <td align="left"><?php echo $_SESSION["accessPoint"]["mobileWorkstations"]; ?></td>
  </tr>
  <tr>
    <td>PDAs :</td>
    <td align="left"><?php echo $_SESSION["accessPoint"]["pdas"]; ?></td>
  </tr>
  <tr>
    <td>Printers :</td>
    <td align="left"><?php echo $_SESSION["accessPoint"]["printers"]; ?></td>
  </tr>
</table>
<p><br />
  <script language="JavaScript">
<!--
var sURL = unescape(window.location.pathname + "?fuseaction=<?php echo($_GET["fuseaction"]); ?>");

function refresh() {
  window.location.href = sURL;
}
//-->
  </script>
There are many ways of connecting up a network. To see a different way of<br>
connecting this network up, press the "F5" button or click <input type="button" value="Refresh" onClick="refresh();">.
<br /><br />
Once you have finished viewing the model, click <input type=button value="Close" onClick="javascript:window.close();">
</p>
<p>&nbsp;</p>
<table  width="747" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td colspan="4" rowspan="5" valign="bottom"><img src="./images/Dedicated Servers.png" width="296" height="259" /></td>
    <td>&nbsp;</td>
    <td colspan="4" align="right" valign="bottom"><img src="./images/BSS.png" alt="" width="311" height="27" /></td>
    <td>&nbsp;</td>
    <td width="96" rowspan="11" align="center" valign="middle"><img src="./images/ESS.png" width="31" height="665" /></td>
  </tr>
  <tr>
    <td width="39">&nbsp;</td>
    <td width="39">&nbsp;</td>
    <td width="78" align="right" valign="bottom"><?php echo($deviceLayout[11]); ?></td>
    <td width="78" align="center" valign="bottom"><?php echo($deviceLayout[17]); ?></td>
    <td width="78" align="center" valign="bottom"><?php echo($deviceLayout[2]); ?></td>
    <td width="77" valign="bottom"><?php echo($deviceLayout[23]); ?></td>
    <td width="12">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><?php echo($deviceLayout[26]); ?></td>
    <td colspan="2" rowspan="3" align="center" valign="bottom"><?php  { echo($accessPoint3); }  ?></td>
    <td><?php echo($deviceLayout[8]); ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><?php echo($deviceLayout[14]); ?></td>
    <td><?php echo($deviceLayout[20]); ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><?php echo($deviceLayout[5]); ?></td>
    <td><?php echo($deviceLayout[29]); ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="11"><img src="./images/backbone_new.png" alt="" width="692" height="181"  /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="78" align="right"><?php echo($deviceLayout[9]); ?></td>
    <td colspan="2" rowspan="3" align="center" valign="top"><?php  { echo($accessPoint1); }  ?></td>
    <td width="77" align="left"><?php echo($deviceLayout[21]); ?></td>
    <td>&nbsp;</td>
    <td align="right"><?php echo($deviceLayout[10]); ?></td>
    <td colspan="2" rowspan="3" align="center" valign="top"><?php  { echo($accessPoint2); }  ?></td>
    <td align="left"><?php echo($deviceLayout[22]); ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><?php echo($deviceLayout[24]); ?></td>
    <td align="left"><?php echo($deviceLayout[6]); ?></td>
    <td>&nbsp;</td>
    <td align="right"><?php echo($deviceLayout[25]); ?></td>
    <td align="left"><?php echo($deviceLayout[7]); ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><?php echo($deviceLayout[12]); ?></td>
    <td align="left"><?php echo($deviceLayout[18]); ?></td>
    <td>&nbsp;</td>
    <td align="right"><?php echo($deviceLayout[13]); ?></td>
    <td align="left"><?php echo($deviceLayout[19]); ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right" valign="top"><?php echo($deviceLayout[3]); ?></td>
    <td width="78" align="center" valign="top"><?php echo($deviceLayout[15]); ?></td>
    <td width="78" align="center" valign="top"><?php echo($deviceLayout[0]); ?></td>
    <td align="left" valign="top"><?php echo($deviceLayout[27]); ?></td>
    <td>&nbsp;</td>
    <td align="right" valign="top"><?php echo($deviceLayout[4]); ?></td>
    <td align="center" valign="top"><?php echo($deviceLayout[16]); ?></td>
    <td align="center" valign="top"><?php echo($deviceLayout[1]); ?></td>
    <td align="left" valign="top"><?php echo($deviceLayout[28]); ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="4" align="right" valign="top"><img src="./images/BSS.png" width="311" height="27" /></td>
    <td>&nbsp;</td>
    <td colspan="4" align="right" valign="top"><img src="./images/BSS.png" alt="" width="311" height="27" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
