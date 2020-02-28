<?php

// Include library file
require_once 'verifyemail.class.php'; 

// Initialize library class
$mail = new VerifyEmail();

// Set the timeout value on stream
$mail->setStreamTimeoutWait(20);

// Set debug output mode
$mail->Debug= FALSE; 
$mail->Debugoutput= 'html'; 

// Set email address for SMTP request
$mail->setEmailFrom('from@email.com');

// Email to check
$email = $_POST['email']; 

// Check if email is valid and exist
if($mail->check($email)){ 
    echo '<div class="alert-box" style="color:green;text-align-center"> Email &lt;'.$email.'&gt; is exist! </div>'; 
}elseif(verifyEmail::validate($email)){ 
    echo '<div class="alert-box" style="color:red;text-align-center">Email &lt;'.$email.'&gt; is valid, but not exist!</div>'; 
}else{ 
    echo '<div class="alert-box" style="color:red;text-align-center">Email &lt;'.$email.'&gt; is not valid and not exist!</div>'; 
} 

?>