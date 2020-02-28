<?php
class Post_Signup extends CI_Model {


	function __construct() {
        parent::__construct();		
		
		$this->load->dbforge();
		$output = [];
    }


	public function fetch_entries($table='')
	{
		if($this->db->table_exists($table)):
	        $query = $this->db->get($table);
	        return $query->result();
	    else:
	    	return false;
	    endif;
	}

	public function write_entry($inputData)
	{
		$output = [];

		$table = $inputData->db_name;

		$db_name = $inputData->db_name;
		$crm_name = $inputData->patched_name;
		$plan = $inputData->plan;
		$business_category = $inputData->category;
		/**
		[Condition: Folder Exist and DB exist]
		[Status: Successfull]	
		[UTask: Create CRM Db and Folder]	
		[CTask: Create folder and Db if not exist]			
		**/		

		$_entity_name = $plan;
		$_sub_entity_name = $crm_name;
		$_table_name = $db_name;

		$_folder_name = $_table_name;

		// // $SDate = date('Y-m-d H:i:s');
		// // $SDate2 = str_replace( ':', '', $SDate);
		// // $SDate3 = str_replace( '-', '', $SDate2);
		// // $date = str_replace( ' ', '', $SDate3);

		// // $_folder_name = $date.$_table_name;
		// echo $_folder_name; die;

		if($this->createDir($crm_name,$plan,$business_category)):

			$output['Dir Ready'] = true;

			// if($this->create_database($db_name)):
			// 	$output['Db Ready'] = true;
			// else:
			// 	$output['Db Ready'] = false;
			// endif;
		else:
			$output['Dir Ready'] = false;
		endif;

		return $output;
	}

	public function update_entry($_input_data)
	{
	 	$output = [];

	 		$output['Db Update'] = false;
	 		$output['Dir Update'] = false;
	 		$output['inputs'] = $_input_data;
        // print_r($_POST['id']); die;
        // $this->fname    =  $this->input->post('fname'); 
        // $this->lname  	= $this->input->post('lname');
        // $this->email  	= $this->input->post('email');

        // $this->db->update('users', $this, array('id' => $_POST['id']));
	 		return $output;
	}

	 public function delete_entry($_folder_name)
	 {
	 	$output = [];

	 	/** 
	 	[Delete Directory]
	 	**/
	 	$base_path = BASE_DIR_NAME.
	 	$path=BASE_DIR_NAME.BASE_CRM_DIR_NAME.'/'.$_folder_name.'/';

	 	// echo $path; die;
		if(delete_files($path, true , false, 1)): // delete all files/folders
			$output['Dir Remove'] = true;
		else:
			$output['Dir Remove'] = false;
		endif;
	 	/** 
	 	[Delete Database]
	 	**/
	 	if($this->drop_database($_folder_name)):
	 		$output['Db Remove'] = true;
	 	else:
	 		$output['Db Remove'] = false;
	 	endif;

	//         if( $this->db->delete('users', array('id' => $this->input->post('id')))){
	//                 return true;
	//         }else{
	//                 return false;
	//         }

			return $output;
	 }

	protected function recursiveRmDir($dir)
	{
	   $iterator = new RecursiveIteratorIterator(new \RecursiveDirectoryIterator($dir, \FilesystemIterator::SKIP_DOTS), \RecursiveIteratorIterator::CHILD_FIRST);
	   foreach ($iterator as $filename => $fileInfo) {
	       if ($fileInfo->isDir()) {
	           rmdir($filename);
	           return true;
	       } else {
	           unlink($filename);
	           return false;
	       }
	   }
	}

	protected function createDir($_folder_name, $_sub_entity_name,$__entity_name){

		/**
		[Condition: Folder Exist]
		[Status: Successfull]	
		[UTask: Create CRM]	
		[CTask: Create folder if not exist]			
		**/		

		// echo './crms/' . $_folder_name.'/'.$_sub_entity_name; die;
		if (!is_dir('crms/'.$__entity_name)) {
		    mkdir('./crms/' . $__entity_name, 0777, TRUE);
		    if($this->createSubDir($_sub_entity_name,$__entity_name,$_folder_name)):
				return true;
			else:
				return false;
			endif;
			
		}else{
			if($this->createSubDir($_sub_entity_name,$__entity_name,$_folder_name)):
				return true;
			else:
				return false;
			endif;
			
		    
		}
	}



	protected function createSubDir($_sub_entity_name,$_entity_name,$_folder_name){

		/**
		[Condition: Sub Folder Exist]
		[Status: Successfull]	
		[UTask: Create CRM Entities]	
		[CTask: Create sub folder if not exist]			
		**/	

		if($_sub_entity_name){
			$_new_path = './crms/' . $_entity_name.'/'.$_sub_entity_name;
			$copy_dir_path = '/copy/';
			$_crm_path = './crms/' . $_entity_name.'/'.$_sub_entity_name.'/'.$_folder_name;
			// echo $_crm_path; die;
			if (!is_dir($_new_path)) { 
				mkdir($_new_path, 0777, TRUE);
					if (!is_dir($_crm_path)) { 

							mkdir($_crm_path, 0777, TRUE);
							$this->copy_folder($_crm_path,$copy_dir_path);
							return true;

						}else{
							return false;
						}				
		    }else{
		    	if (!is_dir($_crm_path)) { 

							mkdir($_crm_path, 0777, TRUE);
							$this->copy_folder($_crm_path,$copy_dir_path);
							return true;
						}else{
							return false;
						}	
		    }
		}else {
			return false;
		}
	}



