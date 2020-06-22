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
    <div id='navbar'>
        <img src='../../res/logo.png' alt="a">
        <div>
        <h4><?php echo $_SESSION['username'] ?></h4>
        <button id='change-pw-btn'>Change password</button>
        <a href='../../php/logout.php'>Log out</a>
        </div>
    </div>
    <div id='year-picker-container'>
        <div id='custom-select'>
                <select name='years' onchange="getExams(this.value);">
                    <option value=''>Odaberite godinu</option>
                    <option value='1'>prva godina</option>
                    <option value='2'>druga godina</option>
                    <option value='3'>treca godina</option>
                    <option value='4'>cetvrta godina</option>
                </select>
        </div>
        <h5>Pick the desired year to view available exams.</h5>
        <p id='message'></p>
    </div>
   
        <div id="exams-container">
            <div id='exams'></div>    
            </div>
        
        <div id="registered-exams-container">
        <div class='card-ribbon'></div>
        <h1>Exams your registered for</h1>
        <div id='search-container'>
            <img src="../../res/search.png" alt="a">
            <input type="text" id='filter' onkeyup="filterRegistered()" placeholder="search registered exams...">
            <h3>status</h3>
            <input type="checkbox" id="status-checkbox" name="exams" value="exams">
        </div>
        <div id='registered-exams'>
        </div>
        </div>
        <div id="change-password">
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
              
        </div>      
        
    
    <script src='exams.js'></script>
    <script src='../shared/passwordChange.js'></script>
    <script src='../shared/button-script.js'></script>
    <script src='../shared/filter.js'></script>
    
</body>
</html>