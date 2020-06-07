<?php

    session_start();

    if(!isset($_SESSION['username'])){
        header('Location: ../../landingPage.php');
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
    <br>
    <a href='../../php/logout.php'>Log out</a>
    <p id=message></p>
    <br>
    <button onclick="getRegisteredExams();">View exams you registered to</button>
    <br>
    <br>
    <div id='registered-exams'>Registered exams will appear here!</div>
    <script src='exams.js'></script>
</body>
</html>