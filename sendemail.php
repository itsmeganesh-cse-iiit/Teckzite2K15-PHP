<?php
session_start();
include "connect.php";
if(isset($_SESSION['tzid']))
{
if(isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['msg']))
{
$id=$_SESSION['tzid'];
$name=strip_tags(htmlspecialchars(addslashes(strtoupper($_REQUEST['name']))));
$type=strip_tags(htmlspecialchars(addslashes(strtoupper($_REQUEST['email']))));
$msg=strip_tags(htmlspecialchars(addslashes(strtoupper($_REQUEST['msg']))));
$ip=$_SERVER['REMOTE_ADDR'];
mysql_query("INSERT INTO `tz_2k15`.`feedback` (`sno`, `id`,`name`, `type`, `msg`, `ip`) VALUES (NULL,'$id','$name', '$type', '$msg', '$ip')") or die(mysql_error());
echo "<table><tr height='50px'><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/success.png' width='50px'></td></tr></table><table><tr><td style='color:white;font-weight:bold;margin-top:0px;padding-top:0px;'>Message Posted Successfully</td></tr></table>";
}
else
	echo "pora katre";
}
else
{
echo "<table><tr height='50px'><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/login.png' width='50px'></td></tr></table><table><tr><td style='color:white;font-weight:bold;margin-top:0px;padding-top:0px;'>Please Login to Post Message</td></tr></table>";
}

?>

