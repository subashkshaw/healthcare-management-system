<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>healthcare+.com</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styl.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">

<!-- Site/logo -->
<div class="container-fluid">
<a class="navbar-brand" href="#">
<img src="imgs/hcmlogo.png" alt="logo" class="rounded-circle" style="width:60px; background-color:#fff;"><span>HealthCare<sup>+</sup></span></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
</button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
  	        <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                	<a class="nav-link" href="home.php">Home</a></li>
   				<li class="nav-item">
   					<a class="nav-link" href="about.php">About</a></li>
   						
    			<li class="nav-item active">
    				<a class="nav-link" href="help.php">Help</a></li>
            <li class="nav-item">
            <a class="nav-link" href="tips.php">Tips</a></li>
    			<div class="dp">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="imgs/3.png" alt="user">
             <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#"> <small>Hello User<br>
<?php 
  if($_SESSION['logged_in']==true)
    { 
      echo $_SESSION["email"];
      
    }
    ?>
              </small></a></li><hr class="my-1"></hr>
            <li><a class="dropdown-item p-2 text-secondary" href="userprofiles.php"> <i class="fa fa-user m-1" aria-hidden="true"></i> Profile </a></li><hr class="my-1"></hr>
            <li><a class="dropdown-item p-2 text-secondary" href="logout.php"> <i class="fa fa-trash m-1" aria-hidden="true"></i> Logout </a></li>
            </ul>
            </li></div>
            </ul>
  </div>
</div>
</nav>
<!-- help section-->
<div class="jumbotron text-center">
  <h1>HELP & SUPPORT</h1>
  <p>How we can help you ?</p> 
</div>
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="row help text-center">
		<div class="col-xs-12 col-sm-6 col-md-4">
      <img src="imgs/contacts.gif">
      <h3>Help Line Numbers</h3>
      <p>Toll Free Number 1800000111</p>
      <p>Executive number 7888533153</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<img src="imgs/chat.gif">
      <h3>Customer Supportive mails</h3>
      <p>healthcare@gmail.com</p>
      <p>care4u@gmail.com</p>
		</div>
		<div class="col-sm-12 col-md-4">
			<img src="imgs/team.gif">
      <h3>Our team</h3>        
      <p>subash.k.shaw@gmail.com</p>
      <p>shrabanyadav1994@gmail.com</p>
		</div>
	</div>
	<hr class="my-4">
</div>
</div>
<!-- comment-->
<div class="container-fluid padding">
<div class="row comment-wrapper">
<div class="col-12">

<form action="insertcom.php" method="post" id="commentform">
<p><input type="text" name="name" id="author" value="" size="22" tabindex="1" />
<label for="author"><small>Name (required)</small></label></p>
<p><input type="text" name="email" id="email" value="" size="22" tabindex="2" />
<label for="email"><small>Email (will not be published) (required)</small></label></p>


<p><textarea name="comments" id="comments" rows="8" tabindex="4" style="width: 90%"></textarea></p>
<p><input name="comment" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="67143" />
</p>
<p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="18f72d7405" /></p><p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="83" /></p>
</form>
</div>
</div>
</div>
<!-- comment msg-->
<?php
   include('config.php');
   $sql = "SELECT * FROM comments";
   $sqldata = mysqli_query($con,$sql) or die('error');
?>

  
<?php
   while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
    
    echo $row['name'];
    echo $row['email'];
    echo $row['comments'];
    
   }
   ?>


				<!-- footer -->
<footer>
	<div class="container-fluid padding">
	<div class="row text-center">
		<div class="col-12 social padding">
    	<h3>Powered by healthcare+</h3>
        <a href="https://en-gb.facebook.com/"><img src="imgs/fb.jpg" width="40px"></a>
        <a href="https://twitter.com/"><img src="imgs/twitter.jpg" width="40px"></a>
        <a href="https://www.youtube.com/"><img src="imgs/youtube.png" width="40px"></a>
        <a href="https://www.gmail.com/"><img src="imgs/gml.png" width="40px"></a>
    </div> 
		</div>
	</div>
</div>
</footer>
<script src="js/jquery.js">	</script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>