<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'udhaya@teampumpkin.com';          // SMTP username
$mail->Password = 'AdmiN@UD'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('udhaya@teampumpkin.com', 'UD');
$mail->addReplyTo('udhaya@teampumpkin.com', 'UD');
$mail->addAddress('udhaya@teampumpkin.com');   // Add a recipient
// $mail->addCC('reachus@merusridevelopers.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>How to Send Email using PHP in Localhost</h1>';
$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>Udhaya</b></p>';

$mail->Subject = 'Email from Localhost by Udhaya';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
