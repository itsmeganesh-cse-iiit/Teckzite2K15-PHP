
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
</style><?php
include("connect.php");
if(isset($_POST['nid']))
{
	
$nid=$_POST['nid'];
$noti=mysql_query("SELECT * FROM notifications WHERE nid='$nid'");
while($notif=mysql_fetch_array($noti))
{
	$notetoid=$notif['eid'];
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
<table class="notices"  width="100%">
<tr id="subject" style="text-align:center;max-width:400px;"><td colspan="3" ><?php echo $notif['title'];?></td></tr>
<tr class="details"><td>Notice ID: <big><?php echo $nid;?></big></td><td colspan="2">Posted :<big> <?php echo $notif['time'];?></big></td></tr>
<tr id="description"  style="text-align:center;width:100%;border:1px dotted 	#999999;"><td colspan="3"><?php echo $notif['content'];?><br><br><?php if($notif['file']=="nofiles"){}else{echo "Attachment : <a style='color:black;' target='_blank' href='notice_files/".$notif['file']."' title=".$notif['file']."><big>".$notif['file']."</big></a>";}?></td></tr>
<tr class="details"><td>Sent to: <big><?php if($notetoid=="ALL")
					{echo "ALL";} else {echo $noticebranch." ~ ".$noticeto;} ?> </big></td><td>Sent by: <big><?php echo $notif['aid'];?></td><td><a href="javascript:void(0);" class="button rosy small" onClick="prathap_hide_popup_boxes();">Close</a></td></tr>
</table>
<?php
}
}
?>
