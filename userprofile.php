<?php
session_start();
if(!isset($_SESSION['uid']))
{
header('location:wrongpassworduser.php');
}
?>
<?php include('dbcon.php'); ?>
<?php
if(isset($_POST['login']))
{
 $username=$_POST['uname'];
$password=$_POST['pass'];
$qry="SELECT * FROM `userlogin` WHERE uname='$username' AND password='$password';";
$run=mysqli_query($con,$qry);
$row=mysqli_num_rows($run);
if($row<1)
{
?>
<script>
alert("LOIGIN ID or PASSWORD is INVALID");

</script>



<?php
}
else{
$data=mysqli_fetch_assoc($run);
$id=$data['id'];
$_SESSION['uid']=$id;
 
}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> BCET ISTE GURDASPUR </title>
<link rel="Stylesheet" type="text/css" href="commonstyle.css">
<link rel="Stylesheet" type="text/css" href="admincss.css">
<link rel="Stylesheet" type="text/css" href="top.css">
</head>
<body bgcolor="black" >

<div id="A">
<div id="logo" >
<img src="iste.jpg" height=130px width=124px >
</div>

<div id="title">
<h1  align="center" >INDIAN SOCIETY FOR TECHNICAL EDUCATION</h1>
<h1  align="center" ><font color="brown">BCET GURDASPUR</font></h1>

</div>
<div id="blogo">
<img src="index.png" height=130px width=124px >

</div>

</div>
<div id="linkbar">
<h3 align="center">
<ul >

<li><a href="HOME.php"><font color="red">HOME</font></a></li>
<li><a href="event.php"><font color="red">EVENT</font></a></li>
<li><a href="event.php"><font color="red">CONTACT US</font></a></li>
<li><a href="aboutus.php"><font color="red">ABOUT US</font></a></li>
<li><a href="http://www.isteonline.in/"><font color="red">OFFICIAL ISTE</font></a></li>
<li><a href="http://bcetgsp.ac.in/default.php"><font color="red">COLLEGE SITE</font></a></li>
<li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
<li><a href="adminlogin.php"><font color="red">ADMIN</font></a></li>
<li><a href="login.php"><font color="red">SIGN UP/LOGIN</font></a></li>
</ul></h3>
</div>
<div id="bodyc">
<div id="bodyleft" >
<h2>PRESIDENT, ISTE</h2>
<img src="c1.jpg" height=140px width=250px >
<h3 align="center"><font color="blue">(PRAVEEN PRAJAPATI)</font></h3>
<h2><b>INFORMATIONS</b></h2>
<marquee direction = "up" scrolldelay="225" height="400px"><ol>
<li>New ISTE Awards instituted</li>
<li>Subscription Rate for the Indian Journal of Technical Education</li>
<li>ISTE Executive Council Members</li>
<li>Distribution of ISTE Student Membership Fee</li>
<li>Revision of Application Fee for the ISTE SF-STTP</li>
<li>Faculty Requirements at JNNCE, Shivamogga</li>
</ol></marquee>


</div>

<div id="bodycenter">
<div id="adminleft">

<ul >

<li><a href="userprofile.php"><font color="red">PERSONAL DETAIL</font></a></li></br>
<li><a href="usechangepassword.php"><font color="red">CHANGE PASSWORD</font></a></li></br>
<li><a href="usermodexecutivedetail.php"><font color="red">UPDATE DETAIL</font></a></li></br>
<li>

<form action=./userlogout.php method="post">
<input type="submit" name="" value="LOGOUT">

</form></li>
</ul>



</div>
<div id="adminright">
<div id="admintop">
<marquee><h2>WELCOME </h2></marquee>
</div>

<div id="adminbody1">



<?php
$sess=$_SESSION['uid'];
$sql = "SELECT id,uname, fname, lname,mobile,dob,gender FROM userlogin WHERE id='$sess'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result)
?>
<table>	
<tr><td></td><td></td></tr>
	<tr><td></td></tr>
<tr><td>NAME:  </td><td> <?php  echo  $row["fname"]. " " . $row["lname"];?></td></tr>
	<tr><td></td></tr>
	
<tr><td>EMAIL:  </td><td><?php  echo $row["uname"]?></td></tr>
	<tr><td></td></tr>
<tr><td>Date of Birth:</td><td><?php  echo $row["dob"]?></td></tr>
	<tr><td></td></tr>
<tr><td>GENDER:</td><td><?php  echo $row["gender"]?></td></tr>
	<tr><td></td></tr>
	<tr><td>MOBILE:</td><td><?php  echo $row["mobile"]?></td></tr>
	<tr><td></td></tr>
		
</table>

<?php
}


