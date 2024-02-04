<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data['main_content'] = $this->load->view('homePage', array(), TRUE);
		$this->load->view('template', $data);
	}
	
}
