<?php
class FlxZipArchive extends ZipArchive 
{
public function addDir($location, $name) 
{
$this->addEmptyDir($name);
$this->addDirDo($location, $name);
} 
private function addDirDo($location, $name) 
{
$name .= '/';
$location .= '/';
$dir = opendir ($location);
while ($file = readdir($dir))
{
if ($file == '.' || $file == '..') continue;
$do = (filetype( $location . $file) == 'dir') ? 'addDir' : 'addFile';
$this->$do($location . $file, $name . $file);
}
} 
}
?>

<?php
$folder = $_POST["folder"].'/';
$folder_category = $_POST["folder_category"].'/';
$crmname= $_POST["crmname"];
//$dir = "../website/".$folder.'/'.$folder_category;

if($_POST["folder"] == "none"){
	$the_folder = '../website/'.$crmname;
}else{
	$the_folder = '../website/'.$folder.$folder_category.$crmname;
}


date_default_timezone_set("Asia/Kolkata");
$date=date("d-M-y-h-i-sa");
$zip_file_name = $crmname.'.backup.'.$date.'.zip';
#echo $zip_file_name;
//exit();


$za = new FlxZipArchive;
$res = $za->open($zip_file_name, ZipArchive::CREATE);
if($res === TRUE) 
{
$za->addDir($the_folder, basename($the_folder));
$za->close();
echo 'Backup is Sucess....';
}
else{
echo 'Could not create a zip archive';
}

?>