<?php

/**
 * 
 */
class server_splitter_init
{
	
	function __construct()
	{
		$inputs = "";

		$service_url = "";
	}

	public function init($inputs){
		$this->inputs = $inputs;
		if($inputs):
			if($inputs['operation'] == 'create'):
				if($this->router($inputs['module'])):
					if($this->fire_curl($this->service_url,$this->inputs)):
						return true;
					else:
						return false;
					endif;
				else:
					return false;
				endif;			
		else:
			return false;
		endif;
	}

	public function router($route){
		if($route == 'Reception'):
			$this->service_url = "http://dev-reception.rightchoice.io/rest";
			return true;
		elseif($route == 'Business'):
			$this->service_url = "http://dev-business.rightchoice.io/rest";
			return true;
		else:
			return false;
		endif;
	}

	public function fire_curl($service_url,$curl_post_data){

		$curl = curl_init($service_url);				
		
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/xml"));
		curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($curl_post_data));
		$curl_response = curl_exec($curl);
		if ($curl_response === false) 
		{
			$info = curl_getinfo($curl);
			curl_close($curl);
			die('error occured during curl exec. Additioanl info: ' . var_export($info));
		}
		curl_close($curl);
		$decoded = json_decode($curl_response);
		
		if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') 
		{
			return false;
		}
		else
		{
			return true;
		}
	}
}