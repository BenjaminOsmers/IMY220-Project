<?php
include 'loginValidation.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles/formStyles.css">
  <title>Document</title>
</head>

<body>
  <div class="d-flex container vh-100 flex-column align-items-center justify-content-center">
    <div class="form-card h-75 w-75 p-3 border bg-white">
      <div class="row h-100">
        <div class="col-4 h-100 p-5 signIn_aside ms-2 text-white">
          <div class="row h-100 d-flex flex-column">
            <div class="d-flex flex-column justify-content-center flex-grow-1">
              <h1>Sign In</h1>
              <p>Enter your details below and log in to view your feed, add quizzes, and participate</p>
            </div>
            <?php
            if (!empty($login_error)) {
              echo '<div class="alert alert-danger">' . $login_error . '</div>';
            }
            ?>
            <div class="mt-auto py-3 ps-4 align-self-center text-white register">
              <span class="link">Need an account?<br><a href="register.php" class="text-decoration-none fw-bold text-white">Sign up</a></span>
            </div>
          </div>
        </div>
        <div class="col p-5">
          <div class="row mb-5">
            <div class="col">
              logo
            </div>
          </div>
          <div class="row">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div class="col mb-4">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" aria-describedby="emailError" placeholder="Email" required>
                <div id="emailError" class="form-text"><?php echo $email_error; ?></div>
              </div>
              <div class="col mb-5">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" aria-describedby="passwordError" required placeholder="Password">
                <div id="passwordError" class="form-text"><?php echo $pw_error; ?></div>
              </div>
              <div class="col"><button type="submit" class="btn w-100 py-2 rounded-3 fw-bold text-white">Log In</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>