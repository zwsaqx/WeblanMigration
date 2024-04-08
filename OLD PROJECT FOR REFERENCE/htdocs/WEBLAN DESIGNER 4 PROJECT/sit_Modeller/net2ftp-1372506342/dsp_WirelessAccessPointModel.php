<?php
// this is the main file...

@session_start();

define("MAX_DEVICES", 22);
define("WORKSTATIONS", 1);
define("PDA", 2);
define("PRINTERS", 3);

$deviceLayout = null;
$totalDevices = 0;
$accessPoint1 = "none";
$accessPoint2 = "none";

for ($i = 0; $i < MAX_DEVICES; $i++) {
  $deviceLayout[$i] = "<img src=\"./images/spacer.gif\" width=\"60\" height=\"60\">";
}

if (isset($_SESSION["accessPoint"])) {
  // Define the image paths
  $workstation = "./images/laptop.gif";
  $pda = "./images/pda.gif";
  $printer = "./images/printer.gif";

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

  // Figure out what access point layout is needed
  if ($totalDevices <= 11) {
    // Use 1 access point
    $accessPoint1 = "<img src=\"./images/ap1_" .$totalDevices .".gif\">";
  } else {
    // Use mesh... aka 2 access point
	// Determine with access point picture to use
	if (11 <= $totalDevices && $totalDevices <= 12 ) {
	 $ap3 = 11;
	 
	 if ($totalDevices == 12) {
	   $ap2 = 12;    
	 }
	 else {
	   $ap2= 10;
	 }
	    
	}
	if (13 <= $totalDevices && $totalDevices <= 14 ) {
	 $ap3 = 13;
	 
	 if ($totalDevices == 14) {
	   $ap2 = 14;    
	 }
	 else {
	   $ap2= 12;
	 }
	}
	if (15 <= $totalDevices && $totalDevices <= 16 ) {
	 $ap3 = 15;
	 
	 if ($totalDevices == 16) {
	   $ap2 = 16;    
	 }
	 else {
	   $ap2= 14;
	 } 
	}
	if (17 <= $totalDevices && $totalDevices <= 18 ) {
	 $ap3 = 17;
	 
	 if ($totalDevices == 18) {
	   $ap2 = 18;    
	 }
	 else {
	   $ap2= 16;
	 }  
	}
	if (19 <= $totalDevices && $totalDevices <= 20 ) {
	 $ap3 = 19;
	 
	 if ($totalDevices == 20) {
	   $ap2 = 20;    
	 }
	 else {
	   $ap2= 18;
	 }  
	}
	if (21 <= $totalDevices && $totalDevices <= 22 ) {
	 $ap3 = 21;
	 
	 if ($totalDevices == 22) {
	   $ap2 = 22;    
	 }
	 else {
	   $ap2= 20;
	 }  
	}
	
    $accessPoint1 = "<img src=\"./images/ap3_" .$ap3 .".gif\">";
    $accessPoint2 = "<img src=\"./images/ap2_" .$ap2 .".gif\">";
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
    <td align="left"><? echo $_SESSION["accessPoint"]["mobileWorkstations"]; ?></td>
  </tr>
  <tr>
    <td>PDAs :</td>
    <td align="left"><? echo $_SESSION["accessPoint"]["pdas"]; ?></td>
  </tr>
  <tr>
    <td>Printers :</td>
    <td align="left"><? echo $_SESSION["accessPoint"]["printers"]; ?></td>
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
<?php
  if ($totalDevices <= 11) {
?>

<table width="560" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="./images/backbone1.gif"></td>
  </tr>
  <tr>
    <td><table class="dottedbox2" width="560" cellspacing="0" cellpadding="0">
      <tr>
        <td width="10"><img src="./images/spacer.gif" width="10" height="10"></td>
        <td width="240"><img src="./images/gap_line.gif" width="240" height="10"></td>
        <td width="60"><img src="./images/spacer.gif" width="10" height="10"></td>
        <td width="240"><img src="./images/spacer.gif" width="240" height="10"></td>
        <td width="10"><img src="./images/spacer.gif" width="10" height="10"></td>
      </tr>
      <tr>
        <td width="10"><img src="./images/spacer.gif" width="10" height="10"></td>
        <td width="240"><table class="dottedbox" width="240" cellspacing="0" cellpadding="0">
          <tr>
            <td width="60" height="60"><?php echo($deviceLayout[3]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[7]); ?></td>
            <td width="60" height="60"><img src="./images/access_line.gif"></td>
            <td width="60" height="60"><?php echo($deviceLayout[5]); ?></td>
          </tr>
          <tr>
            <td width="60" height="60"><?php echo($deviceLayout[9]); ?></td>
            <td colspan="2" rowspan="2"><?php echo($accessPoint1); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[2]); ?></td>
          </tr>
          <tr>
            <td width="60" height="60"><?php echo($deviceLayout[1]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[10]); ?></td>
          </tr>
          <tr>
            <td width="60" height="60"><?php echo($deviceLayout[6]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[4]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[0]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[8]); ?></td>
          </tr>
        </table></td>
        <td width="60">&nbsp;</td>
        <td width="240">&nbsp;</td>
        <td width="10"><img src="./images/spacer.gif" width="10" height="10"></td>
      </tr>
      <tr>
        <td width="10"><img src="./images/spacer.gif" width="10" height="10"></td>
        <td width="240"><img src="./images/spacer.gif" width="10" height="10"></td>
        <td width="60"><img src="./images/spacer.gif" width="10" height="10"></td>
        <td width="240"><img src="./images/spacer.gif" width="10" height="10"></td>
        <td width="10"><img src="./images/spacer.gif" width="10" height="10"></td>
      </tr>
    </table></td>
  </tr>
</table>

<?php
  } else {
?>
<table width="560" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="./images/backbone2.gif"></td>
  </tr>
  <tr>
    <td><table class="dottedbox2" width="560" cellspacing="0" cellpadding="0">
      <tr>
        <td width="10"><img src="./images/spacer.gif" width="10" height="10"></td>
        <td width="240"><img src="./images/gap_line.gif" width="240" height="10"></td>
        <td width="60"><img src="./images/spacer.gif" width="10" height="10"></td>
        <td width="240"><img src="./images/gap_line.gif" width="240" height="10"></td>
        <td width="10"><img src="./images/spacer.gif" width="10" height="10"></td>
      </tr>
      <tr>
        <td width="10"><img src="./images/spacer.gif" width="10" height="10"></td>
        <td width="240"><table class="dottedbox" width="240" cellspacing="0" cellpadding="0">
          <tr>
            <td width="60" height="60"><?php echo($deviceLayout[6]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[14]); ?></td>
            <td width="60" height="60"><img src="./images/access_line.gif"></td>
            <td width="60" height="60"><?php echo($deviceLayout[10]); ?></td>
          </tr>
          <tr>
            <td width="60" height="60"><?php echo($deviceLayout[18]); ?></td>
            <td colspan="2" rowspan="2"><?php echo($accessPoint1); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[4]); ?></td>
          </tr>
          <tr>
            <td width="60" height="60"><?php echo($deviceLayout[2]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[20]); ?></td>
          </tr>
          <tr>
            <td width="60" height="60"><?php echo($deviceLayout[12]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[8]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[0]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[16]); ?></td>
          </tr>
		  <tr>
		    <td colspan="4">&nbsp;&nbsp;BSS</td>
		  </tr>
        </table></td>
        <td width="60">&nbsp;</td>
        <td width="240"><table class="dottedbox" width="240" cellspacing="0" cellpadding="0">
          <tr>
            <td width="60" height="60"><?php echo($deviceLayout[7]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[15]); ?></td>
            <td width="60" height="60"><img src="./images/access_line.gif"></td>
            <td width="60" height="60"><?php echo($deviceLayout[11]); ?></td>
          </tr>
          <tr>
            <td width="60" height="60"><?php echo($deviceLayout[19]); ?></td>
            <td colspan="2" rowspan="2"><?php echo($accessPoint2); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[5]); ?></td>
          </tr>
          <tr>
            <td width="60" height="60"><?php echo($deviceLayout[3]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[21]); ?></td>
          </tr>
          <tr>
            <td width="60" height="60"><?php echo($deviceLayout[13]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[9]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[1]); ?></td>
            <td width="60" height="60"><?php echo($deviceLayout[17]); ?></td>
          </tr>
		  <tr>
	        <td colspan="4">&nbsp;&nbsp;BSS</td>
	      </tr>
        </table></td>
        <td width="10"><img src="./images/spacer.gif" width="10" height="10"></td>
      </tr>
	  <tr>
        <td colspan="5" align="center"><img src="./images/ESS.gif" width="540" height="20"></td>
      </tr>
      <tr>
        <td width="10"><img src="./images/spacer.gif" width="10" height="10"></td>
        <td width="240"><img src="./images/spacer.gif" width="10" height="10"></td>
        <td width="60"><img src="./images/spacer.gif" width="10" height="10"></td>
        <td width="240"><img src="./images/spacer.gif" width="10" height="10"></td>
        <td width="10"><img src="./images/spacer.gif" width="10" height="10"></td>
      </tr>
    </table></td>
  </tr>
</table>

<?php
  }
?>