<?php
$to = "criscilr@dukes.jmu.edu";
$subject = "New request ready";
$message = "A new request is ready for you to review.";
$headers = "From: lrcriscitello@gmail.com" . "\r\n" .
    "Reply-To: webmaster@example.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);
?>
