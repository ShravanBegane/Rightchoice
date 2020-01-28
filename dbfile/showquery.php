<?php
$servername= "localhost";
$username= "comx";
$password= "password";
//$dbname="my360crm_business_Medium_190528055756MollysCleaningServices";
$dbname="internal_my360crm_com";
//$dbname="my360crm_190507150303DEMOCRM";

$date = date('Y-m-d');
$connection = mysqli_connect($servername, $username, $password, $dbname);

//$query="SELECT * FROM vtiger_visitor_login_details where faceid = '69352e9a-7e7d-407a-a8c1-5d97e28d045a' and signin != '' and visitordate ='2019-12-06' and  menu_name = 'delivery/courier' and check_login = 'login' ORDER BY signin desc LIMIT 1";
//$query =  "SELECT * FROM vtiger_visitor_login_details where faceid = '69352e9a-7e7d-407a-a8c1-5d97e28d045a' and signin != '' and visitordate ='2019-12-06' and menu_name = 'delivery/courier' and check_login = 'login' ORDER BY signin desc LIMIT 1  ";
//$query = "desc vtiger_visitor_login_details";
//$query="SELECT * FROM vtiger_visitor_login_details where visitordate = '2019-12-12'";
//$query = "select * from vtiger_tab";
//$query = "SELECT * FROM vtiger_blocks";
$query = "SELECT * FROM vtiger_field";
$result = mysqli_query($connection ,$query);
echo mysqli_num_rows($result);

while($data=mysqli_fetch_assoc($result))
{
echo "<pre>";
         print_r($data);
}
