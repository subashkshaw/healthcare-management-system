<?php include('config.php');
if(isset($_POST["login"])){
	$email=$_POST["email"];
	$password=$_POST["password"];
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,"healthcare");
	$sql=mysqli_query($con,"SELECT email,password,type FROM userdetail");
	while($row=mysqli_fetch_array($sql))
	{
		$db_email=$row["email"];
		$db_password=$row["password"];
		$db_type=$row["type"];
		
		 if($email==$db_email && $password==$db_password){
		 	$_SESSION["user_id"]=$db_user_id;
			$_SESSION["email"]=$db_email;
			$_SESSION["type"]=$db_type;
			$_SESSION['logged_in'] = true;
			
			if($_SESSION["type"]=='User'){
				header("Location:home.php?msg=Login successfully");
			}
			if($_SESSION["type"]=='Admin'){
				header("Location:admin.php?msg=Login successfully");

			}
			if($_SESSION["type"]=='Doctor'){
				header("Location:doctor.php?msg=Login successfully");
			}
			}
		else
			echo("Invalid email or password.");
	

	}}
	?>