<?php

    require('../../php/database/dbo.php');

    $requests = $conn->query("SELECT * from requests")->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>
            <tr>
            <th>Exam</th>
            <th>Student</th>
            <th>Status</th>
            <th>Allow</th>
          </tr>";
    foreach($requests as $request){
        $exam = $request["exam"];
        $student = $request["username"]; 
        $status = '';
        if($request["reviewed"] == 0){
            $status = 'Pending...';
        }
        else $status = 'Accepted!';
        echo "<tr>";
        echo "<td>" . $exam . "</td>";
        echo "<td>" . $student . "</td>";
        echo "<td>" . $status . "</td>";
        echo "<td>
              <button>
              Allow
              </button>
              </td>";
        echo "</tr>";

    }
    echo "</table>";

?>