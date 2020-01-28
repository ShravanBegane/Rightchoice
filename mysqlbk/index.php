<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRM Databases Backup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$server = "localhost";
$user = "comx";
$pass = "password";
// Using object oriented MySQLi for MySQL connection
$connection = new mysqli($server, $user, $pass);

// Checking if connection has succesfully established
if ($connection->connect_error) {
    die("Connection not established: " . $connection->connect_error);
}

$sql= "show databases";
$result = $connection->query($sql);
?>

<div class="container">
  <h2>CRM Databases Backup</h2>
  <form action="backup.php" method="post"> 
    <div class="form-group">
      <label for="pwd">Select Databases:</label>
      <select class="form-control" id="dbname" name="dbname">
        <option value="">Select</option>
		<?php while($row = $result->fetch_assoc()) { ?>
        	<option value="<?php echo $row["Database"];?>"><?php echo $row["Database"];?></option> 
		<?php } ?>
		
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>
<?php $connection->close();?>
