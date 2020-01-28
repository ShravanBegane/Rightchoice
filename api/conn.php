<?php

include("../config.inc.php"); 

// Connect to MySQL Database
$conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'], $dbconfig['db_name']);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





function response($status,$status_message)
{
	header("HTTP/1.1 ".$status);
	
	$response['success'] = $status;
	$response['status_message'] = $status_message;
	
	$json_response = json_encode($response);
	echo $json_response;
}	

?>