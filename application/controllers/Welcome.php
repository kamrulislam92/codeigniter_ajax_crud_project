<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->helper('form'); // Load form helper
		$data['main_content'] = $this->load->view('homePage', array(), TRUE);
		$this->load->view('template', $data);
	}
	
}
