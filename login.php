<?php
session_start();
include("connect.php");

date_default_timezone_set("Asia/Calcutta");
$date = date('Y-m-d H:i:s', time());$currentdate=date("Y-m-d");
$noti=mysql_query("SELECT * FROM notifications WHERE  posted_date='$currentdate' ORDER BY nid DESC");
$new_status=mysql_num_rows($noti);

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>TECKZITE2K15 @ IIIT- Nuzvid</title>
  
 <?php include('includes.php'); ?>
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
 width:70px;
 height:59px;
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
<script>
function shwfrms(id)
{
	$("#status,#registerform,#loginform,#forgotform,#spaces").slideUp(1000);
	$("#registerform1 span,#loginform1 span,#forgotform1 span").removeClass("headi1");
	$("#"+id+"1 span").addClass("headi1");
	$("#"+id).slideToggle(1000);
}</script>
    
</head><!--/head-->

<body>
<link rel="shortcut icon" href="banners/favicon.ico" type="image/x-icon" />
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
		                    <li class="scroll"><a href="notifications.php">Updates<?php if($new_status>0)
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
							<li><a class="scroll" href="userinfo.php"><?php echo $_SESSION['tzid'];?></a></li>
		                    <li class="scroll"><a href="logout.php">Logout</a></li>  
		                   
							<?php
						}
						else
						{
							?>
		                    <li  class="scroll active"><a href="login.php">Registration</a></li>
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
<br><br><br>
<br><br>
<br><br><br><br>
<br><br>
<center>
<table width="100%" style="margin-left:10%;">
	<?php
	if(!isset($_SESSION['tzid']))
	{
			
			?>
	<tr>
	<th  style="text-align:center;cursor:pointer;" id="registerform1" onclick="shwfrms('registerform')"><span  class='headi'>Register to Teckzite2K15 </span></th>

	<th  style="text-align:center;cursor:pointer;" id="forgotform1" onclick="shwfrms('forgotform')"><span class='headi'>Forgot Password?</span></th>

	<th  style="text-align:center;cursor:pointer;" onclick="window.location='gettzid.php'"><span class='headi'>Login</span></th>
	</tr>
	<tr><td ></td><td style="padding-top:20px;padding-left:0px;"><center><span id="status" style="display:none;min-width:100%;"></span></center></td><td></td></tr>
	<tr>
	<td colspan="2" style="padding-left:10%;">
		<!--Register Form-->
	<br>
<div  class="form" id="registerform" >

<center><h4 style="font-weight:bold;"><b>TECKZITE2K15 REGISTRATION</h4></center><br>
    		<form id="registration"> 
<?php

$regs=mysql_fetch_array(mysql_query("SELECT * FROM registration ORDER BY sno DESC LIMIT 1"));
$curtzid=$regs['tzid'];

if($curtzid>="TZN3000")
	 {
	 echo "<div class='info'><center><img src='images.jpg'></center></div>";
	 }
	 else
	 {
?>
    				<p class="contact"><label for="STUID">University ID</label></p> 
    			<input id="stuid"  placeholder="university ID" required  type="text"> 
    			<p class="contact"><label for="name">First Name</label></p> 
    			<input id="fname"  placeholder="First Name(surname)" required  type="text"> 
    			 
    			<p class="contact"><label for="name">Last Name</label></p> 
    			<input id="lname"  placeholder="Last Name(name)" required type="text"> 
    			         <p class="contact"><label for="gender">Gender</label></p>
             <input type="radio" name="gender" value="M" id="gender"> Male &nbsp;&nbsp;&nbsp;
             <input type="radio" name="gender" value="F"> Female
             <br><br>
      
                <p class="contact"><label for="class">Class</label></p> 
                <select style='width:30%;' id='block'><option value=''>BLOCK</option><option value='KAPPA'>KAPPA</option><option value='OMEGA'>OMEGA</option><option value='LAMBDA'>LAMBDA</option><option value='MUE'>MUE</option><option value='SG'>SG</option><option value='SF'>SF</option><option value='SS'>SS</option><option value='ST'>ST</option><option value='CG'>CG</option><option value='CF'>CF</option><option value='CS'>CS</option><option value='CT'>CT</option><option value='TG'>TG</option><option value='TF'>TF</option><option value='TS'>TS</option><option value='TT'>TT</option></select>
                 <select style='width:30%;' id='room'><option value=''>ROOM NO</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option></select><br>
 
  <br>
            <p class="contact"><label for="phone">Mobile No</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required type="text"> <br>
            
            
            <input id="email" placeholder="Email Address"  required type="hidden"> <br>
            
             <p class="contact"><label for="department">Department</label></p>
  
            <select class="select-style gender" id="department">
            <option value="">Select</option>
            <option value="PUC">PUC</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="CE">CIVIL</option>
            <option value="MECH">MECHANICAL</option>
            <option value="CHE">CHEMICAL</option>
            <option value="MME">METALLURGY</option>
            <option value="E1-SEC-A">E1-SEC-A</option>
            <option value="E1-SEC-B">E1-SEC-B</option>
            </select><br><br>
            
                <p class="contact"><label for="year">Year</label></p>
  
            <select class="select-style gender" id="year">
            <option value="">Select</option>
            <option value="P1">PUC1</option>
            <option value="P2">PUC2</option>
            <option value="E1">ENGG1</option>
            <option value="E2">ENGG2</option>
            <option value="E3">ENGG3</option>
            <option value="E4">ENGG4</option>
            </select><br><br>
            
            
            <input id="college" placeholder="College Name" value="AP IIIT NUZVID" required type="hidden"> <br>
            
            
            <p class="contact"><label for="password">Password</label></p> 
            <input id="passwd" placeholder="Password" required type="password"> <br>
            
                <p class="contact"><label for="password">Confirm Password</label></p> 
            <input id="cnfrmpasswd" placeholder="Confirm Password" required type="password"> <br>
            
             
             <span class="successinfo" id="shwamount">
             <input type="checkbox" name="agree" value="yes"> I agree to pay <b><span id="amount" style="color:green;">100</span></b> for the Participation of Teckzite2K15
             </span>
        <center> <a class="buttom" onclick="registerto()">Register</a> </center>
        <br>	 
   </form> 
</div>      
<br>

<!--Forgot-->
<br>
<div  class="form" id="forgotform" style="display:none;">

<center><h4 style="font-weight:bold;"><b>FORGOT PASSWORD</h4></center><br>
    		<form id="contactform"> 
    			<p class="contact"><label for="name">Teckzite ID</label></p> 
    			<input id="tzfid"  placeholder="Teckzite ID" required  type="text"> 
    			 
    			 <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="tzfphone" name="phone" placeholder="phone number" required type="text"> <br>
            
            
            <p class="contact"><label for="university id">University ID</label></p> 
            <input id="tzfuid" placeholder="university ID" required type="text"> <br>
                
                            <p class="contact"><label for="password">New Password</label></p> 
            <input id="tzfpasswd" placeholder="New Password" required type="password"> <br>
            
            <p class="contact"><label for="password">Confirm Password</label></p> 
            <input id="tzfcnfrmpasswd" placeholder="Confirm Password" required type="password"> <br>
                
                
        
        <center> <a class="buttom" onclick="forgot()">Verify</a> </center>
        <br>	 
<?php
}
?>
   </form> 
</div>      
<br>
	
	
	</td>
	
	</tr></table>
<?php
}
else
{
	?>
	<center><div class="error1info"><img src="img/tz.png"><br><br><h3 style="font-size:20px;">Sorry!!!!</h3><br>You are already Logged In</div></center>
	<?php
}
?>

</center>

    <footer id="footer">
        <div class="container">
            <div class="text-center">
              <?php $visits=mysql_fetch_array(mysql_query("SELECT `vid` FROM `visits`"));$visits1=$visits[0];?>
                <p> Copyright<a  href="about.php"> STUDENT DEVELOPMENT & CAMPUS ACTIVITIES CELL </a>    &copy;2015<br> Designed by <a href="webteam.php">Webteam</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; visits <a><?php echo $visits1; ?></p>               
            </div>
        </div>
    </footer>
 
 <div style="position:fixed;top:40%;right:2%;color:red;"><a target='_blank' href="instructions.jpg"><img src='img/instructions.png' height="120px"></a><br><ul style="width:220px;">
<li>The Venue for paying the Registration fee Rs.100/- is <b>ST-09 or ST-08</b></li><br><li>Timings : <br>9:00AM to 7:00PM <br>8:00 to 10:30 PM</li></ul></div> 
 <br>
</body>
</html>
