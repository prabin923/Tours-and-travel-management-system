<?php
include'connect.php';
if(isset($_post['submit']));
{
	$email=$_POST['email'];
	$username=$_POST['uname'];
	$password=$_POST['password'];
	$sql="insert into signup(email,name,password) values('$email','$username','$password')";
	if(mysqli_query($con,$sql))
	{
	echo"<script>alert('new record inserted in database')</script>";
	echo"<script> window.open('front.php','_self') </script>";
	}
	else
	{
	echo"error detected!".mysqli_error($con);
	}
	mysqli_close($con);

}
?>