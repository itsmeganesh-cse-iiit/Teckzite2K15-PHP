
<?php
session_start();
$_SESSION['banip']=$_SERVER['REMOTE_ADDR'];
//if user does not change IP, then ban the IP when more than 10 requests per second are detected in 1 second
$limitps = 10;
if (!isset($_SESSION['first_request'])){
    $_SESSION['requests'] = 0;
    $_SESSION['first_request'] = $_SERVER['REQUEST_TIME'];
}
$_SESSION['requests']++;
if ($_SESSION['requests']>=10 && strtotime($_SERVER['REQUEST_TIME'])-strtotime($_SESSION['first_request'])<=1){
    //write the IP to a banned_ips.log file and configure your server to retrieve the banned ips from there - now you will be handling this IP outside of PHP
    $_SESSION['banip']==1;
}elseif(strtotime($_SERVER['REQUEST_TIME'])-strtotime($_SESSION['first_request']) > 2){
    $_SESSION['requests'] = 0;
    $_SESSION['first_request'] = $_SERVER['REQUEST_TIME'];
}

if ($_SESSION['banip']==1) {
    header('Location:anonymous.html');
    die;
}
include("connect.php");

date_default_timezone_set("Asia/Calcutta");
$date = date('Y-m-d H:i:s', time());$currentdate=date("Y-m-d");
$noti=mysql_query("SELECT * FROM notifications WHERE  posted_date='$currentdate' ORDER BY nid DESC");
$new_status=mysql_num_rows($noti);

	mysql_query("UPDATE visits SET vid = vid+1 ");
	$visits=mysql_fetch_array(mysql_query("SELECT `vid` FROM `visits`"));
	$visits1=$visits[0];
function timeDiff($firstTime,$lastTime)
{

// convert to unix timestamps
$firstTime=strtotime($firstTime);
$lastTime=strtotime($lastTime);

// perform subtraction to get the difference (in seconds) between times
$timeDiff=$lastTime-$firstTime;

// return the difference
return $timeDiff;
}

//Usage :
function secondsToTime($seconds,$d) {
    $dtF = new DateTime("@0");
    $dtT = new DateTime("@$seconds");
    if ($d==1)
		return $dtF->diff($dtT)->format('%a');
	else if ($d==2)
		return $dtF->diff($dtT)->format('%h');
	else if ($d==3)
		return $dtF->diff($dtT)->format('%i');
	else if ($d==4)
		return $dtF->diff($dtT)->format('%s');
}
$diff=timeDiff($date,"2015-03-29 09:00:00");
$days=secondsToTime($diff,1);
$hours=secondsToTime($diff,2);
$mins=secondsToTime($diff,3);
$secs=secondsToTime($diff,4);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TECKZITE2K15 @ IIIT- Nuzvid</title>
    <?php
    include("includes.php");
    ?>
 <script>
$(window).load(function() {
$(".se-pre-con").fadeOut("slow");;
});
</script>
<script>
if (window.screen.width < 1000) {
   // resolution is below 10 x 7
   window.location = 'http://m.teckzite.in'; //for example
 }
</script>
<style>
.successinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: black;background: #BDE5F8;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;}
.errorinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: red;background: #FAEBD7;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;}
.loaderinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: #ddd;background: #f2f2f2;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;}
#spopup{
	background:#f3f3f3;
	border-radius:9px;
	-moz-border-radius:9px;
	-webkit-border-radius:9px;
	-moz-box-shadow:inset 0 0 3px #333;
	-webkit-box-shadow:inset 0 0 3px #333;
	box-shadow:inner 0 0 3px #333;
	padding:12px 14px 12px 14px;
	width:300px;
	position:fixed;
	bottom:13px;
	right:2px;
	display:none;
	z-index:90;
}   


