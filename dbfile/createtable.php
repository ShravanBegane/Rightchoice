<?php
$servername = "localhost";
$username = "comx";
$password = "password";
$dbname = "my360crm_reception_Free_191227115320receptiontest";
//$dbname="internal_my360crm_com";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
//$sql = "CREATE TABLE `My360Reception_selected_assistance` (
 // `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
//  `selectedid` int(130) NOT NULL
// ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

//$sql = "ALTER TABLE vtiger_visitor_login_details ADD COLUMN status VARCHAR(15) AFTER deletedtime";




//$sql = "CREATE TABLE `vtiger_visitor_login_details` (
 // `visitorid` int(130) NOT NULL,
 // `visitorimage` varchar(250) NOT NULL,
 // `visitordate` varchar(250) NOT NULL,
 // `visitortime` varchar(250) NOT NULL,
 // `id` int(30) NOT NULL AUTO_INCREMENT,
 // PRIMARY KEY (`id`)
//) ENGINE=InnoDB AUTO_INCREMENT=3824 DEFAULT CHARSET=latin1";


/* $sql = "CREATE TABLE `menu_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `plan_type` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time_updated` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
 */
 
 
/* $sql = "CREATE TABLE `menu_setting_table` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `comments` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time_updated` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1"; */

if ($conn->query($sql) === TRUE) {
    echo "Table menu_setting_table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
