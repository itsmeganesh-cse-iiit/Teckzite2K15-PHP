<?php
session_start();
require_once("connect.php");
if(isset($_POST['tzfid']) && isset($_POST['tzfphone']) && isset($_POST['tzfuid']) && isset($_POST['tzfpasswd']))
{
$tzfid=strip_tags(htmlspecialchars(addslashes(strtoupper($_POST['tzfid']))));
$tzfphone=strip_tags(htmlspecialchars(addslashes(strtoupper($_POST['tzfphone']))));
$tzfuid=strip_tags(htmlspecialchars(addslashes($_POST['tzfuid'])));
$tzfpasswd=strip_tags($_POST['tzfpasswd']);

$dup=mysql_query("SELECT * FROM registration WHERE tzid='$tzfid' AND stuid='$tzfuid' AND phno='$tzfphone'");
if(mysql_num_rows($dup)==1)
{
if(mysql_query("UPDATE registration SET passwd='$tzfpasswd' WHERE stuid='$tzfuid'") or die(mysql_error()))
{
echo "success";
}

}
else
{
echo "invalid";
}
}
?>
