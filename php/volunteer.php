<?php
session_start();

$link=mysqli_connect("localhost","root","") or die('CONNECTION ERROR');
mysqli_select_db($link,"vcare") or die('DATABSE NOT SELECTED');

if(isset($_POST['btn_login']))
{

    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $res=mysqli_query($bd,"SELECT * FROM volunteer WHERE uname='$user_name' and password='$password'");
    $row=mysqli_fetch_array($res);
    //Valid username and password
    if($row['password'] == $password && $row['uname'] == $user_name)
    {
        //Admin Login
        $_SESSION['user'] = $row['uname'];
        header("Location: donor_dashboard.php");

    }

}
if(isset($_POST['btn_register']))
{
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
?>
<script>alert("Successfully Registered");
    window.location.href='login.php';</script>
<?php
    }

}
?>