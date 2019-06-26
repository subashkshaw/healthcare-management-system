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
                	<a class="nav-link" href="index.php">Home</a></li>
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



<div class="container" style="margin-top:30px">
  <div class="row">
    
    <div class="col-sm-8">
      <h2>1. BE PROUD</h2>
      <h5></h5>
      <div class="diet1"></div>
      
      <p>Before diving into the practical gym tips for beginners, remember that the most important exercise catalyst is confidence. Whether you're lifting 100 pounds or 1 pound, you should be proud of yourself for showing up at the gym at all! Don't be intimidated by others or scared to ask for help.

Remember that everyone at the gym was once in your shoes. Those first few workouts, no matter how "easy" they are in terms of physical intensity, are often the most mentally challenging. Be proud, remain confident and trust that your gym skills and fitness savvy will increase over time.</p>
      <br>
      <h2>2. STAY STRONG</h2>
      <h5></h5>
      <div class="diet1"></div>
      
      <p>Beginners often flock to the treadmills and stationary cycles because these machines are easy for all ages and ability levels. But don't get stuck in a cardio rut — try incorporating at least two days of strength training into your weekly routine. If you aren't feeling ready to explore the weight room, remember that bodyweight exercises can be just as effective at building strength.

Not really sure where to start? Try one of Planet Fitness' unlimited, free fitness training sessions offered to all members through PE@PF. These small group sessions are led by certified trainers and can teach you basic weight-training and workout movements. Additionally, most Planet Fitness locations offer a 30-minute Express Circuit training option that can guide you through a full-body workout.</p>
      <br>
      <h2>3. WORK HARD</h2>
      <h5></h5>
      <div class="diet1"></div>
      
      <p>If you're not sweating by the end of your workout, perhaps you aren't pushing yourself hard enough. Try to reach an "out of breath" state at least once during your workout by incorporating high-intensity movements like sprinting, jumping jacks, burpees or squat jumps.</p>
      <br>
      <h2>4. ASK HOW</h2>
      <h5></h5>
      <div class="diet1"></div>
      <p>Instead of shying away from exercises or equipment you're unfamiliar with, ask a gym employee or fellow gym-goer for help. Utilize resources like ACE Fitness' exercise library and the CDC's workout videos for tips on form and technique. Another good idea is working with a certified trainer to help familiarize yourself with the gym layout and draft a workout plan.</p>
      <br>
      <h2>5. EAT UP</h2>
      <h5></h5>
      <div class="diet1"></div>
      <p>Working out won't yield results if your diet isn't in check, too. Replace unhealthy foods with healthy alternatives and try to cut back on sugar. A good place to start is following the USDA's recommendation of filling at least half of your plate with fruits and vegetables.

It's a good idea to prepare before (and refuel after) every workout with high-protein snacks like nuts, yogurt, deli meat, hummus and cottage cheese. Of course, maintaining a balanced diet will help you meet your fitness goals, but it's also realistic to enjoy an indulgence here and there!.</p>
      <br>
      <h2>6. BE REALISTIC</h2>
      <h5></h5>
      <div class="diet1"></div>
      <p>Losing weight, gaining strength, boosting endurance and increasing flexibility are all long-term goals — so don't expect to reach ultimate strength in a single week. Be realistic about the goals you set for yourself. For example, see if you can add five more pounds to your shoulder press or shave ten seconds off of your mile time within a month.</p>
    
    <br>
      <h2>7. REST AND REPEAT</h2>
      <h5></h5>
      <div class="diet1"></div>
      <p>Even the most experienced athletes appreciate the importance of rest after a hard workout. Try to get eight hours of sleep every night, take at least one rest day a week and always walk into the gym ready to repeat another solid workout. Once you get into a routine, you'll graduate from your "beginner" status in no time.

As always, please consult with a physician prior to beginning any exercise program. See full medical disclaimer here.</p>
    </div>

    <div class="col-sm-4">
      <h2>Gym and Fitness</h2>
      <div class="diet"><img src="imgs/gym.gif" class="rounded-circle"></div>
      <p>Ready to get strong and slim? Follow these gym tips and fitness strategies to help you reach your goals in no time.</p>
      <div class="diet"><img src="imgs/gym2.gif" class="rounded-circle"></div>
      <hr class="d-sm-none">
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