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
                <li class="nav-item active">
                	<a class="nav-link" href="home.php">Home</a></li>
   				<li class="nav-item">
   					<a class="nav-link" href="about.php">About</a></li>
   				
    			<li class="nav-item">
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

<!-- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="1" ></li>
	<li data-target="#slides" data-slide-to="2" ></li>
	<li data-target="#slides" data-slide-to="3" ></li>
</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="imgs/slide001.jpg">
		<div class="carousel-caption">
			<h3 class="display-2">Hi</h3>
	        
			<button type="button" class="btn btn-outline-light btn-lg">
				VIEW TIPS
			</button>
			<button type="button" class="btn btn-primary-light btn-lg">
				GET STARTED
			</button>
        </div>	
	</div>
	<div class="carousel-item">
		<img src="imgs/slide002.jpg">
	</div>
	<div class="carousel-item">
		<img src="imgs/slide003.jpg">
	</div>
		<div class="carousel-item">
		<img src="imgs/slide004.jpg">
	</div>
</div>
</div>
<!--jumbotron-->
<div class="container-fluid">
	<div class="row jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">A website that allow you to connect with doctors any time you need and you can ask for prescription regarding any diseases and medicines. </p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href="about.php"><button type="button" class="btn btn-outline-secondary btn-lg">More About Us</button></a>
		</div>
	</div>
</div>	
<!-- welcome section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">HealthCare+</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">Welcome to healthcare+ contact doctors without any cost.</p>
		</div>
	</div>
</div>
<!-- four column section -->
<!-- Three column section -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<a href="help.php"><img src="imgs/con.gif"></a>
	<a href="help.php"><button type='button' class="btn" data-toggle="modal" data-target=""><h3>Contact</h3></button></a>
			<p>Helpline Number: 9876998655</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<img src="imgs/help.gif">
	 <div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal"><h3>Appointment</h3></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Book Appointment</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form name="myform" action="appoint.php" method="post">
      <div class="form-group">
          <input type="text" id="name" name="name" class="form-control validate" placeholder="Name">
      </div>
      <div class="form-group">
          <input type="email" id="email" name="email" class="form-control validate" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="date" id="date" name="doapp" class="form-control validate" placeholder="Date">
        </div>
      <div class="form-group">
      <select class="form-control" id="sel1" name="gender">
        <option>Gender</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
        </div>
        <div class="form-group">
      <select class="form-control" id="sel1" name="specialist">
        <option>Select Specialists</option>
        <option>Allergist</option>
        <option>Anasthesiologist</option>
        <option>Andrologist</option>
        <option>Cardiac electrophysiologist</option>
        <option>Cardiologist</option>
        <option>Cardiovascular surgeon</option>
        <option>Colon and rectal surgeon</option>
        <option>Critical care medicine specialist</option>
        <option>Dermatologist</option>
        <option>Developmental pediatrician</option>
        <option>Emergency medicine specialist</option>
        <option>Endocrinologist</option>
        <option>Family medicine physician</option>
        <option>Forensic pathologist</option>
        <option>Gastroenterologist</option>
        <option>Geriatric medicine specialist</option>
        <option>Gynecologist</option>
        <option>Gynecologic oncologist</option>
        <option>Hand surgeon</option>
        <option>Hematologist</option>
        <option>Hepatologist</option>
        <option>Hospitalist</option>
        <option>Hyperbaric physician</option>
        <option>Infectious disease specialist</option>
      </select>
        </div>
        <div class="form-group">
      <select class="form-control" id="sel1" name="city">
        <option>Select City</option>
        <option>Amritsar</option>
        <option>Asansol</option>
        <option>Banglore</option>
        <option>Chennai</option>
        <option>Delhi</option>
        <option>Eluru</option>
        <option>Faridabad</option>
        <option>Gwalior</option>
        <option>Guwahati</option>
        <option>Howrah</option>
        <option>Impal</option>
        <option>Jabalpur</option>
        <option>Kolkata</option>
        <option>Lucknow</option>
        <option>Mumbai</option>
        <option>Nashik</option>
        <option>Ordisha</option>
        <option>Patna</option>
        <option>Q</option>
        <option>Ratnam</option>
        <option>Surat</option>
        <option>Tamilnadu</option>
        <option>Udhaipur</option>
        <option>Varanasi</option>
        <option>Yaswanthpur</option>
      </select>
        </div>
    </form>
        </div>
        <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success" name="submit">Book <i class="fa fa-paper-plane-o ml-1"></i></button>
      </div>
      </div>
    </div>
  </div>
