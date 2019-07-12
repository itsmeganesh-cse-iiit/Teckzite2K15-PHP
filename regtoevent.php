<?php
session_start();
error_reporting(0);
if(isset($_SESSION['tzid']))
{
$user=$_SESSION['tzid'];
@include "connect.php";
if(isset($_POST['eid']) && isset($_POST['len']) && isset($_POST['ids']))
{
$eid=$_POST['eid'];
$ids=$_POST['ids'];
$len=$_POST['len'];
$ip=$_SERVER['REMOTE_ADDR'];
$tids=array();
$tids=explode("~",$ids);
$count=0;
$flag=0;
$cflag=0;

for($k=0;$k<count($tids);$k++)
	{
	$idche=mysql_fetch_array(mysql_query("SELECT stuid FROM registration WHERE stuid='".$tids[$k]."' "));
	if ($idche)
		$count++;
	else	
		echo $tids[$k]." Not Registered<br>";
	}
	
		if($count==$len)
		{
	$k1=mysql_query("SELECT MAX(teamid) FROM teams WHERE eid='$eid'");
	$teamid=0;
	$k2=mysql_fetch_array($k1);
	$teamid=$k2[0];
	$teamid++;
	$cflag=0;
	$mine=mysql_query("SELECT ids FROM teams WHERE eid='$eid'");
	while($p2=mysql_fetch_array($mine))
		{
		$spl=explode("~",$p2['ids']);
		$cflag=0;
		for($k=0;$k<count($spl);$k++)
			{
			for($kt=1;$kt<=$len;$kt++)
				{
				if($spl[$k]==$tids[$k])
					$cflag=1;
				}	
			}
		}
	if($cflag==1){
		$cflag=0;
		echo "One/more are already Registered.....";
		}
	else
		{
		mysql_query("INSERT INTO teams (`teamid`, `ids`, `eid`,`regdoneby`,`time`, `ip`) VALUES ('$teamid', '$ids','$eid', '$user',NOW(), '$ip')");
		
		echo "success";
		}
	



}
}
else
{
echo "Not Registered";	
}
}

?>

