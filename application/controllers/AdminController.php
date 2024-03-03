<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Authentication');
    }

    public function index(){
        $data['main_content'] = $this->load->view('adminpage', array(), TRUE);
        $this->load->view('template', $data);
    }
}



?>