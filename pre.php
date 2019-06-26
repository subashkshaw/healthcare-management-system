<?php

if (isset($_POST['send']))
{
$con = mysqli_connect('localhost','root','') or die("Database Connection Failed! :" .mysqli_error());

if (!$con)

  {

  die('Could not connect: ' . mysqli_connect_error());

  }

 

mysqli_select_db($con,'healthcare');

$sql = "INSERT INTO prescription (name,email,symptom,area,message)

VALUES ('$_POST[name]','$_POST[email]','$_POST[symptom]','$_POST[area]','$_POST[message]')";

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_connect_error());

  }
else
 
		 {
			header('location:home.php');
		}
mysqli_close($con);

}
?>