<?php
$servername = "localhost";
$username = "comx";
$password = "password";
//$dbname = "my360crm_190507150303DEMOCRM";
$dbname = "my360crm_reception_Free_191227115320receptiontest";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM menu_setting_table";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>