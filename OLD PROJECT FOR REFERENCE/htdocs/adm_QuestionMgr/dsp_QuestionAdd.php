<?php
// this is the main file...
//   Add Statuses
//     not set (not added)
//     added
//     error

// Make sure a valid user is using this
if (!isset($_SESSION["username"])) {
  // Go home
  session_write_close();
  header("Location: index.php?fuseaction=".$XFA["viewQuestion"]);
  exit();
}

// Get quiz type
if (!isset($_POST["selQuizType"])) {
    if (isset($_SESSION["selQuizType"])) {
      $_POST["selQuizType"] = $_SESSION["selQuizType"];
    } else {
      $_POST["selQuizType"] = 1;
      $_SESSION["selQuizType"] = 1;
    }
  }

// Redirect if needed
if (isset($_POST["btnReturn"])) {
  // do return to page
  session_write_close();
  header("Location: index.php?fuseaction=".$XFA["viewQuestion"]);
  exit();
}

// Define add status constants
define("STATUS_UNSET", "unset");
define("STATUS_ADDED", "added");
define("STATUS_ERROR", "error");
$displayStatus = STATUS_UNSET;
$errorOutput = "";

// Quiz type selection init
if (isset($_SESSION["quizType"])) {
  $_POST["selQuizType"] = $_SESSION["quizType"];
  unset($_SESSION["quizType"]);
}

// If add button clicked
if (isset($_POST["btnAdd"])) {
  // Make sure there is a question and that there are at least 1 answer
  $questionExists = false;
  if (isset($_POST["txtQuestion"])) {
    $questionExists = (trim($_POST["txtQuestion"]) != "");
  }

  // Make sure that there is a answer that exists and if so fetch the results
  $answerSet = null;
  $answerExists = false;
  for ($answerSetIndex = 1; $answerSetIndex <= 6; $answerSetIndex++) {
    if (isset($_POST["txtAns$answerSetIndex"])) {
      if ((trim($_POST["txtAns$answerSetIndex"]) != "")&&(isset($_POST["chkAns$answerSetIndex"]))) {
        $answerExists = true;
      }
      $answerSet[$answerSetIndex]["answer"] = $_POST["txtAns$answerSetIndex"];
      $answerSet[$answerSetIndex]["correct"] = isset($_POST["chkAns$answerSetIndex"]);
    }
  }

  // Do add
  if ($questionExists && $answerExists) {
    // addsuccess: display success result
    $displayStatus = STATUS_ADDED;
    $ansString = compressAnswers($answerSet);
    addQuestion($_POST["selQuizType"], $_POST["txtQuestion"], $ansString);
    // if db problem then show db error?
  } else {
    // addfail: redisplay add form
    $displayStatus = STATUS_ERROR;
    $errorOutput = "<div class=\"errorText\">ERROR: There must be a question and at least one answer.</div>";
  }
}

?>

<h1>Admin</h1>
<form action="" method="post">
  <?php
    if ($displayStatus != STATUS_ADDED) {
      // Not added
      echo($errorOutput);
  ?>
  <table cellspacing="10">
    <tr>
      <td>Quiz type</td>
      <td>
        <select name="selQuizType">
          <option value="1" <?php if (isset($_POST["selQuizType"])) { if ($_POST["selQuizType"] == 1) { echo("selected"); } } else if (!isset($_POST["selQuizType"])) { echo("selected"); } ?>>Wired</option>
          <option value="2" <?php if (isset($_POST["selQuizType"])) { if ($_POST["selQuizType"] == 2) { echo("selected"); } } ?>>Wireless</option>
		  <option value="3" <?php if (isset($_POST["selQuizType"])) { if ($_POST["selQuizType"] == 3) { echo("selected"); } } ?>>TCP/IP</option>
		  <option value="4" <?php if (isset($_POST["selQuizType"])) { if ($_POST["selQuizType"] == 4) { echo("selected"); } } ?>>Data Comn</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Question</td>
      <td><textarea name="txtQuestion" cols="50" rows="4"><?php if (isset($_POST["txtQuestion"])) { echo($_POST["txtQuestion"]); } ?></textarea></td>
    </tr>
    <tr>
      <td>Answer(s)</td>
      <td>
        <table border="1">
          <tr>
            <td>&nbsp;</td>
            <td>Answer</td>
            <td>Correct?</td>
          </tr>
          <tr>
            <td>1.</td>
            <td><input type="text" size="50" maxlength="255" name="txtAns1" value="<?php if (isset($_POST["txtAns1"])) { echo(htmlspecialchars($_POST["txtAns1"])); } ?>"></td>
            <td><input type="checkBox" name="chkAns1" <?php if (isset($_POST["chkAns1"])) { echo("checked"); } ?>></td>
          </tr>
          <tr>
            <td>2.</td>
            <td><input type="text" size="50" maxlength="255" name="txtAns2" value="<?php if (isset($_POST["txtAns2"])) { echo(htmlspecialchars($_POST["txtAns2"])); } ?>"></td>
            <td><input type="checkBox" name="chkAns2" <?php if (isset($_POST["chkAns2"])) { echo("checked"); } ?>></td>
          </tr>
          <tr>
            <td>3.</td>
            <td><input type="text" size="50" maxlength="255" name="txtAns3" value="<?php if (isset($_POST["txtAns3"])) { echo(htmlspecialchars($_POST["txtAns3"])); } ?>"></td>
            <td><input type="checkBox" name="chkAns3" <?php if (isset($_POST["chkAns3"])) { echo("checked"); } ?>></td>
          </tr>
          <tr>
            <td>4.</td>
            <td><input type="text" size="50" maxlength="255" name="txtAns4" value="<?php if (isset($_POST["txtAns4"])) { echo(htmlspecialchars($_POST["txtAns4"])); } ?>"></td>
            <td><input type="checkBox" name="chkAns4" <?php if (isset($_POST["chkAns4"])) { echo("checked"); } ?>></td>
          </tr>
          <tr>
            <td>5.</td>
            <td><input type="text" size="50" maxlength="255" name="txtAns5" value="<?php if (isset($_POST["txtAns5"])) { echo(htmlspecialchars($_POST["txtAns5"])); } ?>"></td>
            <td><input type="checkBox" name="chkAns5" <?php if (isset($_POST["chkAns5"])) { echo("checked"); } ?>></td>
          </tr>
          <tr>
            <td>6.</td>
            <td><input type="text" size="50" maxlength="255" name="txtAns6" value="<?php if (isset($_POST["txtAns6"])) { echo(htmlspecialchars($_POST["txtAns6"])); } ?>"></td>
            <td><input type="checkBox" name="chkAns6" <?php if (isset($_POST["chkAns6"])) { echo("checked"); } ?>></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <input type="submit" name="btnAdd" value="Add Question">
  <input type="submit" name="btnReturn" value="Return to Question List">

  <?php
    } elseif ($displayStatus == STATUS_ADDED) {
      // Added successfully
  ?>
  Question added successfully.<br>
  <input type="hidden" name="selQuizType" value="<?php echo($_POST["selQuizType"]); ?>">
  <input type="submit" name="btnReturn" value="Return to Question List">
  <?php
    }
  ?>
</form>