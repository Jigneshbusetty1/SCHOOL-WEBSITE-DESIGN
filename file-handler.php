<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@yourwebsite.com';
$email_subject='New form submission';
$email_body="User name:$name.\n".
            "User email:$visitor_email.\n".
            "Subject:$subject.\n".
            "User message:$message.\n";
 
$to='jigneshbusetty3@gmail.com';
$headres="From:$email_from\r\n";
$headres="Reply-To:$visitor_email \r\n";


mail($to,$email_subject,$email_body,$headres);
header("Location:contact.html"); 


?>