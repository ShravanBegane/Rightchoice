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
	$query = "SELECT * from vtiger_potentialscf,vtiger_potential,vtiger_crmentity 
                  where vtiger_crmentity.crmid = vtiger_potential.potentialid
		  and vtiger_potential.potentialid = vtiger_potentialscf.potentialid
		  and vtiger_crmentity.deleted !=1 and  cf_980 = '$username'";
	//echo $query;


	if($result = mysqli_query($con, $query))
	{
	     
	    if ($result->num_rows > 0) 
	    {
	    while($row = mysqli_fetch_assoc($result)) 
	    {
	      //$url = $row["cf_952"];
				if (strpos($row["cf_952"], 'index.php') !== false) 
				{
    					$url =  $row["cf_952"];
				}
				else 
				{
					$url =  $row["cf_952"]."index.php";

				}

	      $newurl = str_replace("index.php","",$url);
              $fpurl = "'$newurl/forgotPassword.php'";
			  $redirecturl = "'$url?modules=Users&view=Login&mailStatus=success'";
			  
			  
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
