<html>
<head>
<title>Using MySQLi to Show MySQL Table</title>
</head>
<body>


<?php
$server = "localhost";
$user = "comx";
$pass = "password";
$database="my360crm_190507150303DEMOCRM";


// Using object oriented MySQLi for MySQL connection
$connection = new mysqli($server, $user, $pass,$database);

// Checking if connection has succesfully established
if ($connection->connect_error) {
    die("Connection not established: " . $connection->connect_error);
}


$sql= "SHOW COLUMNS FROM vtiger_fieldmodulerel";
$result = $connection->query($sql);
echo "<pre>";
while($row = $result->fetch_array()) {
	var_dump($row);
    }
echo "<pre/>";



 

$sql1= "select * from vtiger_fieldmodulerel";
$result = $connection->query($sql1);
echo "<pre>";
while($row = $result->fetch_array()) {
	var_dump($row);
    }
echo "<pre/>";




$sql= "SHOW COLUMNS FROM vtiger_field";
$result = $connection->query($sql);
echo "<pre>";
while($row = $result->fetch_array()) {
	var_dump($row);
    }
echo "<pre/>";



 

$sql1= "select * from vtiger_field";
$result = $connection->query($sql1);
echo "<pre>";
while($row = $result->fetch_array()) {
	var_dump($row);
    }
echo "<pre/>";




$connection->close();
?>




