<?php
$servername= "localhost";
$username= "comx";
$password= "password";
$dbname = "my360crm_190507150303DEMOCRM";

//$dbname="my360crm_capture_Free_190724114158test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
         if(! $conn ) {
            die('Could not connect: ' . $conn->connect_error());
         }
         echo 'Connected successfully<br />';
//$sql = "DELETE from vtiger_leadscf where leadid in(69, 378, 543, 544 , 599, 786, 1409, 1410, 1411 )";
//$sql = "DELETE from vtiger_leaddetails where leadid in(69, 378, 543, 544 , 599, 786, 1409, 1410, 1411 )";
//$sql = "DELETE from vtiger_crmentity where crmid in(69, 378, 543, 544 , 599, 786, 1409, 1410, 1411 )";
$sql = "DELETE from My360Reception_link_device where id =41";


       //$sql = "DELETE from vtiger_crmentity where crmid=1434";

         $result = $conn->query($sql);
         echo "Table deleted successfully\n";
?>
   