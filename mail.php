<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$EmailTo = "YaserMuhammedJaser@gmail.com";
$Title = "Email from your website KEK";

// prepare email body text
$Fields .= "Name: ";
$Fields .= $name;
$Fields .= "\n";

$Fields .= "Email: ";
$Fields .= $email;
$Fields .= "\n";

$Fields .= "Subject: ";
$Fields .= $subject;
$Fields .= "\n";

$Fields .= "Message: ";
$Fields .= $message;
$Fields .= "\n";

// send email
$success = mail($EmailTo, $Title, $Fields, "From:" . $email);
