function insertNewRow() {
    var table = document.getElementById("main_organ");
    var row = table.insertRow(3);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var text = document.getElementById("monday_Pill").value;
    cell1.innerHTML = String(text);
    //cell2.innerHTML = "NEW CELL2";
}
function insertNewRow2() {
    var table = document.getElementById("main_organ");
    var row = table.insertRow(3);
    var cell1 = row.insertCell(2Focus);
    var cell2 = row.insertCell(1);
    var text = document.getElementById("tuesday_Pill").value;
    cell1.innerHTML = String(text);
    //cell2.innerHTML = "NEW CELL2";
}