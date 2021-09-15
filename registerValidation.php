<?php

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("location: home.php");
  exit;
}

require_once "config.php";

$email = $pw = $pwConfirm = $name = $surname = "";
$email_error = $pw_error = $pwConfirm_error = $name_error = $surname_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty(trim($_POST["email"]))) {
    $email_error = "Please enter an email address";
  } else {
    $query = "SELECT * FROM users WHERE email = ?";

    if ($stmt = mysqli_prepare($link, $query)) {
      mysqli_stmt_bind_param($stmt, "s", $param_email);

      $param_email = trim($_POST["email"]);

      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          $email_error = "This email is already taken.";
        } else {
          $email = trim($_POST["email"]);
        }
      } else {
        echo "Something went wrong. Please try again later.";
      }
      mysqli_stmt_close($stmt);
    }
  }

  if (empty(trim($_POST["password"]))) {
    $pw_error = "Please enter your password";
  } else {
    $pw = $_POST["password"];
  }

  if (empty(trim($_POST["name"]))) {
    $name_error = "Please enter your name.";
  } else {
    $name = trim($_POST["name"]);
  }

  if (empty(trim($_POST["surname"]))) {
    $surname_error = "Please enter your surname.";
  } else {
    $surname = trim($_POST["surname"]);
  }

  if (empty($email_error) && empty($pw_error)) {
    $query = "INSERT INTO users (name, surname, email, password) VALUES (?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($link, $query)) {
      mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_surname, $param_email, $param_pw);
      $param_name = $name;
      $param_surname = $surname;
      $param_email = $email;

      $intermediateSalt = md5(uniqid(rand(), true));

      $options = ['cost' => 6, 'salt' => $intermediateSalt];

      $param_pw = password_hash($pw, PASSWORD_DEFAULT, $options);

      if (mysqli_stmt_execute($stmt)) {
        header('location: index.php');
      } else {
        echo "Something went wrong. Please try again.";
      }

      mysqli_stmt_close($stmt);
    }
  }

  mysqli_close($link);
}
