<?php

/**
 * Author : Manoj
 * @uses : Rest API on respective servers
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
		if($this->inputs['operation'] == 'create'){
			if($this->router($inputs['module'])){
				if($this->fire_curl($this->service_url,$this->inputs)){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}			
		}elseif ($this->inputs['operation'] == 'delete') {
			# code...
			
		}else{
			return false;
		}
	}

	protected function router($route){
		if($route == 'Reception'):
			$this->service_url = "http://dev-reception.rightchoice.io/rest/index.php/request";
			return true;
		elseif($route == 'Business'):
			$this->service_url = "http://dev-reception.rightchoice.io/rest/index.php/request";
			return true;
		else:
			return false;
		endif;
	}

	public function fire_curl($service_url,$curl_post_data){

		$curl_json_data = json_encode($curl_post_data);

		$ch = curl_init();
		$headers  = [
		            'x-api-key: XXXXXX',
		            'Content-Type: text/plain'
		        ];
		$postData = $curl_post_data;
		curl_setopt($ch, CURLOPT_URL, $service_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));           
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result     = curl_exec ($ch);
		$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		// $curl = curl_init($service_url);				
		
		// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($curl, CURLOPT_POST, true);
		// curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_json_data);
		// $curl_response = curl_exec($curl);
		// if ($curl_response === false) 
		// {
		// 	$info = curl_getinfo($curl);
		// 	curl_close($curl);
		// 	die('error occured during curl exec. Additioanl info: ' . var_export($info));
		// }
		// curl_close($curl);
		$decoded = json_decode($result);
		// print_r($result); die;
		
		if (isset($decoded->code) && $decoded->code == '200') 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}