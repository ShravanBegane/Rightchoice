<?php
header("Content-Type:application/json");
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
				$query="SELECT * from vtiger_potentialscf,vtiger_crmentity 
					WHERE vtiger_potentialscf.`potentialid` = vtiger_crmentity.crmid 
					and deleted = 0 and vtiger_potentialscf.cf_980 = '".$email."' 
					and vtiger_potentialscf.cf_954 = '".md5($password)."'";
				$result = mysqli_query($conn,$query);
				$total_rows = mysqli_num_rows($result);
				$json = array();


				if ($total_rows > 0) 
				{

					$json1 = array();


					while($row1 = mysqli_fetch_assoc($result))
					{
						$json['id'] = $row1['potentialid'];
						$json['cf_980'] = $row1['cf_980'];
						$json['cf_952'] = $row1['cf_952'];
						$json['device_count'] = $row1['cf_1048'];
						$json['days'] = $row1['cf_1060'];
						$json['visitors_count'] = $row1['cf_1062'];


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
