<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/


class Vtiger_MassDelete_Action extends Vtiger_Mass_Action 
{

	function checkPermission(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$moduleModel = Vtiger_Module_Model::getInstance($moduleName);

		$currentUserPriviligesModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();
		if(!$currentUserPriviligesModel->hasModuleActionPermission($moduleModel->getId(), 'Delete')) {
			throw new AppException(vtranslate('LBL_PERMISSION_DENIED'));
		}
	}

	function preProcess(Vtiger_Request $request) {
		return true;
	}

	function postProcess(Vtiger_Request $request) {
		return true;
	}

	public function process(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$moduleModel = Vtiger_Module_Model::getInstance($moduleName);

		if($request->get('selected_ids') == 'all' && $request->get('mode') == 'FindDuplicates') {
			$recordIds = Vtiger_FindDuplicate_Model::getMassDeleteRecords($request);
		} else {
			$recordIds = $this->getRecordsListFromRequest($request);
		}
		$cvId = $request->get('viewname'); 
		foreach($recordIds as $recordId) 
		{
			if(Users_Privileges_Model::isPermitted($moduleName, 'Delete', $recordId)) {
				$recordModel = Vtiger_Record_Model::getInstanceById($recordId, $moduleModel);
				$recordModel->delete();
				deleteRecordFromDetailViewNavigationRecords($recordId, $cvId, $moduleName);
				
					require('config.inc.php');
					// Create connection
					$conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'], $dbconfig['db_name']);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
					
					//$recordId = 41;
					$sql = "SELECT * FROM vtiger_potentialscf where potentialid = ".$recordId."";
					$result = $conn->query($sql);

					$sql1 = "SELECT * FROM vtiger_accountscf where accountid = ".$recordId."";
					$result1 = $conn->query($sql1);

					if ($result->num_rows > 0) 
					{
						// output data of each row
						while($row = $result->fetch_assoc()) 
						{
							
						     if ($row["cf_952"] != null) 
						     {

							if(strpos($row["cf_952"], "index.php") !== true)
							{
								$last = explode("/website/", $row["cf_952"], 3);
								$path = "website/".$last[1];
								$path1= rtrim($path, '/');
								if (file_exists($path1)) {
								rename($path1,$path1."deleted");
								}
							}
						     }

						}
					} 

					if ($result1->num_rows > 0) 
					{
						// output data of each row
						while($row1 = $result1->fetch_assoc()) 
						{
							
						    if ($row["cf_916"] != null) 
						    {
							if(strpos($row["cf_916"], "index.php") !== true)
							{

								$last = explode("/website/", $row["cf_916"], 3);
								$path = "website/".$last[1];
								$path1= rtrim($path, '/');
								if (file_exists($path1)) {
								rename($path1,$path1."deleted");
								}
							}
						     }							

						}
					} 

		 
			}
		}
		$response = new Vtiger_Response();
		$response->setResult(array('viewname'=>$cvId, 'module'=>$moduleName));
		$response->emit();
	
}
}
