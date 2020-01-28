<?php
// Start the session
session_start();

include_once('../WSClient.php');
include("../xmlapi.php"); 
include("../config.inc.php"); 


	
$username = "superadmin";
$password= "nAnNzKHH35z4lSd";
$service_url = $site_URL."webservice.php";
$url = $service_url."?operation=getchallenge&username=".$username."&password=".$password;



			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$businessname = $_POST['businessname'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			$rafflenumber= $_POST['rafflenumber'];
			$comments = $_POST['comments']; 
			

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
										'operation' => 'create',
										'sessionName' => $sessionName,
										'elementType' => 'Leads',
										'element' => '{"firstname":"'.$firstname.'",
														"lastname":"'.$lastname.'",
														"cf_1004":"My360Capture",
														"cf_1036":"'.$comments.'",
														"cf_1038":"'.$rafflenumber.'",
														"email":"'.$email.'",
														"phone":"'.$mobile.'",
														"company":"'.$businessname.'",
														"leadsource":"Gold Coast Expo",
														"assigned_user_id":"'.$userId.'"}',
										
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
							if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') 
							{
								die('error occured: ' . $decoded->response->errormessage);
							}
							else
							{
								header('Location:register.php?form=success');

                                                               
							}

				}
				else 
				{
					
					echo "error";
				}
				    
?>
