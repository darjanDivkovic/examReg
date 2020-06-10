<?php

    require('../../php/database/dbo.php');

    $requests = $conn->query("SELECT * from requests")->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>
            <tr>
            <th>Exam</th>
            <th>Student</th>
            <th>Status</th>
            <th>Allow</th>
            <th>Deny</th>
          </tr>";
    foreach($requests as $request){
        $req_id = $request["rid"];
        $exam = $request["exam"];
        $student = $request["username"]; 
        $status = $request["reviewed"];
        if($status == 0){
            $status = 'Pending...';
        }
        if($status == 1){
            $status = 'Allowed';
        }
        if($status == 2){
            $status = 'Denied';
        }

        echo "<tr>";
        echo "<td>" . $exam . "</td>";
        echo "<td>" . $student . "</td>";
        echo "<td>" . $status . "</td>";
        echo "<td>
              <button id=$req_id onclick='allowRequest(this.id);'>
              Allow
              </button>
              </td>";
        echo "<td>
              <button id=$req_id onclick='denyRequest(this.id);'>
              Deny
              </button>
              </td>";
        echo "</tr>";

    }
    echo "</table>";

?>