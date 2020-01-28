<?php

$row["cf_952"] = "https://internal.my360crm.com/website/capture/Small/190515152204123smallcapturefree/";
$last = explode("/website/", $row["cf_952"], 3);
$path = "website/".$last[1];
echo $path1= rtrim($path, '/');echo "<br/>";
if (file_exists($path1)) {
	
rename($path1,$path1."deleted");
}


?>