<?php
include('../../config.inc.php');

error_reporting(1);
header('Content-type: application/json');

if(createEmployee($_POST['employees_tks_employeename'],$_POST['assigned_user_id'],$_POST['cf_1056'],$_POST['cf_1346'],$_POST['siteURL'], $_POST['companyId'])){
	echo json_encode(array("status"=>"OK","result"=>"true"));
	exit();	
}else{
	echo json_encode(array("status"=>"error","result"=>"false"));
	exit();	
}



function createEmployee($name,$empId,$email,$pass,$companyId){
	include "db.php" ; 
	$query = "INSERT INTO external_clean_employees (empId, name, email, pass, siteURL, companyId)
				VALUES ('$empId','$name', '$email', '$pass', '$siteURL', '$companyId')";
	$result = mysqli_query($con,$query);
	if($result)
	{
		return true;
	}
	else
	{
		return false;
	}
}
?>