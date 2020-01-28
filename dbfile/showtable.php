<?php

$servername= "localhost";
$username= "comx";
$password= "password";
$dbname="internal_my360crm_com";
//$dbname="my360crm_190507150303DEMOCRM";
//$dbname="my360crm_190423105426SmallBusinessExpos";
//$dbname="my360crm_business_Medium_190528055756MollysCleaningServices";
//$dbname="my360crm_reception_Free_191227115320receptiontest";


$connection = mysqli_connect($servername, $username, $password, $dbname);
$date=date("Y-m-d");
//$query="SELECT COUNT(vtiger_potential.potentialid ) AS count FROM vtiger_potential,vtiger_potentialscf,vtiger_crmentity where vtiger_potential.potentialid = vtiger_potentialscf.potentialid and vtiger_potentialscf.potentialid = vtiger_crmentity.crmid and vtiger_crmentity.deleted =0 and vtiger_potentialscf.cf_984='Interested' "; 
//$query="SELECT * FROM vtiger_visitor_login_details where faceid = '83e3d087-6535-462d-9c21-5534f9e310c5' and signin != '' and visitordate ='2019-12-06' and signout = '' and  menu_name = 'i have an appointment' and check_login = 'signin'";
//$query = "select * from vtiger_visitor_login_details where visitordate > DATE_SUB(NOW(), INTERVAL 30 DAY)";
//$query = "SELECT * FROM vtiger_visitor_login_details where faceid = '2cf98568-a51c-4102-8a59-453db69bd634' and signin != '' and visitordate ='2019-12-09' and menu_name = 'i have an appointment' order by signin DESC limit 1 ";
//$query = "SELECT * FROM vtiger_visitors";
//$query = "SELECT * FROM vtiger_crmentity";
$query = "SELECT * from vtiger_potentialscf,vtiger_potential,vtiger_crmentity where vtiger_crmentity.crmid = vtiger_potential.potentialid and vtiger_potential.potentialid = vtiger_potentialscf.potentialid and vtiger_crmentity.deleted !=1 and cf_980 = 'neha.comx@gmail.com'";

$result =mysqli_query($connection ,$query);
echo $total_rows = mysqli_num_rows($result);
while($data=mysqli_fetch_assoc($result))
{
	echo "<pre>";
         print_r($data);
}
