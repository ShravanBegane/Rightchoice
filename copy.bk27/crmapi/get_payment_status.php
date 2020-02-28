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


			        $id = $_POST['id'];
				$contents = file_get_contents($url);
				$clima=json_decode($contents);
				if($clima->success == 1)
				{
						
						
							$sessionName = $clima->result->sessionName;
							$userId = $clima->result->userId;
							
							$url1 = $service_url."?operation=query&sessionName=".$sessionName."&query=SELECT * FROM Accounts where id = ".$id.";";
							$newurl1 = preg_replace("/ /", "%20", $url1);
							$contents1 = file_get_contents($newurl1);
							$clima1=json_decode($contents1);
							
							
							if($clima1->success == 1)
							{
								
								
								$id = $clima1->result[0]->id;
								$clima1firstname = $clima1->result[0]->accountname;
								$clima1lastname = $clima1->result[0]->cf_914;
								$clima1plan = $clima1->result[0]->cf_908;
								$clima1company_name = $clima1->result[0]->cf_910;
								$clima1email = $clima1->result[0]->email1;
								$clima1mobile = $clima1->result[0]->phone;
								$clima1password = $clima1->result[0]->cf_920;
								$clima1payment = $clima1->result[0]->cf_996;


								//$curl = curl_init($service_url);		
								echo json_encode(array("status"=>"success",
								"name"=>$clima1firstname,
								"lname"=>$clima1lastname,
								"plan"=>$clima1plan,
								"company_name"=>$clima1company_name,
								"email"=>$clima1email,
								"mobile"=>$clima1mobile,
								"password"=>$clima1password,
								"payment"=>$clima1payment,
								"id"=>$id));


							}
															
							

				}
?>
