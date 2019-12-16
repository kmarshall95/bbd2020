<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>Blue Brothers Designs||Homepage</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/pStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
    <body>
    <table class="pillTable" id="main_organ">
        <tr>
        <th>Pill</th>
        </tr>
        <tr>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
        <th>Sunday</th>
        </tr>
        <tr>
        <td><input name="monday_Pill" type="text" value="Enter Pill Name" id="monday_Pill"></td>
        <td><input name="tuesday_Pill" type="text" value="Enter Pill Name" id="tuesday_Pill"></td>
        <td><input type="text"></td>
        <td><input type="text"></td>
        <td><input type="text"></td>
        <td><input type="text"></td>
        <td><input type="text"></td>
        </tr>
        <tr>
            <td><button type="button" onclick="insertNewRow()">New Pill</button></td>
            <td><button type="button" onclick="insertNewRow2()">New Pill</button></td>
        </tr>
        
    </table>
        
    </body>
    <script src="js/pScript.js"></script>
</html>