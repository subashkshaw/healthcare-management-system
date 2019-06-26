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
   						
    			<li class="nav-item ">
    				<a class="nav-link" href="help.php">Help</a></li>
    			<li class="nav-item active">
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
<!-- tips section-->
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Healthy Tips</h1>
  <p>Be healthy in your daily life.</p> 
</div>


<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>Diet and Fitness</h2>
      <div class="diet"><img src="imgs/diet.gif" class="rounded-circle"></div>
      <p>Ready to get strong and slim? Follow these healthy tips and fitness strategies to help you reach your goals in no time.</p>
      <h3>Other Activities</h3>
      <p></p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="yoga.php">Yoga</a>
        </li><br>
        <li class="nav-item">
          <a class="nav-link active" href="gym.php">Gym</a>
        </li>
        <br>
        <li class="nav-item">
          <a class="nav-link active" href="#">Diet</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>1. Fill up on Fiber</h2>
      <h5></h5>
      <div class="diet1"></div>
      <p>Fiber</p>
      <p>is found in healthy foods including vegetables, fruits, beans and whole grains.

      Some studies have shown that simply eating more fiber-rich foods may help you lose weight and keep it off (1, 2).

      Increasing your intake is as easy as adding beans to your salad, eating oats for breakfast or snacking on fiber-rich nuts and seeds.</p>
      <br>
      <h2>2. Ditch Added Sugar</h2>
      <h5></h5>
      <div class="diet1"></div>
      <p>Added sugar</p>
      <p>especially from sugary drinks, is a major reason for unhealthy weight gain and health problems like diabetes and heart disease (3, 4).

      Plus, foods like candy, soda and baked goods that contain lots of added sugars tend to be very low in the nutrients your body needs to stay healthy.

      Cutting out foods high in added sugars is a great way to lose excess weight.

      It’s important to note that even foods promoted as “healthy” or “organic” can be very high in sugar. Therefore, reading nutrition labels is a must.</p>
      <br>
      <h2>3. Make Room for Healthy Fat</h2>
      <h5></h5>
      <div class="diet1"></div>
      <p>healthy fats</p>
      <p>While fat is often the first thing that gets cut when you’re trying to slim down, healthy fats can actually help you reach your weight loss goals.

      In fact, following a high-fat diet that’s rich in foods like olive oil, avocados and nuts has been shown to maximize weight loss in several studies (5, 6).

      What’s more, fats help you stay fuller for longer, decreasing cravings and helping you stay on track.</p>
      <br>
      <h2>4. Minimize Distractions</h2>
      <h5></h5>
      <div class="diet1"></div>
      <p>While consuming meals in front of your TV or computer may not seem like diet sabotage, eating while distracted may cause you to consume more calories and gain weight (7).

      Eating at the dinner table, away from potential distractions, is not only a good way to keep your weight down — it also allows you time to reconnect with loved ones.</p>
      <p>Smartphones are another device you should set aside while you’re eating. Scrolling through emails or your Instagram or Facebook feed is just as distracting as a TV or computer.</p>
      <br>
      <h2>5. Walk Your Way to Health</h2>
      <h5></h5>
      <div class="diet1"></div>
      <p>Many people believe they must adopt a rigorous exercise routine to jumpstart weight loss.</p>
      <p>While different types of activity are important when you’re attempting to get in shape, walking is an excellent and easy way to burn calories.

      In fact, just 30 minutes of walking per day has been shown to aid in weight loss (8).

      Plus, it’s an enjoyable activity that you can do both indoors and outside at any time of day.</p>
      <br>
      <h2>6. Bring out Your Inner Chef</h2>
      <h5></h5>
      <div class="diet1"></div>
      <p>Cooking more meals at home has been shown to promote weight loss and healthy eating (9, 10).</p>
      <p>Although eating meals at restaurants is enjoyable and can fit into a healthy diet plan, focusing on cooking more meals at home is a great way to keep your weight in check.

      What’s more, preparing meals at home allows you to experiment with new, healthy ingredients while saving you money at the same time.</p>
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
<script src="js/jquery.js">	</script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>