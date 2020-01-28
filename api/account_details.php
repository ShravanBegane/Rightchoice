<?php
// Start the session
session_start();
header('Content-type: application/json');

include_once('../WSClient.php');
include("../xmlapi.php"); 
include("../config.inc.php"); 


	
$username = "superadmin";
$password= "nAnNzKHH35z4lSd";
$service_url = $site_URL."webservice.php";
$url = $service_url."?operation=getchallenge&username=".$username."&password=".$password;

include("conn.php");

$statusMsg = '';

			if(empty($_POST['email']))
			{
				response("false","Email Not Found");
			}
			
			else if(empty($_POST['password']))
			{
				response("false","Password Not Found");
			}
			else
			{
			

				$email = $_POST['email'];
				$password = $_POST['password'];
				$query="SELECT * from vtiger_potential,vtiger_potentialscf,vtiger_crmentity 
					WHERE vtiger_potentialscf.`potentialid` = vtiger_crmentity.crmid 
					and vtiger_potential.`potentialid` = vtiger_crmentity.crmid
					and deleted = 0 and vtiger_potentialscf.cf_980 = '".$email."' and vtiger_potentialscf.cf_954 = '".md5($password)."'";
				$result = mysqli_query($conn,$query);
				$total_rows = mysqli_num_rows($result);

			        $query1="SELECT * from vtiger_account,vtiger_accountscf,vtiger_crmentity 
						WHERE vtiger_account.`accountid` = vtiger_crmentity.crmid
						and  vtiger_accountscf.`accountid` = vtiger_crmentity.crmid 
						and deleted = 0 and vtiger_account.email1 = '".$email."' and vtiger_accountscf.cf_920 = '".md5($password)."'";
				$result1 = mysqli_query($conn,$query1);
				$total_rows1 = mysqli_num_rows($result1);


				

				$json = array();


				if ($total_rows > 0) 
				{

					$json1 = array();


					while($row1 = mysqli_fetch_assoc($result))
					{
						$json['id'] = $row1['potentialid'];
						$json['email'] = $row1['cf_980'];
						$json['url'] = $row1['cf_952'];
						$json['related_to'] = '11x'.$row1['related_to'];
						$accountid = '11x'.$row1['related_to'];


				$contents = file_get_contents($url);
				$clima=json_decode($contents);
				if($clima->success == 1)
				{
						
						
							$sessionName = $clima->result->sessionName;
							$userId = $clima->result->userId;
							
							$url1 = $service_url."?operation=query&sessionName=".$sessionName."&query=SELECT * FROM Accounts where id = ".$accountid.";";
							$newurl1 = preg_replace("/ /", "%20", $url1);
							$contents1 = file_get_contents($newurl1);
							$clima1=json_decode($contents1);
							//var_dump($clima1);
							
							if($clima1->success == 1)
							{
								

								$json['device_count'] = $clima1->result[0]->cf_1050;
								$json['visitors_transcation_days'] = $clima1->result[0]->cf_1060;
								$json['visitors_count'] = $clima1->result[0]->cf_1062;

								

							}
															
							

				}		



						$data[] = $json;
							
					}
									
					//echo json_encode($data);
					$json1["success"] = "true";
					$json1['result'] = $data;
					echo json_encode($json1);
						
					
				}
				else if ($total_rows1 > 0) 
				{

					$json1 = array();


					while($row1 = mysqli_fetch_assoc($result1))
					{
						$json['id'] = $row1['accountid'];
						$json['email'] = $row1['email1'];
						$json['url'] = $row1['cf_916'];
						$json['device_count'] = $row1['cf_1050'];

						$data[] = $json;
							
					}
									
					//echo json_encode($data);
					$json1["success"] = "true";
					$json1['result'] = $data;
					echo json_encode($json1);
						
					
				}

				else 
				{

					$data[] = $json;
					//echo json_encode($data);
					$json1["success"] = "false";
					$json1['result'] = "No record found";
					echo json_encode($json1);
				}
			}
?>
