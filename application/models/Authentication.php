<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Model {
    public function __construct() {
        parent::__construct();
        if(isset($this->session->userdata['authenticated']) && $this->session->userdata('authenticated') == 1) {
            // echo "You are user";
        } else {
            $this->session->set_flashdata('status', 'Login First');
            redirect('loginRegisterForm');
        }
    }


}