<?php
// this is the main file...


if (isset($_POST["btnGenerate"])) {
  // do generate stuff

  switch($_POST["selTopology"]) {
    case "1":
      // Access Point
      unset($_SESSION["accessPoint"]);
      $_SESSION["accessPoint"]["mobileWorkstations"] = (int) $_POST["selWorkstations"];
      $_SESSION["accessPoint"]["pdas"] = (int) $_POST["selPDAs"];
      $_SESSION["accessPoint"]["printers"] = (int) $_POST["selPrinters"];
      ?>
        <script language="JavaScript">
          <!--
          popUp("?fuseaction=<?php echo($XFA["wirelessAccessPointModel"]); ?>");
          -->
        </script>
      <?php
      break;
    case "2":
      // Ad-Hoc
      unset($_SESSION["adHoc"]);
      $_SESSION["adHoc"]["mobileWorkstations"] = (int) $_POST["selWorkstations"];
      $_SESSION["adHoc"]["pdas"] = (int) $_POST["selPDAs"];
      $_SESSION["adHoc"]["printers"] = (int) $_POST["selPrinters"];
      ?>
        <script language="JavaScript">
          <!--
          popUp("?fuseaction=<?php echo($XFA["wirelessAdHocModel"]); ?>");
          -->
        </script>
      <?php
      break;
  }
}

?>

<DIV class=darkBlueTextJumbo align=center>Wireless LAN Modelling</DIV>
<br />
<form action="" method="post">
  <table align="center" cellpadding="3" class="NormalText" width="600">
    <tr>
      <td width="150">Topology</td>
      <td width="450">
        <?php $topologySelected = 0; if (isset($_POST["selTopology"])) { $topologySelected = $_POST["selTopology"]; } ?>
        <select name="selTopology">
          <option value="2" <?php if ($topologySelected == 2) { echo("selected");} ?>>Ad Hoc</option>
          <option value="1" <?php if ($topologySelected == 1) { echo("selected");} ?>>Infrastructure</option>
        </select>
      </td>
    </tr>
    <tr>
      <td width="150">Workstations</td>
      <td width="450">
        <?php $workstationSelected = 0; if (isset($_POST["selWorkstations"])) { $workstationSelected = $_POST["selWorkstations"]; } ?>
        <select name="selWorkstations">
          <option value="1" selected="selected" <?php if ($workstationSelected == 1) { echo("selected");} ?>>1</option>
          <option value="2" <?php if ($workstationSelected == 2) { echo("selected");} ?>>2</option>
          <option value="3" <?php if ($workstationSelected == 3) { echo("selected");} ?>>3</option>
          <option value="4" <?php if ($workstationSelected == 4) { echo("selected");} ?>>4</option>
          <option value="5" <?php if ($workstationSelected == 5) { echo("selected");} ?>>5</option>
          <option value="6" <?php if ($workstationSelected == 6) { echo("selected");} ?>>6</option>
          <option value="7" <?php if ($workstationSelected == 7) { echo("selected");} ?>>7</option>
          <option value="8" <?php if ($workstationSelected == 8) { echo("selected");} ?>>8</option>
          <option value="9" <?php if ($workstationSelected == 9) { echo("selected");} ?>>9</option>
          <option value="10" <?php if ($workstationSelected == 10) { echo("selected");} ?>>10</option>
          <option value="11" <?php if ($workstationSelected == 11) { echo("selected");} ?>>11</option>
          <option value="12" <?php if ($workstationSelected == 12) { echo("selected");} ?>>12</option>
          <option value="13" <?php if ($workstationSelected == 13) { echo("selected");} ?>>13</option>
          <option value="14" <?php if ($workstationSelected == 14) { echo("selected");} ?>>14</option>
          <option value="15" <?php if ($workstationSelected == 15) { echo("selected");} ?>>15</option>
          
        </select>
      </td>
    </tr>
    <tr>
      <td width="150">PDAs</td>
      <td width="450">
        <?php $pdaSelected = 0; if (isset($_POST["selPDAs"])) { $pdaSelected = $_POST["selPDAs"]; } ?>
        <select name="selPDAs">
          <option value="1" selected="selected" <?php if ($pdaSelected == 1) { echo("selected");} ?>>1</option>
          <option value="2" <?php if ($pdaSelected == 2) { echo("selected");} ?>>2</option>
          <option value="3" <?php if ($pdaSelected == 3) { echo("selected");} ?>>3</option>
          <option value="4" <?php if ($pdaSelected == 4) { echo("selected");} ?>>4</option>
          <option value="5" <?php if ($pdaSelected == 5) { echo("selected");} ?>>5</option>
          <option value="6" <?php if ($pdaSelected == 6) { echo("selected");} ?>>6</option>
          <option value="7" <?php if ($pdaSelected == 7) { echo("selected");} ?>>7</option>
          <option value="8" <?php if ($pdaSelected == 8) { echo("selected");} ?>>8</option>
          <option value="9" <?php if ($pdaSelected == 9) { echo("selected");} ?>>9</option>
          <option value="10" <?php if ($pdaSelected == 10) { echo("selected");} ?>>10</option>
          <option value="11" <?php if ($pdaSelected == 11) { echo("selected");} ?>>11</option>
          <option value="12" <?php if ($pdaSelected == 12) { echo("selected");} ?>>12</option>
          <option value="13" <?php if ($pdaSelected == 13) { echo("selected");} ?>>13</option>
          <option value="14" <?php if ($pdaSelected == 14) { echo("selected");} ?>>14</option>
          <option value="15" <?php if ($pdaSelected == 15) { echo("selected");} ?>>15</option>
        </select>
      </td>
    </tr>
    <tr>
      <td width="150">Printers</td>
      <td width="450">
        <?php $printerSelected = 0; if (isset($_POST["selPrinters"])) { $printerSelected = $_POST["selPrinters"]; } ?>
        <select name="selPrinters">
          <option value="1">1</option>
          <option value="2" <?php if ($printerSelected == 2) { echo("selected");} ?>>2</option>
          <option value="3" <?php if ($printerSelected == 3) { echo("selected");} ?>>3</option>
          <option value="4" <?php if ($printerSelected == 4) { echo("selected");} ?>>4</option>
          <option value="5" <?php if ($printerSelected == 5) { echo("selected");} ?>>5</option>
         
        </select>
      </td>
    </tr>
  <tr>
    <td colspan="2"><input type="submit" name="btnGenerate" value="Generate Model..."></td>
  </tr>
  <tr>
	  <td colspan="2">The model will open in a new window, please enable JavaScript 
        popup for this site.</td>
	</tr>
  </table>

</form>