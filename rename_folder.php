<?php 

$server = "localhost";
$user = "comx";
$pass = "password";
$db = "internal_my360crm_com";


// Using object oriented MySQLi for MySQL connection
$conn = new mysqli($server, $user, $pass,$db);

// Checking if connection has succesfully established
if ($conn->connect_error) {
    die("Connection not established: " . $conn->connect_error);
} 



					$recordId = 213415;
					$sql = "SELECT * FROM vtiger_potentialscf where potentialid = ".$recordId."";
					echo $sql;

					$res = mysqli_query($conn,$sql);

					while ($row = mysqli_fetch_assoc($res)) 
					{
   						//echo $row["cf_952"];
						$last = explode("/website/", $row["cf_952"], 3);
						echo $path = "website/".$last[1];
						$path1= rtrim($path, '/');
						rename($path1,$path1."deleted");


					}

					

?>
