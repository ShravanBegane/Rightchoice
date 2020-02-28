<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

	/**	
	[UTask: Store the details in internal CRM]	
	[CTask: Fetch Data from the Input if its  a free or a paid plan]			
	**/		


	function __construct() {
        parent::__construct();

		$this->req_type = "";
		$plan_type = null;
		$action_type = null;

		$this->load->model('Post_Signup');

    }

	/**	
	[UTask: Recieve the request]	
	[CTask: Route to respetive functions]			
	**/	
	public function index() {

		$stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
		$request = json_decode($stream_clean);
		$ready = $request->patch_details;


		$this->req_type = $request->req_type;


		if($this->req_type == 'get'):
			$this->preProcessGET($ready);
		elseif($this->req_type == 'post'):
			$this->preProcessPOST($ready);
		elseif($this->req_type == 'patch'):
			$this->preProcessPATCH($ready);
		elseif($this->req_type == 'delete'):
			$this->preProcessDELETE($ready);
		else:
			return json_encode("Error");
		endif;
	}

	/**
	[Condition: GET Request]
	[Status: 200]	
	[Task: Fetch Record]
	[Table: explicitely sent]			
	**/	
	protected function preProcessGET($inputData=null) {
		
		$table = $inputData->db_name;
		$requestData = $this->Post_Signup->fetch_entries($table);

		$data = [
		    "code" => 200,
		    "message" => "Successfull",
		    "req_type" => $this->req_type,
		    "data" => $requestData
		    
		];

		return $this->output
			        ->set_content_type('application/json')
			        ->set_status_header(200) // Return status
			        ->set_output(json_encode($data));
		// echo json_encode($data);
	}


	/**
	[Condition: POST Request]
	[Status: 200]	
	[Task: Write Record]
	[Table: explicitely recieve]
	[Params needed from user: table name, and all the other data to write]			
	**/	
	
	protected function preProcessPOST($inputData=null) { 

		$write_status = "";
		$requestData = "";
		$table = $inputData->db_name;
		// $requestData = $this->Post_Signup->write_entry($table);

		// $requestData = $_POST;
		$action_type = $inputData->action_type;

		$authStatus = $this->performAuthCheck();
		if($authStatus){
			if($action_type == 'signup'):

				/**
				[Condition: Payment Status]
				[Status: Successfull]	
				[UTask: Store the details in internal CRM]	
				[CTask: Fetch Data from the Input if its  a free or a paid plan]			
				**/			
				$requestData = $this->Post_Signup->write_entry($inputData);

				// $requestData = ['write_status'=>'true'];

			else:

				/**
				[Condition: Payment Status]
				[Status: Unsuccessfull]	
				[Task: Store the details in internal CRM]			
				**/	
				

			endif;
		}


		$data = [
		    "code" => 200,
		    "message" => "Successfull",
		    "req_type" => $this->req_type,
		    "data" => $requestData
		    
		];


		return $this->output
			        ->set_content_type('application/json')
			        ->set_status_header(200) // Return status
			        ->set_output(json_encode($data));

	}


	// req handling for patch method
	protected function preProcessPATCH($inputData=null) {
		

		$requestData = $this->Post_Signup->update_entry($inputData);
		$data = [
		    "code" => 200,
		    "message" => "Successfull",
		    "req_type" => $this->req_type,
		    "data" => $requestData
		    
		];

		return $this->output
			        ->set_content_type('application/json')
			        ->set_status_header(200) // Return status
			        ->set_output(json_encode($data));
	}


	// req handling for delete method
	protected function preProcessDELETE($inputData=null) {
		
		// $requestData = $_DELETE;
		$table = $inputData->table;

		$requestData = $this->Post_Signup->delete_entry($table);

		$data = [
		    "code" => 200,
		    "message" => "Successfull",
		    "req_type" => $this->req_type,
		    "data" => $requestData
		    
		];

		return $this->output
			        ->set_content_type('application/json')
			        ->set_status_header(200) // Return status
			        ->set_output(json_encode($data));
	}


	protected function performAuthCheck($value='')
	{
		return true;
	}
}
