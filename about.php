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
   				<li class="nav-item active">
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

<!-- about section-->
<section>
<div class="container mt-3">
  <h2>About Us</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#healthcare">Healthcare+</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#services">Services</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#team">Team</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#contact">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#help">Help</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="healthcare" class="container tab-pane active"><br>
      <h3>Our Website</h3>
     <p>The objective of the website is to provide essential medical services online to users irrespective of their location. Users can connect through their home internet or approach any nearby kiosk to get these services. The motivation to build the system is that very few or no doctors are available at remote locations, limited hour services and lack of sophisticated medical equipments and no patients history/lab data management.
</p>
<p>In present world there is hardly any medical service available in remote locations. Persons needing medical services often need to travel long distances. Even in urban areas the service is sometimes not available immediately. Patients and doctors are hardly to communicate with each others.</p>
<p>Our objective is to provide a medical site which is available all the time. The system provides details of medical services online and allows users to interact with doctors and other medical personnel. The patients and doctors are interacting with chatting on website at their relative places. Initially the doctors had got the patients details in the online by help of admin people in order to communicate in chat.</p>
    </div>
    <div id="services" class="container tab-pane fade"><br>
      <h3>Our Services</h3>
      <p>Health services departments are responsible for the overall health and well-being of the communities they serve. While their main focus is general health and wellness, health services departments also provide treatment and care to members of the community who otherwise have no healthcare.</p>
       <p>Administrator:

Administrator regularly takes back up of all kinds of data. Administrator can view the log information. Administrator also generates system reports. Administrator also provides online help manual for patients.</p>

<p>Doctors module:

A doctor must register with the system. Doctor’s can manage their profiles. Doctor’s give appointments to patients, e-prescriptions, and view patient’s history. Doctor can interact with patient using live chat.</p>

<p>Patient module:

A patient must register with the system. Patients can make online appointment, view their previous health records and doctor’s prescriptions. Patients can manage their profiles. Patient can interact with doctor using live chat. In case of any medical error (wrong medication or lab report) patient can register a complaint. Patient’s grievance and feedback goes to Admin he can forward it to any doctor to answer.</p>
<h5>Online Consultation</h5>
        <p>FREE Online Consultation from leading healthcare institutions and professionals in various specialities. <br>Send in your medical queries and get an opinion.<br>For Any query you might have. Get All The Answers Online. <br>JustDoc provides you doctors online for any problem your might be facing. <br>Get diagnosis & prescription online. </p>
        <h5>Ask Doctors For Prescription</h5>
        <p>Ask for any medical prescription with various specialities. <br>Send in your medical queries and get an opinion.<br>For Any query you might have. Get All The Answers Online. <br>JustDoc provides you doctors online for any problem your migh</p>
    </div>
    <div id="team" class="container tab-pane fade"><br>
      <h3>Our Team</h3>
     <p>Meet the team who are working behind this website.</p>
     <!-- card -->
<div class="container-fluid padding">
  <div class="row padding">
    <div class="col-md-4">
      <div class="card">
        <img class="card-imd-top" src="imgs/s.jpg">
        <div class="card-body">
          <h4 class="card-title">Shrawan Kumar</h4>
          <p class="card-text">Handle Database</p>
          <a href="#" class="btn btn-outline-secondary">See profile</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-imd-top" src="imgs/3.png">
        <div class="card-body">
          <h4 class="card-title">Subash Kumar Shaw</h4>
          <p class="card-text">Front End</p>
          <a href="#" class="btn btn-outline-secondary">See profile</a>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
    <div id="contact" class="container tab-pane fade"><br>
      <h3>Our team</h3>        
      <p>subash.k.shaw@gmail.com</p>
      <p>shrabanyadav1994@gmail.com</p>
      <h3>Customer Supportive mails</h3>
      <p>healthcare@gmail.com</p>
      <p>care4u@gmail.com</p>
    </div>
    <div id="help" class="container tab-pane fade"><br>
      <h3>Help Line Numbers</h3>
      <p>Toll Free Number 1800000111</p>
      <p>Executive number 7888533153</p>
    </div>
  </div>
</div>
</section>

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