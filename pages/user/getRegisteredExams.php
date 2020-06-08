<?php

    require('../../php/database/dbo.php');    

    session_start();

    $username = $_SESSION['username'];

    $exams = $conn->query("SELECT * from requests WHERE username = '$username'")->fetchAll(PDO::FETCH_ASSOC);
    
    
    echo "<table>
            <tr>
            <th>Exam</th>
            <th>Status</th>
          </tr>";
    foreach($exams as $exam){
        $name = $exam["exam"];
        $status = '';
        if($exam["reviewed"] == null){
            $status = 'Pending...';
        }
        else $status = 'Accepted!';
        echo "<tr>";
        echo "<td>" . $name . "</td>";
        echo "<td>" . $status . "</td>";
        echo "</tr>";

    }
    echo "</table>";
?>