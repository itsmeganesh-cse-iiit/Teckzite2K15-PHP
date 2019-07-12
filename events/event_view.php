<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<?php
session_start();
require_once("../connect.php");
//start getting event id
if(isset($_POST['eid']))
{
$currentdate=date("Y-m-d");
 $eid=$_POST['eid'];
?>
<link rel="stylesheet" href="css/style - btn.css">
<link rel="stylesheet" href="css/buttons.css">
  <script src="js/sweet-alert.min.js"></script>
  <link rel="stylesheet" href="css/sweet-alert.css">
		
<style>

div#instructions,div#registration,div#organisers,div#teams,div#notifications,div#winners
{
display:none;
}
.successinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: black;background: #BDE5F8;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;}
.errorinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: red;background: #FAEBD7;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;}
.loaderinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: #ddd;background: #f2f2f2;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;

</style>
  <script src="js/sweet-alert.min.js"></script>
  <link rel="stylesheet" href="css/sweet-alert.css">
		
		<script src="events/js/jquery.min.js"></script>
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
			notifyevereg("status","Please Enter University IDs","error");
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
					$.post("regtoevent.php",{eid:eid,len:len,ids:tids},function(data){ if(data.indexOf("success")!=-1){notifyevereg("status","Successfully Registered to this event<br><br>Please refresh page to get your team to be shown in Teams List...","success");$("#reg_fiel,#partici").slideUp("slow");} if(data.indexOf("Not Registered")!=-1){notifyevereg("status",""+data+"","error");} if(data.indexOf("One/more are already Registered")!=-1){notifyevereg("status","One/more are already Registered","error");}});
		
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
	width:800px;
	top:0;
	
	
	:0;
	background:#000000;
	border:1px solid #cecece;
	position:fixed;
	z-index:99999999;
}


