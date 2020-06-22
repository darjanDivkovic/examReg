function filterRegistered() {
    
    let input, filter, table, checkBox, tr, td, i, txtValue;
    input = document.getElementById('filter');
    filter = input.value.toUpperCase();
    table = document.getElementById('reg-exams-table');
    tr = table.getElementsByTagName('tr');
    checkBox = document.getElementById('status-checkbox');

    let tableDataToSearch = checkBox.checked ? 1 : 0;

    for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[tableDataToSearch];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
