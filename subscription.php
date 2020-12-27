<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
 
$email_from = "contact@academiaedge.com";
$email_subject = "New subscription!";
 
    $email_body = "New user name: $name.\n".
                    "New user email: $visitor_email.\n";
 

$to = "feedback@voicesofcarmel.com";
 
 
$headers = "From: $email_from \r\n";
 
$headers .= "Reply-To: $visitor_email \r\n";
 
mail($to,$email_subject,$email_body,$headers);
 
header("Location: index.html");
 
?>