<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRM Backup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "getfiles.php",
	data:'folder='+val,
	success: function(data){
		$("#folder_category").html(data);
		console.log(data);
		getCity();
	}
	});
}


function getCity(val) {
	var folder = $("#folder option:selected").text();
	var res = folder.toLowerCase();
	$.ajax({
	type: "POST",
	url: "getfiles2.php",
	data: { folder : res ,folder_category: val},	
	success: function(data){
		$("#crmname").html(data);
		console.log(folder);
		console.log(data);
	        console.log(val);

	}
	});
}
</script>




<div class="container">
  <h2>CRM Backup</h2>
  <form action="action.php" method="post">
    
    <div class="form-group">
      <label for="pwd">Folder:</label>
      <select class="form-control" id="folder" name="folder" onChange="getState(this.value);">
	<option value="">Select</option>
	<option value="none">None</option>
    	<option value="business">Business</option>
    	<option value="capture">Capture</option>
      </select>
    </div>
	<div class="form-group">
      <label for="pwd">Folder Category:</label>
      <select class="form-control" id="folder_category" name="folder_category" onChange="getCity(this.value);">
      </select>
    </div>
    <div class="form-group">
      <label for="email">CRM Name:</label>
      <select class="form-control" id="crmname" name="crmname">
		<option value="none">Select</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>
