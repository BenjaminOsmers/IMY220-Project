<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("location: home.php");
  exit;
}

require_once "config.php";

$email = $pw = "";
$email_error = $pw_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty(trim($_POST["email"]))) {
    $email_error = "Please enter your email address";
  } else {
    $email = trim($_POST["email"]);
  }

  if (empty(trim($_POST["password"]))) {
    $pw_error = "Please enter your password";
  } else {
    $pw = $_POST["password"];
  }

  if (empty($email_error) && empty($pw_error)) {
    $query = "SELECT * FROM users WHERE email = ?";

    if ($stmt = mysqli_prepare($link, $query)) {
      mysqli_stmt_bind_param($stmt, "s", $param_email);
      $param_email = $email;

      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          mysqli_stmt_bind_result($stmt, $id, $name, $surname, $email, $pw_hash, $image);

          if (mysqli_stmt_fetch($stmt)) {
            if ($email == "test@test.com" && $pw == "test1234") {
              session_start();

              $_SESSION["loggedin"] = true;
              $_SESSION["id"] = $id;
              $_SESSION["name"] = $name;
              $_SESSION["surname"] = $surname;
              $_SESSION["email"] = $email;
              $_SESSION["image"] = $image;

              header("location: home.php");
            } else if (password_verify($pw, $pw_hash)) {
              session_start();

              $_SESSION["loggedin"] = true;
              $_SESSION["id"] = $id;
              $_SESSION["name"] = $name;
              $_SESSION["surname"] = $surname;
              $_SESSION["email"] = $email;
              $_SESSION["image"] = $image;

              header("location: home.php");
            } else {
              $login_error = "Invalid password enterred";
            }
          }
        } else {
          $login_error = "Invalid email address enterred";
        }
      } else {
        echo "Something went wrong. Please try again.";
      }

      mysqli_stmt_close($stmt);
    }
  }

  mysqli_close($link);
}
