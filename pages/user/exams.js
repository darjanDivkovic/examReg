getRegisteredExams();

function getExams(year){
  console.log(year);
    if (year == "") {
        document.getElementById("exams").innerHTML = "";
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

    var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("message").innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("POST", "registerexam.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            let param = 'exam='+exam; 
            xmlhttp.send(param);
    
    // update registered exams from here also
    getRegisteredExams();
}

function getRegisteredExams(){
  console.log('Tried to view registered exams!');
  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("registered-exams").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET","getRegisteredExams.php",true);
        xmlhttp.send();
}