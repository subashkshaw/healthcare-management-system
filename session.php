<?php
	$con=mysqli_connect('localhost','root','') or die("Connection Failed:" .mysqli_error());
	 mysqli_select_db($con,"healthcare");
	 session_start();
	 $username=$_SESSION['user_id'];
	 $sql=mysqli_query($con,"SELECT * FROM userdetail WHERE user_id='$user_id'");
	 $row=mysqli_fetch_assoc($con,$sql);
	 $login_session=$row['user_id'];
	 if(!isset($login_session))
	 	{
			mysqli_close();
			header("location:home.php");
		}
?>