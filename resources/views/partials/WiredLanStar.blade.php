{{-- /////////////////// wired lan STAR modelling ////////////////////////// --}}



<?php
// this is the main file...
session_start();

define('MAX_DEVICES', 48);
define('WORKSTATIONS', 1);
define('SERVERS', 2);
define('PRINTERS', 3);

$deviceLayout = null;
$totalDevices = 0;
$starType1 = 'none';
$starType2 = 'none';
$starType3 = 'none';

$logicalType = '3';
$type = '';
// Find out what logical topology the client has selected
// Check if 'star' key and 'type' key exist in the session before accessing them

if (isset($_SESSION['star']) && isset($_SESSION['star']['type'])) {
    // Find out what logical topology the client has selected
    if ($_SESSION['star']['type'] == 'star') {
        // Logical Star
        $type = 'star';
    } elseif ($_SESSION['star']['type'] == 'bus') {
        // Logical Bus
        $type = 'bus';
    } elseif ($_SESSION['star']['type'] == 'ring') {
        // Logical Ring
        $type = 'ring';
    } else {
        echo 'error: session star type is ', $_SESSION['star']['type'];
    }
}

for ($i = 0; $i < MAX_DEVICES; $i++) {
    $deviceLayout[$i] = '&nbsp;';
}

if (isset($_SESSION['star'])) {
    // Define the image paths

    $workstation = '/Images/Data/client.gif';
    $server = '/Images/Data/server.gif';
    $printer = '/Images/Data/printer.gif';
    $devices = null;
    // Count the number of network devices
    if ($_SESSION['star']['workstations'] > 0) {
        $devices[WORKSTATIONS] = $_SESSION['star']['workstations'];
        $totalDevices += $devices[WORKSTATIONS];
    }
    if ($_SESSION['star']['servers'] > 0) {
        $devices[SERVERS] = $_SESSION['star']['servers'];
        $totalDevices += $devices[SERVERS];
    }
    if ($_SESSION['star']['printers'] > 0) {
        $devices[PRINTERS] = $_SESSION['star']['printers'];
        $totalDevices += $devices[PRINTERS];
    }

    // Generate device allocation table
    for ($i = 0; $i < $totalDevices; $i++) {
        $deviceLayout[$i] = '&nbsp;';
        $index = array_rand($devices);
        switch ($index) {
            case WORKSTATIONS:
                $devices[$index]--;
                if ($devices[$index] == 0) {
                    unset($devices[$index]);
                }
                $deviceLayout[$i] = "<img src=\"$workstation\">";
                break;
            case SERVERS:
                $devices[$index]--;
                if ($devices[$index] == 0) {
                    unset($devices[$index]);
                }
                $deviceLayout[$i] = "<img src=\"$server\">";
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

    // Figure out what star layout is needed
    if ($totalDevices <= 16) {
        // Use 1 star
        $starType1 = "<img src=\"/Images/Data/$type$totalDevices.gif\">";
    } elseif ($totalDevices <= 30) {
        // Use mesh... aka 2 stars
        $starType1 = "<img src=\"/Images/Data/" . $type . "16.gif\">";
        $secondStarConnCount = $totalDevices - 16 + 2;
        $starType2 = "<img src=\"/Images/Data/$type$secondStarConnCount.gif\">";
    } else {
        // Use suppa 3 stars
        $starType1 = "<img src=\"/Images/Data/" . $type . "16.gif\">";
        $starType2 = "<img src=\"/Images/Data/" . $type . "16.gif\">";
        $thirdStarConnCount = $totalDevices - 30 + 2;
        $starType3 = "<img src=\"/Images/Data/$type$thirdStarConnCount.gif\">";
    }
}
?>
<!-- Displays the summary of what the user has selected -->
<table width="450" border="0 cellspacing="0" cellpadding="0">
    <tr>
        <td colspan="2"><b>Summary</b></td>
    </tr>
    <tr>
        <td width="150">Topology :</td>
        <td width="300" align="left">
            <?php
            if ($type == 'star') {
                echo 'Physical & Logical Star';
            } elseif ($type == 'bus') {
                echo 'Physical Star & Logical Bus';
            } else {
                echo 'Physical Star & Logical Ring';
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Workstations :</td>
        <td align="left"><?php echo isset($_SESSION['star']['workstations']) ? $_SESSION['star']['workstations'] : ''; ?>
        </td>
    </tr>
    <tr>
        <td>Servers :</td>
        <td align="left"><?php echo isset($_SESSION['star']['servers']) ? $_SESSION['star']['servers'] : ''; ?>
        </td>
    </tr>
    <tr>
        <td>Printers :</td>
        <td align="left"><?php echo isset($_SESSION['star']['printers']) ? $_SESSION['star']['printers'] : ''; ?>
        </td>
    </tr>
</table>
<br />
<script language="JavaScript">
    // <!--
    // var sURL = unescape(window.location.pathname + "?fuseaction=<?php echo isset($_GET['fuseaction']) ? $_GET['fuseaction'] : 'error'; ?>");

    // function refresh() {
    //     window.location.href = sURL;
    // }
    // //
    // -->
</script>

<?php
    if ($totalDevices <=16) {
  ?>
<table border="0" cellspacing="0" cellpadding="0">

    <tr valign="bottom">
        <td width="60"><?php echo $deviceLayout[14]; ?></td>
        <td width="60"><?php echo $deviceLayout[0]; ?></td>
        <td width="60"><?php echo $deviceLayout[8]; ?></td>
        <td width="60"><?php echo $deviceLayout[4]; ?></td>
        <td width="60"><?php echo $deviceLayout[6]; ?></td>
        <td width="60"><?php echo $deviceLayout[10]; ?></td>
        <td width="60"><?php echo $deviceLayout[1]; ?></td>
        <td width="60"><?php echo $deviceLayout[12]; ?></td>
    </tr>

    <tr>
        <td colspan="8"><?php echo $starType1; ?></td>
    </tr>

    <tr valign="top">
        <td width="60"><?php echo $deviceLayout[13]; ?></td>
        <td width="60"><?php echo $deviceLayout[2]; ?></td>
        <td width="60"><?php echo $deviceLayout[11]; ?></td>
        <td width="60"><?php echo $deviceLayout[7]; ?></td>
        <td width="60"><?php echo $deviceLayout[5]; ?></td>
        <td width="60"><?php echo $deviceLayout[9]; ?></td>
        <td width="60"><?php echo $deviceLayout[3]; ?></td>
        <td width="60"><?php echo $deviceLayout[15]; ?></td>
    </tr>
</table>
<?php
    }
  ?>


<?php
    if (($totalDevices > 16)&&($totalDevices <=30)) {
  ?>
<table border="0" cellspacing="0" cellpadding="0">

    <tr valign="bottom">
        <td width="60"><?php echo $deviceLayout[14]; ?></td>
        <td width="60"><?php echo $deviceLayout[0]; ?></td>
        <td width="60"><?php echo $deviceLayout[8]; ?></td>
        <td width="60"><?php echo $deviceLayout[4]; ?></td>
        <td width="60"><?php echo $deviceLayout[6]; ?></td>
        <td width="60"><?php echo $deviceLayout[10]; ?></td>
        <td width="60"><?php echo $deviceLayout[1]; ?></td>
        <td width="60"><?php echo $deviceLayout[12]; ?></td>
    </tr>

    <tr>
        <td colspan="8"><?php echo $starType1; ?></td>
    </tr>

    <tr valign="top">
        <td width="60"><?php echo $deviceLayout[13]; ?></td>
        <td width="60 "rowspan="2"><?php echo "<img src=\"/Images/Data/line.gif\"><br>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    				   <img src=\"/Images/Data/line.gif\"><br>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    				   <img src=\"/Images/Data/line.gif\">"; ?></td>
        <td width="60"><?php echo $deviceLayout[11]; ?></td>
        <td width="60"><?php echo $deviceLayout[7]; ?></td>
        <td width="60"><?php echo $deviceLayout[5]; ?></td>
        <td width="60"><?php echo $deviceLayout[9]; ?></td>
        <td width="60"><?php echo $deviceLayout[3]; ?></td>
        <td width="60"><?php echo $deviceLayout[15]; ?></td>
    </tr>

    <tr valign="bottom">
        <td width="60"><?php echo $deviceLayout[28]; ?></td>
        <td width="60"><?php echo $deviceLayout[22]; ?></td>
        <td width="60"><?php echo $deviceLayout[18]; ?></td>
        <td width="60"><?php echo $deviceLayout[20]; ?></td>
        <td width="60"><?php echo $deviceLayout[24]; ?></td>
        <td width="60"><?php echo $deviceLayout[2]; ?></td>
        <td width="60"><?php echo $deviceLayout[26]; ?></td>
    </tr>

    <tr>
        <td colspan="8"><?php echo $starType2; ?></td>
    </tr>

    <tr valign="top">
        <td width="60"><?php echo $deviceLayout[27]; ?></td>
        <td width="60"><?php echo $deviceLayout[16]; ?></td>
        <td width="60"><?php echo $deviceLayout[25]; ?></td>
        <td width="60"><?php echo $deviceLayout[21]; ?></td>
        <td width="60"><?php echo $deviceLayout[19]; ?></td>
        <td width="60"><?php echo $deviceLayout[23]; ?></td>
        <td width="60"><?php echo $deviceLayout[17]; ?></td>
        <td width="60"><?php echo $deviceLayout[29]; ?></td>
    </tr>
</table>
<?php
    }
  ?>

<?php
    if (($totalDevices > 30)&&($totalDevices <=44)) {
  ?>
<table border="0" cellspacing="0" cellpadding="0">

    <tr valign="bottom">
        <td width="60"><?php echo $deviceLayout[14]; ?></td>
        <td width="60"><?php echo $deviceLayout[0]; ?></td>
        <td width="60"><?php echo $deviceLayout[8]; ?></td>
        <td width="60"><?php echo $deviceLayout[4]; ?></td>
        <td width="60"><?php echo $deviceLayout[6]; ?></td>
        <td width="60"><?php echo $deviceLayout[10]; ?></td>
        <td width="60"><?php echo $deviceLayout[1]; ?></td>
        <td width="60"><?php echo $deviceLayout[12]; ?></td>
    </tr>

    <tr>
        <td colspan="8"><?php echo $starType1; ?></td>
    </tr>

    <tr valign="top">
        <td width="60"><?php echo $deviceLayout[13]; ?></td>
        <td width="60 "rowspan="2"><?php echo "<img src=\"/Images/Data/line.gif\"><br> <img src=\"/Images/Data/line.gif\"><br><img src=\"/Images/Data/line.gif\">"; ?></td>
        <td width="60"><?php echo $deviceLayout[11]; ?></td>
        <td width="60"><?php echo $deviceLayout[7]; ?></td>
        <td width="60"><?php echo $deviceLayout[5]; ?></td>
        <td width="60"><?php echo $deviceLayout[9]; ?></td>
        <td width="60"><?php echo $deviceLayout[3]; ?></td>
        <td width="60"><?php echo $deviceLayout[15]; ?></td>
    </tr>

    <tr valign="bottom">
        <td width="60"><?php echo $deviceLayout[27]; ?></td>
        <td width="60"><?php echo $deviceLayout[21]; ?></td>
        <td width="60"><?php echo $deviceLayout[17]; ?></td>
        <td width="60"><?php echo $deviceLayout[19]; ?></td>
        <td width="60"><?php echo $deviceLayout[23]; ?></td>
        <td width="60"><?php echo $deviceLayout[2]; ?></td>
        <td width="60"><?php echo $deviceLayout[25]; ?></td>
    </tr>

    <tr>
        <td colspan="8"><?php echo $starType2; ?></td>
    </tr>

    <tr valign="top">
        <td width="60"><?php echo $deviceLayout[26]; ?></td>
        <td width="60 "rowspan="2"><?php echo "<img src=\"/Images/Data/line.gif\"><br> <img src=\"/Images/Data/line.gif\"><br> <img src=\"/Images/Data/line.gif\">"; ?></td>
        <td width="60"><?php echo $deviceLayout[24]; ?></td>
        <td width="60"><?php echo $deviceLayout[20]; ?></td>
        <td width="60"><?php echo $deviceLayout[18]; ?></td>
        <td width="60"><?php echo $deviceLayout[22]; ?></td>
        <td width="60"><?php echo $deviceLayout[16]; ?></td>
        <td width="60"><?php echo $deviceLayout[28]; ?></td>
    </tr>

    <tr valign="bottom">
        <td width="60"><?php echo $deviceLayout[42]; ?></td>
        <td width="60"><?php echo $deviceLayout[36]; ?></td>
        <td width="60"><?php echo $deviceLayout[32]; ?></td>
        <td width="60"><?php echo $deviceLayout[34]; ?></td>
        <td width="60"><?php echo $deviceLayout[38]; ?></td>
        <td width="60"><?php echo $deviceLayout[29]; ?></td>
        <td width="60"><?php echo $deviceLayout[40]; ?></td>
    </tr>

    <tr>
        <td colspan="8"><?php echo $starType3; ?></td>
    </tr>

    <tr valign="top">
        <td width="60"><?php echo $deviceLayout[41]; ?></td>
        <td width="60"><?php echo $deviceLayout[30]; ?></td>
        <td width="60"><?php echo $deviceLayout[39]; ?></td>
        <td width="60"><?php echo $deviceLayout[35]; ?></td>
        <td width="60"><?php echo $deviceLayout[33]; ?></td>
        <td width="60"><?php echo $deviceLayout[37]; ?></td>
        <td width="60"><?php echo $deviceLayout[31]; ?></td>
        <td width="60"><?php echo $deviceLayout[43]; ?></td>
    </tr>
</table>
<?php
}
?>
