<?php
$servername = "localhost";
$username = "comx";
$password = "password";
$dbname = "my360crm_190507150303DEMOCRM";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "$query="SELECT * FROM `My360Reception_link_device`";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["organization_id"]. "<br>";
	var_dump($row);
    }
} else {
    echo "0 results";
}
mysqli_close($con);
?>
