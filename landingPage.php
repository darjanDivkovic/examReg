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
    <link rel="stylesheet" href="style/mainStyle.css" />
  </head>
  <body>
  
  <div id='background'></div>
    <div id='navbar'>
        <img src="./res/logo.png" alt="a">
        <div id='navbar-links'>
            <a href="#cards">ABOUT US</a>
            <a href="#reg-header">REGISTER</a>
            <a href="#member-login-header">LOGIN</a>
        </div>
    </div>
    <div id='hero'>
        <h1>Do more by doing less.</h1>
        <p>Start registering your exams online!</p>
        <p>Save your time by registering your exams online, instead of doing it in person on college.</p>
        <button><a href="#cards">LEARN MORE</a></button>
    </div>
    <div id='cards'></div>
    <div id='cards-container'>
        <div class='card'>
            <div class='card-ribbon'></div>
            <img src="./res/clock.png" alt=" ">
            <h1>VALUE YOUR TIME</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum cumque vitae ea quaerat sit earum eos quod, cupiditate ipsam iste?</p>
        </div>
        <div class='card'>
            <div class='card-ribbon'></div>
            <img src="./res/calendarr.png" alt=" ">
            <h1>STAY ORGANISED</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla reiciendis assumenda magnam a nihil, ad voluptas possimus maiores dolorem error?</p>
        </div>
        <div class='card'>
            <div class='card-ribbon'></div>
            <img src="./res/check-icon-png-4.png" alt=" ">
            <h1>ACOMPLISH MORE</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, aut dolorem! Harum aperiam magni itaque. Hic voluptate consequatur error perferendis.</p>
        </div>
    </div>
    <h1 id='reg-header'>Haven't become a memeber yet?</h1>
    <p id='reg-sub-header'>Enroll in our program in just a few steps!</p>
    <div id='reg-container'>
        <div class='card-ribbon'></div>
        <p>Please, provide us with some basic info so we can create you an account!</p>
        <form id='form1' action="./php/register.php" onsubmit="return tryRegister();" method="POST">
            <div>
            <input type="text" name="name" placeholder="name" />
            <input type="text" name="surname" placeholder="surname" />
            <input type="text" name="reg-username" placeholder="username" />
            </div>
            <div>
                <input type="email" name="email" placeholder="email" />
                <input type="password" name="reg-password" placeholder="password" />
                <input type="password" name="confirm-password" placeholder="confirm password" />
            </div>
          </form>
          <div id='reg-container-bottom'>
            <p id='registerErrorMsg'><?php echo $_SESSION['server_msg'];?></p>
            <button type="submit" form="form1">REGISTER NOW</button>
          </div>
    </div>
    <div id='reg-subcontainer'>
        <p>Already have an account ?</p>
        <button>LOGIN</button>
    </div>
    <h1 id='member-login-header'>Member login.</h1>
    <div id='login-container'>
        <div class='card-ribbon'></div>
        <img src="res/student.png" alt=" ">
        <form id='form2' action="./php/login.php" onsubmit="return tryLogIn();" method="POST">
            <input type="text" name="username" placeholder="username" />
            <input type="password" name="password" placeholder="password" />
          </form>
          <button type="submit" form="form2">Log in</button>
          <p id='loginErrorMsg'><?php echo $_SESSION['login-msg'];?></p>
    </div>
    <div id='login-subcontainer'>
        <p>Still don't have an account ?</p>
        <button>REGISTER</button>
    </div>
    <div id='go-up'>
        <a id='triangle' href="#top"></a>
        <p>BRING ME BACK UP</p>
    </div>

    <script src="script/login-validation.js"></script>
    <script src="script/register-validation.js"></script>
  </body>
</html>
