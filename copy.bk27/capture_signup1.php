<?php
error_reporting(0);
require_once('../google/settings.php');
require_once('../google/google-login-api.php');

// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();
		
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
		
		// Get user information
		$user_info = $gapi->GetUserProfileInfo($data['access_token']);
	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}
?>


<?php 
session_start();
if(isset($_POST['plan']))
{ 
     $_SESSION['plan'] = $_POST['plan'];
	//echo $_SESSION['plan'];
} else {
	
	$_SESSION['plan'] = "Free";
}
?>

<!DOCTYPE html>
<html>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
  <head>
    <title>My360CRM </title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

     <script src="../resources/jquery-1.11.3.min.js"></script>
<script>
    jQuery(document).ready(function($){
$("#mobile").keypress(function (e) 
{
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Please enter valid mobile no.").show().fadeOut("slow");
               return false;
    }
   });
 });
</script>
	 
	 	 
    <script>
    $(document).ready(function(){
    // check change event of the text field
    $("#email").keyup(function()
	{
    
		$('span.error-keyup-7').remove();
		var inputVal = $(this).val();
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if(!emailReg.test(inputVal)) 
		{
			$(this).after('<span class="error error-keyup-7" style="color:red">Invalid Email Format.</span>');
			document.getElementById("submit").disabled=true;
			
		}
		else 
		{
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
		}
	
    });
    });
    </script>
     <script src="//code.jquery.com/jquery.min.js"></script>
<script src="jquery.redirect.js"></script>   
    
      <script>
    $(document).ready(function(){
    $("#submit").click(function(){
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var business_category = $("#business_category").val();
    var plan = $("#plan").val();
    var password = $("#password").val();
    var mobile = $("#mobile").val();
    var email = $("#email").val();
    var company_name = $("#company_name").val();
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'firstname='+ firstname + '&lastname='+ lastname + '&business_category='+ business_category + '&plan='+ plan + '&password='+ password + '&mobile='+ mobile+ '&company_name='+ company_name + '&email='+ email;
   if(firstname=='')
    {
    	alert("Please enter firstname");
	document.getElementById("firstname").focus();

    }
    else if(lastname=='')
    {
	 alert("Please enter lastname");
	document.getElementById("lastname").focus();

    }
    else if(business_category=='')
    {
	alert("Please select business category");
	document.getElementById("business_category").focus();

    }
    else if(plan=='')
    {
	alert("Please enter plan");
	document.getElementById("plan").focus();

    }
    else if(password=='')
    {
	alert("Please enter password");
	document.getElementById("password").focus();

    }
    else if(mobile=='')
    {
	alert("Please enter mobile no");
	document.getElementById("mobile").focus();

    }
    else if(company_name=='')
    {
	alert("Please enter company name");
	document.getElementById("company_name").focus();

    }
    else if(email=='')
    {
	alert("Please enter email ID");
	document.getElementById("email").focus();
    }
    else
    {
    // AJAX Code To Submit Form.
    $.ajax({
    type: "POST",
    url: "capture_copy_db_paid.php",
    data: dataString,
    cache: false,
    beforeSend: function(){
        $('#image').show();
        $('#login-form').hide();
        
    },
    complete: function(){
        $('#image').hide();
    },
    success: function(result)
{
	if(result == "capture_signup_payment.php")
		{		
			window.location.href = "capture_signup_payment.php";	

		}
		else
		{
			$('#welcomeDiv').html(result);
        		//console.log(result);
        		showDiv() 
		}


    }
    });
    }
    return false;
    });
    });
    
    </script>
    
</head>
<body>
  <div class="login-page">
  <div class="form">
    <img class="img-responsive user-logo" src="http://my360crm.urldiary.com/layouts/v7/resources/Images/vtiger.png">
    <!-- form class="register-form">
           <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form> -->
    
    <script>
    function showDiv() 
    {
       document.getElementById('welcomeDiv').style.display = "block";
       document.getElementById('login-form').style.display = "none";
    }
    </script>
    
    <div id="image" style="display:none;"><img class="img img-responsive" src="loading.gif" /></div>
    
    <div id="welcomeDiv" style="display:none;" class="answer_list" ></div>
    <form class="login-form" id="login-form" style="display:block;" action="capture_signup.php">
        <!--<input type="text" readonly placeholder="Plan" required name="plan" id="plan" value="<?php echo $_SESSION['plan']; ?>" /> -->
	<select name="plan" id="plan" required>
			<option value="<?php echo $_SESSION['plan']; ?>" selected ><?php echo $_SESSION['plan']; ?></option>
			<option value="Free">Free</option>
			<option value="Small">Small</option>
			<option value="Medium">Medium</option>
			<option value="Large">Large</option>
	</select>
        <input type="text" placeholder="Company Name Test" required name="company_name" id="company_name" />
	<input type="text" placeholder="Interested In" required name="business_category" id="business_category" readonly  value="My360Capture(CRM Only)" />
        <input type="text" placeholder="First Name" value="<?= $user_info['name'] ?><?php echo $_SESSION['FULLNAME']; ?>" required name="firstname" id="firstname" />
        <input type="text" placeholder="Last Name" required name="lastname" id="lastname" />
       <!-- <select name="business_category" id="business_category" required>
			<option value="">Interested In</option>
			<option value="My360Capture(CRM Only)">My360Capture(CRM Only)</option>
			<option value="My360Cafe">My360Cafe</option>
			<option value="My360Kindy">My360Kindy</option>
			<option value="My360Club">My360Club</option>
			<option value="My360Office">My360Office</option>
			<option value="My360Retail">My360Retail</option>
			<option value="My360Gym">My360Gym</option>
			<option value="My360Events">My360Events</option>
			<!-- <option value="My360Access">My360Access</option>
			<option value="My360Shift">My360Shift</option>
		</select>  -->     
		<input type="mobile" placeholder="Mobile Number" required name="mobile" id="mobile" /><div id="errmsg" style="color:red;"></div>

        <input type="email" placeholder="Email" required name="email" value="<?= $user_info['email'] ?> <?php echo $_SESSION['EMAIL']; ?>" id="email" /><div id="status"></div>
        <input type="password" placeholder="password" required name="password" id="password" />
      <button id="submit" type="button" name="submit" class="btn btn-success signup_comx1" value="Sign Up">Sign Up</button><br/><br/>
      <button id="button" type="button" name="submit" class="signup_comx2" value="Existing User? Log In"><a href="signin.php" style="color:#000;text-decoration:none;"> Existing User? Log In</a></button>
    <a id="login-button" href="<?= 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>">
			<img src="google.png"/>
		</a><br/>
	
