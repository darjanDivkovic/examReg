<?php

    require('../../php/database/dbo.php');

    $year = intval($_GET['year']);

    $exams = $conn->query("SELECT * from exams WHERE year = '$year'")->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>
            <tr>
            <th>Exam</th>
          </tr>";
    for ($i = 0 ; $i < count($exams) ; $i++){
        echo "<tr>";
        echo "<td>" . $exams[$i]["exam"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>