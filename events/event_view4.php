<?php
session_start();
require_once("../connect.php");
//start getting event id
if(isset($_POST['eid']))
{
 $eid=$_POST['eid'];
?>
        <script src="js/jquery.min.js"></script>
		<script src="js/jquery.js"></script>
        <link rel="stylesheet" href="css/sweet-alert.css">
        <link rel="stylesheet" href="events/event_view/css/style.css" type="text/css" media="screen"/>
        <script src="js/sweet-alert.min.js"></script>
        <link rel="stylesheet" href="css/sweet-alert.css">
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
			notifyevereg("rstatus","Please Enter Others Teckzite IDs in your team","error");
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
.successinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: black;background: #BDE5F8;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;}
.errorinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: red;background: #FAEBD7;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;}
.loaderinfo { min-width:70%;font-family:Comic Sans MS;border: 1px solid #999; padding:8px; font: bold 12px verdana;-moz-box-shadow: 0 0 5px #888; -webkit-box-shadow: 0 0 5px#888;box-shadow: 0 0 5px #888;text-shadow: 2px 2px 2px #ccc;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:20px;font-weight:bold;color: #ddd;background: #f2f2f2;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;}

            a.back{
                background:transparent url(back.png) no-repeat top left;
                position:fixed;
                width:150px;
                height:27px;
                outline:none;
                bottom:0px;
                left:0px;
            }
            .reference{
                clear:both;
                width:800px;
                margin:30px auto;
            }
            .reference p a{
                text-transform:uppercase;
                text-shadow:1px 1px 1px #fff;
                color:#666;
                text-decoration:none;
                font-size:10px;
            }
            .reference p a:hover{
                color:#333;
            }
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
table.evede
{
	width:67%;
	height:30%;
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

            <div class="rotator">
                <ul id="rotmenu">
                    <li>
                        <a href="rot1">DESCRIPTION</a>
                        <div style="display:none;">
                            <div class="info_description">
				<img src="events/images/mh.png" style="float:left;" width="250px" height="200px"  title="<?php echo $eved['etitle'];?>">
						                
						
						<table class="evede" border="0">
						<tr><td>Name</td><td> : </td><td class='shwdt'><?php echo $eved['etitle'];?></td></tr>
						<tr><td>Branch </td><td>: </td><td  class='shwdt'><?php echo $eved['category'];?></td></tr>
						<tr><td>Participants</td><td>: </td><td  class='shwdt'><?php echo $eved['teams'];?></td></tr>
						<tr><td>Schedule </td><td>: </td><td  class='shwdt'><?php echo $eved['schedule'];?></td></tr>
						<tr><td>Teams Registered </td><td>: </td><td  class='shwdt'></td></tr>
						</table>
						<br>
                <h4><u><b> <font color='green'>Description</font></b></u></h4>
                <br>
                
                <?php echo $eved['description'];?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="rot2">Instructions</a>
                        <div style="display:none;">
                            <div class="info_description">
				<?php echo $eved['instructions'];?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="rot3">Registration</a>
                        <div style="display:none;">
                            <div class="info_description">
				  <center>
					<div id="rstatus"></div>
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
				echo "<tr ><td style='padding-top:15px;'><form>Student ".$i." Teckzite ID</td><td style='padding-top:15px;'>:</td><td style='padding-top:15px;'><input type='text' style='color:black;' placeholder='TZ1XXXX' maxlength='10' id='tzi".$i."'></form></td></tr>";
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
			  
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="rot4">Organisers</a>
                        <div style="display:none;">
                            <div class="info_description">
								<?php echo $eved['organisers'];?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="rot5">Teams</a>
                        <div style="display:none;">
                            <div class="info_description">
                             <?php
	$mine=mysql_query("SELECT MAX(teamid) FROM teams WHERE eid='$eid'");
				
		while($p2=mysql_fetch_array($mine))
		{
			echo "<h4>Total registred teams".$p2[0]."</h4>";
	 }
	 ?>
               <?php
		$kt=mysql_query("SELECT * FROM teams WHERE eid='$eid'") or die(mysql_error());
	if(mysql_num_rows($kt)>0)
	{
	echo "<table border=1><tr>";
    $kkg=0;
	while($fkt=mysql_fetch_array($kt))
		{
		$mt=array();
		$mt=$fkt['ids'];
		$super=explode("~",$mt);
		}
		if($kkg%10==0)
			echo "</tr><td style='background-color:black;'>";
		else
			echo "<td style='background-color:white'>";
		$kkg++;
		$colors=array("660066","990000","6600CC","9900CC","FF0000","FF00CC","CC00CC","003399","006600");
		shuffle($colors);
		echo "<u><b><FONT COLOR=YELLOW style='background-color:black;'>Team ID:".$fkt['teamid']."</FONT></u></B><br>";
                
              
                
		for($y=0;$y<=count(@$super);$y++)
			echo "<font color=".$colors[0].">".@$super[$y]."</font><br>";
		
		echo "</td>";
	}	
		
	
	else
	{
	    echo "<div class='errorinfo'>No one Registered</div>";
        echo "</table>";
	}

	
			  ?>
               
                    
                    <li>
                        <a href="rot5">Notifications</a>
                        <div style="display:none;">
                            <div class="info_description">
                               <?php
				$note=mysql_query("SELECT * FROM `notifications` WHERE eid='$eid' ORDER BY nid DESC");
				if(mysql_num_rows($note)<10)
				{
				echo "<div class='note red rounded'>No new Notifications</div>";
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
                        </div>
                    </li>
                    
                    
                    <li>
                        <a href="rot5">Winners</a>
                        <div style="display:none;">
                            <div class="info_description">
                               <?php echo $eved['winners'];?>
                            </div>
                        </div>
                    </li>
                </ul>
                <div id="rot1">
                    <img src="" width="800" height="300" class="bg" alt=""/>
                    <div class="heading">
                        <h1></h1>
                    </div>
                    <div class="description">
                        <p></p>

                    </div>    
                </div>
            </div>
        </div>
         
        <script type="text/javascript" src="events/js/jquery.min.js"></script>
        <script type="text/javascript" src="events/event_view/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                var current = 1;
                
                var iterate		= function(){
                    var i = parseInt(current+1);
                    var lis = $('#rotmenu').children('li').size();
                    if(i>lis) i = 1;
                    display($('#rotmenu li:nth-child('+i+')'));
                }
                display($('#rotmenu li:first'));
                var slidetime = setInterval(iterate,3000);
				
                $('#rotmenu li').bind('click',function(e){
                    clearTimeout(slidetime);
                    display($(this));
                    e.preventDefault();
                });
				
                function display(elem){
                    var $this 	= elem;
                    var repeat 	= false;
                    if(current == parseInt($this.index() + 1))
                        repeat = true;
					
                    if(!repeat)
                        $this.parent().find('li:nth-child('+current+') a').stop(true,true).animate({'marginRight':'-20px'},300,function(){
                            $(this).animate({'opacity':'0.7'},700);
                        });
					
                    current = parseInt($this.index() + 1);
					
                    var elem = $('a',$this);
                    
                        elem.stop(true,true).animate({'marginRight':'0px','opacity':'1.0'},300);
					
                    var info_elem = elem.next();
                    $('#rot1 .heading').animate({'left':'-420px'}, 500,'easeOutCirc',function(){
                        $('h1',$(this)).html(info_elem.find('.info_heading').html());
                        $(this).animate({'left':'0px'},400,'easeInOutQuad');
                    });
					
                    $('#rot1 .description').animate({'bottom':'-270px'},500,'easeOutCirc',function(){
                        $('p',$(this)).html(info_elem.find('.info_description').html());
                        $(this).animate({'top':'0px'},400,'easeInOutQuad');
                    })
                    $('#rot1').prepend(
                    $('<img/>',{
                        style	:	'opacity:0',
                        className : 'bg'
                    }).load(
                    function(){
                        $(this).animate({'opacity':'1'},600);
                        $('#rot1 img:first').next().animate({'opacity':'0'},700,function(){
                            $(this).remove();
                        });
                    }
                )
                );
                }
            });
        </script>
<?php
}
?>
<?php
}
?>