.scroll-top-wrapper {
    position: fixed;
opacity: 0;
visibility: hidden;
overflow: hidden;
text-align: center;
z-index: 99999999;
    background-color: #777777;
color: #eeeeee;
width: 50px;
height: 48px;
line-height: 48px;
right: 30px;
bottom: 30px;
padding-top: 2px;
border-top-left-radius: 10px;
border-top-right-radius: 10px;
border-bottom-right-radius: 10px;
border-bottom-left-radius: 10px;
-webkit-transition: all 0.5s ease-in-out;
-moz-transition: all 0.5s ease-in-out;
-ms-transition: all 0.5s ease-in-out;
-o-transition: all 0.5s ease-in-out;
transition: all 0.5s ease-in-out;
}
.scroll-top-wrapper:hover {
background-color: #888888;
}
.scroll-top-wrapper.show {
    visibility:visible;
    cursor:pointer;
opacity: 1.0;
}
.scroll-top-wrapper i.fa {
line-height: inherit;
}
 
</style>

<script>
$(function(){
 
$(document).on( 'scroll', function(){
 
if ($(window).scrollTop() > 100) {
$('.scroll-top-wrapper').addClass('show');
} else {
$('.scroll-top-wrapper').removeClass('show');
}
});
});
</script>






<script>
 
