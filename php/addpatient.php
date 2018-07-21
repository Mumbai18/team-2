<?php
if(isset($_POST['btn_login']))
{
    $name=$_POST['name'];
    $fileno=$_POST['fileno'];
    $hospital=$_POST['hospital'];
    $gender=$_POST['gender'];
    $type=$_POST['type'];
    $support=$_POST['support'];
    $query=mysqli_query($link,"INSERT INTO patient VALUES ('','$name','$fileno','$hospital','$gender','$type')");
    echo "<h1>New Patient Added</h1>"
        header("Location: patientlist.php");
    
}
?>
