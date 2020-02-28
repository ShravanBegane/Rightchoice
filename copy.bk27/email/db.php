<?php
$host = "localhost";
$db_name = "internal_my360crm_com";
$username = "comx";
$password = "password";
 
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}catch(PDOException $exception){ //to handle connection error
    echo "Connection error: " . $exception->getMessage();
}
?>