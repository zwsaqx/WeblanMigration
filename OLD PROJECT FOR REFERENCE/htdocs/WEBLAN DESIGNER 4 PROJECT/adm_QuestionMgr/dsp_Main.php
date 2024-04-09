<?php
// this is the main file...

// Make sure a valid user is using this
if (isset($_SESSION["username"])) {
  // User valid

  if (isset($_POST["btnLogout"])) {
    unset($_SESSION["username"]);
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

  define("EDIT_EXIT_POINT", $XFA["viewQuestion"]);

  function generateQuestionList($QuizType) {
    $result = "";
    // get output
    $_SESSION["QuestionArray"] = extractQuiz($QuizType);

    // format output to be displayed
    if ($_SESSION["QuestionArray"]!=null) {
      $totQuestions = count($_SESSION["QuestionArray"]);
      for ($i=0; $i<$totQuestions; $i++) {
        $visible = "";
        if ($_SESSION["QuestionArray"][$i]["visible"] == "T") {
          $visible = "checked";
        }
        $result .= "<tr>
                      <td><input type=\"checkBox\" name=\"chkQuestion".$i."\"></td>
                      <td><a href=\"index.php?fuseaction=". EDIT_EXIT_POINT ."&question=".$i."\">".htmlspecialchars($_SESSION["QuestionArray"][$i]["question"])."</a></td>
                      <td><input type=\"checkBox\" name=\"chkQVis".$i."\" $visible></td>
                    </tr>\n";
      }
    }
    return $result;
  }

  $output = "";
  $_SESSION["selQuizType"] = $_POST["selQuizType"];
  // handle the button clicks from post back
  if (isset($_POST["btnReload"])) {
    $output = generateQuestionList($_POST["selQuizType"]);
    $_SESSION["quizType"] = $_POST["selQuizType"];
  } elseif (isset($_POST["btnAddQuestion"])) {
    // if click on add question then goto add question
    // just redirect only to add question page
    $_SESSION["quizType"] = $_POST["selQuizType"];
    session_write_close();
    header("Location: index.php?fuseaction=".$XFA["addQuestion"]);
    exit();
  } elseif (isset($_POST["btnDeleteQuestion"])) {
    // if click on delete question then goto delete question
    // get delete list
    $questionCount = count($_SESSION["QuestionArray"]);
    $delIndex = -1;
    for ($i=0; $i < $questionCount; $i++) {
      if (isset($_POST["chkQuestion$i"])) {
        $delIndex++;
        $_SESSION["deleteItems"][$delIndex] = $_SESSION["QuestionArray"][$i]["id"];
      }
    }
    // redirect
    session_write_close();
    header("Location: index.php?fuseaction=".$XFA["deleteQuestion"]);
    exit();
  } elseif (isset($_POST["btnUpdateVisibility"])) {
    // if click on the update visibility button, go to update question visibility
    // get visible list
    $questionCount = count($_SESSION["QuestionArray"]);
    $visIndex = -1;
    for ($i=0; $i < $questionCount; $i++) {
      if (isset($_POST["chkQVis$i"])) {
        $visIndex++;
        $_SESSION["visibleItems"][$visIndex] = $_SESSION["QuestionArray"][$i]["id"];
      }
    }
    // redirect
    session_write_close();
    header("Location: index.php?fuseaction=".$XFA["visibleQuestion"]);
    exit();
  } elseif(isset($_GET["question"])) {
    // Edit question details
    $_SESSION["question"] = $_SESSION["QuestionArray"][$_GET["question"]];
    session_write_close();
    header("Location: index.php?fuseaction=".$XFA["editQuestion"]);
    exit();
  } else {
    // show wired questions
    $output = generateQuestionList($_POST["selQuizType"]);
  }

  ?>

  <h1>Admin</h1><br>
  This is where quiz questions are managed<br>
  <form action="" method="post">
    <input type="submit" name="btnLogout" value="Logout"><br>
    Quiz section
    <select name="selQuizType">
      <option value="1" <?php if (isset($_POST["selQuizType"])) { if ($_POST["selQuizType"] == 1) { echo("selected"); } } else if (!isset($_POST["selQuizType"])) { echo("selected"); } ?>>Wired</option>
      <option value="2" <?php if (isset($_POST["selQuizType"])) { if ($_POST["selQuizType"] == 2) { echo("selected"); } } ?>>Wireless</option>
<option value="3" <?php if (isset($_POST["selQuizType"])) { if ($_POST["selQuizType"] == 3) { echo("selected"); } } ?>>TCP/IP</option>
<option value="4" <?php if (isset($_POST["selQuizType"])) { if ($_POST["selQuizType"] == 4) { echo("selected"); } } ?>>Data Comn</option>
    </select><input type="submit" name="btnReload" value="Reload">
    <hr>
    Question List<br>
    <table>
      <tr>
        <td>&nbsp;</td>
        <td>Question</td>
        <td>Visible?</td>
      </tr>
      <?php
        echo($output);
      ?>
    </table>
    <input type="submit" name="btnDeleteQuestion" value="Delete Selected..."><input type="submit" name="btnAddQuestion" value="Add Question..."><input type="submit" name="btnUpdateVisibility" value="Update Visibility..."><br>
  </form>
<?php
} else {
  // User invalid

  $invalidLoginMsg = "";
  // Do login if user tried to login
  if (isset($_POST["btnLogin"])) {
    if (($_POST["txtLogin"]=="weblan")&&($_POST["txtPassword"]=="ht1842")) {
      $_SESSION["username"] = "a";
      // Go home
      session_write_close();
      header("Location: index.php?fuseaction=".$XFA["viewQuestion"]);
      exit();
    } else {
      $invalidLoginMsg = "<br>Invalid username or password...<br>";
    }
  }
  ?>
  <h1>Lecturer Login</h1>

  <br />
  Login now!
  <?php echo($invalidLoginMsg); ?>
  <form method="post">
    <table>
      <tr>
        <td>User Name: </td>
        <td><input type="text" name="txtLogin" maxlength="12" size="12"></td>
      </tr>
      <tr>
        <td>Password: </td>
        <td><input type="password" name="txtPassword" maxlength="12" size="12"></td>
      </tr>
      <tr>
        <td><input type="submit" name="btnLogin" value="Login"></td>
      </tr>
    </table>
  </form>
  <?php
}
?>