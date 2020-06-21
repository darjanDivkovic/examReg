<?php

    session_start();

    if(!isset($_SESSION['username'])){
        header('Location: ../../landingPage.php');
    }

    if(!isset($_SESSION['response'])){
        $_SESSION['response'] = '';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/userStyle.css">
    <link rel="stylesheet" href="../../style/adminStyle.css">
    <title>EER Admin</title>
</head>
<body>
<div id='navbar'>
        <img src='../../res/logo.png' alt="a">
        <div>
        <h4><?php echo $_SESSION['username'] ?></h4>
        <button id='change-pw-btn'>Change password</button>
        <a href='../../php/logout.php'>Log out</a>
        </div>
    </div>
    <div id='requests'>Requests will be displayed here!</div>
    <p id='req-msg'></p>
   
    <div id='change-password'>
    <div class='card-ribbon'>.</div>
        <button id=close-btn>X</button>
        <h3>Change your password</h3>
        <p id='password-change-error-msg'>
          <?php echo $_SESSION['response'];?>
      </p>
      <form action='../../php/changePassword.php' method='POST' onsubmit='return verifyPasswordChange();'>
        <input type='password' name='old-password' placeholder='Old Password'/>
        <input type='password' name='new-password' placeholder='New Password'/>
        <input type='password' name='retyped-new-password' placeholder='Retype new Password'/>
        <input type='submit' value='change password'/>
      </form>
      


    <script src='requests.js'></script>
    <script src='../shared/button-script.js'></script>
</body>
</html>