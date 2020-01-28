<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.my360crm.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jason@my360crm.com';                 // SMTP username
$mail->Password = '45Lakehills';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->From = 'jason@my360crm.com';
$mail->FromName = 'Mailer';
$mail->addAddress('preeti.comx@gmail.com', 'Preeti');     // Add a recipient             // Name is optional
$mail->addReplyTo('rashmi.comx@gmail.com', 'Rashmi');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}