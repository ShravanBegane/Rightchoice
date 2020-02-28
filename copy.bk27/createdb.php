<?php

//get list of folders in directory			
		
		$renamed_company_name = "PPPP";
		
		$dir = "../website/";

		$a = glob($dir . 'crm1');
		//print_r($files);
		// Rename the folder		
		rename($a[0],$dir."$renamed_company_name");
		$application_unique_key1 = md5($companynamerename);
		//exit();

		if(file_exists($dir.$renamed_company_name)) 
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



/* 
	        $company_name = "PPP";
			$companynamerename = str_replace(' ', '_', $company_name);
			
			$path = '../website/'.$companynamerename.'/';
			
			$firstname = "Preeti";
			$lastname = "Pujari";
			$business_category = "business_category";
			$plan = "Free";
			$email = "preeti.comx@gmail.com";
			$mobile = "9999999999";
			//$user_name = $_POST['user_name'];
			$password = "preeti.comx@gmail.com"; 
			
			
			
			
			echo "success";
			//exit();
			
			date_default_timezone_set("Asia/Calcutta");
			$renamed_company_name = date("ymdHis").$companynamerename;
			$url_link = $site_URL.'website/'.$renamed_company_name.'/';
			
	
	
		$DB_HOST = "localhost";
        $DB_USER = "comx";
        $DB_PASS = "";
        $DB_DST_NAME = "my360crm_".$renamed_company_name;

		// Create connection
		$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS);
		
		// Check connection
		if ($link->connect_error)
		{
			die("Connection failed: " . $link->connect_error);
		} 

		// Create database
		$sql = 'create database ' . $DB_DST_NAME . ' DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci';
		
		//$sql = "CREATE DATABASE myDB";
		
		if ($link->query($sql) === TRUE)
		{
			echo "Database ". $DB_DST_NAME ." created successfully";
		} 
		else 
		{
			echo "Error creating database: " . $link->error;
		}
	
	    
	$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS);
    
    $query = '';
    $sqlScript = file('db.sql');
    foreach ($sqlScript as $line)	{
    	
    	$startWith = substr(trim($line), 0 ,2);
    	$endWith = substr(trim($line), -1 ,1);
    	
    	if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
    		continue;
    	}
    		
    	$query = $query . $line;
    	if ($endWith == ';') {
    		mysqli_query($conn,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
    		$query= '';		
    	}
    }
    echo '<div class="success-response sql-import-response">SQL file imported successfully</div>';

		

		 $salt = substr($email, 0, 2);
		$salt = '$1$' . str_pad($salt, 9, '0');

		$newpassword = crypt($password, $salt);
		$user_hash = md5($newpassword);

	    echo $newpassword;
		
				
        // Create connection
        $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "UPDATE vtiger_users SET user_name='$email',email1='$email',company_name='$company_name',user_hash='$user_hash',user_password = '$newpassword' WHERE id = '1'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }	 */
    
?>