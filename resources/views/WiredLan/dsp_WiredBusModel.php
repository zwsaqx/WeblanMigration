<?php
// this is the main file...

@session_start();

define("MAX_DEVICES", 56);
define("WORKSTATIONS", 1);
define("SERVERS", 2);
define("PRINTERS", 3);
define("SPACES", 4);

$topRow = "";
$middleRow = "";
$bottomRow = "";
$lanType = "";

if (isset($_SESSION["bus"])) {
    // Define the image paths for the 2 model types
    $workstation = "./images/client.gif";
    $server = "./images/server.gif";
    $printer = "./images/printer.gif";
    if ($_SESSION["bus"]["type"] == "bus") {
        $lanType = "Bus";
        $terminatorL = "./images/terminator_l.gif";
        $terminatorR = "./images/terminator_r.gif";
        $connection = "./images/bus.gif";
        $connectionUp = "./images/bus_up.gif";
        $connectionDown = "./images/bus_down.gif";
        $connectionBoth = "./images/bus_up_down.gif";
    } else {
        $lanType = "Ring";
        $terminatorL = "./images/ring_l.gif";
        $terminatorR = "./images/ring_r.gif";
        $connection = "./images/ring.gif";
        $connectionUp = "./images/ring_up.gif";
        $connectionDown = "./images/ring_down.gif";
        $connectionBoth = "./images/ring_up_down.gif";
    }

    $cols = MAX_DEVICES / 2;
    if ($_SESSION["bus"]["workstations"] > 0) {
        $devices[WORKSTATIONS] = $_SESSION["bus"]["workstations"];
    }
    if ($_SESSION["bus"]["servers"] > 0) {
        $devices[SERVERS] = $_SESSION["bus"]["servers"];
    }
    if ($_SESSION["bus"]["printers"] > 0) {
        $devices[PRINTERS] = $_SESSION["bus"]["printers"];
    }
    if (MAX_DEVICES > ($_SESSION["bus"]["workstations"] + $_SESSION["bus"]["servers"] + $_SESSION["bus"]["printers"])) {
        $devices[SPACES] = MAX_DEVICES - $_SESSION["bus"]["workstations"] - $_SESSION["bus"]["servers"] - $_SESSION["bus"]["printers"];
    }

    // add terminators
    $topRow .= "<td>&nbsp;</td>\n";
    $middleRow .= "<td><img src=\"$terminatorL\"></td>\n";
    $bottomRow .= "<td>&nbsp;</td>\n";

    for ($i = 0; $i < $cols; $i++) {
        $conns = 0;
        $top = 0;
        $bottom = 0;
        // Top row
        $index = array_rand($devices);
        if ($index != SPACES) {
            $conns++;
            $top++;
        }
        switch ($index) {
            case WORKSTATIONS:
                $devices[$index]--;
                if ($devices[$index] == 0) {
                    unset($devices[$index]);
                }
                $topRow .= "<td><img src=\"$workstation\"></td>\n";
                break;
            case SERVERS:
                $devices[$index]--;
                if ($devices[$index] == 0) {
                    unset($devices[$index]);
                }
                $topRow .= "<td><img src=\"$server\"></td>\n";
                break;
            case PRINTERS:
                $devices[$index]--;
                if ($devices[$index] == 0) {
                    unset($devices[$index]);
                }
                $topRow .= "<td><img src=\"$printer\"></td>\n";
                break;
            case SPACES:
                $devices[$index]--;
                if ($devices[$index] == 0) {
                    unset($devices[$index]);
                }
                $topRow .= "<td>&nbsp;</td>\n";
                break;
        }

        // Bottom row
        $index = array_rand($devices);
        if ($index != SPACES) {
            $conns++;
            $bottom++;
        }
        switch ($index) {
            case WORKSTATIONS:
                $devices[$index]--;
                if ($devices[$index] == 0) {
                    unset($devices[$index]);
                }
                $bottomRow .= "<td><img src=\"$workstation\"></td>\n";
                break;
            case SERVERS:
                $devices[$index]--;
                if ($devices[$index] == 0) {
                    unset($devices[$index]);
                }
                $bottomRow .= "<td><img src=\"$server\"></td>\n";
                break;
            case PRINTERS:
                $devices[$index]--;
                if ($devices[$index] == 0) {
                    unset($devices[$index]);
                }
                $bottomRow .= "<td><img src=\"$printer\"></td>\n";
                break;
            case SPACES:
                $devices[$index]--;
                if ($devices[$index] == 0) {
                    unset($devices[$index]);
                }
                $bottomRow .= "<td>&nbsp;</td>\n";
                break;
        }

        // Middle row
        switch ($conns) {
            case 0:
                $middleRow .= "<td><img src=\"$connection\"></td>\n";
                break;
            case 1:
                if ($top) {
                    $middleRow .= "<td><img src=\"$connectionUp\"></td>\n";
                } elseif ($bottom) {
                    $middleRow .= "<td><img src=\"$connectionDown\"></td>\n";
                }
                break;
            case 2:
                $middleRow .= "<td><img src=\"$connectionBoth\"></td>\n";
                break;
        }

        // Terminate if only spaces remaining
        if ((count($devices) == 1) && (isset($devices[SPACES]))) {
            // If only one computer pair found then extend the bus line
            if ($i <= 1) {
                for ($j = 0; $j < 5; $j++) {
                    $topRow .= "<td>&nbsp;</td>\n";
                    $middleRow .= "<td><img src=\"$connection\"></td>\n";
                    $bottomRow .= "<td>&nbsp;</td>\n";
                }
            }
            $i = $cols;
        }
    }
    // add terminators
    $topRow .= "<td>&nbsp;</td>\n";
    $middleRow .= "<td><img src=\"$terminatorR\"></td>\n";
    $bottomRow .= "<td>&nbsp;</td>\n";
}
?>
<!-- Displays the summary of what the user has selected -->
<table width="450" border="0 cellspacing=" 0" cellpadding="0">
    <tr>
        <td colspan="2"><b>Summary</b></td>
    </tr>
    <tr>
        <td width="150">Topology :</td>
        <td width="300" align="left">
            <?php if ($lanType == "Bus") {
                echo "Physical & Logical Bus";
            } else {
                echo "Physical & Logical Ring";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Workstations :</td>
        <td align="left"><?php echo $_SESSION["bus"]["workstations"]; ?></td>
    </tr>
    <tr>
        <td>Servers :</td>
        <td align="left"><?php echo $_SESSION["bus"]["servers"]; ?></td>
    </tr>
    <tr>
        <td>Printers :</td>
        <td align="left"><?php echo $_SESSION["bus"]["printers"]; ?></td>
    </tr>
</table>
<br />

<script language="JavaScript">
<!--
var sURL = unescape(window.location.pathname + "?fuseaction=<?php echo ($_GET["fuseaction"]); ?>");

    function refresh() {
        window.location.href = sURL;
    }
    //-->
</script>

<br />
There are many ways of connecting up a network. To see a different way of<br>
connecting this network up, press the "F5" button or click <input type="button" value="Refresh" class="button2"
    onClick="refresh();">.
<br /><br />
Once you have finished viewing the model, click <input type=button value="close" class="button2"
    onClick="javascript:window.close();">
<br /><br />
<table border="0" cellspacing="0" cellpadding="0">
    <?php echo ("<tr  valign=\"bottom\">\n" . $topRow . "</tr>\n<tr>\n" . $middleRow . "</tr>\n<tr  valign=\"top\">\n" . $bottomRow . "</tr>\n"); ?>
</table>