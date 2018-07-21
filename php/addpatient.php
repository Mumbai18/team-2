<?php
session_start();
if(isset($_POST['btn_login']))
{
    $volunteer=$_SESSION['username'];
    $name=$_POST['name'];
    $fileno=$_POST['fileno'];
    $hospital=$_POST['hospital'];
    $gender=$_POST['gender'];
    $type=$_POST['type'];
    $support=$_POST['support'];
    $location=$_POST['location'];
    $date=date();
    $query=mysqli_query($link,"INSERT INTO patient VALUES ('','$name','$fileno','$hospital','$gender','$type','$date','$volunteer')");
    $id = mysqli_query($link,"SELECT id FROM patient WHERE name='$name'");
    $query=mysqli_query($link,"INSERT INTO programme VALUES ('','$id','$type')");
    
    echo "<h1>New Patient Added</h1>"
        header("Location: patientlist.php");
    
}
?>
