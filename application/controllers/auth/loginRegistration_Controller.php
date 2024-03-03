<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginRegistration_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('UserModel');
        
        if($this->session->has_userdata('authenticated')){
            $this->session->set_flashdata('status', 'You are already loggdin!');
            $this->load->view('userpage');
        }
    }
    
    function dashboard(){
        $data['main_content'] = $this->load->view('dashboard', array(), TRUE);
        $this->load->view('template', $data);
    }


    function register() {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('agree', 'Terms & Conditions', 'required'); 
    
        if ($this->form_validation->run() == false) {
            $this->load->view('loginRegisterForm');
        } else {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'confirm_password' => $this->input->post('confirm_password'),
                'agree' => $this->input->post('agree')
            );
            $user_register = new UserModel;
            $checkData = $user_register->registerUser($data);
            if ($checkData) {
                $this->session->set_flashdata('status', 'Registered Successfully.! Go to login');
                $this->load->view('loginRegisterForm');
            } else {
                $this->session->set_flashdata('status', 'Registered Failed.! Go to registration form');
                $this->load->view('loginRegisterForm');
            }
        }
    }
   
    function logins() {
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
    
        if ($this->form_validation->run() == FALSE) {
            // If validation fails, load the login form
            $this->load->view('loginRegisterForm');
        } else {
            $data = [
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            ];
            $user_login = new UserModel;
            $checkLoginData = $user_login->userLoginForm($data);
            if ($checkLoginData != FALSE) {
                // If login successful, set session data
                $auth_user_data = [
                    'first_name' => $checkLoginData->first_name,
                    'last_name' => $checkLoginData->last_name,
                    'email' => $checkLoginData->email
                ];
    
                $this->session->set_userdata('authenticated', '1');
                $this->session->set_userdata('authUser', $auth_user_data);
                $this->session->set_flashdata('status', 'Login successful!');
                redirect('dashboard'); // Redirect to dashboard
            } else {                                                                                
                $this->session->set_flashdata('status', 'Login failed! Please try again.');
                redirect('loginRegisterForm'); // Redirect back to login page
            }
        }
    }
       
}
