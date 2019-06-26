<?php include ('session.php');
header('location:index.php?msg=Logged out successfully');
session_unset();
session_destroy();


 ?>