<?php

$host = 'sql7.freemysqlhosting.net';
$db = 'sql7350067';
$user = 'sql7350067';
$pass = 'NQ6fdhwLeZ';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    }
    catch(PDOException $pe) {
     die("Could not establish connection ".$pe->getMessage());
    }

?>