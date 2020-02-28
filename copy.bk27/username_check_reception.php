<?php
if(isset($_POST['username']))
{
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
	$email = $_POST['username']; 

	// Check if email is valid and exist
	if($mail->check($email))
	{ 
		echo ''; 
	} else {
		echo '<div class="alert-box" style="color:red;">'.$email.' not exists.</div>'; 

         }
}
?>