<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@ijnlfs.com';
$email_subject='New Form Submission';
$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n". 
            "User subject: $subject.\n".
            "User message: $message.\n";
 $to='dgdgdbfbf.com';
 $headers="from:$email_from \r\n";
 $headers="Reply-To:$visitor_email \r\n";
 
 mail($to,$email_subject,$email_body,$headers);
 header("Location: contact.html");
 ?>
