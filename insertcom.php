<?php

if (isset($_POST['comment']))
{
$con = mysqli_connect('localhost','root','') or die("Database Connection Failed! :" .mysqli_error());

if (!$con)

  {

  die('Could not connect: ' . mysqli_connect_error());

  }

 

mysqli_select_db($con,'healthcare');

$sql = "INSERT INTO comments (name,email,comments)

VALUES ('$_POST[name]','$_POST[email]','$_POST[comments]')";

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_connect_error());

  }
else
 
		 {
			header('location:help.php');
		}
mysqli_close($con);

}
?>