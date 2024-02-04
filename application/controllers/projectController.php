<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class projectController extends CI_Controller {

	
    // public function index()
    // {
    //     $data['main_content'] = $this->load->view('homePage', array(), TRUE);
    //     $this->load->view('template', $data);
    // }

    function about(){
        $data['main_content'] = $this->load->view('project/about', array(), TRUE);
        $this->load->view('template', $data);
    }
    function contact(){
        $data['main_content'] = $this->load->view('project/contact', array(), TRUE);
        $this->load->view('template', $data);
    }
    
    function service(){
        $data['main_content'] = $this->load->view('project/service', array(), TRUE);
        $this->load->view('template', $data);
    }
    
    
}
