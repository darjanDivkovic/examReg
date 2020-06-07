<?php

    require('../../php/database/dbo.php');

    session_start();

    $exam = $_POST['exam'];
    $username = $_SESSION['username'];

    $statement = $conn->prepare("INSERT INTO requests(eid,username) VALUES(?,?)");
    $statement->execute([$exam,$username]);

    echo 'You successfully registered for the exam!';

?>