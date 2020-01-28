<?php
$server = "localhost";
$user = "comx";
$pass = "password";
//$database="my360crm_business_Medium_190528055756MollysCleaningServices";
//$database="my360crm_190507150303DEMOCRM";
$database="my360crm_reception_Free_191227115320receptiontest";

// Create connection
$conn = new mysqli($server , $user , $pass , $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "INSERT INTO vtiger_modentity_num (num_id, semodule, prefix,start_id,cur_id,active) VALUES (34,'Accessuser','ACU',1,1,1)";
//$sql = "INSERT INTO `vtiger_entityname` (`tabid`, `modulename`, `tablename`, `fieldname`, `entityidfield`, `entityidcolumn`) VALUES ('54', 'Accessuser', 'vtiger_accessuser', 'accessuser_tks_useraccessname', 'accessuserno', 'accessuserno')";
//$sql = "INSERT INTO vtiger_fieldmodulerel (fieldid, module, relmodule) VALUES (1277, 'Visitors','Teams')";
//$sql = "INSERT INTO `vtiger_relatedlists`(`relation_id`, `tabid`, `related_tabid`, `name`, `sequence`, `label`, `presence`, `actions`, `relationfieldid`, `source`, `relationtype`) VALUES (185,64,69,'get_related_list',1,'Mainservicestype',0,'ADD,SELECT','null','null','null')";
//$sql = "INSERT INTO `My360Reception_selected_assistance` (`id`, `selectedid`) VALUES (NULL, '1')";
//$sql = "INSERT INTO vtiger_visitor_login_details (visitorid, faceid, visitorimage, visitordate, signin, signout,check_login,menu_name) VALUES ('1799','test','test','2019-12-12','02:24:23pm','','login','i have an appointment')";

$sql = "INSERT INTO `menu_setting_table` (`id`, `menu_id`, `sub_menu_id`, `menu_name`, `status`, `comments`, `time_created`, `time_updated`) VALUES
(1, 3, 0, 'Employees', 1, '', '2019-12-27 09:09:43', '0000-00-00 00:00:00'),
(2, 3, 0, 'Clients', 1, '', '2019-12-27 09:09:46', '0000-00-00 00:00:00'),
(3, 3, 0, 'Services', 1, '', '2019-12-27 09:09:50', '0000-00-00 00:00:00'),
(4, 3, 0, 'Transcation Details', 1, '', '2019-12-27 09:09:53', '0000-00-00 00:00:00'),
(5, 6, 0, 'Teams', 1, '', '2019-12-27 09:10:04', '0000-00-00 00:00:00'),
(6, 6, 0, 'Visitors', 1, '', '2019-12-27 09:10:06', '0000-00-00 00:00:00'),
(7, 6, 0, 'Receptionsettings', 1, '', '2019-12-27 09:10:09', '0000-00-00 00:00:00'),
(8, 0, 6, 'Email Templates', 1, '', '2019-12-27 09:35:41', '0000-00-00 00:00:00'),
(9, 0, 6, 'Menu', 1, '', '2019-12-27 09:35:44', '0000-00-00 00:00:00'),
(10, 0, 6, 'Register', 1, '', '2019-12-27 09:35:46', '0000-00-00 00:00:00'),
(11, 0, 6, 'GDPR Compliance', 1, '', '2019-12-27 09:35:49', '0000-00-00 00:00:00'),
(12, 0, 6, 'Delete Data', 1, '', '2019-12-27 09:35:51', '0000-00-00 00:00:00'),
(13, 5, 0, 'Customers', 1, '', '2019-12-27 09:09:25', '0000-00-00 00:00:00'),
(14, 5, 0, 'Products', 1, '', '2019-12-27 09:09:27', '0000-00-00 00:00:00'),
(15, 0, 6, 'Link Device', 1, '', '2019-12-27 09:35:46', '0000-00-00 00:00:00'),
(16, 0, 6, 'Request For Assistance', 1, '', '2019-12-27 09:35:49', '0000-00-00 00:00:00'),
(17, 0, 6, 'Subscription', 1, '', '2019-12-27 09:35:49', '0000-00-00 00:00:00')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>