<?php
session_start();
require_once("../connect.php");
//start getting event id
if(isset($_POST['eid']))
{
 $eid=$_POST['eid'];
?>
<link rel="stylesheet" href="css/style - btn.css">
<link rel="stylesheet" href="css/buttons.css">
<link rel="stylesheet" href="css/animate.min.css" type="text/css" />
<link rel="stylesheet" href="css/animate.delay.css" type="text/css" />
<link rel="stylesheet" href="css/tabs.css" type="text/css" />
  <script src="js/sweet-alert.min.js"></script>
  <link rel="stylesheet" href="css/sweet-alert.css">
		
<link rel="stylesheet" href="css/tabs.css" type="text/css" />
<style>
.successinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: black;background: #BDE5F8;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;}
.errorinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: red;background: #FAEBD7;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;}
.loaderinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: #ddd;background: #f2f2f2;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;}
</style>
  <script src="js/sweet-alert.min.js"></script>
  <link rel="stylesheet" href="css/sweet-alert.css">
		
		<script src="js/jquery.min.js"></script>
	<script src="main.js"></script>
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
}

		$(document).ready(function() {
						$("#eeve").slideDown();
					});
		
		
		 var bt,len=0,eventname,tids='';
	  function reg_eve(eid,len)
	  {
		var tids='';
		  var flag=0;
			
			for(var j=1;j<=len;j++)
				{
					var tmp=$("#tzi"+j).val();
					if(tmp==false)
						flag=1;
					else{
						if(j==len)
							tids=tids+tmp;
						else
							tids=tids+tmp+"~";
						}
						
				}
			if(flag==1)
			notifyevereg("status","Please Enter Others Teckzite IDs in your team","error");
			else
				{
					swal({
  title: "Are you sure?",
  text: "Are you sure to Register to this event?",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Register",
  closeOnConfirm: true
},
function(){
 
            notifyevereg("status","Registering to event","loading");
					$.post("regtoevent.php",{eid:eid,len:len,ids:tids},function(data){if(data.indexOf("Not Registered")){notifyevereg("status",""+data+"","error");}});
		
});
   
					
					
				}
		}
		
		
	</script>
		<style>