	protected function create_database($db_name){

		$sql = "CREATE DATABASE IF NOT EXISTS ".$db_name;
		$result = $this->db->query($sql);
		// $this->dbforge->create_database($db_name);
		// $this->db->query('use db2'); 

		$this->import_database($db_name);

		if($result):
			return true;
		else:
			return false;
		endif;

	}

	protected function drop_database($_db_name){

		$sql = 'DROP DATABASE IF EXISTS '.$_db_name;
		$result = $this->db->query($sql);
		// $this->dbforge->drop_database($_db_name);
		if($result):
			return true;
		else:
			return false;
		endif;
	}

	protected function create_table($db_name)
	{
		if($this->db->table_exists('banned_users')){
            echo 'Table banned_users exists, no need to setup.';
        }else{
                $feilds = array(
                            'banned_user_id'=> array(
                                            'type' =>'INT',
                                            'constraint' =>10,
                                            'unsigned'=>TRUE,
                                            'auto_increment'=>TRUE
                        
                            ),
                            'banned_user_slname' => array(
                                                    'type' =>'VARCHAR',
                                                    'constraint'=>100
                            ),
                            'banned_uuid'=>array(
                                            'type'=>'VARCHAR',
                                            'constraint'=>100,                                            
                            ),
                            'banned_from'=>array(
                                            'type'=>'VARCHAR',
                                            'constraint'=>100
                            ),
                            'banned_by'=>array(
                                            'type'=>'VARCHAR',
                                            'constraint'=>60
                            ),
                            'banned_reason'=>array(
                                                'type'=>'VARCHAR',
                                                'constraint'=>500
                            ),
                            'banned_when'=>array(
                                            'type'=>'VARCHAR',
                                            'constraint'=>20
                            )
                                    
            );
            $this->dbforge->add_feild($feilds);
            $this->dbforge->add_field('id');
            $this->dbforge->add_key('banned_user_id',TRUE); 
            $this->dbforge->create_table('banned_users',TRUE);
        }
	}


	protected function import_database($_db_name){

		// Name of the file
		$filename = 'db.sql';
		// MySQL host
		$mysql_host = 'localhost';
		// MySQL username
		$mysql_username = 'root';
		// MySQL password
		$mysql_password = '';
		// Database name
		$mysql_database = $_db_name;

		// Connect to MySQL server
		$conn = mysqli_connect($mysql_host, $mysql_username, $mysql_password, $mysql_database) or die('Error connecting to MySQL server: ' . $mysqli -> connect_error());
		// Select database
		// mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());

		// Temporary variable, used to store current query
		$templine = '';
		// Read in entire file
		$lines = file($filename);
		// Loop through each line
		foreach ($lines as $line)
		{
		// Skip it if it's a comment
		if (substr($line, 0, 2) == '--' || $line == '')
		    continue;

		// Add this line to the current segment
		$templine .= $line;
		// If it has a semicolon at the end, it's the end of the query
		if (substr(trim($line), -1, 1) == ';')
		{
		    // Perform the query
		    $conn -> query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
		    // Reset temp variable to empty
		    $templine = '';
		}
		}
		 echo "Tables imported successfully"; die;

	}

	protected function copy_folder($dir,$src)
	{
		 // open the source directory 
		    $dir = opendir($src);  
		  
		    // Make the destination directory if not exist 
		    @mkdir($dst);  
		  
		    // Loop through the files in source directory 
		    while( $file = readdir($dir) ) {  
		  
		        if (( $file != '.' ) && ( $file != '..' )) {  
		            if ( is_dir($src . '/' . $file) )  
		            {  
		  
		                // Recursively calling custom copy function 
		                // for sub directory  
		                custom_copy($src . '/' . $file, $dst . '/' . $file);  
		  
		            }  
		            else {  
		                copy($src . '/' . $file, $dst . '/' . $file);  
		            }  
		        }  
		    }  
		  
		    closedir($dir); 		
							
	}

	function rename_folder($folder_path,$renamed_company_name,$plan)
	{
		//get list of folders in directory			
		$dir = "../".$folder_path;
		//echo $dir;echo "<br/>";
		
		$a = glob($dir.'crm*');

		// Rename the folder		
		rename($a[0],$dir."$renamed_company_name");
		$application_unique_key1 = md5($renamed_company_name);
		//exit();

		if(file_exists($dir.$renamed_company_name)) 
		{
			//Rewrite the config.inc.php file
			//echo "TEST PASSED";
			$file = "../$folder_path$renamed_company_name/config.inc.php";
			$file_contents = file_get_contents($file);

			$fh = fopen($file, "w");
			$file_contents = str_replace("company_name",$renamed_company_name,$file_contents);
			$file_contents = str_replace("plan",$plan,$file_contents);
			$file_contents = str_replace("ukey1",$application_unique_key1,$file_contents);
			fwrite($fh, $file_contents);
			fclose($fh);
			
		}					
							
	}

}