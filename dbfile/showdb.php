<html>
<head>
<title>Using MySQLi to Show MySQL Table</title>
</head>
<body>

<?php
$server = "localhost";
$user = "comx";
$pass = "password";
//$database="my360crm_business_Free_190604150910business";
// Using object oriented MySQLi for MySQL connection
$connection = new mysqli($server, $user, $pass);

// Checking if connection has succesfully established
if ($connection->connect_error) {
    die("Connection not established: " . $connection->connect_error);
} 

$sql= "show databases";
$result = $connection->query($sql);
while($row = $result->fetch_assoc()) {
        echo $row["Database"]. "<br>";
    }

$connection->close();
?>
   