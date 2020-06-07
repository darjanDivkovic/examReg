
function getExams(year){
    if (year == "") {
        document.getElementById("exams").innerHTML = "still picking";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("exams").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET","getexams.php?year="+year,true);
        xmlhttp.send();
      }
}

function registerMe(exam){
    console.log('Tried to register for: ' + exam);
}
