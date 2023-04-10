<?php
if ($_POST['Submit']) {
$conn = mysqli_connect("localhost", "root", "", "task");
$tid = $_POST['Taskid'];
$tt = $_POST['Tasktitle'];
$td = $_POST['Taskdetail'];
$st = $_POST['Startdate'];
$et = $_POST['Enddate'];
$query = "INSERT INTO `taskinfo`(`Taskid`,`Tasktitle`, `Taskdetail`, `Startdate`, `Enddate`) VALUES ('$tid','$tt','$td','$st','$et')";
$ex = mysqli_query($conn, $query);
if($ex){
    echo "
    <html>
        <body>
        <script>
            alert('Data inserted');
            location.href = 'main.php'
         </script>
        <body>
    <html> ";
}
}
?>