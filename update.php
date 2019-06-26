<?php

$con = mysqli_connect('localhost','root','');

	mysqli_select_db($con,'healthcare');

	$sql = "UPDATE userdetail SET name='$_POST[name]',email='$_POST[email]',password='$_POST[password]'
	WHERE user_id='$_POST[user_id]'";

	if(mysqli_query($con,$sql))
		header("Location:admin.php?msg=Successfully Updated.");
	else 
		echo "Not Updated";


?>