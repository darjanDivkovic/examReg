<?php

    require('../../php/database/dbo.php');

    $year = intval($_GET['year']);

    $exams = $conn->query("SELECT * from exams WHERE year = '$year'")->fetchAll(PDO::FETCH_ASSOC);

    foreach($exams as $exam){
        $name = $exam["exam"];
        $eid = $exam["eid"];
        echo "<div class='exam-item'>
              <div class='exam-item-front'>
              <div class='card-ribbon'></div>
              <div class='books-img'></div>
              <h3>$name</h3>
              </div>
              <div class='exam-item-back'>
              <div class='card-ribbon'></div>
              <button id='$name' onclick='registerMe(this.id);' class='reg-exam-btn'>
              Prijavi me
              </button>
              </div>
              </div>";

    }
?>