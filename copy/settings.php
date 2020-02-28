<?php 

error_reporting(0);
// Start the session
session_start();

/* Internal CRM Details */
include_once('../WSClient.php');
include("../xmlapi.php"); 
include("../config.inc.php"); 
$site_URL = "https://dev.rightchoice.io/";	
$crmusername = "superadmin";
$crmpassword= "nAnNzKHH35z4lSd";
$service_url = $site_URL."webservice.php";
$url = $service_url."?operation=getchallenge&username=".$crmusername."&password=".$crmpassword;
$logo_url = $site_URL."layouts/v7/resources/Images/vtiger.png";
/* Internal CRM Details */


/* Database Details */
$DB_HOST = "localhost";
$DB_USER = "comx";
$DB_PASS = "password";
$sql_name = "db.sql";

// Create connection
$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS);

// Check connection
if ($link->connect_error)
{
	die("Connection failed: " . $link->connect_error);
}



/* Database Details */

/* Date Timezone */
date_default_timezone_set("Asia/Calcutta");

?>