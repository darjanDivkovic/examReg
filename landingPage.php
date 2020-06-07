<?php

    session_start();

    if(!isset($_SESSION['server_msg'])){
      $_SESSION['server_msg'] = '';
    }
    if(!isset($_SESSION['login-msg'])){
      $_SESSION['login-msg'] = '';
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exam Registration</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style/mainStyle.css" />
  </head>
  <body>
    <br />
    <br />
    <div id="main-container">
      <div id="login-container">
        <h2>Log in</h2>
        <form action="./php/login.php" onsubmit="return tryLogIn();" method="POST">
          <input type="text" name="username" placeholder="username" />
          <input type="password" name="password" placeholder="password" />
          <br />
          <input type="submit" value="Log in" class="submit"/>
        </form>
        <p id='loginErrorMsg'><?php echo $_SESSION['login-msg'];?></p>
      </div>
      <div id="register-container">
        <h2>Register</h2>
        <form action="./php/register.php" onsubmit="return tryRegister();" method="POST">
          <input type="text" name="name" placeholder="name" />
          <input type="text" name="surname" placeholder="surname" />
          <input type="text" name="reg-username" placeholder="username" />
          <input type="password" name="reg-password" placeholder="password" />
          <input type="password" name="confirm-password" placeholder="confirm password" />
          <input type="email" name="email" placeholder="email" />
          <input type="submit" value="register" class="submit"/>
        </form>
        <p id='registerErrorMsg'><?php echo $_SESSION['server_msg'];?></p>
      </div>
    </div>

    <script src="script/login-validation.js"></script>
    <script src="script/register-validation.js"></script>
  </body>
</html>
