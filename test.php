<?php
session_start();
include_once('WSClient.php');
include("xmlapi.php"); 
include("config.inc.php"); 

$uri = $_SERVER['REQUEST_URI'];
$last = explode("/website/", $uri, 3);
//$last1 = explode("/", $last[1], 2);
$parse = parse_url($site_URL);  

$parse1 = $parse['scheme']."://".$parse['host']."/";
$cf_952  = $parse1."website/".$last[1]."/";
$stripped = explode("index.php", $cf_952, 2);
//var_dump($stripped);
//echo $stripped[0];


$username = "superadmin";
$password= "nAnNzKHH35z4lSd";
$service_url = $parse1."webservice.php";
$url = $service_url."?operation=getchallenge&username=".$username."&password=".$password;


$contents = file_get_contents($url);
$clima=json_decode($contents);
//var_dump($clima);

//echo "Success:". $clima->success;

if($clima->success == 1){
    
//echo "Login success";
    
$accesskey = $clima->result->accesskey;
$token = $clima->result->token;
$accesskeymd5 = $clima->result->accesskeymd5; 

//echo "Accesskeymd5: " . $accesskeymd5 ."<br>";
//echo "Accesskey: " . $accesskey ."<br>";
//echo "Token: " . $token ."<br>";

        $sessionName = $clima->result->sessionName;
        $userId = $clima->result->userId;

            $query = urlencode("SELECT * FROM Potentials WHERE cf_952= '$stripped[0]';");
            $service_url1 = $service_url."?operation=query&sessionName=".$sessionName."&query=".$query."";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$service_url1);
            curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_ENCODING,  '');
            $curl_response = curl_exec($ch);
            curl_close($ch);
            $decoded = json_decode($curl_response);
		//echo "<pre>"; print_r($decoded);
	
			
	    $query1 = urlencode("SELECT * FROM Accounts WHERE cf_916 = '$stripped[0]';");
            $service_url1 = $service_url."?operation=query&sessionName=".$sessionName."&query=".$query1."";
            $ch1 = curl_init();
            curl_setopt($ch1, CURLOPT_URL,$service_url1);
            curl_setopt($ch1, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch1, CURLOPT_ENCODING,  '');
            $curl_response1 = curl_exec($ch1);
            curl_close($ch1);
            $decoded1 = json_decode($curl_response1);
	   // echo "<pre>"; print_r($decoded1);
	
			
			
			if ($decoded->result[0]->cf_956 != "")
			{
			
			
				if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') 
				{
					die('error occured: ' . $decoded->response->errormessage);
				}
				else
				{
							//echo "success";
						   // var_dump($decoded);
						//echo "<pre>"; print_r($decoded);
				
						$_SESSION['cf_956'] = $decoded->result[0]->cf_956;
						$_SESSION['related_to'] = $decoded->result[0]->related_to;
						$related_to = $decoded->result[0]->related_to;
							   
						$query = urlencode("SELECT * FROM Accounts where id = '$related_to';");
							$service_url1 = $service_url."?operation=query&sessionName=".$sessionName."&query=".$query."";
						//echo $query;
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL,$service_url1);
						curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_ENCODING,  '');
						$curl_response = curl_exec($ch);
						curl_close($ch);
						$decoded = json_decode($curl_response);
						
						if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
							die('error occured: ' . $decoded->response->errormessage);
						}
						else
						{
							//echo "success";
						   // var_dump($decoded);
						   //echo "<pre>"; print_r($decoded);
				
						   $_SESSION['cf_918'] = $decoded->result[0]->cf_918;
						   $_SESSION['cf_922'] = $decoded->result[0]->cf_922;
						   $_SESSION['cf_924'] = $decoded->result[0]->cf_924;
						   $_SESSION['cf_926'] = $decoded->result[0]->cf_926;
						   $_SESSION['cf_928'] = $decoded->result[0]->cf_928;
						   $_SESSION['cf_930'] = $decoded->result[0]->cf_930;
						   $_SESSION['cf_932'] = $decoded->result[0]->cf_932;
						   $_SESSION['cf_934'] = $decoded->result[0]->cf_934;
						   $_SESSION['cf_936'] = $decoded->result[0]->cf_936;
						   $_SESSION['cf_938'] = $decoded->result[0]->cf_938;
						   $_SESSION['cf_940'] = $decoded->result[0]->cf_940;
						   $_SESSION['cf_942'] = $decoded->result[0]->cf_942;
						   
						}
				}
			}
			else if ($decoded1->result[0]->cf_916 != "") 
			{
				//echo "empty array";
				if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') 
				{
					die('error occured: ' . $decoded->response->errormessage);
				}
				else
				{
						//echo "<pre>"; print_r($decoded1);
				
						   $_SESSION['cf_956'] = $decoded1->result[0]->cf_956;
						   $_SESSION['cf_918'] = $decoded1->result[0]->cf_918;
						   $_SESSION['cf_922'] = $decoded1->result[0]->cf_922;
						   $_SESSION['cf_924'] = $decoded1->result[0]->cf_924;
						   $_SESSION['cf_926'] = $decoded1->result[0]->cf_926;
						   $_SESSION['cf_928'] = $decoded1->result[0]->cf_928;
						   $_SESSION['cf_930'] = $decoded1->result[0]->cf_930;
						   $_SESSION['cf_932'] = $decoded1->result[0]->cf_932;
						   $_SESSION['cf_934'] = $decoded1->result[0]->cf_934;
						   $_SESSION['cf_936'] = $decoded1->result[0]->cf_936;
						   $_SESSION['cf_938'] = $decoded1->result[0]->cf_938;
						   $_SESSION['cf_940'] = $decoded1->result[0]->cf_940;
						   $_SESSION['cf_942'] = $decoded1->result[0]->cf_942;
				}
				
			}

    

}else {
    
    echo "error";
}
  
?>