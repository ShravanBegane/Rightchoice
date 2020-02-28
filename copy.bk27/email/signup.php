<?php

require 'phpmailer/PHPMailerAutoload.php';
// if the sign up form was submitted
if($_POST){
 
    $email = isset($_POST['email']) ? $_POST['email'] : "";
 
    // posted email must not be empty
    if(empty($email)){
        echo "<div>Email cannot be empty.</div>";
    }
 
    // must be a valid email address
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<div>Your email address is not valid.</div>";
    }
 
    else{
 
        include 'db.php';
 
        // check first if record exists
        $query = "SELECT id FROM testusers WHERE email = ? and verified = '1'";
        $stmt = $con->prepare( $query );
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $num = $stmt->rowCount();
 
        if($num>0){
            echo "<div>Your email is already activated.</div>";
        }
 
        else{
 
            // check first if there's unverified email related
            $query = "SELECT id FROM testusers WHERE email = ? and verified = '0'";
            $stmt = $con->prepare( $query );
            $stmt->bindParam(1, $email);
            $stmt->execute();
            $num = $stmt->rowCount();
 
            if($num>0){
 
                // you have to create a resend verification script
                echo "<div>Your email is already in the system but not yet verified.</div>";
            }
 
            else{
 
                // now, compose the content of the verification email, it will be sent to the email provided during sign up
                // generate verification code, acts as the "key"
                $verificationCode = md5(uniqid("yourrandomstringyouwanttoaddhere", true));
 
                // send the email verification
                $verificationLink = "https://internal.my360crm.com/copy/email/activate.php?code=" . $verificationCode;
				
				
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
				$mail->addAddress($email);     // Add a recipient             // Name is optional
				$mail->addCC('preeti.comx@gmail.com');

				$mail->isHTML(true);  
				
 
                $htmlStr = "";
                $htmlStr .= "Hi " . $email . ",<br /><br />";
 
                $htmlStr .= "Please click the button below to verify your subscription and have access to the download center.<br /><br /><br />";
                $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";
 
                $htmlStr .= "Kind regards,<br />";
                $htmlStr .= "<a href='https://my360crm.com/' target='_blank'>MY360CRM</a><br />";
 
                $mail->Body = $htmlStr;
 
                // send email using the mail function, you can also use php mailer library if you want
                if($mail->send()) 
				{
 
                    // tell the user a verification email were sent
                    echo "<div id='successMessage'>A verification email were sent to <b>" . $email . "</b>, please open your email inbox and click the given link so you can register.</div>";
 
 
                    // save the email in the database
                    $created = date('Y-m-d H:i:s');
 
                    //write query
                    $query = "INSERT INTO
                                testusers
                            SET
                                email = ?,
                                verification_code = ?,
                                created = ?,
                                verified = '0'";
 
                    $stmt = $con->prepare($query);
 
                    $stmt->bindParam(1, $email);
                    $stmt->bindParam(2, $verificationCode);
                    $stmt->bindParam(3, $created);
 
                    // Execute the query
                    if($stmt->execute())
					{
                        // echo "<div>Unverified email was saved to the database.</div>";
                    }else{
                        echo "<div>Unable to save your email to the database.";
                        //print_r($stmt->errorInfo());
                    }
 
                }
				else
				{
                    die("Sending failed.");
                }
            }
 
 
        }
 
    }
 
}
?>