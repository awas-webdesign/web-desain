<?php 
$name= $_POST['name'];
$visitor_email = $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Submmission';
$email_body = "User Name : $visitor_email.\n".
            "Subject : $subject.\n".
            "User Message : $message.\n";

$to = 'youremail@gmail.com';

$headers = "From : $email_form \r\n";
$headers .= "Reply-To : $visitor_email \r\n";

mail($to, $email_subject, $email_body,$headers);

header("Location : contact.html");
?>