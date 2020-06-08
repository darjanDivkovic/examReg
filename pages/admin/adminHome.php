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
    <h1>Admin is home!</h1>
    <h3>Welcome <?php echo $_SESSION['username'] ?>!</h3>
    <h2>Requests</h2>
    <div id='requests'>Requests will be displayed here!</div>

    <script src='requests.js'></script>
</body>
</html>