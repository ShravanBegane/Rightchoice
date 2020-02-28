<?php
 include_once('WSClient.php');

/*$client = new Vtiger_WSClient('http://localhost/vtigercrm/webservice.php');

$login = $client->doLogin('admin', 'Lz20yJCSwZzABWd2');
echo $login;
if(!$login){
echo 'Login Failed';
}else{

echo 'Login Sucessfully';
//update using library
// Obtained from contact creation example
$contactId='12x10';
//name of the module for which the entry has to be updated.
$moduleName = 'Contacts';
//fill in the details of the contacts.userId is obtained from loginResult.
$contactData  = array('firstname'=>'Valiant Update','lastname'=>'Valiant Update', 'assigned_user_id'=>'19x1','mobile'=>'987654321','id'=>'12x10');
$update = $client->doUpdate($moduleName, $contactData);
//check for whether the requested operation was successful or not.
if($update) {
	//operation was successful get the response.
	var_dump($update);
} else {
	echo "Update failed<br>";
	$err = $client->lastError();
	echo $err['code'].': '.$err['message'];
}

} */






?>

<?php
$cbURL = "http://localhost/my360crm/webservice.php";
$cbUserName = "admin";
$cbAccessKey = "DiHK7y9ycqN533F";
$cbconn = new Vtiger_WSClient($cbURL);
$login = $cbconn->doLogin($cbUserName, $cbAccessKey);
//check for whether the requested operation was successful or not.
if($login) {
	//operation was successful get the response.
	echo "Login sessionId: <b>".$cbconn->_sessionid."</b><br>";
	echo "Login userId: <b>".$cbconn->_userid."</b><br>";
	
	//create using library
	//name of the module for which the entry has to be created.
	$moduleName = 'Contacts';
	//fill in the details of the contacts.userId is obtained from loginResult.
	$contactData  = array('lastname'=>'Valiant', 'assigned_user_id'=>$cbconn->_userid,'homephone'=>'123456789');
	$create = $cbconn->doCreate($moduleName, $contactData);

	//check for whether the requested operation was successful or not.
	if($create) {
		//operation was successful get the response.
		var_dump($create);
	} else {
		echo "Create failed<br>";
		$err = $cbconn->lastError();
		echo $err['code'].': '.$err['message'];
	}
	
	
	
	
} else {
	echo "Login failed<br>";
	$err = $cbconn->lastError();
	echo $err['code'].': '.$err['message'];
}


/* //dologin using library
$login = $cbconn->doLogin($cbUserName, $cbAccessKey);

//check for whether the requested operation was successful or not.
if($login) {
	//operation was successful get the response.
	echo "Login sessionId: <b>".$cbconn->_sessionid."</b><br>";
	echo "Login userId: <b>".$cbconn->_userid."</b><br>";
} else {
	echo "Login failed<br>";
	$err = $cbconn->lastError();
	echo $err['code'].': '.$err['message'];
} */






?>




<?php

/* if(!$checkLogin){
	echo 'Login Failed';
}
else
{
	echo 'Login Sucessfully';

} */
/* //getchallenge must be a GET request.
$response = $httpc->fetch_url("$cbURL?operation=getchallenge&username=$cbUserName");
$dmsg = debugmsg("Raw response (json) GetChallenge",$response);

//decode the json encode response from the server.
$jsonResponse = json_decode($response,true);
$dmsg.= debugmsg("Webservice response GetChallenge",$jsonResponse);

//check for whether the requested operation was successful or not.
if($jsonResponse['success']==false) {
	$dmsg.= debugmsg('getchallenge failed:'.$jsonResponse['error']['message']);
	echo "Challenge failed.";
} else {
	//operation was successful get the token from the response.
	$challengeToken = $jsonResponse['result']['token'];
	echo "Challenge token: $challengeToken<br>";
} */
?>




<?php

/* include_once 'modules/Users/Users.php';
include_once 'include/Webservices/Create.php';

$current_user = Users::getActiveAdminUser();
echo $current_user;

try {
$data = array (
'lastname' => 'LNAME',
'firstname'=> 'FNAME',
'assigned_user_id' => '19x1', // 19=Users Module ID, 1=First user Entity ID
);
$lead = vtws_create('Contacts', $data, $current_user);

print_r($lead);

} catch (WebServiceException $ex) {
echo $ex->getMessage();
} */
?>	
		