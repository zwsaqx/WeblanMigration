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
  // Clear visible item list if any exist
  if (isset($_SESSION["visibleItems"])) {
    unset($_SESSION["visibleItems"]);
  }
  // Do redirect back
  session_write_close();
  header("Location: index.php?fuseaction=".$XFA["viewQuestion"]);
  exit();
}

$itemsToVis = isset($_SESSION["visibleItems"]);
$itemsVisible = false;

if (isset($_POST["btnYes"])) {
  // User wants to make questions visible so make them visible
  // Hide the other questions first
  makeInvisible($_SESSION["selQuizType"]);
  $visCount = 0;
  if (isset($_SESSION["visibleItems"])) {
    $visCount = count($_SESSION["visibleItems"]);
  }

  for ($i = 0; $i < $visCount; $i++) {
    showQuestion($_SESSION["visibleItems"][$i]);
  }
  $itemsVisible = true;
  $itemsToVis = true;
}
?>

<h1>Admin</h1>
<form action="" method="post">
  <?php
    if ($itemsToVis&&$itemsVisible==false) {
    // Ask user if is sure they wanna make visible selected items
  ?>
  Are you sure you want to make the selected questions visible?<br>
  <input type="submit" name="btnYes" value="Yes"><input type="submit" name="btnReturn" value="No">
  <?php
    } elseif ($itemsToVis&&$itemsVisible) {
  ?>
  Question visibility set.<br>
  <input type="submit" name="btnReturn" value="Return to Question List">
  <?php
    } else {
  ?>
  Are you sure you want to make all questions invisible?<br>
  <input type="submit" name="btnYes" value="Yes"><input type="submit" name="btnReturn" value="No">
  <?php
    }
  ?>
</form>