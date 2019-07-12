<?php
session_start();
include("connect.php");
if(isset($_SESSION['tzid']))
{
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
 <?php
    include("includes.php");
    ?>
 <script>
$(window).load(function() {
$(".se-pre-con").fadeOut("slow");;
});
</script>

	<script src="prefixfree.min.js"></script>
    
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
		                    <li class="scroll"><a href="events.php">Events</a></li>                         
		                    <li class="scroll"><a href="notifications.php">Updates<?php 
                    if($new_status>0)
                    {
						echo "<sup><b style='background:red' width='5' height='2'>&nbsp;<font color='white'>";
						echo $new_status;
						echo "</font>&nbsp;</b></sup>";
					}
					?></a></li>                   
		                    <li class="no-scroll"><a href="contact.php">Contact us</a></li>
		                    <?php 
							if(isset($_SESSION['tzid']))
						{
							?>
							<li><a class="scroll  active" href="userinfo.php"><?php echo $_SESSION['tzid'];?></a></li>
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
<br><br><br><br>
<br><br>
<center>
<div id="eve">
<br><br>
		
				<?php
				
        $stui=$_SESSION['tzid'];
        $pai=mysql_fetch_array(mysql_query("SELECT * FROM registration WHERE stuid='$stui'"));
        if($pai['fees']=="YES")
        {
			?>
			<div class="note green rounded">
					<p><?php echo "Hi ".$_SESSION['tzid']."<br>Now You Can Participate in Teckzite2k15.."?></p>
				</div>
				
				<?php
		}
		else
		{
        ?>
				<div class="note red rounded">
    <p><?php echo "<span style='font-weight:bold;font-family:Adobe Gothic Std;'><br>Hi ".$_SESSION['tzid']."<br>Kindly Pay <big><font color='yellow'>".$pai['reg_fee']."</font></big> to Get approval for participation in Teckzite2k15</span><br><br>";?></p>
</div>
<?php
}
?>
<br>

<a href="instructions.jpg" target="_blank"><img src='img/instructions.png' height="120px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php 
if($pai['fees']=="YES"){}else{?><a onclick="alert('Please Complete Payment Process at ST-09');" style="cursor:pointer;" ><img src="social/pay.png" height="150px" width="150px"/></a>
<?php } ?>
<br clear="all"><br clear="all">
<br clear="all"><br clear="all">
<br clear="all"><br clear="all">
<br clear="all"><br clear="all">
<br clear="all"><br clear="all">
<br clear="all"><br clear="all">
</div>
</center>

<br><br>
</div>
</center>

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright<a  href="about.php"> STUDENT DEVELOPMENT && CAMPUS ACTIVITIES CELL </a>    &copy;2015<br> Designed by <a href="webteam.php">Webteam</a></p>                
            </div>
        </div>
    </footer>
 
</body>
</html>
<?php
}
else if(!isset($_SESSION['tzid']))
{
	header("location:gettzid.php");
}
?>
