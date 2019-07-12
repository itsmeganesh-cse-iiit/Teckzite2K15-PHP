<?php
include "connect.php"; //Include database connection settings file

if(isset($_POST['event']))
{
	$eid=$_POST['event'];
	
	$det=mysql_fetch_array(mysql_query("SELECT * FROM events WHERE eid='$eid'"));
	echo $det['winners'];
	}
?>
