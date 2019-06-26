<?php

if (isset($_POST['submit']))
{
$con = mysqli_connect('localhost','root','') or die("Database Connection Failed! :" .mysqli_error());

if (!$con)

  {

  die('Could not connect: ' . mysqli_connect_error());

  }
 

mysqli_select_db($con,'healthcare');

$sql = "INSERT INTO userdetail (name,email,re_email,password,re_password,type)

VALUES ('$_POST[name]','$_POST[email]','$_POST[re_email]','$_POST[password]','$_POST[re_password]','$_POST[type]')";

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_connect_error());

  }
else
 
		 {
			header('location:index.php');
		}
mysqli_close($con);

}
?>