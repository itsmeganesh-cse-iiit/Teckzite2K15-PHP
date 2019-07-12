<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);
$fname="pra";
$lname="pra";
$fees="fee";
$phone="phone";
   $name = @trim(stripslashes($fname)); 
    $email = @trim(stripslashes("prathappuppala13@gmail.com")); 
    $subject = @trim(stripslashes("Teckzite2K15 Registration Details")); 
    $message = @trim(stripslashes("Thank You For Registering to Teckzite2K15")); 

    $email_from = 'admin@teckzite.in';
    $email_to = $email;//replace with your email
$subject = 'Teckzite2K15 Registration Details';

// message
$message = '
<!DOCTYPE html>
<html>

<head>
</head>

<body>

<div style="background-color: #A7C942; color:white; text-align:center; padding:5px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;">
<h1>Teckzite 2K15</h1>
</div>


<div style="width:650px;float:left;padding:10px;">
<h2>Registration Details of '.$fname.' '.$lname.'</h2>
<p>
<b>Hi '.$fname.' '.$lname.',</b><br>
You are Successfully Registered to Teckzite2K15.
</p>
<br>
<table style=" font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;width: 100%;border-collapse: collapse;">
  <tr>
    <th colspan="2" style=" font-size: 1.1em;text-align: left;padding-top: 5px;padding-bottom: 4px;background-color: #A7C942;color: #ffffff; font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">Details of '.$fname.' '.$lname.'</th>
  </tr>
  <tr >
    <td style="font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">Teckzite ID</td>
    <td  style="font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">'.$curtzid.'</td>
 
  </tr>
<tr>
 <tr >
    <td  style="color: #000000;background-color: #EAF2D3;font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">Name</td>
    <td  style="color: #000000;background-color: #EAF2D3;font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">'.$fname.' '.$lname.'</td>
 
  </tr>
<tr >
    <td  style="font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">Fee</td>
    <td  style="font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">'.$fees.'</td>
 
  </tr>

 <tr >
    <td  style="color: #000000;background-color: #EAF2D3;font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">Phone</td>
    <td  style="color: #000000;background-color: #EAF2D3;font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">'.$phone.' </td>
 
  </tr>
</table>
<br>
<b>Please Complete Payment Process at <a href="http://thecollegefever.com/teckzite">http://thecollegefever.com/teckzite</a> for the Completion of Registration Process
</div>

<div style="  background-color: #A7C942;color:white;clear:both;text-align:center;padding:5px;">
Copyright © <a href="http://www.teckzite.in" target="_blank" style="text-decoration:underline;color:white;">Teckzite2K15</a>
</div>

</body>
</html>

';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To:'.$fname.''. $lname.'' . "\r\n";
$headers .= 'From: Teckzite2K15 admin <admin@teckzite.in>' . "\r\n";

// Mail it
mail($email_to, $subject, $message, $headers);


    echo json_encode($status);
    die;
