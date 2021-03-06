<?php
// Check for empty fields
if(empty($_POST['firstname']) ||
   empty($_POST['lastname'])  ||
   empty($_POST['email'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$firstname = strip_tags(htmlspecialchars($_POST['firstname']));
$lastname = strip_tags(htmlspecialchars($_POST['lastname']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'harrison.horler@gmail.com';
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nFirst name: $firstname\n\nLast name: $lastname\n\nEmail: $email_address\n\nMessage:\n$message\n\nIP address: " . $_SERVER['REMOTE_ADDR'];
$headers = "From: noreply@aaronhorler.com\n";
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
