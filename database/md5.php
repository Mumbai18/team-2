<?php
$password="pass";
echo md5($password);

if(isset($_POST['password']) && !empty($_POST['password']))
{
	$new_password=$_POST['password'];
	if(md5($new_password)==md5($password))
	{
		echo "pass ok";
	}
	else
	{
		echo "pass not ok";
	}
}
?>

<form action="md5.php" method="post">
	<input type="text" name="password">
	<br>
	<input type="submit">
</form>