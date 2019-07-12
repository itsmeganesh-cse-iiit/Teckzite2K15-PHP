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
 <script>
$(window).load(function() {
$(".se-pre-con").fadeOut("slow");;
});
</script>
<script type="text/javascript">
var scrolltotop={
    //startline: Integer. Number of pixels from top of doc scrollbar is scrolled before showing control
	//scrollto: Keyword (Integer, or "Scroll_to_Element_ID"). How far to scroll document up when control is clicked on (0=top).
	setting: {startline:100, scrollto: 0, scrollduration:1000, fadeduration:[500, 100]},
	controlHTML: '<img src="arrow1.png" style="filter:alpha(opacity=70); -moz-opacity:0.7;" width="100"/>', //HTML for control, which is auto wrapped in DIV w/ ID="topcontrol"
	controlattrs: {offsetx:35, offsety:60}, //offset of control relative to right/ bottom of window corner
	anchorkeyword: '#top', //Enter href value of HTML anchors on the page that should also act as "Scroll Up" links

	state: {isvisible:false, shouldvisible:false},

	scrollup:function(){
		if (!this.cssfixedsupport) //if control is positioned using JavaScript
			this.$control.css({opacity:0}) //hide control immediately after clicking it
		var dest=isNaN(this.setting.scrollto)? this.setting.scrollto : parseInt(this.setting.scrollto)
		if (typeof dest=="string" && jQuery('#'+dest).length==1) //check element set by string exists
			dest=jQuery('#'+dest).offset().top
		else
			dest=0
		this.$body.animate({scrollTop: dest}, this.setting.scrollduration);
	},

	keepfixed:function(){
		var $window=jQuery(window)
		var controlx=$window.scrollLeft() + $window.width() - this.$control.width() - this.controlattrs.offsetx
		var controly=$window.scrollTop() + $window.height() - this.$control.height() - this.controlattrs.offsety
		this.$control.css({left:controlx+'px', top:controly+'px'})
	},

	togglecontrol:function(){
		var scrolltop=jQuery(window).scrollTop()
		if (!this.cssfixedsupport)
			this.keepfixed()
		this.state.shouldvisible=(scrolltop>=this.setting.startline)? true : false
		if (this.state.shouldvisible && !this.state.isvisible){
			this.$control.stop().animate({opacity:1}, this.setting.fadeduration[0])
			this.state.isvisible=true
		}
		else if (this.state.shouldvisible==false && this.state.isvisible){
			this.$control.stop().animate({opacity:0}, this.setting.fadeduration[1])
			this.state.isvisible=false
		}
	},
	
	init:function(){
		jQuery(document).ready(function($){
			var mainobj=scrolltotop
			var iebrws=document.all
			mainobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest //not IE or IE7+ browsers in standards mode
			mainobj.$body=(window.opera)? (document.compatMode=="CSS1Compat"? $('html') : $('body')) : $('html,body')
			mainobj.$control=$('<div id="topcontrol">'+mainobj.controlHTML+'</div>')
				.css({position:mainobj.cssfixedsupport? 'fixed' : 'absolute', bottom:mainobj.controlattrs.offsety, right:mainobj.controlattrs.offsetx, opacity:0, cursor:'pointer'})
				.attr({title:'back to top'})
				.click(function(){mainobj.scrollup(); return false})
				.appendTo('body')
			if (document.all && !window.XMLHttpRequest && mainobj.$control.text()!='') //loose check for IE6 and below, plus whether control contains any text
				mainobj.$control.css({width:mainobj.$control.width()}) //IE6- seems to require an explicit width on a DIV containing text
			mainobj.togglecontrol()
			$('a[href="' + mainobj.anchorkeyword +'"]').click(function(){
				mainobj.scrollup()
				return false
			})
			$(window).bind('scroll resize', function(e){
				mainobj.togglecontrol()
			})
		})
	}
}

scrolltotop.init()</script>
<style>
	#prathap_pop_up_background
{
	display:none;
	_position:absolute; /* hack for internet explorer 6*/
	height:100%;
	width:100%;
	top:0;
	left:0;
	background:#000000;
	border:1px solid #cecece;
	position:fixed;
	z-index:99999999;
}


#prathap_notice_box
{
	display:none;
	width:850px;
	border: solid 1px #000;
	background-color: #fff;
	box-shadow: 0 0 20px #000;
	-moz-box-shadow: 0 0 20px #000;
	-webkit-box-shadow: 0 0 20px #000;
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;
	top: 5%; 
	right: 20%; 
	position:fixed;
	z-index:9999999999;
}
table.notifications
{
font-weight:bold;
width:70%;
}


table.notifications tr
{
padding:10px;
background:#778899;
width:70%;
cursor:pointer;
color:#f2f2f2;
margin:10px;
}

table.notifications th
{
padding:10px;
background:#0080C0;
text-align:center;
}
table.notifications tr
{
padding:10px;
background:#D8BFD8;
width:70%;
cursor:pointer;
color:orange;
margin:10px;
}
table.notifications tr td
{
padding:11px;
cursor:pointer;
color:black;
margin:20px;
text-align:center;
}

