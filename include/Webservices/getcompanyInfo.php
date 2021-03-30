<?php

ini_set('display_errors', 1);
header('Content-type: application/json');

if(!isset($_POST['id'])){
	exit(json_encode(array("status"=>"error","result"=>"please pass the account id as id")));		
}
if(($_POST['id'] == 0)){
	exit(json_encode(array("status"=>"error","result"=>"no account found")));		
}
$found_company = getCompanyDetailsById($_POST['id']);
// print_r($found_company['cf_916']); die;

if($found_company):
	$url = $found_company['cf_916'];
	$name = $found_company['cf_908'];
	$getCompanyDetailsLogo = getCompanyLogo($url."include/Webservices/mycompanydetails.php");
	$logoName = "test/logo/".str_replace(' ', '%20', $getCompanyDetailsLogo[0]->logoname );
	$response = 
		json_encode(
			array(
				"status"=>"success",
				"result"=>array(
					"id"=> $_POST['id'],
					"url"=>$url,
					"name"=> $getCompanyDetailsLogo[0]->organizationname,
					"logo" => $url.$logoName,
				)
			)
		);
		echo $response;
	exit();
else:
	exit(json_encode(array("status"=>"error","result"=>"no account found")));
endif;



function getCompanyDetailsById($id){
	include "db.php" ; 	
	$query = "SELECT * from vtiger_account NATURAL JOIN vtiger_accountscf where cf_1118='$id'";
	$result = mysqli_query($con,$query);
	$user = mysqli_fetch_assoc($result);
	return $user;
}

function getCompanyDetailsByEmail($email){
	include "db.php" ; 	
	$query = "SELECT * from vtiger_account where email1='$email'";
	$result = mysqli_query($con,$query);
	$user = mysqli_fetch_assoc($result);
	return $user;
}

function getCompanyLogo($url){
	// $url = "https://dev-reception.rightchoice.io/reception/Free/200826165138QueenslandCleaningClub/include/Webservices/mycompanydetails.php";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);
    // curl_setopt($ch, CURLOPT_POSTFIELDS,
    //             "id=value1&postvar2=value2&postvar3=value3");
    
    // In real life you should use something like:
    curl_setopt($ch, CURLOPT_POSTFIELDS, 
             http_build_query(array('id' => $id)));
    
    // Receive server response ...
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $server_output = json_decode(curl_exec($ch));
    
    curl_close ($ch);
    // print_r($server_output); die;
    
    // Further processing ...
    if ($server_output) { 
        
        // echo "hello";
        // print_r($server_output->result); die;
        return $server_output;
        
    }else { 
        
        return "";
        // print_r($server_output); die;
        
    }
}


?>