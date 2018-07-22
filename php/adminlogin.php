<?php
session_start();
$link=mysqli_connect("localhost","root","") or die('CONNECTION ERROR');
mysqli_select_db($link,"vcare") or die('DATABSE NOT SELECTED');

if(isset($_POST['btn_login']))
{
    
   
     header("Location: ../ui/charts.html");

   
    
   
}


?>