<?php
session_start();
if(isset($_POST['btn_login']))
{
    $name=$_POST['name'];
    $fileno=$_POST['fileno'];
    $hospital=$_POST['hospital'];
    $gender=$_POST['gender'];
    $type=$_POST['type'];
    $support=$_POST['support'];
    $date=date();
    $query=mysqli_query($link,"INSERT INTO patient VALUES ('','$name','$fileno','$hospital','$gender','$type','$date')");
    $id = mysqli_query($link,"SELECT id FROM patient where name='$name'");
    $query=mysqli_query($link,"INSERT INTO programme VALUES ('','$id','$type')");
    
    echo "<h1>New Patient Added</h1>"
        header("Location: patientlist.php");
    
}
?>
