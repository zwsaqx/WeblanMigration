<?php
// this is the main file...

@session_start();

// Make sure a valid user is using this
if (!isset($_SESSION["username"])) {
  // Go home
  session_write_close();
  header("Location: index.php?fuseaction=".$XFA["viewQuestion"]);
  exit();
}

// Go back to question list
if (isset($_POST["btnReturn"])) {
  // Clear delete item list if any exist
  if (isset($_SESSION["deleteItems"])) {
    unset($_SESSION["deleteItems"]);
  }
  // Do redirect back
  session_write_close();
  header("Location: index.php?fuseaction=".$XFA["viewQuestion"]);
  exit();
}

$itemsToDelete = isset($_SESSION["deleteItems"]);
$itemsDeleted = false;

if (isset($_POST["btnYes"])) {
  // User wants to delete so do delete!
  $delCount = count($_SESSION["deleteItems"]);
  for ($i = 0; $i < $delCount; $i++) {
    deleteQuestion($_SESSION["deleteItems"][$i]);
  }
  $itemsDeleted = true;
}
?>

<h1>Admin</h1>
<form action="" method="post">
  <?php
    if ($itemsToDelete&&$itemsDeleted==false) {
    // Ask user if is sure they wanna delete selected items
  ?>
  Are you sure you want to delete the selected questions?<br>
  <input type="submit" name="btnYes" value="Yes"><input type="submit" name="btnReturn" value="No">
  <?php
    } elseif ($itemsToDelete&&$itemsDeleted) {
  ?>
  Questions deleted.<br>
  <input type="submit" name="btnReturn" value="Return to Question List">
  <?php
    } else {
  ?>
  There are no items to delete.<br>
  <input type="submit" name="btnReturn" value="Return to Question List">
  <?php
    }
  ?>
</form>