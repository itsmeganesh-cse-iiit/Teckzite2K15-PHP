<?php
session_start();
require_once("connect.php");
if(isset($_SESSION['tzid']))
{
$tzid=strip_tags(htmlspecialchars(addslashes(strtoupper($_SESSION['tzid']))));
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['phone'])  && isset($_POST['email'])  && isset($_POST['department']) && isset($_POST['year']) && isset($_POST['college']))
{
$fname=strip_tags(htmlspecialchars(addslashes($_POST['fname'])));
$lname=strip_tags(htmlspecialchars(addslashes($_POST['lname'])));
$phone=strip_tags(htmlspecialchars(addslashes($_POST['phone'])));
$email=strip_tags(htmlspecialchars(addslashes($_POST['email'])));
$department=strip_tags(htmlspecialchars(addslashes($_POST['department'])));
$year=strip_tags(htmlspecialchars(addslashes($_POST['year'])));
$college=strip_tags(htmlspecialchars(addslashes($_POST['college'])));


if(mysql_query("UPDATE registration SET firstname='$fname',lastname='$lname',phno='$phone',email='$email',branch='$department',batch='$year' WHERE stuid='$tzid'") or die(mysql_error()))
{
echo "success";

}
}
}
?>
