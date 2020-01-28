<?php
// Start the session
session_start();
header('Content-type: application/json');

include_once('../../WSClient.php');
include("../../xmlapi.php"); 
include("../../config.inc.php"); 

$username = "superadmin";
$password= "nAnNzKHH35z4lSd";
$service_url = $site_URL."webservice.php";
$url = $service_url."?operation=getchallenge&username=".$username."&password=".$password;


			$company_name = $_POST['company_name'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$business_category = $_POST['business_category'];
			$plan = $_POST['plan'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			//$user_name = $_POST['user_name'];
			$password = $_POST['password']; 
			if($business_category == "My360Capture(CRM Only)"){
			 $api_url = "https://capture.my360crm.com/copy/crmapi/create_crm.php";
			}else if($business_category == "My360Register"){
			 $api_url = "https://register.my360crm.com/copy/crmapi/create_crm.php";
			}else if($business_category == "My360Reception"){
			 $api_url = "https://reception.my360crm.com/copy/crmapi/create_crm.php";
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
						'operation' => 'create',
						'sessionName' => $sessionName,
						'elementType' => 'Accounts',
						'element' => '{"accountname":"'.$company_name.'",
								"cf_912":"'.$firstname.'",
								"cf_914":"'.$lastname.'",
								"cf_918":"'.$business_category.'",
								"cf_908":"'.$plan.'",
								"cf_910":"'.$company_name.'",
								"email1":"'.$email.'",
								"phone":"'.$mobile.'",
								"assigned_user_id":"'.$userId.'",
								"cf_996":"Pending",
								"cf_920":"'.$password.'"}',
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
								"name"=>$firstname,
								"lname"=>$lastname,
								"plan"=>$plan,
								"company_name"=>$company_name,
								"email"=>$email,
								"mobile"=>$mobile,
								"password"=>$password,
								"api_url"=> $api_url,
								"id"=>$decoded->result->id));
                                                               
							}

				}
				else 
				{
					
					echo json_encode(array("status"=>"error"));
				}
							

	 
    
?>
