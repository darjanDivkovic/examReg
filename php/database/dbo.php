<?php

$host = 'db4free.net:3306';
$db = 'daarjansdb';
$user = 'daarjantz';
$pass = 'darjan1234';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    }
    catch(PDOException $pe) {
     die("Could not establish connection ".$pe->getMessage());
    }

?>