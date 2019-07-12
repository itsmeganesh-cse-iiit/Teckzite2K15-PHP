<?php
session_start();
include("connect.php");

date_default_timezone_set("Asia/Calcutta");
$date = date('Y-m-d H:i:s', time());
$currentdate=date("Y-m-d");
$noti=mysql_query("SELECT * FROM notifications WHERE  posted_date='$currentdate' ORDER BY nid DESC");
$new_status=mysql_num_rows($noti);

?>
      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="banners/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">

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
</head><!--/head-->

<body>
	<header id="header-in" role="banner">		
		<div class="main-nav">
			<div class="container">
				<br>
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
		                    <li class="scroll"><a href="index.php">Home</a></li>
		                    <li class="scroll"><a href="about.php">About</a></li>  
		                    <li class="scroll"><a href="events.php">Events</a></li>                         
		                    <li class="scroll"><a href="notifications.php">Updates<?php 
                    if($new_status>0)
                    {
						echo "<sup><b style='background:red' width='5' height='2'>&nbsp;<font color='white'>";
						echo $new_status;
						echo "</font>&nbsp;</b></sup>";
					}
					?></a></li>                   
		                    <li class="scroll  active"><a href="contact.php">Contact us</a></li>
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
    <div class="se-pre-con"></div>
    <!--/#header--> 
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
    	<a class="contact" href="contactus.php">
            <span>Contact us</span>
        </a>
    </li>
</ul>
    <?php
}
?>
<br><br><br>
<br><br>
<br><br><br><br><br><br>
<center>
<div>

	<div id='no' style="padding:0em;margin-left:0%;text-align:center;width:95%" >
    		 <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">For any Technical issues Contact us at </font> &nbsp; <a href="mailto:admin@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">admin@teckzite.in </font> </a><br><br>
    		 <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">For any Hospitality issues Contact us at </font> &nbsp; <a href="mailto:support@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">support@teckzite.in </font> </a><br><br>
    		 <h1 style="font-family:algerian;text-align: center;font-weight:bold;color:#0080C0;font-size:23px;text-decoration:underline;"> For Branch Queries</h1><br>
           <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">For Chemical Branch </font> &nbsp; <a href="mailto:chemical@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">chemical@teckzite.in </font> </a><br><br>
           <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">For Civil Branch </font> &nbsp; <a href="mailto:civil@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">civil@teckzite.in </font> </a><br><br>
           <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">For CSE Branch </font> &nbsp; <a href="mailto:cse@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">cse@teckzite.in </font> </a><br><br>
           <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">For ECE Branch </font> &nbsp; <a href="mailto:ece@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">ece@teckzite.in </font> </a><br><br>
           <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">For Mechanical Branch </font> &nbsp; <a href="mailto:mechanical@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">mechanical@teckzite.in </font> </a><br><br>
           <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">For Metallurgy Branch </font> &nbsp; <a href="mailto:mme@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">mme@teckzite.in </font> </a><br><br>
           <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">For Robotics Branch </font> &nbsp; <a href="mailto:robotics@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">robotics@teckzite.in </font> </a><br><br>
                 </div>
                     <br><br><br>
</div>
</center>
<br><br>
    <footer id="footer">
        <div class="container">
            <div class="text-center">
            <p> Copyright<a  href="about.php"> STUDENT DEVELOPMENT & CAMPUS ACTIVITIES CELL </a>    &copy;2015<br> Designed by <a href="webteam.php">Webteam</a></p>   
            
<!-- hitwebcounter Code START -->
<a href="http://m.teckzite.in" >
<img  style='margin-left:15%' src="http://hitwebcounter.com/counter/counter.php?page=6019547&style=0025&nbdigits=8&type=page&initCount=1" title="URL Counter" Alt="URL Counter"   border="0" >
</a><br/>
<!-- hitwebcounter.com --><a href="http://m.teckzite.in" title="Page Hits" 
target="_blank" style="font-family: sans-serif, Arial, Helvetica; 
font-size: 12px; color: #6E7A76; text-decoration: underline ;"><em>Page Hits</em>
</a>                
             </div>
        </div>
    </footer>
 
  
</body>
</html>
