<?php

    session_start();

    if(!isset($_SESSION['username'])){
        header('Location: ../../landingPage.php');
    }

    if(!isset($_SESSION['response'])){
        $_SESSION['response'] = '';
    };
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User homepage</h1>
    <h3>Welcome <?php echo $_SESSION['username'] ?>!</h3>
    <br>
    <form>
        <select name='years' onchange="getExams(this.value);">
            <option value=''>Odaberite godinu</option>
            <option value='1'>prva godina</option>
            <option value='2'>druga godina</option>
            <option value='3'>treca godina</option>
            <option value='4'>cetvrta godina</option>
        </select>
    </form>
    <br>
    <div id='exams'>Exams will be displayed here</div>
    <br>    
    <p id=message></p>
    <br>
    <div id='registered-exams'>Registered exams will appear here!</div>
    <br>
    <br>
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
    </div>

    <br>
    <a href='../../php/logout.php'>Log out</a>

    <script src='exams.js'></script>
    <script src='../shared/passwordChange.js'></script>
</body>
</html>