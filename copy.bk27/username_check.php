<?php
if(isset($_POST['username']))
{
	// include Database connection file 
	include("db.php");

	$username = mysqli_real_escape_string($con, $_POST['username']);

	$query = "SELECT cf_980,crmid FROM vtiger_potentialscf,vtiger_crmentity WHERE vtiger_potentialscf.`potentialid` = vtiger_crmentity.crmid and vtiger_potentialscf.cf_952 != '' and cf_980 = '$username' and deleted = 0 ";
	//echo $query;	

	$query1 = "SELECT email1,crmid FROM vtiger_account,vtiger_accountscf,vtiger_crmentity WHERE vtiger_account.`accountid` = vtiger_crmentity.crmid and vtiger_account.`accountid` = vtiger_accountscf.accountid and vtiger_accountscf.cf_916 != '' and email1 = '$username' and deleted = 0 ";
	//echo $query1;

	if(!$result = mysqli_query($con, $query))
	{
		exit(mysqli_error($con));
	}

	if(!$result1 = mysqli_query($con, $query1))
	{
		exit(mysqli_error($con));
	}

	if(mysqli_num_rows($result) > 0)
	{
		// username is already exist 
		echo '<div style="color: red;"><b>'.$username.'</b> is already in use! </div>';
	}
	else if(mysqli_num_rows($result1) > 0)
	{
		// username is already exist 
		echo '<div style="color: red;"><b>'.$username.'</b> is already in use! </div>';
		
	}
	

}
?>