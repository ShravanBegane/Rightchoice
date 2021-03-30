<?php

include('/config.inc.php');

$email = $_POST['username'];

$servername = $dbconfig['db_server']?$dbconfig['db_server']:'localhost';
$username = $dbconfig['db_username']?$dbconfig['db_username']: 'comx';
$password = $dbconfig['db_password']?$dbconfig['db_password']:'password';
$dbname = $dbconfig['db_name']?$dbconfig['db_name']:'internal_my360crm_com';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// echo $email; die;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	$sql = "SELECT * FROM vtiger_account WHERE email1 = '".$email."'";

	// $sql_pot = "SELECT * FROM vtiger_potentialscf WHERE cf_980 = '".$email."'";

	$result = $conn->query($sql);
	// $result_pot = $conn->query($sql_pot);
	// print_r($conn); die;
	if ($result->num_rows > 0) {
	    echo "EXISTS";
	} else {
		echo "NEW";
		// if ($result_pot->num_rows > 0) {
		//    	echo "EXISTS";
		//    }else{
		//    	 echo "NEW";
		//    }
	}
	$conn->close();
}
