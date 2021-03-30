<?php 
    include_once('../WSClient.php');
    include("../xmlapi.php"); 
    include("../config.inc.php"); 
    include("db.php");
    
if (isset($_POST['form_submitted']))
{
    $username = $_POST['username'];
    $emailId = $_POST['username'];
	
	echo "<input type='hidden' id='username' value='$username'/>";
	echo "<input type='hidden' id='emailId' value='$emailId' />";

   // echo $username;
    //echo "<br/>";

	$username = mysqli_real_escape_string($con, $username);
	$query = "SELECT * from vtiger_accountscf,vtiger_account,vtiger_crmentity 
                  where vtiger_crmentity.crmid = vtiger_account.accountid
		  and vtiger_account.accountid = vtiger_accountscf.accountid
		  and vtiger_crmentity.deleted !=1 and  email1 = '$username'";
	// echo $query; die;


	if($result = mysqli_query($con, $query))
	{
	     // print_r($result); die;
	    if ($result->num_rows > 0) 
	    {
	    while($row = mysqli_fetch_assoc($result)) 
	    {
	    	// print_r($row); die;
	      //$url = $row["cf_916"];
				if (strpos($row["cf_916"], 'index.php') !== false) 
				{
    					$url =  $row["cf_916"];
				}
				else 
				{
					$url =  $row["cf_916"]."index.php";

				}

	      $newurl = str_replace("index.php","",$url);
	      $fpurl = "'$newurl/forgotPassword.php'";
			$redirecturl = "'$url?modules=Users&view=Login&mailStatus=success'";	  
				// echo $redirecturl; die;
			 
			  ?>
			  <script src="//code.jquery.com/jquery.min.js"></script>

				<script>
					$(document).ready(function(){
						
					var username = $("#username").val();
						var emailId = $("#emailId").val();
					
					var dataString = 'username='+ username + '&emailId='+ emailId;
				// AJAX Code To Submit Form.
					$.ajax({
					type: "POST",
					url: <?php echo $fpurl; ?>,
					data: dataString,
					cache: false,
					success: function(result)
					{
						console.log(result);
						location.href = <?php echo $redirecturl; ?>;
					}
					});
				});
				
</script>
 		  
			  
			  <?php 
			  echo '<div style="color: green; text-align: center;">Please Check your email: '.$_POST['username'].' for reset instructions.</div>';
			  sleep(10);
		// header("Refresh: 10; URL=".$newurl);

                          
	    }
	}
	else 
	{
		echo '<div style="color: red;">Invalid credentails. </div>';
		header("location:forgotpassword.php?login=error");

	}	
	}

	else
	{
		// username is already exist 
		echo '<div style="color: red;"><b>'.$username.'</b> not found. </div>';
	}
		
 }
 
 ?>
