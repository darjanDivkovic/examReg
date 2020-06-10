<?php

    require('../../php/database/dbo.php');
    $rid = $_POST['rid'];
    
    // Update it to be accepted => 1
    $sql = "UPDATE requests SET reviewed=2 WHERE rid=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$rid]);

    
?>