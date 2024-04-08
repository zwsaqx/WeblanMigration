<?php 
// this is the main file...

?>

The database seems to be missing.<br>

Please check that database is turned on or the necessary database resources are setup.<br>

<?php
// Echo the error cause if error was found
if ($Debug) {
  if (isset($_SESSION['error'])) {
    echo("<hr>".$_SESSION['error']);
  }
}
?>