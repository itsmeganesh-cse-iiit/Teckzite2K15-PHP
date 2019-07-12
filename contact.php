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
<link rel="shortcut icon" href="banners/favicon.ico" type="image/x-icon" />
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>TECKZITE2K15 @ IIIT- Nuzvid</title>
         <?php include('includes.php'); ?>
    
  <?php
   
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

<ul id="navigationMenu" style="position:fixed;top:40%;left:-3%;z-index:999999;">
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
    	<a class="contact" href="index.php#contact">
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

	<div id='no' style="padding:0em;text-align:center;width:100%" >
		<center>
			<table border="" style="border-color:white;margin-top:20px;">

    		<tr style='border-color:white'><td style='border-color:white'> <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">For any Technical issues Contact us at </font> </td><td style='border-color:white'> <a href="mailto:admin@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">admin@teckzite.in </font> </a></td></tr>
    		<tr><td style='border-color:white'> <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">For any Hospitality issues Contact us at  </font> </td><td style='border-color:white'> <a href="mailto:support@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;"> support@teckzite.in  </font> </a></td></tr>
    		 <tr><td style='border-color:white' colspan="2"><h1 style="font-family:algerian;text-align: center;font-weight:bold;color:#0080C0;font-size:23px;text-decoration:underline;"><br> For Branch Queries<br></h1></td></tr>
             <tr ><td style='border-color:white'> <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">
				 <br>Chemical Branch </font> </td><td style='border-color:white'> <a href="mailto:chemical@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">
				<br>chemical@teckzite.in </font> </a></td></tr>
				
				  <tr><td style='border-color:white'> <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">
				 <br>Civil Branch </font> </td><td style='border-color:white'> <a href="mailto:chemical@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">
				<br>civil@teckzite.in </font> </a></td></tr>
				  <tr><td style='border-color:white'> <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">
				 <br>CSE Branch </font> </td><td style='border-color:white'> <a href="mailto:chemical@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">
				<br>cse@teckzite.in </font> </a></td></tr>
				  <tr><td style='border-color:white'> <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">
				 <br>ECE Branch </font> </td><td style='border-color:white'> <a href="mailto:chemical@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">
				<br>ece@teckzite.in </font> </a></td></tr>
    		
    		  <tr><td style='border-color:white'> <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">
				<br>Mechanical Branch </font> </td><td style='border-color:white'> <a href="mailto:chemical@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">
				<br>mechanical@teckzite.in </font> </a></td></tr>
				
				  <tr><td style='border-color:white'> <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">
				 <br>Mettalurgy Branch </font> </td><td style='border-color:white'> <a href="mailto:chemical@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">
				<br>mettalurgy@teckzite.in </font> </a><br></td></tr>
				  <tr><td style='border-color:white'> <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">
				 <br>Robotics Branch </font> </td><td style='border-color:white'> <a href="mailto:chemical@teckzite.in"><font style="color:green;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:center;">
				<br>robotics@teckzite.in </font> </a><br></td></tr>
             </table>
             </center>
                     <br><br><br>
</div>
</center><br><br>
    <footer id="footer">
        <div class="container">
            <div class="text-center">
              <?php $visits=mysql_fetch_array(mysql_query("SELECT `vid` FROM `visits`"));$visits1=$visits[0];?>
                <p> Copyright<a  href="about.php"> STUDENT DEVELOPMENT & CAMPUS ACTIVITIES CELL </a>    &copy;2015<br> Designed by <a href="webteam.php">Webteam</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; visits <a><?php echo $visits1; ?></p>
                             
            </div>
        </div>
    </footer>
 
  
</body>
</html>
