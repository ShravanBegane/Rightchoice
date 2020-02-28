<?php

/* //get list of folders in directory			
$dir = "website";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir,1);

print_r($a);
//print_r($a[3]);
print_r($b);

$directories = glob($dir . '/*' , GLOB_ONLYDIR);
print_r($directories); */

$files = glob('website/crm*');
print_r($files);
echo rename($files[0],'website/crm111111');
			
/* $company_name = "comx1";

// Rename the folder		
rename("website/".$a[3],"website/$company_name");

//Rewrite the config.inc.php file
echo "TEST PASSED";
$file = "website/$company_name/config.inc.php";
$file_contents = file_get_contents($file);

$fh = fopen($file, "w");
$file_contents = str_replace("company_name",$company_name,$file_contents);
fwrite($fh, $file_contents);
fclose($fh); */
	
	
	
	
?>