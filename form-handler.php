<?php
$name=$_POST['name'];
$visitor_email = $_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='University0019@gmail.com';

$email_subject='new form submission';

$email_body="user name: $name.\n".
            "user email:$visitor_email.\n"
            "subject:$subject.\n".
            "user message:$message.\n";
            $to='aliceroy1430@gmail.com';
            $headers="From: $email_from\r\n"
            $headers .="Reply-To:$visitors_email\r\n";
            mail($to,email_subject,$email_body,$headers);
            header("Location: contact.html");
            ?>