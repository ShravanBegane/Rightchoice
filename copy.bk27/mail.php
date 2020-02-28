<?php
require 'phpmailer/PHPMailerAutoload.php';

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
			$mail->addAddress('preeti.comx@gmail.com');     // Add a recipient             // Name is optional
			$mail->addCC('preeti.comx@gmail.com');

			$mail->isHTML(true);  


					
				$mail->Subject = "My360CRM";
				$mail->Body = "<html>
                                <head>
                                <title>HTML email</title>
                                </head>
                                <body>
                                <p>This email contains HTML Tags!</p>
                                <table>
                                <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                </tr>
                                <tr>
                                <td>John</td>
                                <td>Doe</td>
                                </tr>
                                </table>
                                </body>
                                </html>";
					
				   
					if(!$mail->send()) {
						echo 'Message could not be sent.';
						echo 'Mailer Error: ' . $mail->ErrorInfo;
					} else {
						echo 'Message has been sent';
					}

?>