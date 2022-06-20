<?php
    // if(isset($_POST['sendEmail'])) 
    // {
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $phone = $_POST['phone'];
    //     $message = $_POST['message'];
    //     $to = 'motasimdeveloper@gmail.com';
    //     $subject = 'This is for test';

    //     $headers = 'From: Then Sender Name'.$name. "\r\n";
    //     $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n"; 
    //     $message = '<h1>Hi there.</h1><p>Thank you for testing</p>';
    //     $result = mail($to, $subject, $message, $headers);

    //     echo '<script>alert("Email sent ...")</script>';

        
    // }

$to      = 'motasimdeveloper@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>