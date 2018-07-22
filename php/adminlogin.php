<?php
session_start();
$link=mysqli_connect("localhost","root","") or die('CONNECTION ERROR');
mysqli_select_db($link,"vcare") or die('DATABSE NOT SELECTED');

if(isset($_POST['btn_login']))
{
    
    $user_name = "admin123";
    $password = "admin123";

    //Valid username and password
    if($_POST['username'] == $user_name && $_POST['password'] == $password)
    {
        //Admin Login
          $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            header("Location: #");
 
    }
    
   
}


?>