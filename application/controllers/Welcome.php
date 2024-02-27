<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->helper('form'); // Load form helper
		$this->load->view('loginRegisterForm');
	
	}
	// public function dashboard(){

	// 	$data['main_content'] = $this->load->view('dashboard', array(), TRUE);
	// 	$this->load->view('template', $data);

	// }

}
