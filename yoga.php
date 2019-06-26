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



<div class="container" style="margin-top:30px">
  <div class="row">
    
    <div class="col-sm-8">
      <h2>1. Mountain Pose</h2>
      <h5></h5>
      <div class="diet1"></div>
      
      <p>Mountain Pose is the base for all standing poses; it gives you a sense of how to ground in to your feet and feel the earth below you. Mountain pose may seem like "simply standing," but there is a ton going on.

How to do it: Start standing with your feet together. Press down through all ten toes as you spread them open. Engage your quadriceps to lift your kneecaps and lift up through the inner thighs. Draw your abdominals in and up as you lift your chest and press the tops of the shoulders down.

Feel your shoulder blades coming towards each other and open your chest; but keep your palms facing inwards towards the body. Imagine a string drawing the crown of the head up to the ceiling and breathe deeply in to the torso. Hold for 5-8 breaths.</p>
      <br>
      <h2>2. Downward Facing Dog</h2>
      <h5></h5>
      <div class="diet1"></div>
      
      <p>Downward Dog is used in most yoga practices and it stretches and strengthens the entire body. I always say, “a down dog a day keeps the doctor away.”

How to do it: Come on to all fours with your wrists under your shoulders and knees under your hips. Tuck under your toes and lift your hips up off the floor as you draw them up at back towards your heels.

Keep your knees slightly bent if your hamstrings are tight, otherwise try and straighten out your legs while keeping your hips back. Walk your hands forward to give yourself more length if you need to.

Press firmly through your palms and rotate the inner elbows towards each other. Hollow out the abdominals and keep engaging your legs to keep the torso moving back towards the thighs. Hold for 5-8 breaths before dropping back to hands and knees to rest.</p>
      <br>
      <h2>3. Plank</h2>
      <h5></h5>
      <div class="diet1"></div>
      
      <p>Plank teaches us how to balance on our hands while using the entire body to support us. It is a great way to strengthen the abdominals, and learn to use the breath to help us stay in a challenging pose.

How to do it: From all fours, tuck under your toes and lift your legs up off the mat. Slide your heels back enough until you feel you are one straight line of energy from your head to your feet.

Engage the lower abdominals, draw the shoulders down and away from the ears, pull your ribs together and breathe deeply for 8-10 breaths.</p>
      <br>
      <h2>4. Triangles</h2>
      <h5></h5>
      <div class="diet1"></div>
      <p>Triangle is a wonderful standing posture to stretch the sides of the waist, open up the lungs, strengthen the legs and tone the entire body.

How to do it: Start standing with your feet one leg's-length apart. Open and stretch your arms to the sides at shoulder height. Turn your right foot out 90 degrees and your left toes in about 45 degrees.

Engage your quadriceps and abdominals as you hinge to the side over your right leg. Place your right hand down on your ankle, shin or knee (or a block if you have one) and lift your left arm up to the ceiling.

Turn your gaze up to the top hand and hold for 5-8 breaths. Lift up to stand and repeat on the opposite side. Tip: I like to imagine I’m stuck between two narrow walls when I’m in triangle pose.</p>
      <br>
      <h2>5. Tree</h2>
      <h5></h5>
      <div class="diet1"></div>
      <p>Tree is an awesome standing balance for beginners to work on to gain focus and clarity, and learn to breathe while standing and keeping the body balanced on one foot.

How to do it: Start with your feet together and place your right foot on your inner left upper thigh. Press your hands in prayer and find a spot in front of you that you can hold in a steady gaze.

Hold and breathe for 8-10 breaths then switch sides. Make sure you don’t lean in to the standing leg and keep your abdominals engaged and shoulders relaxed.</p>
      <br>
      <h2>6. Warrior 1</h2>
      <h5></h5>
      <div class="diet1"></div>
      <p>Warrior poses are essential for building strength and stamina in a yoga practice. They give us confidence and stretch the hips and thighs while building strength in the entire lower body and core.

Warrior 1 is a gentle backbend; and a great pose for stretching open the front body (quads, hip flexors, psoas) while strengthening the legs, hips, buttocks, core and upper body.

How to do it: For warrior one, you can take a giant step back with your left foot coming towards a lunge, then turn your left heel down and angle your left toes forward 75 degrees.

Lift your chest and press your palms up overhead. Step forward and repeat on the opposite leg.</p>
    </div>
    <div class="col-sm-4">
      <h2>Yoga and Fitness</h2>
      <div class="diet"><img src="imgs/yoga.gif" class="rounded-circle"></div>
      <p>Ready to get strong and slim? Follow these yoga tips and fitness strategies to help you reach your goals in no time.</p>
      
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