<?php

    session_start();

    require('./database/dbo.php');

    // Get values
    $old_password = $_POST['old-password']; 
    $new_password = $_POST['new-password'];
    $username = $_SESSION['username'];

    
    $result = $conn->query("SELECT * from users WHERE username = '$username'")->fetch();
    
    // Check if old-password == password_h (check hashes)
    if(!password_verify($old_password, $result['password_h'])){
        // if false set session[resposnse] msg, redirect back
        $_SESSION['response'] = 'The old password is incorrect.';
        header('Location: ../pages/user/userHome.php');
    }
    else {
        // if all good go and update the password in the database
        // hash the new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Update password in database 
        $sql = "UPDATE users SET password_h=? WHERE username=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$hashed_password,$username]);

        // Set that success msg
        $_SESSION['response'] = 'Password change successful!';
        // Go back
        header('Location: ../landingPage.php');
    }
?>