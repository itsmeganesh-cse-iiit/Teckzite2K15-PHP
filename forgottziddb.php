<?php
session_start();
require_once("connect.php");
if(isset($_POST['tzfphone']) && isset($_POST['tzfemail']))
{
$tzfphone=strip_tags(htmlspecialchars(addslashes($_POST['tzfphone'])));
$tzfemail=strip_tags(htmlspecialchars(addslashes($_POST['tzfemail'])));

$dup=mysql_query("SELECT * FROM registration WHERE phno='$tzfphone'");
if(mysql_num_rows($dup)==1)
{
while($detf=mysql_fetch_array($dup))
{
$tid=$detf['tzid'];
echo $tid;
}

}
else
{
echo "invalid";
}
}
?>