</div>
			<p>Book your appointment easily.</p>
		</div>
		<div class="col-sm-12 col-md-4">
			<img src="imgs/2.gif">
			<div class="container">

  <button type='button' class="btn" data-toggle="modal" data-target="#popUpWindow"><h3>Prescription</h3></button>
  
  <div class="modal fade" id="popUpWindow">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header text-center">
        	 
        <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body mx-3">
      	<form name="preform" action="pre.php" method="post">
        <div class="form-group">
          <i class="fa fa-user prefix grey-text"></i>
          <input type="text" id="name"  name="name" class="form-control validate" placeholder="Name">
        </div>

        <div class="form-group">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="email" name="email" class="form-control validate" placeholder="Email">
        </div>

        <div class="form-group">
      <select class="form-control" id="sel1" name="symptom">
        <option>Disease Symptom</option>
            <option>Arm Pain</option>
            <option>Anxiety</option>
            <option>Anemia</option>
            <option>Ankle Pain</option>
            <option>Back Pain</option>
            <option>Bad Breath</option>
            <option>Bladder Spasms</option>
            <option>Bleeding Gums</option>
            <option>Blood Clot Symptoms and Signs</option>
            <option>Bloody Nose</option>
            <option>Chest Pain</option>
            <option>Chronic Pain</option>
            <option>Cold</option>
            <option>Cough</option>
      </select>
        </div>
        <div class="form-group">
      <select class="form-control" id="sel1" name="area">
        <option>Affected Area</option>
            <option>Eyes</option>
            <option>Gums</option>
            <option>Bones</option>
            <option>Spleen</option>
            <option>Intestine</option>
            <option>Thyroid</option>
            <option>Liver</option>
            <option>Skeletal Muscles</option>
            <option>Brain</option>
            <option>Joints</option>
            <option>Ears</option>
            <option>Skin</option>
            <option>Colon</option>
      </select>
        </div>

        <div class="form-group">
          <i class="fa fa-pencil prefix grey-text"></i>
          <textarea type="text" id="message" name="message" class="md-textarea form-control" rows="4"></textarea>
          <label data-error="wrong" data-success="right" for="form8">Explain your problem</label>
        </div>

      
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success" name="send">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
      </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  
</div>
			<p>Ask for any precaution.</p>
		</div>
	</div>
	<hr class="my-4">
</div>

<!-- Two column section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-12 col-lg-6">
			<h2>Our Visions</h2>
			<p>Our objective is to provide essential medical services online to users irrespective of their location.</p>
			<p>Users can connect through their home internet or approach any nearby kiosk to get these services.</p>
			<p>The motivation to build the system is that very few or no doctors are available at remote locations, limited hour services and lack of sophisticated medical equipments and no patients history/lab data management.</p>
			<br>
			<a href="#" class="btn btn-primary">Know More</a>
		</div>
		<div class="col-lg-6">
			<img src="imgs/p10.gif" class="img-fluid">
		</div>
	</div>
</div>
<hr class="my-4">

<!-- Fixed background -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">
		</div>
	</div>
</figure>

<!-- imogi section -->
<button class="fun" data-toggle="collapse" data-target="#emoji">click for fun exercises</button>
<div id="emoji" class="collapse">
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="imgs/p12.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="imgs/p14.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="imgs/p15.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="imgs/p24.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="imgs/p27.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="imgs/p111.gif">
			</div>
		</div>
	</div>
</div>

<!-- two column section-->
<div class="container-fluid padding">
	<div class="row padding">
		
		<div class="col-lg-6">
			<img src="imgs/su.gif" class="img-fluid">
		</div>
		<div class="col-lg-6">
			<h2>How We Can Help You</h2>
			<p>The system provides details of medical services online and allows users to interact with doctors and other medical personnel.</p>
			<p>The patients and doctors are interacting with chatting applications at their relative places.</p>
			<p>Initially the doctors had got the patients details in the online by help of admin people in order to communicate in chat.</p>
			<br>
		</div>
	</div>
</div>


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
<script src="js/index.js">	</script>
<script src="js/jquery.js">	</script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
