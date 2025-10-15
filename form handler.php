<?php
$name = $_POST{'name'};
$visitor_email = $_POST{'email'};
$subject = $_POST{'subject'};
$message = $_POST{'message'};

$email_form = 'mumoshadrack20@gmail.com'; // My domain Email


$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $Subject.\n".
             "User Message: $Message.\n";

$to = 'mumoshaddy71@gmail.com';

$headers = "From: $email_from \r\n";
            
?>