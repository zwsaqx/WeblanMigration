<?php
  if (isset($_POST["btnAddVisibility"])) {
    include("./qry_DbConn.php");
    addVisibility();
    echo("done");
  }
?>

<form method="post" action="?">
  <input type="submit" name="btnAddVisibility" value="Add Visibility">
</form>