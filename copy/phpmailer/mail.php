<?php
/* PHP MAiler Details */
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.my360crm.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jason@my360crm.com';                 // SMTP username
$mail->Password = '45Lakehills';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->From = 'jason@my360crm.com';
$mail->FromName = 'My360CRM';
$mail->addReplyTo('jason@my360crm.com', 'My360CRM');
$mail->addCC('preeti.comx@gmail.com');
$mail->isHTML(true); 
/* PHP Mailer Details */
