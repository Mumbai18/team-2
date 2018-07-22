<?php
session_start();

$link=mysqli_connect("localhost","root","") or die('CONNECTION ERROR');
mysqli_select_db($link,"vcare") or die('DATABSE NOT SELECTED');

if(isset($_POST['btn_login']))
{

    $user_name = $_POST['username'];
    $password = $_POST['password'];
   
     $res=mysqli_query($link,"SELECT * FROM volunteer WHERE username='$user_name' and password='$password'");
    $row=mysqli_fetch_array($res);
    //Valid username and password
    if($row['password'] == $password && $row['username'] == $user_name)
    {
        //Admin Login
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        header("Location: patientlist.php");

    }
    

}
if(isset($_POST['btn_register']))
{
    $link=mysqli_connect("localhost","root","") or die('CONNECTION ERROR');
mysqli_select_db($link,"vcare") or die('DATABSE NOT SELECTED');
    $user_name = $_POST['username2'];
    $age = $_POST['age'];
    $occupation= $_POST['occupation'];
    $password2= $_POST['password2'];
    $name=$_POST['name'];
    $phno=$_POST['phno'];
    $query=mysqli_query($link,"INSERT INTO volunteer VALUES ('','$name','$user_name','$password2','$occupation','$age','$phno')");
    if(!$query){echo mysqli_error($link);}
    else 
    {
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
?>
<script>alert("Successfully Registered");
    window.location.href='patientlist.php';</script>
<?php
    }

}
?>