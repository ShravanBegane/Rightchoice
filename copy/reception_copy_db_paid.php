<?php

include("settings.php"); 

// include("server_splitter_init.php");

   // $path = $_SERVER['DOCUMENT_ROOT'];
   // $path .= "/copy/crmapi/server_splitter.php";

include('crmapi/server_splitter.php'); 
   



			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$business_category = $_POST['business_category'];
			$plan = $_POST['plan'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			$password = $_POST['password']; 
			$company_name = $_POST['company_name'];
			
            		$companynamerename = preg_replace("/[^a-zA-Z]/", "", $company_name);
			$renamed_company_name = date("ymdHis").$companynamerename;
			
			$_SESSION["firstname"] = $_POST['firstname'];
			$_SESSION["lastname"] = $_POST['lastname'];
			$_SESSION["business_category"] = $_POST['business_category'];
			$_SESSION["plan"] = $_POST['plan'];
			$_SESSION["email"] = $_POST['email'];
			$_SESSION["company_name"] = $_POST['company_name'];
			$_SESSION["mobile"] = $_POST['mobile'];
			$_SESSION["password"] = $_POST['password'];
			
			
			$folder_path = "website/reception/".$plan."/";
			$path = '../'.$folder_path.$companynamerename.'/';
			$url_link = "https://dev.rightchoice.io/".$folder_path.$renamed_company_name.'/';

			$url_link_split = $crm_base_url.'reception/'.$plan.'/'.$renamed_company_name.'/';

			
			/* Password Encryption for inserting to vtiger_users */
			$salt = substr($email, 0, 2);
			$salt = '$1$' . str_pad($salt, 9, '0');

			$newpassword = crypt($password, $salt);
			$user_hash = md5($newpassword);
			//echo $newpassword;
			/* Password Encryption for inserting to vtiger_users */
			$DB_DST_NAME = "rightchoice_reception_".$plan."_".$renamed_company_name;
			// echo "URL : ".$url; die;
			
			$inputs = [
					'operation' => 'create',
					'module' => 'Reception',
					'req_type' => 'post',
					'patch_details' => [
						'category' => 'reception',
						'action_type' => 'signup',
						'patched_name' =>	$renamed_company_name,
						'orignal_name' => $company_name,
						'email'=> $email,
						'user_hash' => $user_hash,
						'password' => $newpassword,
						'mobile' => $mobile,		
						'db_name' => $DB_DST_NAME,
						'plan' => $plan
						]
				];

			$inputs_in_json = json_encode($inputs);

						// echo $inputs_in_json; die;

		if($plan == "Free")
		{	

				// $test_flag = true;
				// Create database
				$sql = 'CREATE DATABASE ' . $DB_DST_NAME . '';

				$server_splitter_obj = new server_splitter_init();

					// echo $split_server; die;
					if($split_server):
						// print_r(json_encode($inputs));
						$server_splitter_obj->init($inputs);
						send_email($logo_url,$firstname,$url_link_split,$email,$password);
						oppurtunities_api($service_url,$url,$firstname,$lastname,$business_category,$plan,$company_name,$url_link_split,$email,$mobile,$password,$renamed_company_name);
					else:

					// if($test_flag == true)
					if ($link->query($sql) === TRUE)
					{
							
							//echo "Database ". $DB_DST_NAME ." created successfully";
							$filename = '../'.$folder_path.$sql_name;
							//echo $filename;echo "<br/>";

							import_database($filename,$DB_DST_NAME,$email,$company_name,$user_hash,$newpassword);
							rename_folder_init($folder_path,$renamed_company_name,$plan);	
							send_email($logo_url,$firstname,$url_link,$email,$password);
							oppurtunities_api($service_url,$url,$firstname,$lastname,$business_category,$plan,$company_name,$url_link,$email,$mobile,$password,$renamed_company_name);
						
					
					}	
				endif;
		
		}
		else
		{
				if($split_server):
						// print_r(json_encode($inputs));
						$server_splitter_obj->init($inputs);
						send_email($logo_url,$firstname,$url_link_split,$email,$password);
						oppurtunities_api($service_url,$url,$firstname,$lastname,$business_category,$plan,$company_name,$url_link_split,$email,$mobile,$password,$renamed_company_name);
						accounts_api($service_url,$url,$company_name,$firstname,$lastname,$business_category,$plan,$url_link_split,$email,$mobile,$password);
				else:
						accounts_api($service_url,$url,$company_name,$firstname,$lastname,$business_category,$plan,$url_link,$email,$mobile,$password);
				endif;
		}		



function import_database($filename,$DB_DST_NAME,$email,$company_name,$user_hash,$newpassword)
{

include("../config.inc.php");
$DB_HOST = $dbconfig['db_server'];
$DB_USER = $dbconfig['db_username'];
$DB_DST_NAME;
$DB_PASS = $dbconfig['db_password'];
$con = @new mysqli($DB_HOST, $DB_USER, $DB_PASS,$DB_DST_NAME);
	
// Check connection
if ($con->connect_errno) 
{
	echo "Failed to connect to MySQL123: " . $con->connect_errno;
	echo "<br/>Error: " . $con->connect_error;
} 
	// Temporary variable, used to store current query
	$templine = '';
	// Read in entire file
	$lines = file($filename);
	// Loop through each line
	foreach ($lines as $line) 
	{
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
	
	// Connect to MySQL server
	
	$sql = "UPDATE vtiger_users SET user_name='$email',email1='$email',company_name='$company_name',user_hash='$user_hash',user_password = '$newpassword' WHERE id = '1'";
	
	if ($con->query($sql) === TRUE) 
	{
		//echo "Record updated successfully";
	}
	else 
	{
		echo "Error updating record123: " . $conn->error;
	}	
	
	
}

/**
	[Func Author: Manoj Hansda]
	[Created: 27/02/2020]
	[Edits: 
		'Name'=> 'Date' => 'Desc',
	]
	[Desc: Check File Permissions ]
	@returns : (bool)
	@params : full file path
**/
function writePermissionCheck($file){
	if(is_writable($file)){
		return true;
	}else{
		return false;
	}
}

/**
	[Func Author: Manoj Hansda]
	[Created: 27/02/2020]
	[Edits: 
		'Name'=> 'Date' => 'Desc',
	]
	[Desc: Change File Permissions to 777 ]
	@returns : (bool)
	@params : full file path
**/
function writePermissionEsclate($file){

	$result=shell_exec("chmod 777 ".$file);

	if($result):
		return true;
	else:
		return false;
	endif;

}

/**
	[Func Author: Manoj Hansda]
	[Created: 27/02/2020]
	[Edits: 
		'Name'=> 'Date' => 'Desc',
	]
	[Desc: Rename the Dir ]
	@returns (null)
	@params : full file path, write contents
**/
function rename_folder($folder_path,$renamed_company_name,$plan,$file){
		$file_contents = file_get_contents($file);

		$fh = fopen($file, "w");
		$file_contents = str_replace("company_name",$renamed_company_name,$file_contents);
		$file_contents = str_replace("plan",$plan,$file_contents);
		$file_contents = str_replace("ukey1",$application_unique_key1,$file_contents);
		fwrite($fh, $file_contents);
		fclose($fh);
}

/**
	[Func Author: Manoj Hansda]
	[Created: 27/02/2020]
	[Edits:
		'Name'=> 'Date' => 'Desc'
	 ]
	[Desc: Initiate Folder Rename Process ]
	@returns (null)
	@params : write contents
**/
function rename_folder_init($folder_path,$renamed_company_name,$plan)
{
	//get list of folders in directory			
	$dir = "../".$folder_path;
	//echo $dir;echo "<br/>";
	$file = "../$folder_path$renamed_company_name/config.inc.php";

	$a = glob($dir.'crm*');

	// Rename the folder		
	rename($a[0],$dir."$renamed_company_name");
	$application_unique_key1 = md5($renamed_company_name);
	//exit();

	$result=shell_exec("chmod 777 ".$dir.$renamed_company_name);
	

	if(file_exists($dir.$renamed_company_name)) 
	{

		if(writePermissionCheck($file)):
			//Rewrite the config.inc.php file
			//echo "TEST PASSED";	

			// print_r($file); die;
			rename_folder($folder_path,$renamed_company_name,$plan,$file);
			// $file_contents = file_get_contents($file);

			// $fh = fopen($file, "w");
			// $file_contents = str_replace("company_name",$renamed_company_name,$file_contents);
			// $file_contents = str_replace("plan",$plan,$file_contents);
			// $file_contents = str_replace("ukey1",$application_unique_key1,$file_contents);
			// fwrite($fh, $file_contents);
			// fclose($fh);
		else:
			writePermissionEsclate($file);
			rename_folder($folder_path,$renamed_company_name,$plan,$file);
		endif;
		
	}					
						
}


function send_email($logo_url,$firstname,$url_link,$email,$password)
{											
	require('phpmailer/mail.php');
	$mail->addAddress($email);     // Add a recipient 
	$mail->Subject = "Login Details from Right Choice";
	$mail->Body = "<html>
	<head>
	<title>Login Details from Right Choice </title>
	</head>
	<body style='width:600px; margin:20px auto; border:1px solid #000;'>
	<div style=' padding:20px;'>
	<div><img src='".$logo_url."' style='height:100px'></a></div>
	<h1 style='font-size:18px; font-family:Arial, Helvetica, sans-serif; background:#0a73ba; padding:10px; color:#FFF; font-weight:normal; border-left:10px solid #000; margin-top:20px;'>Right Choice</h1>
	<div style=' font-family:'Comic Sans MS', cursive;'>
	<p style='font-size:18px;'>Hi ".$firstname."</p> 
	<p style='font-size:18px;'>Thank you for registering for your Right Choice. </p>
	<p style='font-size:18px;'>Your Dashbaord link is  '".$url_link."'</p>
	<p style='font-size:18px;'>Login Details:</p>
	<p style='font-size:18px;'>Email: ".$email."</p>
	<p style='font-size:18px;'>Password: ".$password."</p>
	</div>
	<div style=' font-family:'Comic Sans MS', cursive;'></div>
					<p><b>Thanks & Regards</b></p>
	<p><b> https://rightchoice.io </b></p>
	</div>
	</body>
	</html>";


	if(!$mail->send()) 
	{
		//echo 'Message could not be sent.';
		//echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		//echo 'Message has been sent';
	}
}	




function oppurtunities_api($service_url,$url,$company_name,$firstname,$lastname,$business_category,$plan,$url_link,$email,$mobile,$password,$renamed_company_name)
{

	// echo $service_url; die;

	// $new_g_url = 'https://dev-reception.rightchoice.io/reception/Free/'.$renamed_company_name.'/';
	// $new_g_url = 'http://dev-reception.rightchoice.io/reception/'.ucfirst($plan).'/'.$renamed_company_name;
	// echo $url_link; die;
	 // echo "URL:".$url; die;
	// echo $service_url; 
	// die;
	$contents = file_get_contents($url);
	// print_r($contents); die;
	$clima=json_decode($contents);
	//  var_dump($clima);

	// echo "Success:". $clima->success; die;

	if($clima->success == 1)
	{
		/* echo "inside if";
		echo $service_url; */
		$accesskey = $clima->result->accesskey;
		$token = $clima->result->token;
		$accesskeymd5 = $clima->result->accesskeymd5; 
		$sessionName = $clima->result->sessionName;
		$userId = $clima->result->userId;
		
		/* echo "Accesskeymd5: " . $accesskeymd5 ."<br>";
		echo "Accesskey: " . $accesskey ."<br>";
		echo "Token: " . $token ."<br>"; */

		
		
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
							"cf_916":"'.$url_link.'",
							"email1":"'.$email.'",
							"phone":"'.$mobile.'",
							"assigned_user_id":"'.$userId.'",
							"cf_996":"Pending",
							"cf_920":"'.md5($password).'"}',
			
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

			// http://dev.rightchoice.io/website/reception/Free/200226181403FreeC
			echo "<div class='alert alert-success' id='success_message'>
					  <strong>Success!</strong> Your request for ".$business_category." - Reception CRM trial has been received, We will set up your free trial shortly . 
				  </div>
				  <div class='col-md-12'><a href='".$url_link."'> Click here to Sign In </a></div>
				
				";

		}
	}
	else 
	{
		
		echo "error";
	}
}


function accounts_api($service_url,$url,$company_name,$firstname,$lastname,$business_category,$plan,$url_link,$email,$mobile,$password)
{
	// echo $service_url; die;
	$contents = file_get_contents($url);
	$clima = json_decode($contents);
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
							"cf_920":"'.md5($password).'"}',
			
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
				echo 'reception_signup_payment.php';
											   
			}

	}
	else 
	{
		
		echo "error";
	}
}
	
 
?>
