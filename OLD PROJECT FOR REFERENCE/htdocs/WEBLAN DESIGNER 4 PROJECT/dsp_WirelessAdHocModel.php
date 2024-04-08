<?php
// this is the main file...

@session_start();

define("MAX_DEVICES", 22);
define("WORKSTATIONS", 1);
define("PDA", 2);
define("PRINTERS", 3);

// Define communication link paths
define("COMM_HORIZ","<img src=\"./images/comm_horiz.gif\">");
define("COMM_VERT", "<img src=\"./images/comm_vert.gif\">");
define("COMM_DIAG1","<img src=\"./images/comm_slash1.gif\">");
define("COMM_DIAG2","<img src=\"./images/comm_slash2.gif\">");

$deviceLayout = null;
$totalDevices = 0;
$accessPoint1 = "none";
$accessPoint2 = "none";

for ($i = 0; $i < MAX_DEVICES; $i++) {
  $deviceLayout[$i] = "&nbsp;";
}

if (isset($_SESSION["adHoc"])) {
  // Define the image paths
  $workstation = "./images/laptop.gif";
  $pda = "./images/pda.gif";
  $printer = "./images/printer.gif";

  $devices = null;
  // Count the number of network devices
  if ($_SESSION["adHoc"]["mobileWorkstations"] > 0) {
    $devices[WORKSTATIONS] = $_SESSION["adHoc"]["mobileWorkstations"];
    $totalDevices += $devices[WORKSTATIONS];
  }
  if ($_SESSION["adHoc"]["pdas"] > 0) {
    $devices[PDA] = $_SESSION["adHoc"]["pdas"];
    $totalDevices += $devices[PDA];
  }
  if ($_SESSION["adHoc"]["printers"] > 0) {
    $devices[PRINTERS] = $_SESSION["adHoc"]["printers"];
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

  // Figure out what access point layout is needed
  if ($totalDevices <= 11) {
    // Use 1 access point
    $accessPoint1 = "AP1";
  } else {
    // Use mesh... aka 2 access point
    $accessPoint1 = "AP1";
    $accessPoint2 = "AP2";
  }
}
?>
<table width="500" border="0 cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><b>Summary</b></td>
  </tr>
  <tr>
    <td width="200">Topology :</td>
    <td width="300" align="left">Ad Hoc</td>
  </tr>
  <tr>
    <td>Mobile Workstations:</td>
    <td align="left"><? echo $_SESSION["adHoc"]["mobileWorkstations"]; ?></td>
  </tr>
  <tr>
    <td>PDAs :</td>
    <td align="left"><? echo $_SESSION["adHoc"]["pdas"]; ?></td>
  </tr>
  <tr>
    <td>Printers :</td>
    <td align="left"><? echo $_SESSION["adHoc"]["printers"]; ?></td>
  </tr>
</table>
<br />
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
<br /><br />
<table border="0" spacing="0" padding="0">
  <tr>
    <td width="60"><?php echo($deviceLayout[0]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 2) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[1]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 5) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[4]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 13) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[12]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 17) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[16]); ?></td>
  </tr>
  <tr>
    <td width="60" align="center"><?php if ($totalDevices >= 3) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php if ($totalDevices >= 4) { echo(COMM_DIAG2);} elseif ($totalDevices >= 3) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 4) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php if ($totalDevices >= 7) { echo(COMM_DIAG2);} elseif ($totalDevices >= 5) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 7) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php if ($totalDevices >= 14) { echo(COMM_DIAG2);} elseif ($totalDevices >= 13) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 14) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php if ($totalDevices >= 18) { echo(COMM_DIAG2);} elseif (($totalDevices >= 17)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 18) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
  </tr>
  <tr>
    <td width="60"><?php echo($deviceLayout[2]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 4) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[3]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 7) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[6]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 14) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[13]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 18) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[17]); ?></td>
  </tr>
  <tr>
    <td align="center"><?php if ($totalDevices >= 6) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 8) { echo(COMM_DIAG2);} elseif (($totalDevices >= 6)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 8) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 9) { echo(COMM_DIAG2);} elseif (($totalDevices >= 8)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 9) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 15) { echo(COMM_DIAG2);} elseif (($totalDevices >= 14)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 15) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 19) { echo(COMM_DIAG2);} elseif (($totalDevices >= 18)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 19) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
  </tr>
  <tr>
    <td><?php echo($deviceLayout[5]); ?></td>
    <td align="center"><?php if ($totalDevices >= 8) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[7]); ?></td>
    <td align="center"><?php if ($totalDevices >= 9) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[8]); ?></td>
    <td align="center"><?php if ($totalDevices >= 15) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[14]); ?></td>
    <td align="center"><?php if ($totalDevices >= 19) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[18]); ?></td>
  </tr>
  <tr>
    <td align="center"><?php if ($totalDevices >= 10) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 11) { echo(COMM_DIAG2);} elseif (($totalDevices >= 10)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 11) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 12) { echo(COMM_DIAG2);} elseif (($totalDevices >= 11)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 12) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 16) { echo(COMM_DIAG2);} elseif (($totalDevices >= 15)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 16) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 20) { echo(COMM_DIAG2);} elseif (($totalDevices >= 19)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 20) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
  </tr>
  <tr>
    <td><?php echo($deviceLayout[9]); ?></td>
    <td align="center"><?php if ($totalDevices >= 11) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[10]); ?></td>
    <td align="center"><?php if ($totalDevices >= 12) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[11]); ?></td>
    <td align="center"><?php if ($totalDevices >= 16) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[15]); ?></td>
    <td align="center"><?php if ($totalDevices >= 20) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[19]); ?></td>
  </tr>
