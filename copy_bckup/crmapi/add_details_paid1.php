<?php
// Start the session
session_start();
header('Content-type: application/json');

include_once('../../WSClient.php');
include("../../xmlapi.php"); 
include("../../config.inc.php"); 


	
$username = "superadmin";
$password= "nAnNzKHH35z4lSd";
echo $service_url = $site_URL."webservice.php";
$url = $service_url."?operation=getchallenge&username=".$username."&password=".$password;


			$company_name = "abc12345";
			$firstname = "abc12345";
			$lastname = "abc12345";						
			$plan = "small";
			$email = "abc12345@gmail.com";
			$mobile = "1212121213";
			$password = "abc12345@gmail.com"; 
			$id = "11x219688"; 

			
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
										'element' => '{"accountname":"'.$company_name.'",
														"cf_912":"'.$firstname.'",
														"cf_914":"'.$lastname.'",
														"cf_908":"'.$plan.'",
														"cf_910":"'.$company_name.'",
														"email1":"'.$email.'",
														"phone":"'.$mobile.'",
														"assigned_user_id":"'.$userId.'",
														"cf_996":"failed",
														"cf_920":"'.$password.'","id":"'.$id.'"}',
										
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
							var_dump($decoded);
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
								"name"=>$firstname,
								"lname"=>$lastname,
								"plan"=>$plan,
								"company_name"=>$company_name,
								"email"=>$email,
								"mobile"=>$mobile,
								"password"=>$password,
								"id"=>$id));
                                                               
							}

				}
				else 
				{
					
					echo json_encode(array("status"=>"error"));
				}
							

	 
    
?>
