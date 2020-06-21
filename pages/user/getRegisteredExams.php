<?php

    require('../../php/database/dbo.php');    

    session_start();

    $username = $_SESSION['username'];

    $exams = $conn->query("SELECT * from requests WHERE username = '$username'")->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<table id='reg-exams-table'>
            <tr>
            <th>Exam</th>
            <th>Status</th>
          </tr>";
    foreach($exams as $exam){
        $name = $exam["exam"];
        $status = '';
        if($exam["reviewed"] == 0){
            $status = 'Pending...';
        }
        if($exam["reviewed"] == 1){
            $status = 'Accepted!';
        }
        if($exam["reviewed"] == 2){
            $status = 'Denied.';
        }
        echo "<tr>";
        echo "<td class='exam-name-row'>" . $name . "</td>";
        echo "<td>" . $status . "</td>";
        echo "</tr>";

    }
    echo "</table>";
?>