#prathap_pop_up_background
{
	display:none;
	position:absolute; /* hack for internet explorer 6*/
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
	top: 20%; 
	right: 20%; 
	position:fixed;
	z-index:9999999999;
}
table.notifications
{
font-weight:bold;
width:100%;
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
background:#2F4F4F;
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
background:teal;
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

		table.evede tr
		{
			margin-top:3%;
			background-color: #DCDCDC;
			color:black;
         font-weight:bold;
			}
			
			table.evede tr 
		{
			padding:1%;
         border-radius:25px;
         -moz-border-radius:25px;
         -webkit-border-radius:25px;
	 }
			
			
		table.evede tr td
		{
			padding:1%;
			font-family:Lucida Console;
	    }
	    
	 
	 
	 		table.evede tr td.shwdt
		{
			padding:1%;
			font-family:Footlight MT Light;
	 }
	 
			
table.evede tr:nth-child(2n)
{
padding:1px;
background:#778899;
width:70%;
color:#fff;
}
			</style>
		<?php
		//start getting event full datails
				$eve = mysql_query("select * from `events` where  `eid` = '$eid'");
				while($eved=mysql_fetch_array($eve))
				{
					$cate=$eved['category'];
					?>
					<!--Eve Details start-->
					<div id="eeve" style="background-color: rgb(218, 228, 228);width:110%;height:auto;display:none;border:1px solid yellow;">
					<table border="0" width="20%">
						<tr >
						<td  >
						<img src="events/images/<?php echo $eved['ename'];?>.png" style="float:left;" width="250px" height="200px"  title="<?php echo $eved['etitle'];?>">
						
<ul class="othereve" >
	<?php
	           $btncolors = array("orange", "black", "white", "orange", "red", "blue", "rosy", "green", "pink");
	           $random_btncolors=array_rand($btncolors,9);
				$otheve = mysql_query("select * from `events` where  `category` = '$cate' && eid!='$eid'");
				$i=1;
				while($eveot=mysql_fetch_array($otheve))
				{
					
					$i++;
				
					?>
	<!--<li style="padding:10px;font-family:Imprint MT Shadow;min-width:300px;"><button onclick="shwevedetails(<?php echo $eveot['eid'];?>)" class="button <?php echo $btncolors[$random_btncolors[$i]];?>"><?php echo $eveot['etitle'];?></button></li>-->
	<?php
}
?>

</ul>
						</td>
						</tr></table>
						<table id="dt" style="float:right;position:absolute;left:34%;top:50%;" border="2" width="61%"><tr>
						<td style="width:80%;">
						<table class="evede" border="0" width="97%">
						<tr><td>Event Name</td><td> : </td><td class='shwdt'><?php echo $eved['etitle'];?></td></tr>
						<tr><td>Branch </td><td>: </td><td  class='shwdt'><?php echo $eved['category'];?></td></tr>
						<tr><td>Participants Per Team </td><td>: </td><td  class='shwdt'><?php echo $eved['teams'];?></td></tr>
						<tr><td>Schedule </td><td>: </td><td  class='shwdt'><?php echo $eved['schedule'];?></td></tr>
						</table>
						<script type="text/javascript">

$(document).ready(function() {
	//When page loads...
	$(".tab-content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab-content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab-content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
</script>
<div id="tabs" >
	
			<ul class="tabs">  
				<li style="width:15%;" class="active"><a href="#tab1">DESCRIPTION</a></li>
				<li style="width:15%;" class=""><a href="#tab2">INSTRUCTIONS</a></li>
				<li style="width:15%;" class=""><a href="#tab3">REGISTRATION</a></li>
				<li style="width:15%;" class=""><a href="#tab4">ORGANISERS</a></li>
				<li style="width:10%;" class=""><a href="#tab5">TEAMS</a></li>
				<li style="width:15%;" class=""><a href="#tab6">NOTIFICATIONS</a></li>
				<li style="width:10%;" class=""><a href="#tab7">WINNERS</a></li>
				
			</ul><!-- /# end tab links -->	 
 
		<div class="tab-container" style="position:relative;background:#fff;height:370px;overflow:scroll;">
            
			<div id="tab1" class="tab-content animate2 wobble">	
                <h4><b>Description Of <font color='green'><?php echo $eved['etitle'];?></font></b></h4>
               
               <?php echo $eved['description'];?>
            
			</div><!-- end tab single section --> 
            
            
            <div id="tab2" class="tab-content animate2 wobble">	
				<h4><b>Instructions Of <font color='green'><?php echo $eved['etitle'];?></font></b></b></h4>
                <p><?php echo $eved['instructions'];?></p>
			</div><!-- end tab single section -->
            
            
            <div id="tab3" class="tab-content animate2 wobble">	
            
				<h4><b>Register To  <font color='green'><?php echo $eved['etitle'];?></font></b></h4>
                <center>
					<div id="status"></div>
					<p id="frm">
						<?php
						if(isset($_SESSION['tzid']))
	{
		?>
					<div style='background:#F5F5DC;'>
					<table>
                <?php
                for ($i = 1; $i <= $eved['teams']; $i++)
                {
				echo "<tr ><td style='padding-top:15px;'><form>Student ".$i." Teckzite ID</td><td style='padding-top:15px;'>:</td><td style='padding-top:15px;'><input type='text' placeholder='TZ1XXXX' maxlength='10' id='tzi".$i."'></form></td></tr>";
				}
				echo "<tr><td  style='padding-top:10px;'></td><td colspan='3'  style='padding-top:10px;'><center><a style='cursor:pointer;'  style='padding-top:10px;' class='button5' onclick='reg_eve(".$eid.",".$eved['teams'].")'>Register</a></center></td></tr>";
                ?>
                
                </table>
                </div>
                <?php
                 } 
                 else
                 {
					 ?>
					 <div class="errorinfo">Please <a style="cursor:pointer;font-weight:bold;font-size:16px;color:green;" onclick="page('login')" >Login</a> to Register to <?php echo $eved['etitle'];?></div>
					 <?php
				 }
				 ?>
            </p></center>
			  
			</div><!-- end tab single section -->
			
			   <div id="tab4" class="tab-content animate2 wobble">	
            
			
				<h4><b>Organisers of <?php echo $eved['etitle'];?> <font color='green'><?php echo $eved['etitle'];?></font></b></h4>
                <p><?php echo $eved['organizers'];?></p>
			
			</div><!-- end tab single section -->
			
			   <div id="tab5" class="tab-content animate2 wobble">	
            
             
			<h4><b>Registered Teams For <font color='green'><?php echo $eved['etitle'];?></font></b></h4>
	<?php
	$mine=mysql_query("SELECT MAX(teamid) FROM teams WHERE eid='$eid'");
				
		while($p2=mysql_fetch_array($mine))
		{
			echo "<h4>Total registred teams".$p2[0]."</h4>";
	 }
	 ?>
               <?php
				$mine=mysql_query("SELECT * FROM teams WHERE eid='$eid'");
				if(mysql_num_rows($mine)<1)
				{
					echo "<div class='errorinfo'>No one Registered</div>";
				}
				else
				{
				echo "<center><table border='1' width='auto'>";
		while($p2=mysql_fetch_array($mine))
		{
		$spl=explode("~",$p2['ids']);
		echo "<tr><td><u><b><FONT COLOR=YELLOW style='background-color:black;'>Team ID:".$p2['teamid']."</FONT></u></B><br></td></tr>";
        
		for($k=0;$k<count($spl);$k++)
			{
				$paid=mysql_fetch_array(mysql_query("SELECT admin FROM fees WHERE tzid='".$spl[$k]."'"));
				if($paid['admin']=="")
				{
					echo "<tr><td style='color:red;font-weight:bold;'>".$spl[$k]."</td></tr>";
				}
				else
				{
			echo "<tr><td style='font-weight:bold;'>".$spl[$k]."</td></tr>";
	      	}
				}	
			}
			echo "</table></center>";
		}
			  ?>
               
               
               </p>
			
			</div><!-- end tab single section -->
			
			   <div id="tab6" class="tab-content animate2 wobble">	
            
             
				<h4><b>Notifications for <font color='green'><?php echo $eved['etitle'];?></font></b></h4>
             
			<table class="notifications" width="50%">
				
				<?php
				$note=mysql_query("SELECT * FROM `notifications` WHERE eid='$eid' ORDER BY nid DESC");
				if(mysql_num_rows($note)<10)
				{
				echo "<div class='errorinfo'>No new Notifications</div>";
				}
				else
				{
					?>
					
				<th>Subject</th><th>Time</th>
				<?php
				while($notices=mysql_fetch_array($note))
				{
					$nid=$notices['nid'];
					$title=$notices['title'];
					$content=$notices['content'];
					$file=$notices['file'];
					$aid=$notices['aid'];
					$postime=$notices['time'];
				?>
			<tr onClick=prathap_show_notice_box("<?php echo $nid;?>")><td><?php echo $notices['title'];?> <?php
       
			if($notices['posted_date']==date("Y-m-d"))
			{
				 echo "&nbsp;&nbsp;<b style='background:red' width='15' height='2'>&nbsp;<font color='white'><blink>New</blink></font>&nbsp;</b>";
			
			}
			else
			{
			}?></td><td><?php echo $notices['time'];?></td></tr>
			<?php
		}
	}
		?>
			</table>
		
			</div><!-- end tab single section -->
			
			   <div id="tab7" class="tab-content animate2 wobble">	
            
             
				<h4><b>Winners Of  <font color='green'><?php echo $eved['etitle'];?></font></b></h4>
               <?php echo $eved['prizes'];?><br><br>
               <?php echo $eved['winners'];?>
               
			
			</div><!-- end tab single section -->
 			
		</div>
		
		</div><!-- end tab -->
						</td></tr></table></div>
						<center>
		
		<div id="prathap_pop_up_background"></div>



<div id="prathap_notice_box">
<?php include("noticeview.php");?>
</div>

</div>
</center>

					<!--Eve Details end-->
					<?php
					
		//end getting event full datails
					}
					
					//end getting event id
					}?>
