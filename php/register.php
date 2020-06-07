<?php

    require('./database/dbo.php');

    session_start();

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['reg-username'];
    $password = $_POST['reg-password'];
    $email = $_POST['email'];

    // Check if user already exists!
    $result = $conn->query("SELECT * from users WHERE username = '$username'")->fetch();

    if($result){
        $_SESSION['server_msg'] = 'User already exists!';
        header('Location: ../landingPage.php');
    }
    else {
        
    // Hashed the password for more security!
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user into database
    $statement = $conn->prepare("INSERT INTO users(name,surname,username,password_h,email) VALUES(?,?,?,?,?)");
    $statement->execute([$name,$surname,$username,$hashed_password,$email]);

    $_SESSION['server_msg'] = 'Registration Succesfull!';
    header('Location: ../landingPage.php');
    }

    // Closing the connection
    $conn = null;
?>