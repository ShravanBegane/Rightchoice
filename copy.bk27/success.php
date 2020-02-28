<!DOCTYPE html>
<html>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
  <head>
    <title>My360CRM </title>  
</head>
<body>
  <div class="login-page">
  <div class="form">
    <img class="img-responsive user-logo" src="http://my360crm.urldiary.com/layouts/v7/resources/Images/vtiger.png">
       <div id="welcomeDiv" class="answer_list" >

		<?php

// Start the session
session_start();

include_once('../WSClient.php');
include("../xmlapi.php"); 
include("../config.inc.php"); 
	
$username = "superadmin";
$password= "nAnNzKHH35z4lSd";
$service_url = $site_URL."webservice.php";
$url = $service_url."?operation=getchallenge&username=".$username."&password=".$password;
?>
<?php 
$plan =  $_SESSION["plan"] ;
$email =  $_SESSION["email"] ;
$company_name =  $_SESSION["company_name"];
$business_category =  $_SESSION["business_category"];
$password =  $_SESSION["password"];

$companynamerename = preg_replace("/[^a-zA-Z]/", "", $company_name);


date_default_timezone_set("Asia/Calcutta");
$renamed_company_name = date("ymdHis").$companynamerename;
$url_link = $site_URL.'website/'.$renamed_company_name.'/';


				$DB_HOST = "localhost";
				$DB_USER = "comx";
				$DB_PASS = "password";
				$DB_DST_NAME = "my360crm_".$renamed_company_name;

				// Create connection
				$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS);
				
				// Check connection
				if ($link->connect_error)
				{
					die("Connection failed: " . $link->connect_error);
				} 

				// Create database
				$sql = 'CREATE DATABASE ' . $DB_DST_NAME . '';
				
				//$sql = "CREATE DATABASE myDB";
				
				if ($link->query($sql) === TRUE)
				{
					//echo "Database ". $DB_DST_NAME ." created successfully";
					$filename = 'db.sql';
					// Connect to MySQL server
						$con = @new mysqli($DB_HOST, $DB_USER, $DB_PASS,$DB_DST_NAME);

						// Check connection
						if ($con->connect_errno) {
							echo "Failed to connect to MySQL: " . $con->connect_errno;
							echo "<br/>Error: " . $con->connect_error;
						}

						// Temporary variable, used to store current query
						$templine = '';
						// Read in entire file
						$lines = file($filename);
						// Loop through each line
						foreach ($lines as $line) {
						// Skip it if it's a comment
							if (substr($line, 0, 2) == '--' || $line == '')
								continue;

						// Add this line to the current segment
							$templine .= $line;
						// If it has a semicolon at the end, it's the end of the query
							if (substr(trim($line), -1, 1) == ';') {
								// Perform the query
								$con->query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . $con->error() . '<br /><br />');
								// Reset temp variable to empty
								$templine = '';
							}
						}
						//echo "Tables imported successfully";
						
						$salt = substr($email, 0, 2);
						$salt = '$1$' . str_pad($salt, 9, '0');

						$newpassword = crypt($password, $salt);
						$user_hash = md5($newpassword);

						//echo $newpassword;
						
								
						// Create connection
						$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS,$DB_DST_NAME);
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 
						
						$sql = "UPDATE vtiger_users SET user_name='$email',email1='$email',company_name='$company_name',user_hash='$user_hash',user_password = '$newpassword' WHERE id = '1'";
						
						if ($conn->query($sql) === TRUE) {
							//echo "Record updated successfully";
						} else {
							echo "Error updating record: " . $conn->error;
						}	
						
						
						//get list of folders in directory			
				$dir = "../website/";

				$a = glob($dir . 'crm*');
				//print_r($files);
				// Rename the folder		
				rename($a[0],$dir."$renamed_company_name");
				$application_unique_key1 = md5($renamed_company_name);
				//exit();

				if(file_exists($dir.$uriSegments[2])) 
				{
					//Rewrite the config.inc.php file
					//echo "TEST PASSED";
					$file = "../website/$renamed_company_name/config.inc.php";
					$file_contents = file_get_contents($file);

					$fh = fopen($file, "w");
					$file_contents = str_replace("company_name",$renamed_company_name,$file_contents);
					$file_contents = str_replace("ukey1",$application_unique_key1,$file_contents);
					fwrite($fh, $file_contents);
					fclose($fh);
					
					
					
				}
				


					require 'phpmailer/PHPMailerAutoload.php';

					$mail = new PHPMailer;

					//$mail->SMTPDebug = 3;                               // Enable verbose debug output

					$mail->isSMTP();                                      // Set mailer to use SMTP
					$mail->Host = 'mail.my360crm.com';  // Specify main and backup SMTP servers
					$mail->SMTPAuth = true;                               // Enable SMTP authentication
					$mail->Username = 'jason@my360crm.com';                 // SMTP username
					$mail->Password = '45Lakehills';                           // SMTP password
					$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
					$mail->Port = 465;                                    // TCP port to connect to

					$mail->From = 'jason@my360crm.com';
					$mail->FromName = 'My360CRM';
					$mail->addAddress($email);     // Add a recipient             // Name is optional
					$mail->addReplyTo('jason@my360crm.com', 'My360CRM');
					$mail->addCC('preeti.comx@gmail.com');

					$mail->isHTML(true);  


							
						$mail->Subject = "Login Details from My360CRM";
						$baseurl = $site_URL."website/".$uriSegments[2];
						$logo_url = $site_URL."layouts/v7/resources/Images/vtiger.png";

						$mail->Body = "<html>
									<head>
									<title>Login Details from My360CRM </title>
									</head>
									<body style='width:600px; margin:20px auto; border:1px solid #000;'>
									<div style=' padding:20px;'>
									<div><a href= '".$baseurl."' target='_blank'><img src='".$logo_url."' style='height:100px'></a></div>
									<h1 style='font-size:18px; font-family:Arial, Helvetica, sans-serif; background:#0a73ba; padding:10px; color:#FFF; font-weight:normal; border-left:10px solid #000; margin-top:20px;'>My360CRM</h1>
									<div style=' font-family:'Comic Sans MS', cursive;'>
									<p style='font-size:18px;'>Hi ".$firstname."</p> 
									<p style='font-size:18px;'>Thank you for registering for your My360CRM. </p>
									<p style='font-size:18px;'>Your Dashbaord link is  '".$baseurl."'</p>
									<p style='font-size:18px;'>Login Details:</p>
									<p style='font-size:18px;'>Email: ".$email."</p>
									<p style='font-size:18px;'>Password: ".$password."</p>
									</div>
									<div style=' font-family:'Comic Sans MS', cursive;'></div>
													<p><b>Thanks & Regards</b></p>
									<p><b> https://my360crm.com </b></p>
									</div>
									</body>
									</html>";
							
						   
					if(!$mail->send()) {
						echo 'Message could not be sent.';
						echo 'Mailer Error: ' . $mail->ErrorInfo;
					} else {
						//echo 'Message has been sent';
					}

				   

									// Create connection
									$conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'],$dbconfig['db_name']);
									// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									} 
									
									
									$sql = 'SELECT vtiger_account.`accountid` FROM `vtiger_account`,`vtiger_crmentity` ,vtiger_accountscf 
										where vtiger_account.accountid = vtiger_accountscf.accountid
										and vtiger_account.accountid = vtiger_crmentity.`crmid`
										and email1 ="'.$email.'" 
										and `vtiger_crmentity`.`deleted` = 0';
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
										// output data of each row
										while($row = $result->fetch_assoc()) {
											
											$sql = 'UPDATE vtiger_accountscf SET cf_996="Paid", cf_916="'.$url_link.'" WHERE accountid = "'.$row["accountid"].'"';
									
											if ($conn->query($sql) === TRUE) {
												
												echo "<div class='alert alert-success' id='success_message'>
														  <strong>Success!</strong> Your request for ".$business_category." - CRM has been received, We will set up your CRM shortly . 
													  </div>
													  <div class='col-md-12'><a href='https://internal.my360crm.com/copy/signin.php'> Click here to Sign In </a></div>";
													
											} else {
												echo "Error updating record: " . $conn->error;
											}	
											
										}
									} else {
										echo "0 results";
									}
									
									
						}
						else 
						{
							
							echo "error";
						}
						

?>




	</div>
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
  max-width: 360px;
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



