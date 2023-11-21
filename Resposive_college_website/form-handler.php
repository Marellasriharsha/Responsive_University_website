<?php
$name = $_POST['name'];
$visitor_emial = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'sriharshamarella452@gmail.com';

$email_subject = 'New From Submission';

$email_body = "User Name: $name.\n".

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $Message.\n";
$to = 'sriharsha0801@gmail.com'

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_emial \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>