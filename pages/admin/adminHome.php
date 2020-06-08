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
    <title>Document</title>
</head>
<body>
    <h1>Admin is home!</h1>
    <h3>Welcome <?php echo $_SESSION['username'] ?>!</h3>
    <h2>Requests</h2>
    <div id='requests'>Requests will be displayed here!</div>
    <p id='req-msg'></p>
   
    <div id='change-password-div'>
      <form action='../../php/changePassword.php' method='POST' onsubmit='return verifyPasswordChange();'>
        <input type='password' name='old-password' placeholder='Old Password'/>
        <input type='password' name='new-password' placeholder='New Password'/>
        <input type='password' name='retyped-new-password' placeholder='Retype new Password'/>
        <input type='submit' value='change password'/>
      </form>
      <p id='password-change-error-msg'>
          <?php echo $_SESSION['response'];?>
      </p>
      <br>
      <a href='../../php/logout.php'>Log out</a>
    <script src='requests.js'></script>
</body>
</html>