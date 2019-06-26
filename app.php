<?php

if (isset($_POST['submit']))
{
$con = mysqli_connect('localhost','root','') or die("Database Connection Failed! :" .mysqli_error());

if (!$con)

  {

  die('Could not connect: ' . mysqli_connect_error());

  }

 

mysqli_select_db($con,'healthcare');

$sql = "INSERT INTO appointment (name,email,doapp,gender,specialist,city)

VALUES ('$_POST[name]','$_POST[email]','$_POST[doapp]','$_POST[gender]','$_POST[specialist]','$_POST[city]')";

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