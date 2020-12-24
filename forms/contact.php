<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
 
$email_from = "$visitor_email.\n";
 
$email_subject = "$subject\n";
 
$email_body = "Name: $firstname\n".
				"Message: $message\n";
 
$to = "rsriram101@gmail.com";
 
 
$headers = "From: $email_from \r\n";
 
$headers .= "Reply-To: $visitor_email \r\n";
 
mail($to,$email_subject,$email_body,$headers);
 
header("Location: index.html");
 
?>