<?php
$to = "preeti.comx@gmail.com"; 
	$email_subject = "Your Detail" ;
		
	$email_body = "Port Pair:";
		
	$headers = "From: rashmi.comx@gmail.com";
	$headers .= "Reply-To: rashmi.comx@gmail.com";
	
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
if(mail($to,$email_subject,$email_body,$headers)){
echo "success";
} else {
echo "error";
}
?>	