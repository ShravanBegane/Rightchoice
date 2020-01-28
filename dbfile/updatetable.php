<?php
$servername = "localhost";
$username = "comx";
$password = "password";
//$dbname="my360crm_190507150303DEMOCRM";
//$dbname="my360crm_business_Medium_190528055756MollysCleaningServices";
//$dbname = "internal_my360crm_com";
$dbname="my360crm_reception_Free_191227115320receptiontest";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "UPDATE vtiger_field SET uitype=10 WHERE fieldid=1047";
//$sql = "UPDATE vtiger_fieldmodulerel SET fieldid=1055 WHERE fieldid=1015";
//$sql = "UPDATE vtiger_modentity_num SET semodule='Transaction' WHERE num_id=29";
//$sql = "UPDATE `vtiger_field` SET fieldlabel='Activity Type' where fieldname='cf_1044'"; 
//$sql = "UPDATE `vtiger_field` SET presence=3 where fieldname='activitytype'"; 
//$sql = "UPDATE `vtiger_field` set fieldlabel='Visitors Transcation(Days)' where fieldname='cf_1060'"; 
//$sql='update vtiger_users set user_password="$1$in000000$/g1Fox02yJ3tB9tpo0Clz0" where id=1';
//$sql='update vtiger_users set user_name="trevor@smallbusinessexpos.com.au" ,email1="trevor@smallbusinessexpos.com.au",user_password="$1$tr000000$fwmk0z/.qfwoq98pOB5A20" where id=1';
//$sql = "UPDATE `vtiger_fieldmodulerel` set module='Products', relmodule='Store' where fieldid=920";
//$sql = "UPDATE `vtiger_field` SET `presence` = 3 WHERE `vtiger_field`.`fieldid` = 268";
//$sql = "UPDATE `vtiger_field` SET `uitype` = 1 , `typeofdata` = 'V~O~LE~255'  WHERE `vtiger_field`.`fieldid` = 942";
//$sql = "UPDATE `vtiger_tab` SET `presence` = 0 WHERE `vtiger_tab`.`tabid` = 8";
//$sql='update vtiger_relatedlists set presence=1 where relation_id=177';
//$sql="update vtiger_cron_task set frequency=60 where id=1";

//$sql="ALTER TABLE `testusers` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;";
//$sql="update vtiger_field set fieldlabel='Plan' where fieldid=1095";
//$sql="ALTER TABLE vtiger_visitor_login_details CHANGE `selectedid` `selectedid` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci";
//$sql="ALTER TABLE vtiger_visitor_login_details ADD flag varchar(40) NOT NULL AFTER check_login";
//$sql="ALTER TABLE `vtiger_visitor_login_details` ADD `flag` INT(11) NOT NULL DEFAULT '0' AFTER `check_login`";
//$sql="UPDATE vtiger_visitor_login_details SET signout='08: 16: 33pm' where faceid = '163ffdbc-c389-46ad-b744-50be7cc5f8c5'";
//$sql ="DROP TABLE testusers";

//$sql = "ALTER TABLE vtiger_visitor_login_details MODIFY deletedtime varchar(20) NOT NULL";
//$sql="ALTER TABLE `vtiger_receptionsettings` ADD `Delete_checkbox` TINYINT(1) NOT NULL after `Retention Period`";
//$sql="ALTER TABLE `vtiger_receptionsettings` MODIFY COLUMN receptionsettingsid INT auto_increment";
//$sql="UPDATE vtiger_blocks SET blocklabel='RightAccess' where blockid = 138";
//$sql="UPDATE `vtiger_accountscf` SET `cf_920`='0d04aaa688f03beed4fdad5e2675a1fd' where accountid = '219848'";

//$sql = "ALTER TABLE menu_setting_table MODIFY `time_created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP";
$sql="UPDATE `menu_table` SET `time_updated`='2019-12-31 08:29:58' where id= '1'";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>