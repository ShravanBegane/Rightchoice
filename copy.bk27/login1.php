<?php 


include_once('../WSClient.php');
include("../xmlapi.php"); 
include("../config.inc.php"); 
include("db.php");



if(isset($_POST['form_submitted']))
{


echo $user_name = $_POST['user_name'];
echo $password = $_POST['password'];

//echo $user_name;
//echo "<br/>";

$username = mysqli_real_escape_string($con, $user_name);
$pwd = md5($_POST['password']);


echo $query = "SELECT * from vtiger_potentialscf,vtiger_potential,vtiger_crmentity 
where vtiger_crmentity.crmid = vtiger_potential.potentialid
and vtiger_potential.potentialid = vtiger_potentialscf.potentialid
and vtiger_crmentity.deleted !=1 and cf_980 = '$username'";
echo "<br/>";

echo $query1 = "SELECT * from vtiger_accountscf,vtiger_account,vtiger_crmentity 
where vtiger_crmentity.crmid = vtiger_account.accountid
and vtiger_account.accountid= vtiger_accountscf.accountid
and vtiger_crmentity.deleted !=1 and vtiger_account.email1 = '$username'";
echo "<br/>";

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
			while($row = mysqli_fetch_assoc($result)) 
			{
				
				if (strpos($row["cf_952"], 'index.php') !== false) 
				{
    					$url1 =  $row["cf_952"];
				}
				else 
				{
					$url1 =  $row["cf_952"]."index.php";

				}
				$url = $url1."?module=Users&action=Login&return_module=Users&return_action=Login&username=".$user_name."&password=".$password;
				header("location:".$url);

			}
	}
	else if(mysqli_num_rows($result1) > 0)
	{
			while($row = mysqli_fetch_assoc($result1)) 
			{
			
			if (strpos($row["cf_916"], 'index.php') !== false) 
				{
    					$url1 =  $row["cf_916"];
				}
				else 
				{
					$url1 =  $row["cf_916"]."index.php";

				}

			$url = $url1."?module=Users&action=Login&return_module=Users&return_action=Login&username=".$user_name."&password=".$password;
			header("location:".$url);

			}
	}

	else 
	{
		echo '<div style="color: red;">Invalid credentails. </div>';
		header("location:signin.php?login=error");

	}	
	

}

?> 