<?php 
// this is the main file...

?>

The page requested seems to be missing.<br>

Please note down what you were last doing and contact a system administrator with the details.<br>

<?php
// Echo the error cause if error was found
if ($Debug) {
  if (isset($_SESSION['error'])) {
    echo("<hr>".$_SESSION['error']);
  }
}
?>