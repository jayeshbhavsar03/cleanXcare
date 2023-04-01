
<?php

ini_set("SMTP","tls://smtp.gmail.com");
ini_set("smtp_port","587");

$to_email = "aye.thx@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: athrrs2@gmail.com";


 



mail($to_email, $subject, $body, $headers); 
    //echo "Email successfully sent to $to_email...";
//} else {
    //echo "Email sending failed...";






?>