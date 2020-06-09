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
    <div id="main-container">
    <div id="register-container">
        <p class='first-msg'>Join us <span>to acomplish more</span></p>
        <hr>
        <p class='msg'>Join the platform, where you can register your exams more easily than before so you can focus on other things</p>
        <p class='msg-b'>Enter your details</p>
        <form id='form1' action="./php/register.php" onsubmit="return tryRegister();" method="POST">
          <div class="inner-form">
          <input type="text" name="name" placeholder="name" />
          <input type="text" name="surname" placeholder="surname" />
          </div>
          <input type="text" name="reg-username" placeholder="username" />
          <input type="email" name="email" placeholder="email" />
          <input type="password" name="reg-password" placeholder="password" />
          <input type="password" name="confirm-password" placeholder="confirm password" />
          <p id='registerErrorMsg'><?php echo $_SESSION['server_msg'];?></p>
          <button type="submit" form="form1">Sign up</button>
        </form>
        
      </div>  
    <div id="login-container">
      <p class='first-msg'>Already <span>have an account?</span></p>
      <hr>  
      <p class='msg'>Than you are set and ready to go, simply log in</p>
      <p class='msg-b'>Enter login details</p>
      <form id='form2' action="./php/login.php" onsubmit="return tryLogIn();" method="POST">
          <input type="text" name="username" placeholder="username" />
          <input type="password" name="password" placeholder="password" />
          
          <button type="submit" form="form2">Log in</button>
        </form>
        <p id='loginErrorMsg'><?php echo $_SESSION['login-msg'];?></p>
      </div>
    </div>

    <script src="script/login-validation.js"></script>
    <script src="script/register-validation.js"></script>
  </body>
</html>
