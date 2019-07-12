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
		                    <li class="scroll"><a href="notifications.php">Updates<?php 
                    if($new_status>0)
                    {
						echo "<sup><b style='background:red' width='5' height='2'>&nbsp;<font color='white'>";
						echo $new_status;
						echo "</font>&nbsp;</b></sup>";
					}
					?></a></li>                   
		                    <li class="no-scroll"><a href="contact.php">Contact us</a></li>
		                    <li class="scroll" ><a href="login.php">Registration</a></li>
		                    <li class="scroll active"><a href="gettzid.php">Login</a></li>     
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
	
	<th></th></tr>
	<tr><td></td><td style="padding-top:20px;padding-left:-20px;"><center><span id="status" style="display:none;min-width:70%;"></span></center></td><td></td></tr>
	<tr>
	<td colspan="3" style="padding-left:10%;">
		<!--Register Form-->
	<br>
<br>

<!--Login Form-->
	<br>
<div  class="form" id="loginform">

<center><h4 style="font-weight:bold;"><b>SIGNIN</h4></center><br>
    		<form id="contactform"> 
    			<p class="contact"><label for="name">University ID</label></p> 
    			<input id="tzid"  placeholder="UNIVERSITY ID" required  type="text"> 
    			 
    			<p class="contact"><label for="name">Password</label></p> 
    			<input id="tzpasswd"  placeholder="Password" required type="password"> 
                
                
        
        <center> <a class="buttom" onclick="login()">Login</a> </center>
        <br>	 
   </form> 
</div>      
<br>
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
<Br><Br><Br><Br><Br>
    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <?php $visits=mysql_fetch_array(mysql_query("SELECT `vid` FROM `visits`"));$visits1=$visits[0];?>
                <p> Copyright<a  href="about.php"> STUDENT DEVELOPMENT & CAMPUS ACTIVITIES CELL </a>    &copy;2015<br> Designed by <a href="webteam.php">Webteam</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; visits <a><?php echo $visits1; ?></p>               
            </div>
        </div>
    </footer>
 <div style="position:fixed;top:60%;right:2%;font-weight:bold;color:red;"><a href="instructions.jpg" target="_blank"><img src='img/instructions.png' height="120px"></a></div> 

<div style="position:fixed;top:30%;right:5%;font-weight:bold;color:red;">

<a onclick="alert('Please Complete Payment Process at ST-08');" style="cursor:pointer;" target="_blank" ><img src="social/pay.png" height="200px" width="150px"/></a>
</div>
 <br>
</body>
</html>
