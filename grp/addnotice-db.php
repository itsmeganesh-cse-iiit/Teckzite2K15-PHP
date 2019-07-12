<?php

session_start();
	include("connect.php");

if(isset($_SESSION['admin'])) 
{

if(isset($_POST['submit'])) 
{
	//form variables
	
	$subject=$_POST['subject'];
	$description=$_POST['description'];
	$nto=$_POST['nto'];
	$sentby=$_POST['sentby'];
	$ip=$_SERVER['REMOTE_ADDR'];
	
	
	//file variables
     $filename = $_FILES['File']['name'];
     if($filename=="")
     {
		 
		 $query = mysql_query("INSERT INTO `notifications`(title,content,eid,aid,posted_date,time,ip) VALUES ('$subject','$description','$nto','$sentby',CURDATE(),NOW(),'$ip')") or die(mysql_error());
if($query){
	
    echo "<script>alert('Notification titled ".$subject." added successfully');window.location='addnotice.php';</script>";
    }
    
	 }
	 else
	 {
    $tmpname  = $_FILES['File']['tmp_name'];
    $filesize = $_FILES['File']['size'];
    $filetype = $_FILES['File']['type'];
    $fp = fopen($tmpname, 'r');
    $file = fread($fp, filesize($tmpname));
    $file = addslashes($file);
    fclose($fp);
    
		$fileName = $_FILES['File']['name'];
		$tmpName  = $_FILES['File']['tmp_name'];
		$fileSize = $_FILES['File']['size'];
		$fileType = $_FILES['File']['type'];
		$uploadDir = '../notice_files/';
		
		$fil=mysql_query("SELECT * FROM notifications WHERE file='$filename'");
		
		if(mysql_num_rows($fil)<1)
		{
			$filePath = $uploadDir . $filename;
$result = move_uploaded_file($tmpName, $filePath);
if (!$result) {
echo "Error uploading file";
exit;
}


$query = mysql_query("INSERT INTO `notifications`(title,content,eid,aid,file,posted_date,time,ip) VALUES ('$subject','$description','$nto','$sentby','$filename',CURDATE(),NOW(),'$ip')") or die(mysql_error());
if($query){
    echo "<script>alert('Notification titled ".$subject." added successfully');window.location='addnotice.php';</script>";
   
    }
}
else
{
	  echo "<script>alert('Please Change File Name before uploading..');window.location='addnotice.php';</script>";
}
}
}
}
else
{
	header("location:index.php");
}
?>
