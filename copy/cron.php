<?php 
    include_once('../WSClient.php');
    include("../xmlapi.php"); 
    include("../config.inc.php"); 
    include("db.php");
    

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

				


	$query = "SELECT * from vtiger_potentialscf,vtiger_potential,vtiger_crmentity where vtiger_crmentity.crmid = vtiger_potential.potentialid and vtiger_potential.potentialid = vtiger_potentialscf.potentialid and vtiger_crmentity.deleted !=1 and cf_980 != ''";
	//echo $query;
	
		if($result = mysqli_query($con, $query))
	{
	     
	    if ($result->num_rows > 0) 
	    {
	    	while($row = mysqli_fetch_assoc($result)) 
	    	{
	     		$email = $row['cf_980'];
			$date = date('Y-m-d', strtotime('+1 month', strtotime($row['createdtime'])));
			$currentdate = date('Y-m-d');
			$date1 = date_create($currentdate);
			$date2 = date_create($date);
			$diff = date_diff($date1,$date2);
			$daysrem = $diff->format("%a days");	
			
			//echo $email." : " . $row['createdtime']. " : "	.$daysrem."<br/>";
				
				$mail->From = 'jason@my360crm.com';
				$mail->FromName = 'My360CRM';
				$mail->addAddress($email);     // Add a recipient             // Name is optional
				//$mail->addReplyTo('rashmi.comx@gmail.com', 'My360CRM');
				//$mail->addCC('preeti.comx@gmail.com');

				$mail->isHTML(true);  


					
				$mail->Subject = "Your My360CRM trial is ending soon - Upgrade now";
				$baseurl = $site_URL."website/".$renamed_company_name;
				$logo_url = $site_URL."layouts/v7/resources/Images/vtiger.png";

				$mail->Body = "<html>
								<head>
								<title>Trail Expiry from My360CRM </title>
								</head>
								<body style='width:600px; margin:20px auto; border:1px solid #000;'>
								<div style=' padding:20px;'>
								<div><a href= '".$baseurl."' target='_blank'><img src='".$logo_url."' style='height:100px'></a></div>
								<h1 style='font-size:18px; font-family:Arial, Helvetica, sans-serif; background:#0a73ba; padding:10px; color:#FFF; font-weight:normal; border-left:10px solid #000; margin-top:20px;'>My360CRM</h1>
								<div style=' font-family:'Comic Sans MS', cursive;'>
								<p style='font-size:18px;'>Hi ".$firstname."</p> 
								<p style='font-size:18px;'>Your trial is going to expire within ".$daysrem.". </p>
								</div>
								<div style=' font-family:'Comic Sans MS', cursive;'></div>
								<p><b>Thanks & Regards</b></p>
								<p><b> https://my360crm.com </b></p>
								</div>
								</body>
								</html>";
						
				   
			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				//echo 'Message has been sent';
			}
   
			
		}
	    }
         }