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

<ul class="nav navbar-nav navbar-right ml-auto">			
			<li class="nav-item">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Login</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form name="myform" action="signin.php" method="post" onSubmit="return check()>
							<p class="hint-text">Sign in with your account</p>
				
							<div class="form-group">
								<input type="text" id="email" class="form-control" name="email" placeholder="Username" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
							</div>
							<input type="submit" class="btn btn-primary btn-block" name="login" value="Login">
							<div class="form-footer">
								<a href="#">Forgot Your password?</a>
							</div>
						</form>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle ">Sign up</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form name="myform" action="insert.php" method="post" onSubmit="return check()>
							<p class="hint-text">Fill in this form to create your account!</p>
							<div class="form-group">
								<input type="hidden" class="form-control" name="user_id">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="name" id="name" placeholder="Name" required="required">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Username" required="required">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="re_email" id="re_email" placeholder="Confirm username" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" id="password" placeholder="Password" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="re_password" name="re_password" placeholder="Confirm Password" required="required">
							</div>
							<div class="form-group">
								<input type="hidden" class="form-control" name="type">
							</div>
							<div class="form-group">
								<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
							</div>
							<input type="submit" class="btn btn-primary btn-block" name="submit" value="Sign up">
						</form>
					</li>
				</ul>
			</li>
		</ul>
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
			<h5></h5>
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
<!-- Three column section -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<a href="help.php"><img src="imgs/con.gif"></a>
	<a href="help.php"><button type='button' class="btn" data-toggle="modal" data-target=""><h3>Contact</h3></button></a>
			<p>Helpline Number: 9876998655</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<a href="tips.php"><img src="imgs/help.gif"></a>
	 <a href="tips.php"><button type='button' class="btn" data-toggle="modal" data-target=""><h3>Health Tips</h3></button></a>
			<p>Get regular health tips for healthy body.</p>
		</div>
		<div class="col-sm-12 col-md-4">
			<img src="imgs/2.gif">
			<div class="container">

  <button type='button' class="btn" data-toggle="modal" data-target="#popUpWindow"><h3>Prescription</h3></button>
  
  <div class="modal fade" id="popUpWindow">
    <div class="modal-dialog ">
      <div class="modal-content" >
        <!-- header -->
        <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">login first</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

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
			<a href="about.php" class="btn btn-primary">Know More</a>
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