<?php

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: index.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles/style.css">
  <title>Document</title>
</head>

<body>
  <div class="nav-container py-2 ps-2">
    <div class="d-flex flex-column vertical-nav py-3 align-items-center bg-blue text-white rounded-3" id="sidebar">
      <div class="d-flex flex-column align-items-center">
        <img src=<?php echo "./media/profiles/" . $_SESSION['image']; ?> alt="user profile" class="mb-3 img-fluid profile-image">
        <h5 class="mb-5 user-name"><?php echo ucwords($_SESSION['name']);
                                    echo " " . ucwords($_SESSION['surname']); ?></h5>
      </div>
      <nav class="nav d-flex flex-column text-left flex-grow-1 justify-content-center">
        <a class="nav-link active" href="home.php"><i class="far fa-newspaper text-white"></i><span class="link-text text-white">Feed</span></a>
        <a class="nav-link" href="profile.php"><i class="far fa-user text-white"></i><span class="link-text text-white">Profile</span></a>
      </nav>
      <button class="btn logout mt-auto align-self-center px-3 py-2 d-flex align-items-center">
        <a href="logout.php" class="d-flex align-items-center">
          <i class="fas fa-sign-out-alt"></i>
          <span class="link-text">Logout</span>
        </a>
      </button>
    </div>
  </div>