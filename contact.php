<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
 
$email_from = "$visitor_email.\n";
 
$email_subject = "Feedback: $subject\n";
 
$email_body = "Name: $firstname $lastname.\n".
				"Message: $message\n";
 
$to = "rsriram101@gmail.com";
 
 
$headers = "From: $email_from \r\n";
 
$headers .= "Reply-To: $visitor_email \r\n";
 
mail($to,$email_subject,$email_body,$headers);
 
header("Location: index.html");
 
?>