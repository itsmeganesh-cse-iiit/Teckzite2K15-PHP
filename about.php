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
	
<link rel="shortcut icon" href="banners/favicon.ico" type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TECKZITE2K15 @ IIIT NUZVID</title>
<?php include('includes.php');?>
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
		                    <li class="scroll  active"><a href="about.php">About</a></li>  
		                    <li class="scroll"><a href="events.php">Events</a></li>                         
		                    <li class="scroll"><a href="notifications.php">Updates <?php 
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

	<div id='no' style="padding:0em;margin:3%;text-align:left;width:auto" >
    		<h1 style="font-family:algerian;text-align: center;font-weight:bold;color:#0080C0;font-size:23px;"> TECKZITE2K15</h1>
                      
		<p style="font-size:19px;font-family:arial;text-align: justify;word-spacing:4px;line-height:30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <font style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:20px;text-align:left;">TeckZite2K15</font>
                     is an authentic annual technical fest organised by RGUKT, which whets the student's appetite with the taste of innovation. Our students are quite enthusiastic and fascinated in organizing technical fests and national events. Our university  organized a technical fest at campus level (Intra-university) by the name Teckzite 2k14 last year,  which had a participation of 2000+ students and ROBOZEST-2K14(a 2 day Robotics inter-college workshop which was attended by 450 students) which was quite successful in bringing out the talents and merits of the students.  So we are looking forward to aggrandize it to national level, fortunately we have gained the consent and blessings from our beloved Vice-Chancellor Sri S.Satyanarayana garu and our Director Sri K.Hanumantha Rao garu to organize a national level technical fest on 29th and 30th of March by the label Techzite 2k15 with a schematic sketch. This fest is going to be an amalgamation of technical and non-technical events. The main objective of this TECKZITE-2K15 is to expose the students to a broader understanding of the science and technology and to stimulate a spark of innovation in their dream fields. TECKZITE-2K15 is an incredible platform to showcase all the hidden talents of the students.Learning should be both funny and beneficial, thus we assure that the students will have a joyous cum informative ride in this innovative journey. This entire fest is organized by   <font style="color:#0080C0;font-family:algerian;font-weight:bold;font-size:20px;text-align:left;">STUDENT DEVELOPMENT && CAMPUS ACTIVITIES CELL (SDCAC) </font>,Faculty members Mr.G Ravi(Dept. of Bio Science),P.Shyam(Dept. of ECE). RGUKT is opening its doors to the aspiring engineers of all institutions across the nation. We expect 1000 students from other contemporary colleges/universities to take an active part along with our students.
                     </p></div>
                     <br><br><br>
                     
	<div id='no' style="padding:0em;margin-left:0%;text-align:left;width:95%" >
    		<h1 style="font-family:algerian;text-align: center;font-weight:bold;color:#0080C0;font-size:23px;"> RGUKT</h1>
                      
		<p style="font-size:19px;font-family:arial;text-align: justify;word-spacing:4px;line-height:30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     
Catering to the educational needs of gifted rural youth of then state of Andhra Pradesh, Rajiv Gandhi University of Knowledge  Technologies (RGUKT) has been established by the then Govt. of Andhra Pradesh in 2008 at three places namely Basar, Nuzvidu and RK Valley. Right from the establishment of the University, the progress of the institute has been in a marvellous context. Students who got selected were almost the toppers of their respective mandals and schools. Presently there are 7000 students glistening their knowledge. Nevertheless, the functioning of the university is always been an equivalent to all the prestigious institutes of India.
 Defining education as over all development, RGUKT-facilitates minor courses in sundry disciplines like management, fine arts, music etc. To incorporate discipline and punctuality from the grass roots, NCC, NSS & Yoga are introduced. A well crafted curriculum and sophisticated pedagogues are the corner stones of the institution.Students from Our University glistened in significant number of competitions in the arena of national & international levels enhancing the pride of RGUKT.
</p></div>


</div>
</center>
<br><br>
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
