<?php

    require('../../php/database/dbo.php');

    $year = intval($_GET['year']);

    $exams = $conn->query("SELECT * from exams WHERE year = '$year'")->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>
            <tr>
            <th>Exam</th>
          </tr>";
    foreach($exams as $exam){
        $name = $exam["exam"];
        $eid = $exam["eid"];
        echo "<tr>";
        echo "<td>" . $name . "</td>";
        echo "<td>
              <button id='$name' onclick='registerMe(this.id);'>
              Prijavi me
              </button>
              </td>";
        echo "</tr>";

    }
    echo "</table>";
?>