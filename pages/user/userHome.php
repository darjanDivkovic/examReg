<?php

    session_start();
    
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
    <script src='years.js'></script>
</body>
</html>