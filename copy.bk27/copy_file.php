<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
  <script src="../resources/jquery-1.11.3.min.js"></script>
<script>
$(document).ready(function(){
// check change event of the text field
$("#email").keyup(function(){
// get text username text field value
var username = $("#email").val();

// check username name only if length is greater than or equal to 3
if(username.length >= 3)
{
// check username
$.post("username_check.php", {username: username}, function(data, status)
{
	if(data != "")
	{	$("#status").html(data);
		document.getElementById("submit").disabled=true;
		//console.log(data);
	}
	else{
		document.getElementById("submit").disabled=false;
		$("#status").html(data);
	}
	
});
}
});
});
</script>


<script>
$(document).ready(function(){
$("#submit").click(function(){
var firstname = $("#firstname").val();
var lastname = $("#lastname").val();
var password = $("#password").val();
var mobile = $("#mobile").val();
var email = $("#email").val();
var company_name = $("#company_name").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'firstname='+ firstname + '&lastname='+ lastname + '&password='+ password + '&mobile='+ mobile+ '&company_name='+ company_name + '&email='+ email;
if(firstname==''||email==''||password==''||mobile=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "copy_db.php",
data: dataString,
cache: false,
success: function(result){
$('#success_message').fadeIn().html(result);
}
});
}
return false;
});
});

</script>
</head>
<body>
<div class="container">
<h2>Customer Form</h2>
<script>
function showDiv() 
{
   document.getElementById('welcomeDiv').style.display = "block";
}
</script>
<div id="welcomeDiv" style="display:none;" class="answer_list" >
	<div class="alert alert-success">
	  <strong>Success!</strong> Your My360CRM panel has been created. Login details has been sent to your email id. 
	</div>
</div>
<div id="form">
Company Name: <input class="form-control" required type="text" name="company_name" id="company_name"><br>
First Name: <input class="form-control" required type="text" name="firstname" id="firstname"><br>
Last Name: <input class="form-control" required type="text" name="lastname" id="lastname"><br>
Mobile: <input class="form-control" required type="text" name="mobile" id="mobile"><br>
Email: <input class="form-control" required type="text" name="email" id="email"><div id="status"></div><br>
Password: <input class="form-control" required type="password" name="password" id="password"><br>
<input id="submit" type="button" onclick="showDiv()" name="submit" class="btn btn-primary" value="Submit">
</div>
</div>
</body>
</html>


