<?php
// Start the session
session_start();
header('Content-type: application/json');
include_once('../../WSClient.php');
include("../../xmlapi.php"); 
include("../../config.inc.php"); 
	
$crmusername = "superadmin";
$crmpassword= "nAnNzKHH35z4lSd";
$service_url = $site_URL."webservice.php";
$url = $service_url."?operation=getchallenge&username=".$crmusername."&password=".$crmpassword;


			$company_name = $_POST['company_name'];
           	$companynamerename = preg_replace("/[^a-zA-Z]/", "", $company_name);
		
			$name = $_POST['name'];
			$plan = $_POST['plan'];
			$email = $_POST['email'];
			$password = $_POST['password']; 
			$payment_status = $_POST['payment_status'];
			$id = $_POST['id'];
			
			$folder_path = "website/business/".$plan."/";
			$path = '../../'.$folder_path.$companynamerename.'/';
			date_default_timezone_set("Asia/Calcutta");
			$renamed_company_name = date("ymdHis").$companynamerename;
			$url_link = $site_URL.$folder_path.$renamed_company_name.'/';


			$DB_HOST = "localhost";
			$DB_USER = "comx";
			$DB_PASS = "password";
			$DB_DST_NAME = "my360crm_business_".$plan."_".$renamed_company_name;

			// Create connection
			$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS);
			
			// Check connection
			if ($link->connect_error)
			{
				die("Connection failed: " . $link->connect_error);
			} 

				// Create database
				$sql = 'CREATE DATABASE ' . $DB_DST_NAME . '';
				
				//$sql = "CREATE DATABASE myDB";
				
				if ($link->query($sql) === TRUE)
				{
						//echo "Database ". $DB_DST_NAME ." created successfully";
						$filename = '../../'.$folder_path.'db.sql';
						//echo $filename;echo "<br/>";

						// Connect to MySQL server
						$con = @new mysqli($DB_HOST, $DB_USER, $DB_PASS,$DB_DST_NAME);

						// Check connection
						if ($con->connect_errno) 
						{
							echo "Failed to connect to MySQL: " . $con->connect_errno;
							echo "/*<br/>*/Error: " . $con->connect_error;
						}

						// Temporary variable, used to store current query
						$templine = '';
						// Read in entire file
						$lines = file($filename);
						// Loop through each line
						foreach ($lines as $line) {
						// Skip it if it's a comment
							if (substr($line, 0, 2) == '--' || $line == '')
								continue;

						// Add this line to the current segment
							$templine .= $line;
						// If it has a semicolon at the end, it's the end of the query
							if (substr(trim($line), -1, 1) == ';') {
								// Perform the query
								$con->query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . $con->error() . '<br /><br />');
								// Reset temp variable to empty
								$templine = '';
							}
						}
						//echo "Tables imported successfully";
				
						$salt = substr($email, 0, 2);
						$salt = '$1$' . str_pad($salt, 9, '0');

						$newpassword = crypt($password, $salt);
						$user_hash = md5($newpassword);

						//echo $newpassword;
				
						
						// Create connection
						$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS,$DB_DST_NAME);
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 
						
						$sql = "UPDATE vtiger_users SET user_name='$email',email1='$email',company_name='$company_name',user_hash='$user_hash',user_password = '$newpassword' WHERE id = '1'";
						
						if ($conn->query($sql) === TRUE) 
						{
							//echo "Record updated successfully";
						} else {
							echo "Error updating record: " . $conn->error;
						}	
				
				
					//get list of folders in directory			
					$dir = "../../".$folder_path;
					//echo $dir;echo "<br/>";
					
					$a = glob($dir.'crm*');
					//echo $a[0];
					//print_r($files);
					// Rename the folder		
					rename($a[0],$dir."$renamed_company_name");
					$application_unique_key1 = md5($renamed_company_name);
					//exit();

					if(file_exists($dir.$renamed_company_name)) 
					{
						//Rewrite the config.inc.php file
						//echo "TEST PASSED";
						$file = "../../$folder_path$renamed_company_name/config.inc.php";
						$file_contents = file_get_contents($file);

						$fh = fopen($file, "w");
						$file_contents = str_replace("company_name",$renamed_company_name,$file_contents);
						$file_contents = str_replace("plan",$plan,$file_contents);
						$file_contents = str_replace("ukey1",$application_unique_key1,$file_contents);
						fwrite($fh, $file_contents);
						fclose($fh);
						
						
						
					}
					
					
					
					
									require '../phpmailer/PHPMailerAutoload.php';

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
									$mail->addReplyTo('jason@my360crm.com', 'My360CRM');
									$mail->addCC('preeti.comx@gmail.com');

									$mail->isHTML(true);  


											
										$mail->Subject = "Login Details from My360CRM";
										$baseurl = $site_URL.$folder_path.$renamed_company_name;
										$logo_url = $site_URL."layouts/v7/resources/Images/vtiger.png";

										$mail->Body = "<html>
													<head>
													<title>Login Details from My360CRM </title>
													</head>
													<body style='width:600px; margin:20px auto; border:1px solid #000;'>
													<div style=' padding:20px;'>
													<div><a href= '".$baseurl."' target='_blank'><img src='".$logo_url."' style='height:100px'></a></div>
													<h1 style='font-size:18px; font-family:Arial, Helvetica, sans-serif; background:#0a73ba; padding:10px; color:#FFF; font-weight:normal; border-left:10px solid #000; margin-top:20px;'>My360CRM</h1>
													<div style=' font-family:'Comic Sans MS', cursive;'>
													<p style='font-size:18px;'>Hi ".$firstname."</p> 
													<p style='font-size:18px;'>Thank you for registering for your My360CRM. </p>
													<p style='font-size:18px;'>Your Dashbaord link is  '".$baseurl."'</p>
													<p style='font-size:18px;'>Login Details:</p>
													<p style='font-size:18px;'>Email: ".$email."</p>
													<p style='font-size:18px;'>Password: ".$password."</p>
													</div>
													<div style=' font-family:'Comic Sans MS', cursive;'></div>
																	<p><b>Thanks & Regards</b></p>
													<p><b> https://my360crm.com </b></p>
													</div>
													</body>
													</html>";
											
										   
											if(!$mail->send()) {
												//echo 'Message could not be sent.';
												//echo 'Mailer Error: ' . $mail->ErrorInfo;
											} else {
												//echo 'Message has been sent';
											}
											
											
											
											
								$contents = file_get_contents($url);
				$clima=json_decode($contents);
				if($clima->success == 1)
				{
	
						$accesskey = $clima->result->accesskey;
						$token = $clima->result->token;
						$accesskeymd5 = $clima->result->accesskeymd5; 	
						$sessionName = $clima->result->sessionName;
						$userId = $clima->result->userId;
						
							$curl = curl_init($service_url);
							
							
								$curl_post_data = array(
										'operation' => 'update',
										'sessionName' => $sessionName,
										'elementType' => 'Accounts',
										'element' => '{"accountname":"'.$name.'",
												"cf_996":"'.$payment_status.'",
												"cf_916":"'.$url_link.'",
												"assigned_user_id":"'.$userId.'",
												"id":"'.$id.'"}',
										
								);

							
							
							curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
							curl_setopt($curl, CURLOPT_POST, true);
							curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
							$curl_response = curl_exec($curl);
							if ($curl_response === false) 
							{
								$info = curl_getinfo($curl);
								curl_close($curl);
								die('error occured during curl exec. Additioanl info: ' . var_export($info));
							}
							curl_close($curl);
							$decoded = json_decode($curl_response);
							//var_dump($decoded);
							//$decoded = json_decode($curl_response);
							//echo "<pre>"; print_r($decoded);echo "</pre>";
							//echo $decoded->result->id;

							if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') 
							{
								die('error occured: ' . $decoded->response->errormessage);
							}
							else
							{
								echo json_encode(array("status"=>"success",
								"name"=>$name,
								"id"=>$id));
                                                               
							}

				}
				else 
				{
					
					echo json_encode(array("status"=>"error"));
				}			
											
																	
											
														
				} 
					?>
