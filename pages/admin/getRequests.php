<?php

    require('../../php/database/dbo.php');

    $requests = $conn->query("SELECT * from requests")->fetchAll(PDO::FETCH_ASSOC);

    echo "<table id='reg-exams-table'>
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
        echo "<td align='center'>" . $student . "</td>";
        echo "<td align='center'>" . $status . "</td>";
        echo "<td align='center'> 
              <button id=$req_id onclick='allowRequest(this.id);' class='all-den-btn'>
              Allow
              </button>
              </td>";
        echo "<td align='center'>
              <button id=$req_id onclick='denyRequest(this.id);' class='all-den-btn'>
              Deny
              </button>
              </td>";
        echo "</tr>";

    }
    echo "</table>";

?>