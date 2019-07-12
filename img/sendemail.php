<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);

    $name = @trim(stripslashes("prathap puppala")); 
    $email = @trim(stripslashes("prathappuppala13@gmail.com")); 
    $subject = @trim(stripslashes("subject")); 
    $message = @trim(stripslashes("message")); 

    $email_from = "admin@teckzite.in";
    $email_to = 'prathappuppala13@gmail.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
