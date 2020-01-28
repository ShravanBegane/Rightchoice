<?php 

echo $folder_category = $_POST["folder_category"];
echo $folder = $_POST["folder"];
echo $dir = "../website/".$folder.'/'.$folder_category;

if (!empty($_POST["folder_category"]) && !empty($_POST["folder"])) {



?>
<option value="none">Select</option>
<?php 
foreach(glob('../website/'.$folder.'/'.$folder_category.'/*', GLOB_ONLYDIR) as $dir) {
    $dirname = basename($dir);
	
	echo '<option value=' . $dirname . '>' . $dirname . '</option>';

}
}
else if($folder == "none" && $folder_category == "")
{
?>
<option value disabled selected>Select</option>
<?php 
foreach(glob('../website/*', GLOB_ONLYDIR) as $dir) {
    $dirname = basename($dir);
	
	echo '<option value=' . $dirname . '>' . $dirname . '</option>';

} 
}

?>
