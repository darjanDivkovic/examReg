<?php

    require('../../php/database/dbo.php');

    session_start();

    $exam = $_POST['exam'];
    $username = $_SESSION['username'];

    // Potentialy add code to disallow user to register for an exam he already registered for..

    $statement = $conn->prepare("INSERT INTO requests(exam,username) VALUES(?,?)");
    $statement->execute([$exam,$username]);

    echo 'You successfully registered for the exam!';

?>