?>

</div>
<div id="adminbody2">
<img src="c1.jpg" height=170px width=200px >

</div>
</div>
</div>
<div id="bodyright">


<h3> VICE PRESIDENT,ISTE</h3>
<img src="21.jpg" height=140px width=250px >
<h3 align="center"><font color="blue">(SHUBHAM SHARMA)</font></h3>
<font color="red"><h2>USEFUL  LINKS</h2></font>
<ul>
<li><a href="notice.pdf" >Notice</a></li></br>
<li><a href="EXECUTIVELIST1.pdf" >Executives</a></li></br>
<li><a href="UpcomingProgram.pdf">Upcoming Program</a></li></br>
<li><a href="Gallery.php">Gallery</a></li></br>
<li><a href="CommitteMember.pdf" >Committee Member</a></li></br>
<li><a href="MembershipForm.pdf" >Membership Form</a></li></br>

</ul>


</div>

</div>

<div id="footer">

 <pre> <h2 align="center">            <u>CONTACT US</u>                     <u>LOCATE US</u></h2></pre>
<div id="footer1">
<ul>
<li>
<pre>
<a href="https://www.facebook.com/"><img src="fb.png" height=40px width=44px ></a>   <a href="https://twitter.com/"><img src="twit.png" height=40px width=44px ></a>    <a href="https://www.youtube.com/"><img src="you.jpg" height=40px width=44px ></a>    <a href="https://www.instagram.com/?hl=en"><img src="insta.jpg" height=40px width=44px ></a>    <a href="https://www.google.co.in/"><img src="google.png" height=40px width=44px > </a> 
</pre></li>
<li><pre>             BCET GURDASPUR
             National Highway 15,
             Pathankot Road, Bariar
             Punjab 143521
</pre></li>
</ul>
</br></br></br></br></br></br>
<ul>
<li><img src="copy.png" height=40px width=44px ></li>
<li>ALL RIGHT RESEVED BY HIMANSHU KUMAR && PRAVEEN PRAJAPATI</li>

</ul>
</div>
<div id="footer2">


 <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAsB8H2IV0RyaZrEiBj9kq8H1-xvBTnMxc'>
</script>

<div style='overflow:hidden;height:200px;width:649px;'>
<div id='gmap_canvas' style='height:200px;width:649px;'>
</div>
<style>#gmap_canvas img
{
max-width:none!important;background:none!important
}
</style>
</div>
 <a href='https://embedmaps.net'>BCET GURDASPUR</a> 
<script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=fc2382c32e2e0835650e233ed192f09c4411535b'>
</script>
<script type='text/javascript'>
function init_map()
{
var myOptions = {zoom:12,center:new google.maps.LatLng(32.061882,75.440209),mapTypeId: google.maps.MapTypeId.ROADMAP};
map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(32.061882,75.440209)});
infowindow = new google.maps.InfoWindow({content:'<strong>Beant College Of Engineering & Technology</strong><br> Baryar Gurdaspur<br>143521 Punjab<br>'});
google.maps.event.addListener(marker, 'click', function(){
infowindow.open(map,marker);});
infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
 </div>


</div>



</body>
</html>
