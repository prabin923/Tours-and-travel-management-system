<?php

include 'connect.php';

if(isset($_POST['submit']))
{
    $name=$_POST['uname'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    
    $sql="insert into signup(email,username,password) values('$email','$username'$password')";

    if(mysqli_query($con,$sql))
    {
        echo"<script> alert('New record inserted in database') </script>";
        echo"<script> window.open('index.php','_self') </script>";
    }
    else
    {
        echo"Error detected!".mysqli_error($con);
    }
    mysqli_close($con);
}
?>