<?php
include "connect.php"; //Include database connection settings file

if(isset($_POST['sno']) && isset($_POST['c']))
{
	mysql_query("update `feedback` set `response` = '".mysql_escape_string(strip_tags($_POST['c']))."',rstatus='1' where sno = '".mysql_escape_string(strip_tags($_POST['sno']))."'");
}
?>
