<html>
<head>
<title>Using MySQLi to Drop MySQL Table</title>
</head>
<body>

<?php
$server = "localhost";
$user = "comx";
$pass = "password";

// Using object oriented MySQLi for MySQL connection
$connection = new mysqli($server, $user, $pass);

// Checking if connection has succesfully established
if ($connection->connect_error) {
    die("Connection not established: " . $connection->connect_error);
} 



$colors = array("my360crm_190415182517testcomx","my360crm_business_Free_190604150910business","my360crm_business_Free_190604154303business",
"my360crm_business_Free_190604182625test","my360crm_capture_Small_190530161823capturesmall","my360crm_business_Medium_190531162019mediumbusiness","my360crm_capture_Large_190530163343capturelarge","my360crm_capture_Small_190530161823capturesmall","my360crm_business_Medium_190531162019mediumbusiness",); 

 





foreach ($colors as $value) {
	// Dropping Database
	$query = "DROP DATABASE $value";
	if ($connection->query($query) === TRUE) {
		echo "Database $value dropped successfuly. <br>";
	} else {
		echo "Unable to drop database " . $connection->error;
	}
}

$connection->close();
?>
   