<?php
session_start();
require_once("connect.php");

if(isset($_POST['stuid']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['department']) && isset($_POST['year']) && isset($_POST['college']) && isset($_POST['passwd']))
{
       
	$stuid=strip_tags(htmlspecialchars($_POST['stuid']));
	$fname=strip_tags(htmlspecialchars($_POST['fname']));
	$lname=strip_tags(htmlspecialchars($_POST['lname']));
	$phone=strip_tags(htmlspecialchars($_POST['phone']));
	$email=strip_tags(htmlspecialchars($_POST['email']));
	$gender=strip_tags(htmlspecialchars($_POST['gender']));
	$department=strip_tags(htmlspecialchars($_POST['department']));
	$year=strip_tags(htmlspecialchars($_POST['year']));
	$college=strip_tags(htmlspecialchars($_POST['college']));
	$passwd=strip_tags(htmlspecialchars($_POST['passwd']));
	$fees="100";
	$ip=$_SERVER['REMOTE_ADDR'];
	
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
		 if(mysql_query("INSERT INTO `registration`(stuid,tzid,passwd,firstname,lastname,gender,batch,branch,phno,email,college,reg_fee) VALUES('$stuid','$curtzid','$passwd','$fname','$lname','$gender','$year','$department','$phone','$email','$college','$fees')") or die(mysql_error()))
	 {
		  if(mysql_query("INSERT INTO `fees`(stuid,tzid,amount,IP) VALUES('$stuid','$curtzid','$fees','$ip')") or die(mysql_error()))
	 {
		
		  echo $curtzid;
	  }
	 }
	}
	else
	{
		while($det=mysql_fetch_array($lastzid))
		{
			$tzzid=$det['tzid'];
		}
		//getting last four numbers
		$tzzid=substr($tzzid, 3, 6);
		//assigning new id
	 $curtzid=$tzzid+1;
	 //new teckziteid
	 $curtzid="TZN00".$curtzid;
 if(mysql_query("INSERT INTO `registration`(stuid,tzid,passwd,firstname,lastname,gender,batch,branch,phno,email,college,reg_fee) VALUES('$stuid','$curtzid','$passwd','$fname','$lname','$gender','$year','$department','$phone','$email','$college','$fees')") or die(mysql_error()))
	 {
		  if(mysql_query("INSERT INTO `fees`(stuid,tzid,amount,IP) VALUES('$stuid','$curtzid','$fees','$ip')") or die(mysql_error()))
	 {
              
 echo  $curtzid;

    

	  }
  }
	 }
	
}
		 
	 }
		
}
?>
