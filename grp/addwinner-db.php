<?php
include "connect.php"; //Include database connection settings file

if(isset($_POST['winners']) && isset($_POST['event']))
{
	mysql_query("update `events` set `winners` = '".mysql_escape_string(strip_tags($_POST['winners']))."' where eid = '".mysql_escape_string(strip_tags($_POST['event']))."'");
}
?>
