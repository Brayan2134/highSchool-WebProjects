<?php
$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$text = $_POST['type'];
$formcontent=" From: $name \n Website: $website \n Type: $type \n Message: $text";
$recipient = "Brayanquevedo2134@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='return.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
