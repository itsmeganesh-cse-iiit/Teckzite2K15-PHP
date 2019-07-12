<?php
session_start();
require_once("connect.php");
if(isset($_POST['tzid']) && isset($_POST['tzpasswd']))
{
$tzid=strip_tags(htmlspecialchars(addslashes(strtoupper($_POST['tzid']))));
$tzpasswd=strip_tags(htmlspecialchars(addslashes($_POST['tzpasswd'])));

$dup=mysql_query("SELECT * FROM registration WHERE stuid='$tzid' AND passwd='$tzpasswd'");
if(mysql_num_rows($dup)==1)
{
$_SESSION['tzid']=$tzid;
$_SESSION['quiz_login_id']=$tzid;
if($tzid=="N100145")
    $_SESSION['quiz_admin_id']=$tzid;
echo "success";

}
else
{
echo "invalid";
}
}
?>
