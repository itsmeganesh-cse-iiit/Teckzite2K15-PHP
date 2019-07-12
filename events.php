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
<br><br>
<br><br>


<br><br>

<br><br>


<center>
<div id="eve" style="background:url('images/.png');margin-top:0%;">

<br><br><br>
<div id="evlist" style=""><div class='selector'>

  <ul>
    <li>
      <input id='c1' type='checkbox'>
      <label   id="cseevents" class="hvr-fade button" onclick="showlist('cseevents')">CSE</label>
    </li>
    <li>
      <input id='c2' type='checkbox'>
      <label id="eceevents" class="hvr-back-pulse button" onclick="showlist('eceevents')">ECE</label>
    </li>
    <li>
      <input id='c3' type='checkbox'>
      <label id="civilevents" class="hvr-sweep-to-right button" onclick="showlist('civilevents')">CIVIL</label>
    </li>
    <li>
      <input id='c4' type='checkbox'>
      <label  id="mechevents" class="hvr-bounce-to-right button" onclick="showlist('mechevents')">MECHANICAL</label>
    </li>
    <li>
      <input id='c5' type='checkbox'>
      <label id="chemevents" class="hvr-radial-in button" onclick="showlist('chemevents')">CHEMICAL</label>
    </li>
    <li>
      <input id='c6' type='checkbox'>
      <label id="
      events" class="hvr-rectangle-out button" onclick="showlist('mettulargyevents')">MME</label>
    </li>
    <li>
      <input id='c7' type='checkbox'>
      <label id="roboticsevents" class="hvr-shutter-out-horizontal button" onclick="showlist('roboticsevents')">ROBOTICS</label>
    </li>
    <li>
      <input id='c8' type='checkbox'>
      <label id="open2allevents" class="hvr-sweep-to-top button" onclick="showlist('open2allevents')">OPEN 2 ALL</label>
    </li>
     <li>
      <input id='c9' type='checkbox'>
      <label id="pucevents" class="hvr-sweep-to-top button" onclick="showlist('pucevents')">PUC & E1</label>
    </li>
  </ul>
  <button>BRANCH</button>
</div>
</div>
</div>
</center>
<br><br><br>
     <center>If above links are not working properly,click
      <label  style="margin-left:3%;margin-top:18%;font-size:25px;" id="cseevents" class="hvr-fade button" onclick="showlist('cseevents')">enter to events</label></center>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
    <footer id="footer">
        <div class="container">
            <div class="text-center">
               <?php $visits=mysql_fetch_array(mysql_query("SELECT `vid` FROM `visits`"));$visits1=$visits[0];?>
                <p> Copyright<a  href="about.php"> STUDENT DEVELOPMENT & CAMPUS ACTIVITIES CELL </a>    &copy;2015<br> Designed by <a href="webteam.php">Webteam</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; visits <a><?php echo $visits1; ?></p>               
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
    	<a class="contact" href="index.php#contact">
            <span>Contact us</span>
        </a>
    </li>
</ul>
    <?php
}
?>
   
    <script>
function showlist(branch)
{
	
	$("#evlist").html("<center><div id='loading' class='inlineloading'>Loading...Please Wait...</div></center>").load("events/"+branch+".php");
	}
	var angleStart = -360;

// jquery rotate animation
function rotate(li,d) {
    $({d:angleStart}).animate({d:d}, {
        step: function(now) {
            $(li)
               .css({ transform: 'rotate('+now+'deg)' })
               .find('label')
                  .css({ transform: 'rotate('+(-now)+'deg)' });
        }, duration: 0
    });
}

// show / hide the options
function toggleOptions(s) {
    $(s).toggleClass('open');
    var li = $(s).find('li');
    var deg = $(s).hasClass('half') ? 180/(li.length-1) : 360/li.length;
    for(var i=0; i<li.length; i++) {
        var d = $(s).hasClass('half') ? (i*deg)-90 : i*deg;
        $(s).hasClass('open') ? rotate(li[i],d) : rotate(li[i],angleStart);
    }
}

$('.selector button').click(function(e) {
    toggleOptions($(this).parent());
});

setTimeout(function() { toggleOptions('.selector'); }, 100);
	</script>
</body>
</html>
