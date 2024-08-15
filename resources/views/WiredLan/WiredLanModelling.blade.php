<!DOCTYPE html>
@auth
    <html lang="en">

    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>

            <link rel="stylesheet" type="text/css"
                href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

            <style>
                .homebuttontext {
                    align-content: center;
                    justify-content: center;
                    padding-top: 14px;
                }
            </style>


            <h1 class='header1'>Wired Lan Modelling</h1>

            {{--
            <form method='get' class="form-group row">
                <label for="nodes" class="col-sm-5 col-form-label text-right">Type</label>
                <div class="col-sm-3">
                    <select class="form-control" name="nodes" id="nodes">

                        <option value="star">Star</option>
                        <option value="bus">Bus</option>
                    </select>
                </div>
            </form>
            <div class="text-center">
                <input type="button" id="btnGenerate" name="btnGenerate" value="Generate Model...">
            </div> --}}


            <?php
            // this is the main file...

            if (isset($_GET["btnGenerate"])) {
              // do generate stuff
              switch($_GET["selTopology"]) {
                case "1":
                case "2":
                  // Physical Bus, Logical Bus
                  // Physical Ring, Logical Ring
                  $_SESSION["bus"]["type"] = "bus";
                  if ($_GET["selTopology"] == 2) {
                    $_SESSION["bus"]["type"] = "ring";
                  }
                  $_SESSION["bus"]["workstations"] = (int) $_GET["selWorkstations"];
                  $_SESSION["bus"]["servers"] = (int) $_GET["selServers"];
                  $_SESSION["bus"]["printers"] = (int) $_GET["selPrinters"];


                  echo 'zac '. $_GET["selWorkstations"];
                  ?>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


            <script>
                $(document).ready(function() {
                    $('#generateButton').click(function() {
                        $.get('/get-bus-content', function(data) {
                            $('#contentContainer').html(data);
                        });
                    });
                });
            </script>



            <?php
                  break;
                case "3":
                echo ' STAR TYPEEEE';
                  // This is a logical star
                  $_SESSION["star"]["type"] = "star";
                  $_SESSION["star"]["workstations"] = (int) $_GET["selWorkstations"];
                  $_SESSION["star"]["servers"] = (int) $_GET["selServers"];
                  $_SESSION["star"]["printers"] = (int) $_GET["selPrinters"];
                  ?>
            <script language="JavaScript">
                <!--
                popUp("?fuseaction=<?php echo $XFA['wiredStarModel']; ?>");
                -->
            </script>
            <?php
                  break;
                case "4":
                  // This is a logical bus
                  $_SESSION["star"]["type"] = "bus";
                  $_SESSION["star"]["workstations"] = (int) $_GET["selWorkstations"];
                  $_SESSION["star"]["servers"] = (int) $_GET["selServers"];
                  $_SESSION["star"]["printers"] = (int) $_GET["selPrinters"];
                  ?>
            <script language="JavaScript">
                <!--
                popUp("?fuseaction=<?php echo $XFA['wiredStarModel']; ?>");
                -->
            </script>
            <?php
                  break;
                case "5":
                  // Physical Star, Logical Ring
                  $_SESSION["star"]["type"] = "ring";
                  $_SESSION["star"]["workstations"] = (int) $_GET["selWorkstations"];
                  $_SESSION["star"]["servers"] = (int) $_GET["selServers"];
                  $_SESSION["star"]["printers"] = (int) $_GET["selPrinters"];
                  ?>
            <script language="JavaScript">
                <!--
                popUp("?fuseaction=<?php echo $XFA['wiredStarModel']; ?>");
                -->
            </script>
            <?php
                  break;
              }

            }

            ?>
            <br />
            <form action="" method="GET">
                <table align="center" cellpadding="3" class="NormalText" width="600">
                    <tr>
                        <td width="150">Topology</td>
                        <td width="450">
                            <?php $topologySelected = 0;
                            if (isset($_GET['selTopology'])) {
                                $topologySelected = $_GET['selTopology'];
                            } ?>
                            <select name="selTopology">
                                <option value="1" <?php if ($topologySelected == 1) {
                                    echo 'selected';
                                } ?>>Physical &amp; Logical Bus</option>
                                <option value="2" <?php if ($topologySelected == 2) {
                                    echo 'selected';
                                } ?>>Physical &amp; Logical Ring</option>
                                <option value="3" <?php if ($topologySelected == 3) {
                                    echo 'selected';
                                } ?>>Physical Star, Logical Star</option>
                                <option value="4" <?php if ($topologySelected == 4) {
                                    echo 'selected';
                                } ?>>Physical Star, Logical Bus</option>
                                <option value="5" <?php if ($topologySelected == 5) {
                                    echo 'selected';
                                } ?>>Physical Star, Logical Ring</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="150">Workstations</td>
                        <td width="450">
                            <?php $workstationSelected = 0;
                            if (isset($_GET['selWorkstations'])) {
                                $workstationSelected = $_GET['selWorkstations'];
                            } ?>
                            <select name="selWorkstations">
                                <option value="1" <?php if ($workstationSelected == 1) {
                                    echo 'selected';
                                } ?>>1</option>
                                <option value="2" <?php if ($workstationSelected == 2) {
                                    echo 'selected';
                                } ?>>2</option>
                                <option value="3" <?php if ($workstationSelected == 3) {
                                    echo 'selected';
                                } ?>>3</option>
                                <option value="4" <?php if ($workstationSelected == 4) {
                                    echo 'selected';
                                } ?>>4</option>
                                <option value="5" <?php if ($workstationSelected == 5) {
                                    echo 'selected';
                                } ?>>5</option>
                                <option value="6" <?php if ($workstationSelected == 6) {
                                    echo 'selected';
                                } ?>>6</option>
                                <option value="7" <?php if ($workstationSelected == 7) {
                                    echo 'selected';
                                } ?>>7</option>
                                <option value="8" <?php if ($workstationSelected == 8) {
                                    echo 'selected';
                                } ?>>8</option>
                                <option value="9" <?php if ($workstationSelected == 9) {
                                    echo 'selected';
                                } ?>>9</option>
                                <option value="10" <?php if ($workstationSelected == 10) {
                                    echo 'selected';
                                } ?>>10</option>
                                <option value="11" <?php if ($workstationSelected == 11) {
                                    echo 'selected';
                                } ?>>11</option>
                                <option value="12" <?php if ($workstationSelected == 12) {
                                    echo 'selected';
                                } ?>>12</option>
                                <option value="13" <?php if ($workstationSelected == 13) {
                                    echo 'selected';
                                } ?>>13</option>
                                <option value="14" <?php if ($workstationSelected == 14) {
                                    echo 'selected';
                                } ?>>14</option>
                                <option value="15" <?php if ($workstationSelected == 15) {
                                    echo 'selected';
                                } ?>>15</option>
                                <option value="16" <?php if ($workstationSelected == 16) {
                                    echo 'selected';
                                } ?>>16</option>
                                <option value="17" <?php if ($workstationSelected == 17) {
                                    echo 'selected';
                                } ?>>17</option>
                                <option value="18" <?php if ($workstationSelected == 18) {
                                    echo 'selected';
                                } ?>>18</option>
                                <option value="19" <?php if ($workstationSelected == 19) {
                                    echo 'selected';
                                } ?>>19</option>
                                <option value="20" <?php if ($workstationSelected == 20) {
                                    echo 'selected';
                                } ?>>20</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="150">Servers</td>
                        <td width="450">
                            <?php $serverSelected = 0;
                            if (isset($_GET['selServers'])) {
                                $serverSelected = $_GET['selServers'];
                            } ?>
                            <select name="selServers">
                                <option value="1" <?php if ($serverSelected == 1) {
                                    echo 'selected';
                                } ?>>1</option>
                                <option value="2" <?php if ($serverSelected == 2) {
                                    echo 'selected';
                                } ?>>2</option>
                                <option value="3" <?php if ($serverSelected == 3) {
                                    echo 'selected';
                                } ?>>3</option>
                                <option value="4" <?php if ($serverSelected == 4) {
                                    echo 'selected';
                                } ?>>4</option>
                                <option value="5" <?php if ($serverSelected == 5) {
                                    echo 'selected';
                                } ?>>5</option>
                                <option value="6" <?php if ($serverSelected == 6) {
                                    echo 'selected';
                                } ?>>6</option>
                                <option value="7" <?php if ($serverSelected == 7) {
                                    echo 'selected';
                                } ?>>7</option>
                                <option value="8" <?php if ($serverSelected == 8) {
                                    echo 'selected';
                                } ?>>8</option>
                                <option value="9" <?php if ($serverSelected == 9) {
                                    echo 'selected';
                                } ?>>9</option>
                                <option value="10" <?php if ($serverSelected == 10) {
                                    echo 'selected';
                                } ?>>10</option>
                                <option value="11" <?php if ($serverSelected == 11) {
                                    echo 'selected';
                                } ?>>11</option>
                                <option value="12" <?php if ($serverSelected == 12) {
                                    echo 'selected';
                                } ?>>12</option>


                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="150">Printers</td>
                        <td width="450">
                            <?php $printerSelected = 0;
                            if (isset($_GET['selPrinters'])) {
                                $printerSelected = $_GET['selPrinters'];
                            } ?>
                            <select name="selPrinters">
                                <option value="0" <?php if ($printerSelected == 0) {
                                    echo 'selected';
                                } ?>>0</option>
                                <option value="1" <?php if ($printerSelected == 1) {
                                    echo 'selected';
                                } ?>>1</option>
                                <option value="2" <?php if ($printerSelected == 2) {
                                    echo 'selected';
                                } ?>>2</option>
                                <option value="3" <?php if ($printerSelected == 3) {
                                    echo 'selected';
                                } ?>>3</option>
                                <option value="4" <?php if ($printerSelected == 4) {
                                    echo 'selected';
                                } ?>>4</option>
                                <option value="5" <?php if ($printerSelected == 5) {
                                    echo 'selected';
                                } ?>>5</option>
                                <option value="6" <?php if ($printerSelected == 6) {
                                    echo 'selected';
                                } ?>>6</option>
                                <option value="7" <?php if ($printerSelected == 7) {
                                    echo 'selected';
                                } ?>>7</option>
                                <option value="8" <?php if ($printerSelected == 8) {
                                    echo 'selected';
                                } ?>>8</option>
                                <option value="9" <?php if ($printerSelected == 9) {
                                    echo 'selected';
                                } ?>>9</option>
                                <option value="10" <?php if ($printerSelected == 10) {
                                    echo 'selected';
                                } ?>>10</option>
                                <option value="11" <?php if ($printerSelected == 11) {
                                    echo 'selected';
                                } ?>>11</option>
                                <option value="12" <?php if ($printerSelected == 12) {
                                    echo 'selected';
                                } ?>>12</option>
                                <option value="13" <?php if ($printerSelected == 13) {
                                    echo 'selected';
                                } ?>>13</option>
                                <option value="14" <?php if ($printerSelected == 14) {
                                    echo 'selected';
                                } ?>>14</option>
                                <option value="15" <?php if ($printerSelected == 15) {
                                    echo 'selected';
                                } ?>>15</option>
                                <option value="16" <?php if ($printerSelected == 16) {
                                    echo 'selected';
                                } ?>>16</option>
                                <option value="17" <?php if ($printerSelected == 17) {
                                    echo 'selected';
                                } ?>>17</option>
                                <option value="18" <?php if ($printerSelected == 18) {
                                    echo 'selected';
                                } ?>>18</option>
                                <option value="19" <?php if ($printerSelected == 19) {
                                    echo 'selected';
                                } ?>>19</option>
                                <option value="20" <?php if ($printerSelected == 20) {
                                    echo 'selected';
                                } ?>>20</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="btnGenerate" value="Generate Model..."
                                id="generateButton"></td>
                    </tr>

                </table>

            </form>

            <div id="contentContainer"></div>

            {{-- @include('partials.WiredLanBus') --}}


        </div>
    </body>

    @include('partials.footer')
@else
    <meta http-equiv="refresh" content="0; URL=/">
@endauth

</html>
