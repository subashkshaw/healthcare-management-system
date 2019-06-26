<?php
include('config.php');
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
          <li class="nav-item ">
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
            <li><a href="#"><small>Hello Doctor<br>
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
<section>
<!-- about section-->
<div class="container mt-3">
  <h2>User Request</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#profile">User Details</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#presc">Asked Prescription</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#appoint">Appointment Details</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="profile" class="container tab-pane active"><br>
      <h3>User profiles</h3>
     <p></p>

    </div>
    <div id="presc" class="container tab-pane fade"><br>
      <h3>Prescription Details</h3>
      <p> <?php
         
   $sql = "SELECT * FROM prescription";
   $sqldata = mysqli_query($con,$sql) or die('error');
?>
 <table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Symptom</th>
    <th>Affected Area</th>
    <th>Message</th>
  </tr>
<?php
   while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
    echo"<tr><form action='pre.php' method='post'>";
    echo"<td><input type=text name=name value='".$row['name']."'></td>";
    echo"<td><input type=email name=email value='".$row['email']."'></td>";
    echo"<td><input name=symptom value='".$row['symptom']."'>
    </td>";
    echo"<td><input name=area value='".$row['area']."'>
    </td>";
    echo"<td><input type=textarea name=message value='".$row['message']."'></td>";
    echo"</form></tr>";
   }
   ?>
</table></p>
    </div>
    <div id="appoint" class="container tab-pane fade"><br>
      <h3>Appointment Details</h3>

     <p></p>
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
<script src="js/jquery.js"> </script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