$(function(){
 
$(document).on( 'scroll', function(){
 
if ($(window).scrollTop() > 100) {
$('.scroll-top-wrapper').addClass('show');
} else {
$('.scroll-top-wrapper').removeClass('show');
}
});
 
$('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
element = $('body');
offset = element.offset();
offsetTop = offset.top;
$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
</script>

</head><!--/head-->

<body>
<link rel="shortcut icon" href="banners/favicon.ico" type="image/x-icon" />
	<div class="scroll-top-wrapper ">
<span class="scroll-top-inner">
<img src="arrow.png"/>
</span>
</div>

	

	<header id="header" role="banner">		
		<div class="main-nav2">
			  <div><br>
</div>
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.php">
		                	<img class="img-responsive" src="images/logo.png" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll active"><a href="index.php">Home</a></li>
		                    <li class="scroll"><a href="about.php">About</a></li>   
		                    <li class="scroll"><a href="events.php">Events</a></li>                         
		                    <li class="scroll"><a href="notifications.php">updates <?php if($new_status>0)
                    {
						echo "<sup><b style='background:red;border-radius:25px;' width='5' height='2'>&nbsp;<font color='white' style=''>";
						echo $new_status;
						echo "</font>&nbsp;</b></sup>";
					}
					?></a></li>                  
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
		                    <li class="scroll"><a href="gettzid.php">Login</a></li>  
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

    <section id="home">	
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="images/slider/bg1.jpg"alt="slider">						
					<div class="carousel-caption">
			<center><img src="poster.jpg" style="margin-left:40px;margin-top:25px;"></center>
					</div>
				</div>
				</div>
		</div>    	
    </section>
	<!--/#home-->
	<div class="se-pre-con"></div>
	
<?php 
							if(isset($_SESSION['tzid']))
						{
							?>
<ul id="navigationMenu" style="position:fixed;top:40%;left:0%;z-index:999999;">
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
	     <a class="services" href="changepass.php">
            <span>Change Password</span>
         </a>
    </li>
    
   <li>
    	<a class="about" href="everegto.php">
            <span><?php echo $_SESSION['tzid']." Registered Events";?></span>
        </a>
    </li>
    
    
   <li>
    	<a class="about" href="feestatus.php">
            <span><?php echo $_SESSION['tzid']." Fee Status";?></span>
        </a>
    </li>
    
    
    <li>
    	<a class="contact" href="#contact">
            <span>Contact us</span>
        </a>
    </li>
</ul>
    <?php
}
?>
<!-- //contact-us -->
	<!--<section id="explore">
		<div class="container">
			<div class="row">
				<div class="watch">
					<img class="img-responsive" src="images/watch.png" alt="">
				</div>				
				<div class="col-md-4 col-md-offset-2 col-sm-5">
					<h2>OUR FEST STARTS IN</h2>
				</div>				
				<div class="col-sm-7 col-md-6">					
					<ul id="countdown">
						<li>					
							<span class="days time-font" id="days"><?php echo $days; ?></span>
							<p>days </p>
						</li>
						<li>
							<span class="hours time-font" id="hours"><?php echo $hours; ?></span>
							<p class="">hours </p>
						</li>
						<li>
							<span class="minutes time-font" id="mins"><?php echo $mins; ?></span>
							<p class="">minutes</p>
						</li>
						<li>
							<span class="seconds time-font" id="secs"><?php echo $secs; ?></span>
							<p class="">seconds</p>
						</li>				
					</ul>
				</div>
			</div>
		</div>
	</section>-->

	<section id="event">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div id="event-carousel" class="carousel slide" data-interval="false" style="margin-left:-60px;">
						
<iframe src="eveslideshow" height="300px" frameborder="0" width="80%" style="overflow:hidden;"></iframe>
						</div>
						
					</div>
				</div>
				
					<img  src="images/logo1.png" style="margin-left:150px;margin-top:-230px;margin-right:30px;float:right;" width="160px" height="160px">

			</div>			
		</div>
	</section><!--/#event-->

	
	
	<section id="twitter">
		<div id="twitter-feed" class="carousel slide" data-interval="false">
			<div class="twit">
				<img class="img-responsive" src="images/twit.png" alt="twit">
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">

<center>
<h1 style="font-family:algerian;text-align: center;font-weight:bold;color:#0080C0;font-size:23px;"> Follow US On</h1>
							<a href="http://www.twitter.com/teckzite2k15" target="_blank"><img src='social/twitter.png' width="50px"/></a>
							<a href="https://www.facebook.com/pages/Teckzite-2K15/1583640268544457" target="_blank"><img src='social/facebook.png' width="50px"/></a>
							<a href="#contact-section"><img src='social/gmail.png' width="50px"/></a></center>
						
					</div>
					<a class="twitter-control-left" href="#twitter-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="twitter-control-right" href="#twitter-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</div>		
	</section><!--/#twitter-feed-->
	
	
	
    
	<section id="sponsor">
		<div id="sponsor-carousel" class="carousel slide" data-interval="false">
			<div class="container">
				<div class="row">
					<div class="col-sm-10">
						<h1 style="font-size:30px;color:white;"><center><b>Sponsors</center></h2>			
						<a class="sponsor-control-left" href="#sponsor-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="sponsor-control-right" href="#sponsor-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<ul>
									<li><a href="#"><img class="img-responsive" src="images/sponsor/sponsor1.png" alt="" height="122px"></a></li>
								<li><a href="#"><img class="img-responsive" src="images/sponsor/spon.png" alt="" width="120px" height="122px"></a></li>
									<li><a href="#"><img class="img-responsive" src="images/sponsor/SBH.jpg" alt="" style='border-radius:40px;'></a></li>
									<!--<li><a href="#"><img class="img-responsive" src="images/sponsor/SBH.jpg" alt="" ></a></li>
									<li><a href="#"><img class="img-responsive" src="images/sponsor/sponsor5.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="images/sponsor/sponsor6.png" alt=""></a></li>-->
								</ul>
							</div>
							<div class="item">
								<ul>
									<li><a href="#"><img class="img-responsive" src="images/sponsor/sponsor6.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="images/sponsor/sponsor5.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="images/sponsor/sponsor4.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="images/sponsor/sponsor3.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="images/sponsor/sponsor2.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="images/sponsor/sponsor1.png" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="light">
				<img class="img-responsive" src="images/light.png" alt="">
			</div>
		</div>
	</section><!--/#sponsor-->
    
    
    
    
	<section id="contact">
		<div class="contact-section">
			<div class="ear-piece">
				<img class="img-responsive" src="images/ear-piece.png" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-4">
						<div class="contact-text">
							<h3>Contact</h3>
							<address>
								E-mail: convener@teckzite.in<br>
								Phone:+91 8333049929<br>
							          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 9985855250
							</address>
						</div>
						<div class="contact-address">
							<h3>Contact</h3>
							<address>
								AP IIIT,RGUKT-Nuzvid,<br>
								Mylavaram Road,<br>
								Krishna DIST,<br>
								Andhra Pradesh.
							</address>
						</div>
					</div>
					<div class="col-sm-5">
						<div id="contact-section">
							<h3>Send a message</h3>
<script>
							function checkmail()
							{
							
							var name=$("#name").val();
							var email=$("#email").val();
							var msg=$("#message").val();
							if(name==false || email==false || msg==false){
								$("#msgstatus").html("<font color='white'>Fill Required Fields</font>");
								return false;
								}
							else
								{
								$("#msgstatus").html("<center><Font color=white>Sending...</font></center>");
								$.post("sendemail.php?name="+name+"&email="+email+"&msg="+msg,function(data){
								$("#msgstatus").html(data);							
								});
								
								return false;
								}
							return false;
							}
							</script>
<div id="msgstatus"></div><br>
					    	<div class="status alert alert-success" style="display: none"></div>
					    	<form id="main-contact-form" class="contact-form" name="contact-form" method="post" onsubmit="return checkmail()" action="sendemail.php">
					            <div class="form-group">
					                <input type="text" id="name" class="form-control" required placeholder="Name">
					            </div>
					            <div class="form-group">
					                <input type="text" id="email" class="form-control" required placeholder="Problem / Suggestion / Gratitude">
					            </div>
					            <div class="form-group">
					                <textarea name="message" id="message" required class="form-control" rows="4" placeholder="Enter your message"></textarea>
					            </div>                        
					            <div class="form-group">
					                <button type="submit" class="btn btn-primary pull-right">Send</button>
					            </div>
					        </form>	    
					    </div>
					</div>
				</div>
			</div>
		</div>		
	</section>
    <!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="text-center">
<?php $visits=mysql_fetch_array(mysql_query("SELECT `vid` FROM `visits`"));$visits1=$visits[0];?>
                <p> Copyright<a  href="about.php"> STUDENT DEVELOPMENT & CAMPUS ACTIVITIES CELL </a>    &copy;2015<br> Designed by <a href="webteam.php">Webteam</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; visits <a><?php echo $visits1; ?></p>
        
              
               
            </div>
        </div>
    </footer>
    <!--/#footer-->
    <div id="spopup" style="display: none;color:black;">
	<!-- popup close button -->
	<a style="position:absolute;top:14px;right:10px;color:#555;font-size:10px;font-weight:bold;" href="javascript:void(0);" onClick="closeSPopup();">
    	<img src="img/ico-x.png" width="18" height="18"/>
  	</a>
	<span style="font-size:14px;font-weight:bold;text-shadow:1px 1px 0 #fff;font-family: 'brandon-grotesque', Helvetica, Arial, sans-serif;">Welcome to Teckzite2K15</span>
    <br>
Date : 29 && 30 March<br>
visits : <?php

	 echo $visits1; ?>
	</div>

	
  <script type="text/javascript" >
	  
	var days=<?php echo $days; ?>;
	var hours=<?php echo $hours; ?>;
	var mins=<?php echo $mins; ?>;
	var secs=<?php echo $secs; ?>; 
    function showRemaining() {
		
		secs--;
		if (secs==-1)
			{mins--;secs=59;}
		if (mins==-1)
			{hours--;mins=59;}
		if (hours==-1 && days!=0)
			{days--;hours=23;}

		$('#days').html(days);
		$('#hours').html(hours);
		$('#mins').html(mins);
		$('#secs').html(secs);
    }

    timer = setInterval(showRemaining, 1000);
  </script>
   
   
   
   <!--fireworks--->
   
  <a href='results.php' style='cursor:pointer;'> <div style='cursor:pointer;position:absolute;top:40%;left:75%;width:70px;heght:70px;'><img src='r.png'></div></a>
  
  
</body>
</html>
