displayRequests();

function displayRequests(){
    console.log('Tried to view requests!');
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("requests").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET","getRequests.php",true);
        xmlhttp.send();
}

function allowRequest(rid){
    console.log('Tried to allow request! id: '+rid);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
           if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               document.getElementById("req-msg").innerHTML = xmlhttp.responseText;
           }
       };
       xmlhttp.open("POST", "allowRequest.php", true);
       xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       let param = 'rid='+rid; 
       xmlhttp.send(param);

       // update
       displayRequests();
}


function denyRequest(rid){
    console.log('Tried to deny request! id: '+rid);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
           if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               document.getElementById("req-msg").innerHTML = xmlhttp.responseText;
           }
       };
       xmlhttp.open("POST", "denyRequest.php", true);
       xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       let param = 'rid='+rid; 
       xmlhttp.send(param);

       // update
       displayRequests();
}