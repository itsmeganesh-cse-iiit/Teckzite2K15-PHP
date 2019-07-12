<?php
session_start();
require_once("connect.php");
if(isset($_SESSION['tzid']))
{
$tzid=strip_tags(htmlspecialchars(addslashes(strtoupper($_SESSION['tzid']))));
if(isset($_POST['tzfold']) && isset($_POST['tzfnew']))
{
$tzfold=strip_tags(htmlspecialchars(addslashes(strtoupper($_POST['tzfold']))));
$tzfnew=strip_tags(htmlspecialchars(addslashes($_POST['tzfnew'])));

$dup=mysql_query("SELECT * FROM registration WHERE stuid='$tzid' AND passwd='$tzfold'");
if(mysql_num_rows($dup)==1)
{
mysql_query("UPDATE registration SET passwd='$tzfnew' WHERE stuid='$tzid'");
echo "success";

}
else
{
echo "invalid";
}
}
}
?>
