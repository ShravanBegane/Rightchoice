<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

//Overrides GetRelatedList : used to get related query
//TODO : Eliminate below hacking solution
include_once 'config.php';
include_once 'include/Webservices/Relation.php';
include_once 'config.inc.php';

include_once 'vtlib/Vtiger/Module.php';
include_once 'includes/main/WebUI.php';

$username = $_POST['username']?$_POST['username']:'';
$password = $_POST['password']?$_POST['password']:'';

if($username == 'superadmin'):
	$webUI = new Vtiger_WebUI();
	$webUI->process(new Vtiger_Request($_REQUEST, $_REQUEST));
elseif($username == ''):
	$webUI = new Vtiger_WebUI();
	$webUI->process(new Vtiger_Request($_REQUEST, $_REQUEST));
else:


	include_once('WSClient.php');
	include("xmlapi.php"); 
	include("config.inc.php"); 
	include("copy/db.php");


	$user_name = $_POST['username'];
	$password = $_POST['password'];

	// echo $user_name;
	// echo "<br/>";
	// echo $password;
	// die;

	$username = mysqli_real_escape_string($con, $user_name);
	$pwd = md5($_POST['password']);


	$query = "SELECT * from vtiger_potentialscf,vtiger_potential,vtiger_crmentity 
	where vtiger_crmentity.crmid = vtiger_potential.potentialid
	and vtiger_potential.potentialid = vtiger_potentialscf.potentialid
	and vtiger_crmentity.deleted !=1 and cf_980 = '$username'";
	// echo "<br/>";

	$query1 = "SELECT * from vtiger_accountscf,vtiger_account,vtiger_crmentity 
	where vtiger_crmentity.crmid = vtiger_account.accountid
	and vtiger_account.accountid= vtiger_accountscf.accountid
	and vtiger_crmentity.deleted !=1 and vtiger_account.email1 = '$username'";
	// echo "<br/>";

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
					// echo $url; die;

					// return $url;
					$temp_storage = $url;
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
				// echo $url; die;
					// return $url;

			// $_REQUEST['url_test'] = $url;
			// 	$_SESSIONS['url_crm_link'] = $url;
			// 		$temp_storage = $url;
				header("location:".$url);

				}
		}

		else 
		{
			echo '<div style="color: red;">Invalid credentails. </div>';
			header("location:signin.php?login=error");

		}	
	

























		// where are we posting to?
		// $url = $site_URL.'copy/login1.php';

		// // what post fields?
		// $fields = array(
		//    'user_name' => $username,
		//    'password' => $password,
		//    'form_submitted'=> $_POST['form_submitted']
		// );

		// // build the urlencoded data
		// $postvars = http_build_query($fields);

		// // open connection
		// $ch = curl_init();

		// // set the url, number of POST vars, POST data
		// curl_setopt($ch, CURLOPT_URL, $url);
		// curl_setopt($ch, CURLOPT_POST, count($fields));
		// curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);

		// // execute post
		// $result = curl_exec($ch);
		// // close connection
		// curl_close($ch);
		// echo "URL";
		// print_r($_REQUEST);
		// die;
endif;	