</table>
<p>--------------------------------------------Modified-------------------------------------------</p>
<table border="0" spacing="0" padding="0">
  <tr>
    <td width="60"><?php echo($deviceLayout[0]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 2) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[1]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 5) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[4]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 13) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[12]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 17) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[16]); ?></td>
  </tr>
  <tr>
    <td width="60" align="center"><?php if ($totalDevices >= 3) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php if ($totalDevices >= 4) { echo(COMM_DIAG2);} elseif ($totalDevices >= 3) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 4) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php if ($totalDevices >= 7) { echo(COMM_DIAG2);} elseif ($totalDevices >= 5) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 7) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php if ($totalDevices >= 14) { echo(COMM_DIAG2);} elseif ($totalDevices >= 13) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 14) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php if ($totalDevices >= 18) { echo(COMM_DIAG2);} elseif (($totalDevices >= 17)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 18) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
  </tr>
  <tr>
    <td width="60"><?php echo($deviceLayout[2]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 4) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[3]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 7) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[6]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 14) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[13]); ?></td>
    <td width="60" align="center"><?php if ($totalDevices >= 18) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td width="60"><?php echo($deviceLayout[17]); ?></td>
  </tr>
  <tr>
    <td align="center"><?php if ($totalDevices >= 6) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 8) { echo(COMM_DIAG2);} elseif (($totalDevices >= 6)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 8) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 9) { echo(COMM_DIAG2);} elseif (($totalDevices >= 8)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 9) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 15) { echo(COMM_DIAG2);} elseif (($totalDevices >= 14)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 15) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 19) { echo(COMM_DIAG2);} elseif (($totalDevices >= 18)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 19) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
  </tr>
  <tr>
    <td><?php echo($deviceLayout[5]); ?></td>
    <td align="center"><?php if ($totalDevices >= 8) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[7]); ?></td>
    <td align="center"><?php if ($totalDevices >= 9) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[8]); ?></td>
    <td align="center"><?php if ($totalDevices >= 15) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[14]); ?></td>
    <td align="center"><?php if ($totalDevices >= 19) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[18]); ?></td>
  </tr>
  <tr>
    <td align="center"><?php if ($totalDevices >= 10) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 11) { echo(COMM_DIAG2);} elseif (($totalDevices >= 10)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 11) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 12) { echo(COMM_DIAG2);} elseif (($totalDevices >= 11)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 12) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 16) { echo(COMM_DIAG2);} elseif (($totalDevices >= 15)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 16) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 20) { echo(COMM_DIAG2);} elseif (($totalDevices >= 19)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 20) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
  </tr>
  <tr>
    <td><?php echo($deviceLayout[9]); ?></td>
    <td align="center"><?php if ($totalDevices >= 11) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[10]); ?></td>
    <td align="center"><?php if ($totalDevices >= 12) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[11]); ?></td>
    <td align="center"><?php if ($totalDevices >= 16) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[15]); ?></td>
    <td align="center"><?php if ($totalDevices >= 20) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[19]); ?></td>
  </tr>
  <tr>
    <td align="center"><?php if ($totalDevices >= 6) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 8) { echo(COMM_DIAG2);} elseif (($totalDevices >= 6)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 8) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 9) { echo(COMM_DIAG2);} elseif (($totalDevices >= 8)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 9) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 15) { echo(COMM_DIAG2);} elseif (($totalDevices >= 14)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 15) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 19) { echo(COMM_DIAG2);} elseif (($totalDevices >= 18)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 19) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
  </tr>
  <tr>
    <td><?php echo($deviceLayout[9]); ?></td>
    <td align="center"><?php if ($totalDevices >= 11) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[10]); ?></td>
    <td align="center"><?php if ($totalDevices >= 12) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[11]); ?></td>
    <td align="center"><?php if ($totalDevices >= 16) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[15]); ?></td>
    <td align="center"><?php if ($totalDevices >= 20) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[19]); ?></td>
  </tr>
  <tr>
    <td align="center"><?php if ($totalDevices >= 6) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 8) { echo(COMM_DIAG2);} elseif (($totalDevices >= 6)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 8) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 9) { echo(COMM_DIAG2);} elseif (($totalDevices >= 8)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 9) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 15) { echo(COMM_DIAG2);} elseif (($totalDevices >= 14)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 15) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
    <td><?php if ($totalDevices >= 19) { echo(COMM_DIAG2);} elseif (($totalDevices >= 18)) { echo(COMM_DIAG1); }  else { echo ("&nbsp;"); } ?></td>
    <td align="center"><?php if ($totalDevices >= 19) { echo(COMM_VERT); } else { echo ("&nbsp;"); } ?></td>
  </tr>
  <tr>
    <td><?php echo($deviceLayout[9]); ?></td>
    <td align="center"><?php if ($totalDevices >= 11) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[10]); ?></td>
    <td align="center"><?php if ($totalDevices >= 12) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[11]); ?></td>
    <td align="center"><?php if ($totalDevices >= 16) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[15]); ?></td>
    <td align="center"><?php if ($totalDevices >= 20) { echo(COMM_HORIZ); } else { echo ("&nbsp;"); } ?></td>
    <td><?php echo($deviceLayout[19]); ?></td>
  </tr>
</table>
<p>&nbsp;</p>
