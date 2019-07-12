<?php
session_start();
require_once("connect.php");
date_default_timezone_set("Asia/Calcutta");
if(isset($_POST['stuid']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['block']) && isset($_POST['room']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['department']) && isset($_POST['year']) && isset($_POST['college']) && isset($_POST['passwd']))
{
       
	$stuid=strip_tags(htmlspecialchars($_POST['stuid']));
	$fname=strip_tags(htmlspecialchars($_POST['fname']));
	$lname=strip_tags(htmlspecialchars($_POST['lname']));
	$block=strip_tags(htmlspecialchars($_POST['block']));
	$room=strip_tags(htmlspecialchars($_POST['room']));
	$phone=strip_tags(htmlspecialchars($_POST['phone']));
	$email=strip_tags(htmlspecialchars($_POST['email']));
	$gender=strip_tags(htmlspecialchars($_POST['gender']));
	$department=strip_tags(htmlspecialchars($_POST['department']));
	$year=strip_tags(htmlspecialchars($_POST['year']));
	$college=strip_tags(htmlspecialchars($_POST['college']));
	$passwd=strip_tags(htmlspecialchars($_POST['passwd']));
	$email=$stuid."@rgukt.in";
	$fees="100";
	$ip=$_SERVER['REMOTE_ADDR'];
	$stuclass=$block."-".$room;
	
	
	//check if registered with same mobile and email
	$indata=mysql_query("select * from `data` where `id` = '".mysql_real_escape_string($stuid)."'");
	$ifreg = mysql_query("select * from `registration` where `stuid` = '".mysql_real_escape_string($stuid)."'");
	if(mysql_num_rows($indata)<1)
	{
		echo "not in database";
    }
    else
    {
	 if(mysql_num_rows($ifreg)>0)
	{
		echo "Already Registered";
    }
    //registering
     else
     {
		 //getting recent tzid
	$lastzid = mysql_query("select * from `registration` ORDER BY sno DESC LIMIT 1 ");
	if(mysql_num_rows($lastzid)<1)
	{
		//new teckziteid
		$curtzid="TZN0001";
		 if(mysql_query("INSERT INTO `registration`(stuid,tzid,passwd,firstname,lastname,class,gender,batch,branch,phno,email,college,reg_fee) VALUES('$stuid','$curtzid','$passwd','$fname','$lname','$stuclass','$gender','$year','$department','$phone','$email','$college','$fees')") or die(mysql_error()))
	 {
		
		
		  echo $curtzid;
	  
	 }
	}
	else
	{
		while($det=mysql_fetch_array($lastzid))
		{
			$tzzid=$det['tzid'];
		}
		//getting last four numbers
		$tz1=substr($tzzid, 0, 6);
		$tz2=substr($tzzid, 0, 5);
		$tz3=substr($tzzid, 0, 4);
		$tz4=substr($tzzid, 0, 3);
		$tzzid=substr($tzzid, 3, 6);
		if($tz1=='TZN000')
		{
			$curtzid=$tzzid+1;
			if($curtzid=='10')
			{
				$curtzid="TZN00".$curtzid;
			}
			else
			{
			$curtzid="TZN000".$curtzid;
			}
			
		}
		else if($tz2=='TZN00')
		{
			$curtzid=$tzzid+1;
			if($curtzid=='100')
			{
				$curtzid="TZN0".$curtzid;
			}
			else
			{
			$curtzid="TZN00".$curtzid;
			}
		}
		else if($tz3=='TZN0')
		{
			$curtzid=$tzzid+1;
			if($curtzid=='1000')
			{
				$curtzid="TZN".$curtzid;
			}
			else
			{
			$curtzid="TZN0".$curtzid;
			}
		}
		else
		{
			$curtzid=$tzzid+1;
			$curtzid="TZN".$curtzid;
		}
		//assigning new id
	 
	 //new teckziteid
	 $cdate=date("j m Y");
	 $ctime=date("h:i A");
 if(mysql_query("INSERT INTO `registration`(stuid,tzid,passwd,firstname,lastname,class,gender,batch,branch,phno,email,college,reg_fee,rdate,rtime) VALUES('$stuid','$curtzid','$passwd','$fname','$lname','$stuclass','$gender','$year','$department','$phone','$email','$college','$fees','$cdate','$ctime')") or die(mysql_error()))
	 {
		
              
 echo  $curtzid;

    

	  
  }
	 }
	
}
		 
	 }
		
}
?>
