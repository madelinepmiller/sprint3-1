<?php
if (isset($_POST['message'])) {
  $message = $_POST['message'];
  $to = 'criscilr@dukes.jmu.edu';
  $subject = 'New message from website';
  $headers = 'From: webmaster@example.com' . "\r\n" .
             'Reply-To: webmaster@example.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
}
?>
