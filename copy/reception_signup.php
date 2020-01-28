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


include("header.php");

error_reporting(0);

if(isset($_POST['plan']))
{ 
     $_SESSION['plan'] = $_POST['plan'];
	//echo $_SESSION['plan'];
} 



?>


    <div id="image" style="display:none;"><img class="img img-responsive" src="loading.gif" /></div>
    <div id="welcomeDiv" style="display:none;" class="answer_list" ></div>
    <form class="login-form" id="login-form" style="display:block;" action="reception_signup.php">
        <input type="text" readonly placeholder="Plan" required name="plan" id="plan" value="<?php echo $_SESSION['plan']; ?>"  />
        <input type="text" placeholder="Company Name" required name="company_name" id="company_name" />
	<input type="text" placeholder="First Name" value="<?= $user_info['name'] ?><?php echo $_SESSION['FULLNAME']; ?>" required name="firstname" id="firstname" />
        <input type="text" placeholder="Last Name" required name="lastname" id="lastname" />
        <input type="text" placeholder="Interested In" required="" name="business_category" id="business_category" readonly="" value="My360Reception">       
        <input type="mobile" placeholder="Mobile Number" required name="mobile" id="mobile" /><div id="errmsg" style="color:red;"></div>
        <input type="email" placeholder="Email" required name="email" value="<?= $user_info['email'] ?> <?php echo $_SESSION['EMAIL']; ?>" id="email" /><div id="status"></div>
        <div id="emailsuccess" style="color:green"></div>
	<div id="emailerror" style="color:red"></div>
	<div id="status"></div>

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

echo '<a href="' . htmlspecialchars($_SESSION['loginUrl']) . '">
<img src="facebook.png" style="padding-top: 10px;"></a>';

?>



</form>


 
<script>
    function showDiv() 
    {
       document.getElementById('welcomeDiv').style.display = "block";
       document.getElementById('login-form').style.display = "none";
    }
</script>

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
			$("#ptag").css("display","none");

			
		}
		else 
		{
			// get text username text field value
			var username = $("#email").val();
			
			// check username name only if length is greater than or equal to 3
			if(username.length >= 3)
			{
			// check username
			$.post("email/emailverify.php", {username: username}, function(data, status)
			{
				if(data != "Email Address is valid.")
				{	
					document.getElementById("submit").disabled = true;
					$("#ptag").css("display","none");
					$("#emailerror").html(data);
					$("#emailsuccess").css("display","none");
					document.getElementById("emailsuccess").style.display = "none";
					console.log(data);
				}
				else
				{
					document.getElementById("submit").disabled=false;
					$("#ptag").css("display","block");
					document.getElementById("emailerror").style.display = "none";
					$("#emailsuccess").html(data);
					console.log(data);


				}
				
			});
			}		
		}
	
    });
    });
</script>

    
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
    //alert(dataString);
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
    url: "reception_copy_db_paid.php",
    data: dataString,
    cache: false,
    beforeSend: function()
    {
        $('#image').show();
        $('#login-form').hide();
        
    },
    complete: function(){
        $('#image').hide();
    },
    success: function(result)
	{
		//alert(result);

		if(result == "reception_signup_payment.php")
		{		
			window.location.href = "reception_signup_payment.php";	

		}
		else
		{
			$('#welcomeDiv').html(result);
        		console.log(result);
        		showDiv() 
		}


    }
    });
    }
    return false;
    });
    });
</script>

<?php include("footer.php"); ?>