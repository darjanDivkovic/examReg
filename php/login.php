<?php

    require('./database/dbo.php');
    // resume session
    session_start();
    // get data from post
    $username = $_POST['username'];
    $password = $_POST['password'];

    // find username
    $user = $conn->query("SELECT * from users WHERE username = '$username'")->fetch();

    // Closing the connection
    $conn = null;

    if(!$user){
        $_SESSION['login-msg'] = 'User not found!';
        header('Location: ../landingPage.php');
    }
    else {
    // if exists compare password with hashed one
        if(password_verify($password, $user['password_h'])){
           // if all good, check account type and redirect to page accordingly
           if($user['admin'] == 0){
               // User homepage
               header('Location: ../pages/userHome.html');
           }
           else
           {
               // Admin homepage
               header('Location: ../pages/adminHome.html');
           }
        }
        else {
            $_SESSION['login-msg'] = 'Incorrect password!';
            header('Location: ../landingPage.php');  
        }        
    }
?>