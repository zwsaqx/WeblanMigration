<?php
// this is the main file...

// this is the main file...
//   Update Statuses
//     not set (nonexistant id)
//     updated
//     unupdated
//     error

// Make sure a valid user is using this
if (!isset($_SESSION["username"])) {
  // Go home
  session_write_close();
  header("Location: index.php?fuseaction=".$XFA["viewQuestion"]);
  exit();
}

// Get the quiz type
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
  unset($_SESSION["question"]);
  $_SESSION["selQuizType"] = $_POST["selQuizType"];
  // do return to page
  session_write_close();
  header("Location: index.php?fuseaction=".$XFA["viewQuestion"]);
  exit();
}

// Define update status constants
define("STATUS_UNSET", "unset");
define("STATUS_UPDATED", "updated");
define("STATUS_UNUPDATED", "unupdated");
define("STATUS_ERROR", "error");
$displayStatus = STATUS_UNSET;
if (isset($_SESSION["question"])&&!isset($_POST["txtQuestionID"])) {
  $displayStatus = STATUS_UNUPDATED;
  $_POST["txtQuestionID"] = $_SESSION["question"]["id"];
  $_POST["txtQuestion"] = $_SESSION["question"]["question"];
  $answerArray = extractAnswers($_SESSION["question"]["answers"]);
  $ansCount = count ($answerArray);
  for ($i = 0; $i < $ansCount; $i++) {
    $num = $i + 1;
    $_POST["txtAns$num"] = $answerArray[$i][0];
    if ($answerArray[$i][1]=="t") {
      $_POST["chkAns$num"] = true;
    }
  }
}
$errorOutput = "";

// Quiz type selection init
if (isset($_SESSION["quizType"])) {
  $_POST["selQuizType"] = $_SESSION["quizType"];
  unset($_SESSION["quizType"]);
}

// If update button clicked
if (isset($_POST["btnUpdate"])) {
  // Make sure there is a question and that there are at least 1 answer
  $questionExists = false;
  if (isset($_POST["txtQuestion"])) {
    $questionExists = (trim($_POST["txtQuestion"]) != "");
  }

  // Make sure that there is a answer that exists and if so fetch the results
  $answerSet = null;
  $answerExists = false;
  for ($answerSetIndex = 0; $answerSetIndex < 6; $answerSetIndex++) {
    if (isset($_POST["txtAns$answerSetIndex"])) {
      if ((trim($_POST["txtAns$answerSetIndex"]) != "")&&(isset($_POST["chkAns$answerSetIndex"]))) {
        $answerExists = true;
      }
      $answerSet[$answerSetIndex]["answer"] = $_POST["txtAns$answerSetIndex"];
      $answerSet[$answerSetIndex]["correct"] = isset($_POST["chkAns$answerSetIndex"]);
    }
  }

  // Do update
  if ($questionExists && $answerExists) {
    // updatesuccess: display success result
    $displayStatus = STATUS_UPDATED;
    $ansString = compressAnswers($answerSet);
    updateQuestion($_POST["txtQuestionID"], $_POST["selQuizType"], $_POST["txtQuestion"], $ansString);
  } else {
    // updatefail: redisplay update form
    $displayStatus = STATUS_ERROR;
  }
}

?>

<h1>Admin</h1>
<form action="" method="post">
  <?php
    if ($displayStatus == STATUS_UNUPDATED || $displayStatus == STATUS_ERROR) {
      // Not updated
      echo($errorOutput);
  ?>
  <input type="hidden" name="txtQuestionID" value="<?php if (isset($_POST["txtQuestionID"])) {echo($_POST["txtQuestionID"]);} ?>">
  <table cellspacing="10">
    <tr>
      <td>Quiz type</td>
      <td>
        <?php if ($_POST["selQuizType"]==1) { echo("Wired"); }
		if ($_POST["selQuizType"]==2){ echo("Wireless"); } 
		if ($_POST["selQuizType"]==3){ echo("TCPIP"); }
		if ($_POST["selQuizType"]==4){ echo("DataCom"); }?>
        <input type="hidden" name="selQuizType" value="<?php echo($_POST["selQuizType"]); ?>">
      </td>
    </tr>
    <tr>
      <td>Question</td>
      <td><textarea name="txtQuestion" cols="50" rows="4"><?php if (isset($_POST["txtQuestion"])) {echo($_POST["txtQuestion"]);} ?></textarea></td>
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
            <td><input type="text" size="50" maxlength="255" name="txtAns1" value="<?php if (isset($_POST["txtAns1"])) {echo(htmlspecialchars($_POST["txtAns1"]));} ?>"></td>
            <td><input type="checkBox" name="chkAns1" <?php if (isset($_POST["chkAns1"])) {echo("checked");} ?>></td>
          </tr>
          <tr>
            <td>2.</td>
            <td><input type="text" size="50" maxlength="255" name="txtAns2" value="<?php if (isset($_POST["txtAns2"])) {echo(htmlspecialchars($_POST["txtAns2"]));} ?>"></td>
            <td><input type="checkBox" name="chkAns2" <?php if (isset($_POST["chkAns2"])) {echo("checked");} ?>></td>
          </tr>
          <tr>
            <td>3.</td>
            <td><input type="text" size="50" maxlength="255" name="txtAns3" value="<?php if (isset($_POST["txtAns3"])) {echo(htmlspecialchars($_POST["txtAns3"]));} ?>"></td>
            <td><input type="checkBox" name="chkAns3" <?php if (isset($_POST["chkAns3"])) {echo("checked");} ?>></td>
          </tr>
          <tr>
            <td>4.</td>
            <td><input type="text" size="50" maxlength="255" name="txtAns4" value="<?php if (isset($_POST["txtAns4"])) {echo(htmlspecialchars($_POST["txtAns4"]));} ?>"></td>
            <td><input type="checkBox" name="chkAns4" <?php if (isset($_POST["chkAns4"])) {echo("checked");} ?>></td>
          </tr>
          <tr>
            <td>5.</td>
            <td><input type="text" size="50" maxlength="255" name="txtAns5" value="<?php if (isset($_POST["txtAns5"])) {echo(htmlspecialchars($_POST["txtAns5"]));} ?>"></td>
            <td><input type="checkBox" name="chkAns5" <?php if (isset($_POST["chkAns5"])) {echo("checked");} ?>></td>
          </tr>
          <tr>
            <td>6.</td>
            <td><input type="text" size="50" maxlength="255" name="txtAns6" value="<?php if (isset($_POST["txtAns6"])) {echo(htmlspecialchars($_POST["txtAns6"]));} ?>"></td>
            <td><input type="checkBox" name="chkAns6" <?php if (isset($_POST["chkAns6"])) {echo("checked");} ?>></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <input type="submit" name="btnUpdate" value="Update Question">
  <input type="submit" name="btnReturn" value="Return to Question List">

  <?php
    } elseif ($displayStatus == STATUS_UPDATED) {
      // Updated successfully
  ?>
  Question updated successfully.<br>
  <input type="hidden" name="selQuizType" value="<?php echo($_POST["selQuizType"]); ?>">
  <input type="submit" name="btnReturn" value="Return to Question List">
  <?php
    } elseif ($displayStatus == STATUS_UNSET) {
  ?>
  ID not found.<br>
  <input type="submit" name="btnReturn" value="Return to Question List">
  <?php
    }
  ?>
</form>