<?php 

/* if (!empty($_POST["folder"])) {

$folder = $_POST["folder"];
$dir = "../website/".$folder;

// Sort in ascending order - this is default
$a = scandir($dir);

foreach($a as $select => $row){
echo '<option value=' . $row . '>' . $row . '</option>';
}
} */





if (!empty($_POST["folder"])) 
{
	$folder = $_POST["folder"];
?>
<option value="none">Select</option>
<?php 
	foreach(glob('../website/'.$folder.'/*', GLOB_ONLYDIR) as $dir) {
		$dirname = basename($dir);
		
		echo '<option value=' . $dirname . '>' . $dirname . '</option>';

	}
}
else if ($_POST["folder"] == "none") 
{
?>
<option value="">Select</option>
<option value="none">None</option>
<?php 
}

?>

	
	
	
	