#prathap_notice_box
{
	display:none;
	width:700px;
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
width:100%;
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
width:100%;
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
width:100%;
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
max-width:500px;
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

.note {
          position:relative;
          width:480px;
          padding:1em 1.5em;
          margin:2em auto;
          color:#fff;
          background:#97C02F;
          overflow:hidden;
      }

      .note:before {
          content:"";
          position:absolute;
          top:0;
          right:0;
          border-width:0 16px 16px 0; /* This trick side-steps a webkit bug */
          border-style:solid;
          border-color:#fff #fff #658E15 #658E15; /* A bit more verbose to work with .rounded too */
          background:#658E15; /* For when also applying a border-radius */
          display:block; width:0; /* Only for Firefox 3.0 damage limitation */
          /* Optional: shadow */
          -webkit-box-shadow:0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
          -moz-box-shadow:0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
          box-shadow:0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
      }

      .note.red {background:#C93213;}
      .note.red:before {border-color:#fff #fff #97010A #97010A; background:#97010A;}

      .note.blue {background:#53A3B4;}
      .note.blue:before {border-color:#fff #fff transparent transparent; background:transparent;}

      .note.taupe {background:#999868;}
      .note.taupe:before {border-color:#fff #fff #BDBB8B #BDBB8B; background:#BDBB8B;}

    
      .note.rounded {
          -webkit-border-radius:5px 0 5px 5px;
          -moz-border-radius:5px 0 5px 5px;
          border-radius:5px 0 5px 5px;
      }

      .note.rounded:before {
          border-width:8px; /* Triggers a 1px 'step' along the diagonal in Safari 5 (and Chrome 10) */
          border-color:#fff #fff transparent transparent; /* Avoids the 1px 'step' in webkit. Background colour shows through */
          -webkit-border-bottom-left-radius:5px;
          -moz-border-radius:0 0 0 5px;
          border-radius:0 0 0 5px;
      }

      .note p {margin:0;}
      .note p + p {margin:1.5em 0 0;}

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
			
			#evedis
			{


width: 980px;
margin: 0px auto;
background-image: url(images/container_bg.jpg);
background-repeat: repeat-y;
font-size:.9em;
}
			#headertext1
{
	width:170px;
	font-size:20px;
	font-family:Tahoma;
	color:#ffffff;
	padding:25px 0px 0px 65px;

}
#headertext2
{
	width:370px;
	font-size:30px;
	font-family:Tahoma;
	color:#228802;
	padding:12px 0px 0px 62px;
	float:left;
}


#right {width: 200px;
float: right;}

#evecontent {
margin-right: 60px;
margin-left: 270px;
height:520px;
overflow:scroll;
}




/*********************************************** END Structure **********************************************/




/********************************************** BEGIN Nnavigation *********************************************/

#navcontainer  
{
margin-left: 0px;
margin-top: 0px;
margin-bottom: 10px; 
}

#navcontainer ul
{
margin: 0;
padding: 0;
list-style-type: none;
font-family: verdana, arial, Helvetica, sans-serif;
}

#navcontainer li { margin: 0; }

#navcontainer a
{
display: block;
padding: 5px 10px;
width: 180px;
color: #000;
background-color: #ADC1AD;
text-decoration: none;
border-top: 1px solid #fff;
border-left: 1px solid #999;
border-bottom: 1px solid #999;
border-right: 1px solid #999;
font-weight: bold;
font-size: 0.8em;
background-image: url(images/vertical06.jpg);
background-repeat: no-repeat;
background-position: 0 0;
cursor:pointer;
}

#navcontainer a:hover
{
color: #000;
font-style:italic;
background-color: #889E88;
text-decoration: none;
border-top: 1px solid #999;
border-left: 1px solid #999;
border-bottom: 1px solid #fff;
border-right: 1px solid #fff;
background-image: url(images/vertical06a.jpg);
background-repeat: no-repeat;
background-position: 0 0;
}

#navcontainer ul ul li { margin: 0; }

#navcontainer ul ul a
{
display: block;
padding: 5px 5px 5px 30px;
width: 160px;
color: #000;
text-decoration: none;
font-weight: normal;
}

#navcontainer ul ul a:hover
{
color: #fff;
background-color: #889E88;
text-decoration: none;
}

/********************************************** END Nnavigation *********************************************/




/********************************************** TEXT formatting start *********************************************/

#rightheaderbox {
font-size: 1.2em;
text-align: right;
padding-top: 14px;
margin-right: 50px;
float:right;
}

.jaffa {
font-size: 1.0em;
clear: right;
margin-top: 12px;
margin-bottom: 17px;
background-image: url("images/h2_bg.jpg");
background-repeat: no-repeat;
height: 21px;
padding-top: 15px;
padding-left: 35px;
margin-left:50px;
}

h3 {
font-size: .9em;
}

.pubdate {
font-size: 0.8em;
color: #FFFFFF;
}





/********************************************** TEXT formatting end *********************************************/




/********************************************** MISC start *********************************************/



.footertext {
text-align: right;
padding-top: 210px;
font-size: 70%;
padding-right: 10px;
}

.newsimages {
float: right;
margin-left: 4px;
margin-bottom: 2px;
width:250px;
height:200px;
}



a:link {color: #1e7a02}
a:visited {color: #1e7a02}
a:hover {color: #59ad3f}
a:active {color: #1e7a02}

ul.linkList 
{
margin-left: 40px;
list-style-image: url(images/list_bullet.png)
}

/********************************************** MISC end *********************************************/
#eveheader {
background-image: url(images/header.jpg);
height: 130px;
width: 940px
}


.note {
          position:relative;
          width:480px;
          padding:1em 1.5em;
          margin:2em auto;
          color:#fff;
          background:#97C02F;
          overflow:hidden;
      }

      .note:before {
          content:"";
          position:absolute;
          top:0;
          right:0;
          border-width:0 16px 16px 0; /* This trick side-steps a webkit bug */
          border-style:solid;
          border-color:#fff #fff #658E15 #658E15; /* A bit more verbose to work with .rounded too */
          background:#658E15; /* For when also applying a border-radius */
          display:block; width:0; /* Only for Firefox 3.0 damage limitation */
          /* Optional: shadow */
          -webkit-box-shadow:0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
          -moz-box-shadow:0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
          box-shadow:0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
      }

      .note.red {background:#C93213;}
      .note.red:before {border-color:#fff #fff #97010A #97010A; background:#97010A;}

      .note.blue {background:#53A3B4;}
      .note.blue:before {border-color:#fff #fff transparent transparent; background:transparent;}

      .note.taupe {background:#999868;}
      .note.taupe:before {border-color:#fff #fff #BDBB8B #BDBB8B; background:#BDBB8B;}

    
      .note.rounded {
          -webkit-border-radius:5px 0 5px 5px;
          -moz-border-radius:5px 0 5px 5px;
          border-radius:5px 0 5px 5px;
      }

      .note.rounded:before {
          border-width:8px; /* Triggers a 1px 'step' along the diagonal in Safari 5 (and Chrome 10) */
          border-color:#fff #fff transparent transparent; /* Avoids the 1px 'step' in webkit. Background colour shows through */
          -webkit-border-bottom-left-radius:5px;
          -moz-border-radius:0 0 0 5px;
          border-radius:0 0 0 5px;
      }

      .note p {margin:0;}
      .note p + p {margin:1.5em 0 0;}
#otherevents
{
list-style-type:none;
cursor:pointer;
}
#otherevents li
{
list-style-type:none;
margin:3px;
width:140px;
padding:8px;
background:#ddd;
font-size:12px;
font-weight:bold;
text-align:center;
}

#otherevents li:hover
{
list-style-type:none;
margin:3px;
width:140px;
color:white;
padding:8px;
background:rgb(102, 153, 153);
font-size:12px;
font-weight:italic;
text-align:center;
}

#otherevents li.evactive
{
list-style-type:none;
margin:3px;
width:140px;
color:white;
padding:8px;
background:#0080C0;
font-size:12px;
font-weight:italic;
text-align:center;
}
</style>
<div>
		<div id="evedis">

				<?php
		//start getting event full datails
				$eve = mysql_query("select * from `events` where  `eid` = '$eid'");
				while($eved=mysql_fetch_array($eve))
				{
					$cate=$eved['category'];
					?>

<div>
<ul id="otherevents" style="position:fixed;top:42%;right:11%;width:3%">
<?php
		//start getting event full datails
				$otheeve = mysql_query("select * from `events` where  category='$cate'");
				while($otheved=mysql_fetch_array($otheeve))
				{
					?>
<li style="cursor:pointer;" <?php if($otheved['eid']==$eid){?>class="evactive"<?php } ?> onclick="shwevedetails(<?php echo $otheved['eid'];?>)"><?php echo $otheved['etitle'];} ?></li>
</ul>
				
			</div>

			
<div id="eveheader" ><div id="headertext1"><?php echo $eved['category'];?></div><div id="rightheaderbox">Participants per Team : <?php echo $eved['teams'];?></div><div id="headertext2" style="width:65%;color:rgb(0,128,192);"><?php echo $eved['etitle'];?></div></div>
<div id="left" style="width: 195px;height:100px;float: left;background-repeat: no-repeat;margin-top:5%;margin-left: 50px!important;margin-left: -40px;padding-top:-20px;">
<img src="events/images/<?php echo $eved['category'];?>/<?php echo $eved['ename'];?>.png">
<div id="navcontainer">
<?php
$nott=mysql_query("SELECT * FROM notifications WHERE eid='$eid' && posted_date='$currentdate'");

$nst=mysql_num_rows($nott);


?>
<ul id="navlist">

<li id="active"><a id="description" onclick="load_mat(this.id)">DESCRIPTION</a></li>
<li><a  id="instructions" onclick="load_mat(this.id)">INSTRUCTIONS</a></li>
<li><a  id="registration" onclick="load_mat(this.id)">REGISTRATION</a></li>
<li><a  id="organisers" onclick="load_mat(this.id)">ORGANISERS</a></li>
<li><a  id="teams" onclick="load_mat(this.id)">TEAMS</a></li>
<li><a  id="notifications" onclick="load_mat(this.id)">NOTIFICATIONS <?php  if($nst>0)
                    {
						echo "<sup><b style='background:red' width='5' height='2'>&nbsp;<font color='white'>";
						echo $nst;
						echo "</font>&nbsp;</b></sup>";
					}
					?></a></li>
<li><a   onclick="alert('This is only for Paper,Poster,Impulse Idea abstract uploads');window.location='tzcloud';">Upload</a></li>
<li><a  id="winners" onclick="load_mat(this.id)">WINNERS</a></li>

</ul>

</div>
</div>	
<script>
function load_mat(loc)
{
	
	$("#navcontainer a").css("color","black");
	$("#"+loc).css("color","green");
	$("#evecontent div").slideUp();
	$("div #"+loc).slideDown();
}
</script>
<style>
#evecontent li
{
width:620px;
text-transform:Capitalize;
}
</style>

<div id="evecontent" style="width:68%;margin-top:-1%;background:#F0F8FF;">
	<div id="description">
		<h2 class="jaffa" style="height:10%;">DESCRIPTION</h2>
						<?php 

echo $eved['description'];

?>
		</div>
		
		
	<div id="instructions">
		<h2 class="jaffa" style="height:10%;">INSTRUCTIONS</h2>
						<?php 

echo $eved['instructions'];

?>
		</div>
		
			
	<div id="registration">
		<h2 class="jaffa" style="height:10%;">REGISTRATION</h2>
		<span id="status"></span>

	<?php
						if(isset($_SESSION['tzid']))
	{
		
$stuid=$_SESSION['tzid'];
 $cheeve=mysql_fetch_array(mysql_query("SELECT * FROM events WHERE eid='$eid'"));
 $chestu=mysql_fetch_array(mysql_query("SELECT * FROM registration WHERE stuid='$stuid'"));

echo "<span class='note red rounded' style='text-transform:capitalize;'>Registrations for <font color='yellow'> ".$cheeve['etitle']."</font> has been closed</span>";

/*
else
{
?>
	
					<span >
						<script>
							function shwfileds()
							{
							shwfields=$("#shwfields").val();
								   var text ="";
    var i;
    for (i = 1; i <= shwfields; i++) {
        text += "<tr ><td style='padding-top:15px;'><form>Student "+i+" University ID</td><td style='padding-top:15px;'>:</td><td style='padding-top:15px;'><input type='text' placeholder='Ex : N130950' maxlength='7' id='tzi"+i+"'></form></td></tr>";
				
    
    }
    var subm="<tr><td colspan='3'><input type='button' value='Register'  style='padding-top:10px;' class='button5' onclick=reg_eve('<?php echo $eid;?>',"+shwfields+")></td></tr>";
    $("#reg_fiel").html(text);
    $("#reg_fiel").append(subm);
        
							}
						</script>
						<?php  if($eved['teams']=="1")
						{
						?>
						<script>
							text1=""
						  text1 += "<tr ><td style='padding-top:15px;'><form>Student 1 University ID</td><td style='padding-top:15px;'>:</td><td style='padding-top:15px;'><input type='text' placeholder='Ex : N130950' maxlength='7' id='tzi1'></form></td></tr>";
		                   var subm1="<tr><td colspan='3'><input type='button' value='Register'  style='padding-top:10px;' class='button5' onclick=reg_eve('<?php echo $eid;?>','1')></td></tr>";
    $("#reg_fiel").html(text1);
    $("#reg_fiel").append(subm1);
		</script>
						<?php
							}
						else
						{
							?>
					<form id="partici"> 
					<b>Maximum Number of participants are <font style='color:green;'><?php echo $eved['teams'];?></font><br><br>No of participants : <select id="shwfields" style="width:20%;" onchange="shwfileds()"> </b><?php
                for ($i = 1; $i <= $eved['teams']; $i++)
                {
				echo "<option value='".$i."'>".$i."</option>";
					}?></select></form>
					<?php } ?>
					<table style='background:#F5F5DC;' id="reg_fiel">
             
                </table>
                </span>
               
            <?php
		
}
*/
}
else
{
echo "<span class='note red rounded'>Please <a href='gettzid.php' style='color:yellow;'>Login</a> to Register to this event</span>";
}
		?>
		</div>
		
		<div id="organisers">
		<h2 class="jaffa" style="height:10%;">ORGANISERS</h2>
				<?php 

echo $eved['organizers'];

?>
		</div>
		
		<div id="teams">
		<h2 class="jaffa" style="height:10%;">TEAMS</h2>
	<?php
	$mine=mysql_query("SELECT MAX(teamid) FROM teams WHERE eid='$eid'");
				
		while($p2=mysql_fetch_array($mine))
		{
			$tot=$p2[0];
			
	 }
	 ?>
               <?php
				$mine=mysql_query("SELECT * FROM teams WHERE eid='$eid'");
				if(mysql_num_rows($mine)<1)
				{
                                        
                                        echo "<br>";
					echo "<span class='note red rounded'>No one Registered</span>";
				}
				else
				{
                                        echo "<br>";
					echo "<h4 class='note blue rounded'>Total registred teams : ".$tot."</h4>";
				echo "<table  border='1' width='100px' style='text-align:center;'>";
		while($p2=mysql_fetch_array($mine))
		{
		$spl=explode("~",$p2['ids']);
		echo "<tr  class='note blue rounded'><td><u><b><FONT COLOR=white style='font-size:20px;font-family:algerian;'>Team ID:".$p2['teamid']."</FONT></u></B><br></td></tr>";
        
		for($k=0;$k<count($spl);$k++)
			{
				$paid=mysql_fetch_array(mysql_query("SELECT fees FROM registration WHERE stuid='".$spl[$k]."'"));
				if($paid['fees']=="")
				{
					echo "<tr class='note taupe rounded' style='background:#f2f2f2;margin-bottom:10px;'><td style='color:#DD4936;font-weight:bold;'>".$spl[$k]."</td></tr>";
				}
				else
				{
			echo "<tr  class='note taupe rounded'  style='background:#f2f2f2;color:black;font-weight:bold;'><td style='font-weight:bold;'>".$spl[$k]."</td></tr>";
	      	}
				}
					
			}
			echo "</table>";
		}
			  ?>
            
		</div>
		
		<div id="notifications">
		<h2 class="jaffa" style="height:10%;">NOTIFICATIONS</h2>
			<table class="notifications">
		<?php
				$note=mysql_query("SELECT * FROM `notifications` WHERE eid='$eid' ORDER BY nid DESC");
				if(mysql_num_rows($note)<1)
				{
				echo "<span class='note red rounded'>No new Notifications</span>";
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
		</div>
		
		<div id="winners">
		<h2 class="jaffa" style="height:10%;">WINNERS</h2>
		<?php 
if($eved['winners']=="")
{
echo "<span class='note taupe rounded'>This event not conducted yet.......</span>";
}
else
{
echo $eved['winners'];}
}
?>
		</div>
		
        </div>

</div>

        <div id="prathap_pop_up_background"></div>
        <div id="prathap_notice_box">
</div>
		<?php
					}?>
