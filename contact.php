<?php

$fname = $_POST['fname'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'Confirmation Services - Website';
$email_subject = 'Contact Form';
$email_body = "Name: $fname.\n".
               "Email: $email.\n".
               "Message: $message.\n";

$to = "isaacadepitan@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-to: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: ./success.html")
?>