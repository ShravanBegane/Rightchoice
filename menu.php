<?php
session_start();
include("config.inc.php"); 


$conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'] , $dbconfig['db_name']);

if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
} 
	 
$_SESSION['names'] = array();
$_SESSION['feature_name'] = array();	
$_SESSION['submenu_name'] = array();	 
	 
	 $query = "SELECT * FROM `menu_table` where status = 1";
	 $result = mysqli_query($conn,$query);
		 if (mysqli_num_rows($result) > 0) 
		 {
			while ($row = mysqli_fetch_assoc($result)) 
			{
				$name = $row["name"];
				$id = $row["id"];
				$query1 = "SELECT * FROM `menu_setting_table` where menu_id = $id and status = 1";
				 $result1 = mysqli_query($conn,$query1);
					 if (mysqli_num_rows($result1) > 0) 
					 {
						while ($row1 = mysqli_fetch_assoc($result1)) 
						{
							$feature_name = $row1["menu_name"];
							$id1 = $row1["id"];
							$query2 = "SELECT * FROM `menu_setting_table` where sub_menu_id = $id1 and status = 1";
							 $result2 = mysqli_query($conn,$query2);
								 if (mysqli_num_rows($result2) > 0) 
								 {
									while ($row2 = mysqli_fetch_assoc($result2)) 
									{
										$submenu_name = $row2["menu_name"];
										array_push($_SESSION['submenu_name'],$submenu_name);
									}
								 }
							
							
							
							array_push($_SESSION['feature_name'],$feature_name);
						}
					 }

				
				
				array_push($_SESSION['names'],$name);
			}
		 }
/* print_r($_SESSION['names']);
print_r($_SESSION['feature_name']);
print_r($_SESSION['submenu_name']);  */

	
    
?>		