table.notifications tr:nth-child(2n)
{
padding:10px;
background:#f2f2f2;
width:70%;
color:#fff;
}


table.notifications tr:hover
{
background:#DAA520;
}

table.notifications tr:nth-child(2n):hover
{
background:#DA70D6;
}

#subject td
{
padding:10px;
background:#0080C0;
width:70%;
cursor:pointer;
color:#f2f2f2;
margin:20px;
font-family:"Trebuchet MS", Helvetica, sans-serif;
letter-spacing: 1px;
font-weight:bold;
font-size:16px;
max-width:400px;
height:65px;
}
.details td
{
padding:10px;
background:#F5F5DC;
width:70%;
cursor:pointer;
color:#666666;
font-family:"Trebuchet MS", Helvetica, sans-serif;
margin:20px;
letter-spacing: 1px;
font-weight:bold;
font-size:11px;
max-width:400px;
}
#description td
{
padding:10px;
background:#fff;
width:70%;
cursor:pointer;
color:#000;
margin:20px;
letter-spacing: 1px;
font-family:"Trebuchet MS", Helvetica, sans-serif;
font-weight:bold;
font-size:16px;
max-width:400px;
padding:30px;
border-radius:20px;
}
</style>
	<script src="prefixfree.min.js"></script>
    
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
		                    <li class="scroll"><a href="events.php">Events</a></li>                         
		                    <li class="scroll active"><a href="notifications.php">Updates<?php 
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
				$note=mysql_query("SELECT * FROM `notifications` ORDER BY nid DESC");
				if(mysql_num_rows($note)<1)
				{
				?>
				<br>
			<div id="warning" class="modal-box wrapper"><div class="inside light-yellow">
		<img src="images/warning.png" />
		<h3>No Notifications</h3>
		<p>Sorry, There are no notifications Posted yet...Please Visit again..</p>
		
	</div></div>
	<?php
				}
				else
				{
						?><strong><h3 style="color:#0080C0;font-family:Adobe Gothic Std;font-weight:bold;font-size:18px;">Notifications</h3></strong><br>
			<table class="notifications" width="50%">
				<th>Sno</th><th>Subject</th><th>Send to</th><th>Time</th>
				<?php
$gani_i=1;
				while($notices=mysql_fetch_array($note))
				{
					$nid=$notices['nid'];
					$title=$notices['title'];
					$content=$notices['content'];
					$file=$notices['file'];
					$aid=$notices['aid'];
					$postime=$notices['time'];
					$notetoid=$notices['eid'];
					if($notetoid=="ALL")
					{
					}
					else
					{
					$noteto=mysql_query("SELECT * FROM events WHERE eid='$notetoid'");
					while($noot=mysql_fetch_array($noteto))
					{
						
						$noticeto=$noot['etitle'];
						$noticebranch=$noot['category'];
					}
				}
				?>
			<tr onClick=prathap_show_notice_box("<?php echo $notices['nid']; ?>")><td><?php echo $gani_i;$gani_i++;?> </td>
			<td><?php echo "</center><font style='margin-top:40px;margin-left:20px;'>".$notices['title']."</font>";?> <?php if($notices['posted_date']==date("Y-m-d"))
			{
$a=array("1","2","3","4","5");
$random_keys=array_rand($a,3);


				 echo "<img src='images/".$a[$random_keys[0]].".gif'>";
			
			}
			?></td><td><?php if($notetoid=="ALL")
					{echo "ALL";} else {echo $noticebranch." / ".$noticeto;} ?> </td><td><?php echo $notices['time'];?></td></tr>
			<?php
		}
	}
		?>
			</table>

<div id="prathap_pop_up_background"></div>



<div id="prathap_notice_box">
</div>

<br clear="all"><br clear="all">
</div>
</center>

<br><br>
</div>
</center>

    <footer id="footer">
        <div class="container">
            <div class="text-center">
               <?php $visits=mysql_fetch_array(mysql_query("SELECT `vid` FROM `visits`"));$visits1=$visits[0];?>
                <p> Copyright<a  href="about.php"> STUDENT DEVELOPMENT & CAMPUS ACTIVITIES CELL </a>    &copy;2015<br> Designed by <a href="webteam.php">Webteam</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; visits <a><?php echo $visits1; ?></p>               
           </div>
        </div>
    </footer>
 
   <script>
$(document).ready(function() 
{	
	$("#prathap_pop_up_background").click(function()
	{
		$("#prathap_notice_box").hide(); 
		$("#prathap_pop_up_background").fadeOut("slow");
	});
});

function prathap_show_notice_box(nid)
{
	$.post("noticeview.php",{nid:nid},function(data){
	$("#prathap_pop_up_background").css({
		"opacity": "0.4"
	});
	$("#prathap_notice_box").html(data);
	$("#prathap_pop_up_background").fadeIn("slow");
	$("#prathap_notice_box").fadeIn('fast');
	window.scroll(0,0);
});
}



function prathap_hide_popup_boxes()
{
	$("#prathap_notice_box").hide(); 
	$("#prathap_pop_up_background").fadeOut("slow");
}</script>


</body>
</html>
