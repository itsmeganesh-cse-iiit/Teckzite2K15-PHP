<?php
session_start();
include("connect.php");

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TECKZITE2K15 @ IIIT NUZVID</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">	
	<link href="css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style - btn.css">
	
	
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/sweet-alert.min.js"></script>
  <link rel="stylesheet" href="css/sweet-alert.css">

	<script src="prefixfree.min.js"></script>
    <style>
    ul.bt-list li
    {
		color:#0080C0;
		font-family:andlso;
		font-weight:bold;
		}</style>
</head><!--/head-->

<body>
	<header id="header-in" role="banner">		
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>     
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.html">
		                	<img class="img-responsive" src="images/logo.png" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">               
		                 <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll"><a href="index.php">Home</a></li>
		                    <li class="scroll"><a href="about.php">About</a></li>  
		                    <li class="scroll  active"><a href="events.php">Events</a></li>                         
		                    <li class="scroll"><a href="notifications.php">Notifications</a></li>                   
		                    <li class="no-scroll"><a href="contact.php">Contact us</a></li>
		                    <?php 
							if(isset($_SESSION['tzid']))
						{
							?>
							<li><a class="scroll" href="userinfo.php"><?php echo $_SESSION['tzid'];?></a></li>
		                    <li class="scroll"><a href="logout.php">Logout</a></li>  
		                   
							<?php
						}
						else
						{
							?>
		                    <li><a class="no-scroll" href="login.php">Registration</a></li>
		                    <li class="scroll"><a href="gettzid.php">Get TZID</a></li>  
		                    <?php
						}
						?>     
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>                    
    </header>
    <!--/#header--> 
 
<br><br><br>
<br><br>
<br><br><br><br>
<br><br>
<center>
<div id="eve" style="background:url('images/.png');">
<ul class="bt-list">
<li><a  id="cseevents" class="hvr-fade button" onclick="showlist('cseevents')">CSE</a></li>
<li><a  id="eceevents" class="hvr-back-pulse button" onclick="showlist('eceevents')">ECE</a></li>
<li><a  id="civilevents" class="hvr-sweep-to-right button" onclick="showlist('civilevents')">CIVIL</a></li>
<li ><a id="mechevents" class="hvr-bounce-to-right button" onclick="showlist('mechevents')">MECHANICAL</a></li>
<li><a  id="chemevents" class="hvr-radial-in button" onclick="showlist('chemevents')">CHEMICAL</a></li>
<li><a  id="mettulargyevents" class="hvr-rectangle-out button" onclick="showlist('mettulargyevents')">METTULARGY</a></li>
<li ><a id="roboticsevents" class="hvr-shutter-out-horizontal button" onclick="showlist('roboticsevents')">ROBOTICS</a></li>
<li ><a id="open2allevents" class="hvr-sweep-to-top button" onclick="showlist('open2allevents')">OPEN 2 ALL</a></li>
</ul>
<br><br>

<div id="evlist"><script>$(document).ready(function(){$("#evlist").load("events/open2allevents.php");});</script></div>
</div>
</center>

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2015<a  href="about.php"> SDCAC </a> <br> Designed by <a href="webteam.php">Webteam</a></p>                
            </div>
        </div>
    </footer>
   <?php 
							if(isset($_SESSION['tzid']))
						{
							?>
<ul id="navigationMenu" style="position:fixed;top:40%;left:-0.5%;z-index:999999;">
    <li>
	    <a class="home" href="index.php">
            <span>Home</span>
        </a>
    </li>
    
    <li>
    	<a class="about" href="userinfo.php">
            <span>About <?php echo $_SESSION['tzid'];?></span>
        </a>
    </li>
    
    <li>
	     <a class="services" href="editprofile.php">
            <span>Edit Profile</span>
         </a>
    </li>
     <li>
	     <a class="about" href="changepass.php">
            <span>Change Password</span>
         </a>
    </li>
    
   
    
    <li>
    	<a class="contact" href="contactus.php">
            <span>Contact us</span>
        </a>
    </li>
</ul>
    <?php
}
?>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="js/gmaps.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/coundown-timer.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/main.js"></script>  
    <script>
function showlist(branch)
{
	
	$("#evlist").html("<center><div id='loading' class='inlineloading'>Loading...Please Wait...</div></center>").load("events/"+branch+".php");
	}
	</script>
</body>
</html>
