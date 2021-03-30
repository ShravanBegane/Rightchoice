<?php

include("../../config.inc.php"); 

// Connect to MySQL Database
$con = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'],$dbconfig['db_name']);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>