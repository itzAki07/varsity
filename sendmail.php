<?php

    echo "Hi";

    $name = trim($_POST['fname']);
    $email = $_POST['email'];
    $phone = $_POST['pn'];
    $message = "<br>Name : "  . $name  .  "<br>Phone Number: " . $phone . "<br>Email: " . $email .  "<br>" . $_POST['msg'];  

echo $message;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@idevresearchlabs.com>' . "\r\n";
// $headers .= 'Cc: dev@icraftweb.com' . "\r\n";
$to = "dev@idevresearchlabs.com";
$subject = "Web Enquiry";
mail($to,$subject,$message,$headers);

header('Location: thankyou.html');

?>