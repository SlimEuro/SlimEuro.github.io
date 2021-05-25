<?php
$name = $_POST['name'];
$visitor_email = $POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@mywebsite.com';

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
			  "User Email: $visitor_email.\n".
			  "User message: $message.\n";


$to = 'kronosamancho@gmail.com';

$headers = "Form: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>