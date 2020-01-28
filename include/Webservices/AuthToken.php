<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
//include_once('Login.php');
 
	
	function vtws_getchallenge($username,$password){
		
		global $adb;
		
		if(empty($username)){
			throw new WebServiceException(WebServiceErrorCode::$ACCESSDENIED,"No username given");
		}
		
		if(empty($password)){
			throw new WebServiceException(WebServiceErrorCode::$ACCESSDENIED,"No password given");
		}

		/* $user = new Users();
		$userid = $user->retrieve_user_id($username); */
		
		
		$salt = substr($username, 0, 2);
		$salt = '$1$' . str_pad($salt, 9, '0');
		$newpassword = crypt($password, $salt);
		
		$sql = "SELECT * FROM `vtiger_users` WHERE `user_name` = ? and user_password = ?";
		$result = $adb->pquery($sql, array($username,$newpassword));
		$row = $adb->query_result_rowdata($result, 0);
		$userid = $row['id'];
		
		
        if(empty($userid)){
			throw new WebServiceException(WebServiceErrorCode::$ACCESSDENIED,"username does not exists");
		}
		
		
		$authToken = uniqid();
		$servertime = time();
		$expireTime = time()+(60*5);
		
		
		
		/* echo $accesskey = $row['accesskey'];
		echo "<br/>";
		echo $authToken;
		//echo $user_password = $row['user_password'];
		echo "<br/>";
		echo $userid;
		echo "<br/>"; */
		$accessCrypt = md5($authToken.$row['accesskey']);
		/* echo $accessCrypt;
		echo "<br/>"; */


		
		$sql = "delete from vtiger_ws_userauthtoken where userid=?";
		$adb->pquery($sql,array($userid));
		
		
		
		
		
		$sql = "insert into vtiger_ws_userauthtoken(userid,token,expireTime) values (?,?,?)";
		$adb->pquery($sql,array($userid,$authToken,$expireTime));
		
		
		//return array("token"=>$authToken,"accesskey"=>$accessCrypt,"serverTime"=>$servertime,"expireTime"=>$expireTime);

		
		
		function vtws_login($username,$accessCrypt)
		{
		
		$user = new Users();
		$userId = $user->retrieve_user_id($username);
		
		$token = vtws_getActiveToken($userId);
		if($token == null){
			throw new WebServiceException(WebServiceErrorCode::$INVALIDTOKEN,"Specified token is invalid or expired");
		}
		
		$accessKey = vtws_getUserAccessKey($userId);
		if($accessKey == null){
			throw new WebServiceException(WebServiceErrorCode::$ACCESSKEYUNDEFINED,"Access key for the user is undefined");
		}
		
		$accessCrypt = md5($token.$accessKey);
		/* echo $accessCrypt;
		exit();
		 */
		
		if(strcmp($accessCrypt,$pwd)!==0){
			throw new WebServiceException(WebServiceErrorCode::$INVALIDUSERPWD,"Invalid username or password");
		}
		$user = $user->retrieveCurrentUserInfoFromFile($userId);
		if($user->status != 'Inactive'){
			return $user;
		}
		throw new WebServiceException(WebServiceErrorCode::$AUTHREQUIRED,'Given user is inactive');
	}
	
	function vtws_getActiveToken($userId){
		global $adb;
		
		$sql = "select token from vtiger_ws_userauthtoken where userid=? and expiretime >= ?";
		$result = $adb->pquery($sql,array($userId,time()));
		if($result != null && isset($result)){
			if($adb->num_rows($result)>0){
				return $adb->query_result($result,0,"token");
			}
		}
		return null;
	}
	
	function vtws_getUserAccessKey($userId){
		global $adb;
		
		$sql = "select accesskey from vtiger_users where id=?";
		$result = $adb->pquery($sql,array($userId));
		if($result != null && isset($result)){
			if($adb->num_rows($result)>0){
				return $adb->query_result($result,0,"accesskey");
			}
		}
		return null;
	}
		
						
	}

?>