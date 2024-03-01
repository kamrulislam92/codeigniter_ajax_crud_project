<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectController extends CI_Controller {

    function dashboard(){
        $data['main_content'] = $this->load->view('dashboard', array(), TRUE);
        $this->load->view('template', $data);
    }
	
    function about(){
        $data['main_content'] = $this->load->view('project/about', array(), TRUE);
        $this->load->view('template', $data);
    }
    
    function service(){
        $data['main_content'] = $this->load->view('project/service', array(), TRUE);
        $this->load->view('template', $data);
    }
    function portfolio(){
        $data['main_content'] = $this->load->view('project/portfolio', array(), TRUE);
        $this->load->view('template', $data);
    }
    function contact(){
        $data['main_content'] = $this->load->view('project/contact', array(), TRUE);
        $this->load->view('template', $data);
    }
    
    
}
