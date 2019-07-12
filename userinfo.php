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
  <?php
    include("includes.php");
    ?>
 <script>
$(window).load(function() {
$(".se-pre-con").fadeOut("slow");;
});
</script>
	<style>
.headi
{
text-align:center;
z-index:1000;
background:-moz-linear-gradient(right,#20B2AA,#778899);
background:-webkit-linear-gradient(right,#20B2AA,#778899);
background:linear-gradient(right,#20B2AA,#778899);
padding:2%;
padding-left:23%;
padding-right:33%;
font-family:"Times New Roman", Times, serif;
color:#fff;
font-size:16px;
 box-shadow: 0 0 5px #cbcbcb;
 -moz-box-shadow: 0 0 15px #cbcbcb;
 -webkit-box-shadow: 0 0 15px #cbcbcb;
 -webkit-border-radius: 40px 12px 45px 2px;
 -moz-border-radius: 40px 12px 45px 2px;
 border-radius: 40px 12px 45px 2px;
 width:15px;
}

.headi:hover
{
text-align:center;
z-index:1000;
background:-moz-linear-gradient(right,#FFF5EE,#BC8F8F);
background:-webkit-linear-gradient(right,#20B2AA,#778899);
background:linear-gradient(right,#20B2AA,#778899);
padding:2%;
padding-left:23%;
padding-right:33%;
color:green;
font-size:16px;
 box-shadow: 0 0 5px #cbcbcb;
 -moz-box-shadow: 0 0 15px #cbcbcb;
 -webkit-box-shadow: 0 0 15px #cbcbcb;
 -webkit-border-radius: 40px 12px 45px 2px;
 -moz-border-radius: 40px 12px 45px 2px;
 border-radius: 40px 12px 45px 2px;
 width:15px;
}
.headi1
{
text-align:center;
z-index:1000;
background:-moz-linear-gradient(right,yellow,green);
background:-webkit-linear-gradient(right,yellow,green);
background:linear-gradient(right,yellow,green);
padding:2%;
padding-left:23%;
padding-right:33%;
color:white;
font-size:16px;
 box-shadow: 0 0 5px #cbcbcb;
 -moz-box-shadow: 0 0 15px #cbcbcb;
 -webkit-box-shadow: 0 0 15px #cbcbcb;
 -webkit-border-radius: 40px 12px 45px 2px;
 -moz-border-radius: 40px 12px 45px 2px;
 border-radius: 40px 12px 45px 2px;
 width:15px;
}
.successinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: black;background: #BDE5F8;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;}
.errorinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: red;background: #FAEBD7;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;}
.loaderinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: #ddd;background: #f2f2f2;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;}


</style>

    
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
							<li class="scroll active"><a href="userinfo.php"><?php echo $_SESSION['tzid'];?></a></li>
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
	<?php
	if(isset($_SESSION['tzid']))
	{
		

        $stui=$_SESSION['tzid'];

        $pra=mysql_query("SELECT * FROM registration WHERE stuid='$stui'");

			?>
	
<div class='container1 separator' style='width:100%;margin-left:30px;'></div>
<a href="instructions.jpg" target="_blank"><img src='img/instructions.png' height="120px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php 
if($pra['fees']=="YES"){}else{?><a onclick="alert('Please Complete Payment Process at ST-08');" style="cursor:pointer;" target="_blank" ><img src="social/pay.png" height="150px" width="150px"/></a>
<?php } ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="services" href="editprofile.php"><font style="font-family:Adobe Gothic Std;font-size:25px;">edit profile</font></a>
						<center><U><h3 style="font-family:Adobe Gothic Std"><?php echo $_SESSION['tzid'];?> DETAILS</h3></U></center><BR>
<table class="table2" style='width:80%;margin-left:60px;'>
	<thead>
	<tr class='broom_heading'>
		<th style='font-weight:bold;text-align:center;color:#eee;'></th>
		<th style='font-weight:bold;text-align:center;color:#eee;'></th>
	</tr>
        </thead>
        <?php
        while($pup=mysql_fetch_array($pra))
        {?>
        <tr  class='odd'><td>Teckzite ID</td><td><?php echo $pup['tzid'];?></td></tr>
	<tr  class='odd'><td>Student ID</td><td><?php echo $stui;?></td></tr>
	<tr  class='even'><td>Student Name</td><td><?php echo $pup['firstname']." ".$pup['lastname'];?></td></tr>
	<tr  class='even'><td>Student Mail</td><td><?php echo $pup['email'];?></td></tr>
	<tr  class='odd'><td>Registration fee</td><td><?php echo $pup['reg_fee'];?></td></tr>
	<tr  class='odd'><td>Fee status</td><td>
<?php 
if($pup['fees']=="YES")
{echo "</font><font color='green'>Paid</font>";}else{echo "<font color='red'>Not Paid</font>";}}?></td></tr>
	
</table>
<br/><br/>
<?php
}
else
{
	?>
	<center><div class="error1info"><img src="img/tz.png"><br><br><h3 style="font-size:20px;">Sorry!!!!</h3><br>Please Login</div></center>
	<?php
}
?>

</center>
<?php mysql_query("UPDATE visits SET vid = vid+1 ");?>
    <footer id="footer">
        <div class="container">
            <div class="text-center">
               <p> Copyright<a  href="about.php"> STUDENT DEVELOPMENT & CAMPUS ACTIVITIES CELL </a>    &copy;2015<br> Designed by <a href="webteam.php">Webteam</a></p>                
            </div>
        </div>
    </footer>
  
</body>
</html>
