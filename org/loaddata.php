<?php
session_start();
require_once("connect.php");
?>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 60%;
    border-collapse: collapse;
}

#customers td, #customers th {
    font-size: 1.2em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;
     text-align: center;
}

#customers th {
    font-size: 1.1em;
    text-align: center;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #ffffff;
}

#customers tr:nth-child(2n) td {
    color: #000000;
    background-color: #EAF2D3;
}
</style>
<?php
if( isset($_POST['event']))
{
	$eid=$_POST['event'];
	
$dat=mysql_query("SELECT * FROM teams WHERE eid='$eid'");
if(mysql_num_rows($dat)<1)
				{
                                        
                                        echo "<br>";
					echo "<span class='note red rounded'>No one Registered</span>";
				}
				else
				{


echo "<table id='customers'>";
echo " <tr> <th >Event</th><th>Team ID</th><th>IDs</th></tr>";
while($det=mysql_fetch_array($dat))
{
$bran=mysql_fetch_array(mysql_query("SELECT * FROM events WHERE eid='$eid'"));
?>
<?php 
while($p2=mysql_fetch_array($dat))
		{
?>
<tr><td><?php echo $bran['category']." ~ ".$bran['etitle']; ?></td><td><?php echo $p2['teamid'];?></td>
<td>
<?php
		$spl=explode("~",$p2['ids']);
for($k=0;$k<count($spl);$k++)
			{
				$paid=mysql_fetch_array(mysql_query("SELECT fees FROM registration WHERE stuid='".$spl[$k]."'"));
				if($paid['fees']=="")
				{
					echo "<span style='background:#f2f2f2;margin-bottom:10px;'><span style='color:#DD4936;font-weight:bold;'>".$spl[$k]."</span></span><br>";
				}
				else
				{
			echo "<span style='background:#f2f2f2;color:black;font-weight:bold;'>".$spl[$k]."</span><br>";
	      	
}
		
}
echo "</td></tr>";
}
	?>
<?php
}
echo "<tr><td></td><td></td><td></td></tr></table>";
}
}
?>
