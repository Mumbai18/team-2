<?php
session_start();
if(isset($_POST['Submit']))
{
     $link=mysqli_connect("localhost","root","") or die('CONNECTION ERROR');
mysqli_select_db($link,"vcare") or die('DATABSE NOT SELECTED');
    $volunteer=$_SESSION['username'];
    $age=$_POST['age'];
    $name=$_POST['name'];
    //echo $name;
    $fileno=$_POST['fileno'];
    //echo $fileno;
    $hospital=$_POST['hospital'];
    //echo '$hospital';
    $gender=$_POST['gender'];
    //echo $gender;
    $type=$_POST['groupOfDefaultRadio'];
    //echo $type;
    $support=$_POST['support'];
    //echo $support;
    $area=$_POST['area'];
    
    $date=date("Y/m/d");
    
    $query=mysqli_query($link,"INSERT INTO patient VALUES ('','$name','$fileno','$gender','$age','$area','$type','$support','$volunteer','$date','$hospital')");
   
    $query=mysqli_query($link,"INSERT INTO programme VALUES ('','$name','$type')");
    
    echo "<h1>New Patient Added</h1>";
        header("Location: patientlist.php");
    
}
?>