<?php 
include_once '../facebook/vendor/autoload.php';
include_once '../facebook/src/Facebook/Facebook.php';
$fb = new Facebook\Facebook([
  'app_id' => '417282905741982', // Replace {app-id} with your app id
  'app_secret' => 'ec0a60328e270585d7b273b0082c6cc0',
  'default_graph_version' => 'v3.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$_SESSION['loginUrl'] = $helper->getLoginUrl('https://internal.my360crm.com/facebook/fb-callback.php', $permissions);
//echo $_SESSION['loginUrl'];

echo '<a href="' . htmlspecialchars($_SESSION['loginUrl']) . '"><img src="facebook.png" style="
    padding-top: 10px;
"></a>
';

?>
</form>
  </div>
</div>

<style type="text/css">
  
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
   background: url(http:my360crm.urldiary.com/copy/login_bg1.jpg);
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.app-footer p {
      width: 100%;
    text-align: center;
    background: #FBFBFB;
    margin-bottom: 0;
    padding: 4px 0;
    border-top: 1px solid #DDDDDD;
    margin-top: 0px;
    position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;

}
.user-logo {
    height: 110px;
    margin: 0 auto;
    padding-top: 0px;
    padding-bottom: 10px;
}
.img-responsive, .thumbnail>img, .thumbnail a>img, .carousel-inner>.item>img, .carousel-inner>.item>a>img {
    display: block;
    max-width: 100%;
    height: auto;
    }
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 340px;
  margin: -50px auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input  {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form select  {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
.form button success {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

.form button default {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #fff;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}


.btn {
    display: inline-block;
    padding: 15px 110px;
    border-radius: 1px;
}


.form button primary {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: url('login_bg1.jpg')no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
/* background: #76b852;*/ /* fallback for old browsers */
  /*background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);*/*/
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}


#pageloader
{
  background: rgba( 255, 255, 255, 0.8 );
  display: none;
  height: 100%;
  position: fixed;
  width: 100%;
  z-index: 9999;
}

#pageloader img
{
  left: 50%;
  margin-left: -32px;
  margin-top: -32px;
  position: absolute;
  top: 50%;
}


/************************Shruti*****************************/
.signup_comx1
{
    width: 100%;
    box-shadow: 0px 1px 0px 1px #011c32;
    padding:12px;
    background-color: #1291f9;
    font-weight:600;
}


.btn-success:hover {
    color: #fff;
    background-color: #2874f0;
    border-color: #011c32;
}
.btn-success {
    border-color: #011c32;
}

.btn-success:active:hover
{
    background-color: #2874f0;
    color: #011c32;
}
.btn-success[disabled]
{
    background-color: #2874f0;
    border-color: #011c32;
    box-shadow: 0px 1px 0px 1px #011c32;
}
.btn-success[disabled]:hover
{
     background-color: #2874f0;
    border-color: #011c32;
    box-shadow: 0px 1px 0px 1px #011c32;
}

.signup_comx2
{
    width: 100%;
    /*box-shadow: 0 4px 6px 0 rgba(0,0,0,.12);*/
    padding:12px;
    background-color: #fff;
    border:#fff;
}
.signup_comx2 a
{
    color:#2874f0!important;
    font-weight: 600;

}

.btn-success {
color: #fff;
background-color: #1391F9!important;
border-color: #011c32!important;
box-shadow: 0px 1px 0px 1px #011c32;
}

/************************Shruti*****************************/

/* Shared */
.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  margin: 0.2em;
  padding: 0 15px 0 46px;
  border: none;
  text-align: left;
  line-height: 34px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}


/* Google */
.loginBtn--google {
  /*font-family: "Roboto", Roboto, arial, sans-serif;*/
  background: #DD4B39;
}
.loginBtn--google:before {
  border-right: #BB3F30 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--google:hover,
.loginBtn--google:focus {
  background: #E74B37;
}


</style>
<script type="text/javascript">
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>

<footer class="app-footer">
  <p>
    Powered by My360CRM - &nbsp;&nbsp;© 2019&nbsp;&nbsp;|
    <a href="//my360crm.urldiary.com" target="_blank">My360CRM</a>&nbsp;|&nbsp;
    <a href="#" target="_blank">Privacy Policy</a>
  </p>
</footer>
</body>
</html>