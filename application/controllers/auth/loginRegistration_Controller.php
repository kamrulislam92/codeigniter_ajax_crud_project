<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginRegistration_Controller extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session'); // Load the session library
        $this->load->model('userModel');
    }
    
    function register(){
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('agree', 'Terms & Conditions', 'required'); 

        if($this->form_validation->run() == false){

            $this->load->view('homePage');

        } else {

           $data = array(
               'first_name'=>$this->input->post('first_name'),
               'last_name'=>$this->input->post('last_name'),
               'email'=>$this->input->post('email'),
               'password'=>$this->input->post('password'),
               'confirm_password'=>$this->input->post('confirm_password'),
               'agree'=>$this->input->post('agree')
           );
           $user_register = new userModel;
           $checkData = $user_register->registerUser($data);
           if($checkData){
                $this->session->set_flashdata('status', 'Registared Successfully.! Go to login');
                $this->load->view('homePage');
           }else{
                $this->session->set_flashdata('status', 'Registared Faild.! Go to registration form');
                $this->load->view('homePage');
           }
        }
    }
    
}
