<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'joke.vanoijen@gmail.com'; //<-- Put your E-Mail address here 
    $subject = 'New Message from website';

    $body = "From: $name <br> E-Mail: $email <br> Message: <br> $message";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:' . $email. "\r\n";
    $headers .= 'Cc:' . $email. "\r\n";

    mail ($to, $subject, $body, $headers);
?>