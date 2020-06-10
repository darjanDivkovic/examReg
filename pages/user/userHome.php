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
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../style/userStyle.css">
    <title>Document</title>
</head>
<body>
   
    <div id="main-container">
        <div id="user-container">
            <h1>User homepage</h1>
            <img src='../../res/img/user-icon.png' alt=''/>
            <h2>Welcome <?php echo $_SESSION['username'] ?>!</h2>
            <a href='../../php/logout.php'>Log out</a>
        </div>
        <div id="search-bar">
            <div id='circles'>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div id="exams-container">
            <div id='exams'>Exams will be displayed here</div>    
            <div id='exams-bottom'>
            <p id='message'></p>
            <form>
                <select name='years' onchange="getExams(this.value);">
                    <option value=''>Odaberite godinu</option>
                    <option value='1'>prva godina</option>
                    <option value='2'>druga godina</option>
                    <option value='3'>treca godina</option>
                    <option value='4'>cetvrta godina</option>
                </select>
            </form>
            </div>
        </div>
        <div id="registered-exams-container">
        <div id='registered-exams'>Registered exams will appear here!</div>
        </div>
        <div id="change-password">
        <h3>Change your password</h3>
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
    </div>
        
    
    <script src='exams.js'></script>
    <script src='../shared/passwordChange.js'></script>
</body>
</html>