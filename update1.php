<?php
$con = mysqli_connect("localhost", "root", "", "task");
$ntt = $_POST['newtt'];
$ntd = $_POST['newtd'];
$nst = $_POST['newst'];
$net = $_POST['newet'];
$tid = $_POST['tid'];
if (!$_POST['newtt'] or !$_POST['newtd'] or !$_POST['newst'] or !$_POST['newet'] or !$_POST['tid']) {
    echo "<html>
    <body>
    <script>
        alert('Data is left to fill,check again...');
    </script>
    <body>
<html> ";
} 
else{
    $update="UPDATE `taskinfo` SET `Tasktitle`='$ntt',`Taskdetail`='$ntd',`Startdate`='$nst',`Enddate`='$net' WHERE Taskid='$tid';";

        $ex = mysqli_query($con, $update);
        if ($ex) {
            echo "
    <html>
        <body>
        <script>
            alert('Data updated');
            location.href = 'main.php'
         </script>
        <body>
    <html> ";
}
}
        

?>