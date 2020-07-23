<?php
$name = $_POST['email'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'Literastyle@gmail.com';

$email_subject = "User Name: $name .\n".
"User Email: $visitor_email.\n" ;

$to = "Literastyle@gmail.com";

$headers = "FROM: $email_from \r\n";

mail($to, $email_subject,$email_body,$headers);

header("Location: index.html");