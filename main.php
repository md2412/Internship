<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task Management</title>
    <link  rel="stylesheet" href="form.css" type="text/css">
</head>
<body>
     <form action="form.php">
    <center>
    <header class="head">Task Management</header>
     <H1>Welecome to "Task Management", Add your daily routine task here....</H1>
    <input type="submit" value="add" class='button'>
    </center>
</form>
<?php
$conn = mysqli_connect("localhost", "root", "", "task");
$query="SELECT * FROM `taskinfo`;";
$ex=mysqli_query($conn,$query);
if($ex){
    echo "<table>";
    echo "<tr>";
    echo "<th><b>Taskid</b></th>";
    echo "<th><b>Tasktitle</b></th>";
    echo "<th><b>Taskdetail</b></th>";
    echo "<th><b>Startdate</b></th>";
    echo "<th><b>Enddate</b></th>";
    echo "</tr>";
while ($raw = mysqli_fetch_array($ex)) {
    echo "<tr>";
    echo "<td>" . $raw['Taskid'] . "</td>";
    echo "<td>" . $raw['Tasktitle'] . "</td>";
    echo "<td>" . $raw['Taskdetail'] . "</td>";
    echo "<td>" . $raw['Startdate'] . "</td>";
    echo "<td>" . $raw['Enddate'] . "</td>";
    echo "</tr>";
   
}
echo "</table> <br>";
echo "<form action='update.php'>";
echo"<input type='submit' value='update' class='button1'>";
echo "</form>";
}
?>
</body>
</html>