<?php
session_start();
include("connect.php");

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
    ul.bt-list li
    {
		color:#0080C0;
		font-family:andlso;
		font-weight:bold;
		}
		.selector {
  position: absolute;
  left: 50%;
  top: 60%;
  width: 140px;
  height: 140px;
  margin-top: -70px;
  margin-left: -70px;
}

.selector,
.selector button {
  font-family: 'Oswald', sans-serif;
  font-weight: 300;
}

.selector button {
  position: relative;
  width: 100%;
  height: 100%;
  padding: 10px;
  background: #428bca;
  border-radius: 50%;
  font-weight:bold;
  border: 0;
  color: white;
  font-size: 20px;
  cursor: pointer;
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1);
  transition: all .1s;
}

.selector button:hover { background: #3071a9; }

.selector button:focus { outline: none; }

.selector ul {
  position: absolute;
  list-style: none;
  padding: 0;
  margin: 0;
  top: -20px;
  right: -20px;
  bottom: -20px;
  left: -20px;
}

.selector li {
  position: absolute;
  width: 0;
  height: 100%;
  margin: 0 50%;
  -webkit-transform: rotate(-360deg);
  transition: all 0.8s ease-in-out;
  font-weight:bold;
}

.selector li input { display: none; }

.selector li input + label {
  position: absolute;
  left: 50%;
  bottom: 100%;
  width: 0;
  height: 0;
  padding:4px;
  line-height: 1px;
  margin-left: 0;
  background: #fff;
  border-radius: 50%;
  text-align: center;
  font-size: 1px;
  font-weight:bold;
  overflow: hidden;
  cursor: pointer;
  box-shadow: none;
  transition: all 0.8s ease-in-out, color 0.1s, background 0.1s;
}

.selector li input + label:hover { background: #f0f0f0; }

.selector li input:checked + label {
  background: #5cb85c;
  color: white;
}

.selector li input:checked + label:hover { background: #449d44; }

.selector.open li input + label {
  width: 100px;
  height: 100px;
  line-height: 80px;
  margin-left: -40px;
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1);
  font-size: 14px;
}
</style>
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
		                <a class="navbar-brand" href="index.html">
		                	<img class="img-responsive" src="images/logo.png" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">               
		                 <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll"><a href="index.php">Home</a></li>
		                    <li class="scroll"><a href="about.php">About</a></li>  
		                    <li class="scroll  active"><a href="events.php">Events</a></li>                         
		                    <li class="scroll"><a href="notifications.php">Updates</a></li>                   
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
    <div class="se-pre-con"></div>
 
<br><br><br>
<br><br>
<br><br><br><br>
<br><br>
<center>
	
    		<h1 style="font-family:algerian;text-align: center;font-weight:bold;color:#0080C0;font-size:23px;"> WEBTEAM</h1><br>
<table border="0">
<tr>
<td>
<a ><img src="images/web/ganesh.jpg" class="img-responsive" alt="" style="border-radius:30px;-moz-border-radius:30px;-webkit-border-radius:30px;height:150px;width:150px;"/></a>
</td>
<td>
<a ><img src="images/web/n110888.jpg" class="img-responsive" alt="" style="margin-left:30px;border-radius:30px;-moz-border-radius:30px;-webkit-border-radius:30px;height:150px;width:150px;" /></a>
</td>
<td>
<a ><img src="images/web/n130950.jpg" class="img-responsive" alt="" style="border-radius:30px;-moz-border-radius:30px;-webkit-border-radius:30px;height:150px;width:150px;"/></a>
</td></tr>
<tr>
<td><h3>KOILADA GANESH</h3>
				<a href="" style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N100704<i class="go"></i></a></td>
				
				<td>
				<h3>MALIREDDY RAJASEKHAR</h3>
				<a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N110888<i class="go"></i></a>
				</td>
				<td>
				<h3>PUPPALA PRATHAP</h3>
				<a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N130950<i class="go"></i></a>
				</td></tr>
	<tr><td colspan='3' align="center"><br><br>For any Technical Problem Contact:<ul><li>7702631766</li><li>9010932254</li></ul></td></tr>
</table>
</center>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
    <footer id="footer">
        <div class="container">
            <div class="text-center">
               <p> Copyright<a  href="about.php"> STUDENT DEVELOPMENT & CAMPUS ACTIVITIES CELL </a>    &copy;2015<br> Designed by <a href="webteam.php">Webteam</a></p>                
           </div>
        </div>
    </footer>
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
   
  
</body>
</html>
