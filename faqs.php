
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<script src="js/jquery.js"></script>
<script>
$(window).load(function() {
$(".se-pre-con").fadeOut("slow");;
});
</script>
       <title>TECKZITE2K15 @ IIIT- Nuzvid</title>
 
  <?php
    include("includes.php");
    ?>
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
	controlHTML: '<img src="arrow2.png" style="filter:alpha(opacity=70); -moz-opacity:0.7;" width="100"/>', //HTML for control, which is auto wrapped in DIV w/ ID="topcontrol"
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
<body onload="gani()">
	<style>

.scroll-top-wrapper {
    position: fixed;
opacity: 0;
visibility: hidden;
overflow: hidden;
text-align: center;
z-index: 99999999;
    background-color: #777777;
color: #eeeeee;
width: 50px;
height: 48px;
line-height: 48px;
right: 30px;
bottom: 30px;
padding-top: 2px;
border-top-left-radius: 10px;
border-top-right-radius: 10px;
border-bottom-right-radius: 10px;
border-bottom-left-radius: 10px;
-webkit-transition: all 0.5s ease-in-out;
-moz-transition: all 0.5s ease-in-out;
-ms-transition: all 0.5s ease-in-out;
-o-transition: all 0.5s ease-in-out;
transition: all 0.5s ease-in-out;
}
.scroll-top-wrapper:hover {
background-color: #888888;
}
.scroll-top-wrapper.show {
    visibility:visible;
    cursor:pointer;
opacity: 1.0;
}
.scroll-top-wrapper i.fa {
line-height: inherit;
}
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
<script>
$(function(){
 
$(document).on( 'scroll', function(){
 
if ($(window).scrollTop() > 100) {
$('.scroll-top-wrapper').addClass('show');
} else {
$('.scroll-top-wrapper').removeClass('show');
}
});
});
</script>






<script>
 
$(function(){
 
$(document).on( 'scroll', function(){
 
if ($(window).scrollTop() > 100) {
$('.scroll-top-wrapper').addClass('show');
} else {
$('.scroll-top-wrapper').removeClass('show');
}
});
 
$('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
element = $('body');
offset = element.offset();
offsetTop = offset.top;
$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
</script>
<body>
<?php
include "connect.php";
date_default_timezone_set("Asia/Calcutta");
$date = date('Y-m-d H:i:s', time());$currentdate=date("Y-m-d");
$noti=mysql_query("SELECT * FROM notifications WHERE  posted_date='$currentdate' ORDER BY nid DESC");
$new_status=mysql_num_rows($noti);
?>
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
		                    <li class="scroll"><a href="notifications.php">Updates
 <?php if($new_status>0)
                    {
						echo "<sup><b style='background:red;border-radius:25px;' width='5' height='2'>&nbsp;<font color='white' style=''>";
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
        </div>                    
    </header>

    <!--/#header--> 
<br><br><br>
<br><br>
<br><br><br><br>
<br><br>
<center>

	<?php
mysql_connect("localhost","root","@error_reporting");
mysql_select_db("tz_2k15");
?>
<title>Teckzite FAQ's</title>
<h1 style='color:red;'>FAQ's</h1>
<style type="text/css">
#vpb_mainconetnts { padding:15px; width:600px; border:0px solid #E2E2E2;border-bottom:0px solid #E2E2E2;background:#FFF; font-family:Verdana, Geneva, sans-serif; font-size:12px;}
#vpbconetnts { padding:15px; width:500px; border-top:2px solid #FFF;background:#F9F9F9; font-family:Verdana, Geneva, sans-serif; font-size:12px;}
#vpbconetnts:hover { background-color:#FFF; }
.vpb_show_more_or_the_end 
{
	padding:10px;
	width:410px;
	background: #F6F6F6;
	color:blue;
	text-align:center;
	border:0px solid #CCC;
	font-family: Verdana, Geneva, sans-serif;
	font-size:12px;
}

#fake_view_button A:link {text-decoration: none}
#fake_view_button A:visited {text-decoration: none}
#fake_view_button A:active {text-decoration: none}
#fake_view_button A:hover {text-decoration:underline; color: blue;} 

#main_view_button A:link {text-decoration: none}
#main_view_button A:visited {text-decoration: none}
#main_view_button A:active {text-decoration: none}
#main_view_button A:hover {text-decoration:underline; color: blue;} 

#vasp_pb_collapsed A:link {text-decoration: none}
#vasp_pb_collapsed A:visited {text-decoration: none}
#vasp_pb_collapsed A:active {text-decoration: none}
#vasp_pb_collapsed A:hover {text-decoration:underline; color: blue;} 
</style>



</head>

<body>

<br clear="all" />
<center>



<?php
$k=mysql_query("SELECT * FROM feedback WHERE rstatus='1'") or die(mysql_error());
while($row=mysql_fetch_array($k))
{
?>
<center>
<div align="center" style="width:570px;" >
 <div id="vpb_mainconetnts" align="left" style="background-color:#0080C0;height:200px;border-radius:100px;color:white;">
   

<table>
<tr><td>   
 <div style=" float:left; width:50px;margin-top:0px;" align="left"><img src="avatar.jpg" width="40" height="40" border="0" style='border-radius:50px;'/></div>
 </td><td>
 <div style=" float:left; width:500px;" align="left"><div style="padding-bottom:5px;"><h1><?php echo $row['id']."<br><font size=4>".$row['type']."</font>";?></h1><b></b></div>
<span id="vasp_pb_collapsed"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['msg'];?></span><br clear="all" /><br clear="all" />
 </td>
 </table>
<div align="left" style="width:500px;">
 	 
     
     </div>
     
     


         <div id="vpbconetnts" style="margin-left:60px;background-color:;border-radius:20px;">
         
         <div style=" float:left; width:40px;" align="left"><img src="avatar.jpg" width="30" height="30" border="0" style='border-radius:50px;'/></div>
         
		 <div style=" float:left; width:360px;" align="left"><b><?php echo "<font color=#0080C0>".$row['sby'];?></b><br /><?php echo $row['response'];?></div>
         <br clear="all" />
         </div>
      
</div> 
<br><BR><br>
<?php
}
?>
<!------>


<!----->



 </div><br clear="all" /><br clear="all" />
 </div>
</div>
</center>












<p style="padding-bottom:100px;">&nbsp;</p>
</center>






</body>
</html>
   
<br>
	
	
	</td>
	
	</tr></table>


</center>

 <br>
</body>
</html>
