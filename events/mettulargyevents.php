<?php
session_start();
require_once("../connect.php");
?>
		<link rel="stylesheet" type="text/css" href="events/css/default.css" />
		<link rel="stylesheet" type="text/css" href="events/css/component.css" />
		<script src="events/js/modernizr.custom.js"></script>
		<script src="events/js/toucheffects.js"></script>
		<script src="events/js/jquery.min.js"></script>
		
		<script>
		function shwevedetails(eid)
		{
			
					$('html,body').animate({scrollTop:0},1000);
			$("#ee").html("<center><div id='loading' class='inlineloading'>Loading...Please Wait...</div></center>");
			$.post("events/event_view.php",{eid:eid},function(data){$("#ee").html(data);});
			}
			
				function shwbranches(){$(".bran").slideToggle("slow");}
			
				</script>

			</script>
<style>
#branches
{
list-style-type:none;
cursor:pointer;
}
#branches li
{
list-style-type:none;
margin:3px;
width:120px;
padding:8px;
background:#ddd;
font-size:10px;
font-weight:bold;
text-align:center;
}
</style>

<ul id="branches" style="position:fixed;left:10px;top:42%;cursor:pointer;" onclick="shwbranches()">
<li class="bran" onclick="showlist('cseevents')">CSE </li>
<li class="bran" onclick="showlist('eceevents')">ECE</li>
<li class="bran" onclick="showlist('civilevents')">CIVIL </li>
<li class="bran" onclick="showlist('mechevents')">MECHANICAL </li>
<li class="bran" onclick="showlist('chemevents')">CHEMICAL</li>
<li class="bran" onclick="showlist('mettulargyevents')"  style="background:#0080C0;color:white;">MME</li>
<li class="bran" onclick="showlist('roboticsevents')">ROBOTICS</li>
<li class="bran" onclick="showlist('open2allevents')">OPEN2ALL</li>
<li class="bran" onclick="showlist('pucevents')">PUC</li>
<li class="bran" onclick="showlist('pucevents')">ENGG 1</li>
</ul>
		<div class=" demo-1">
		<center><h4><strong><h1 style="font-family:algerian;text-align: center;font-weight:bold;color:#0080C0;font-size:23px;"> METALLURGY & MATERIALS ENGINEERING EVENTS</h1>
        
			
			<ul class="grid cs-style-2" id="ee">
				<?php
				$eve = mysql_query("select * from `events` where  `category` = 'MME'");
				while($eved=mysql_fetch_array($eve))
				{
	
	?>
				<li>
					<figure>
						<img src="events/images/<?php echo $eved['category'];?>/<?php echo $eved['ename'];?>.png" title="<?php echo $eved['etitle'];?>">
						<figcaption>
							<h3><?php echo $eved['etitle'];?></h3>
							<span><?php echo $eved['schedule'];?></span>
							<a style="cursor:pointer;" onclick="shwevedetails(<?php echo $eved['eid'];?>)">Open</a>
						</figcaption>
					</figure>
				</li>
				<?php } ?>
			</ul>
		</div><!-- /container -->
