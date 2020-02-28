<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		echo $this->input->method();
	}
	protected function store($requestData=null) {

	}
	protected function show($resourceID) {

	}
	protected function update($resourceID=null, $requestData=null) {

	}
	protected function delete($resourceID=null, $requestData=null) {
		
	}
}
