<?php

class userModel extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }
    function userLoginForm($data){
        $this->db->select('*');
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        $this->db->from('users');
        $this->db->limit(1);
        $queryData = $this->db->get();
        if($queryData->num_rows() == 1){
            return $queryData->row();
        }else{
            return false;
        }
    }


    function registerUser($data) {
        return $this->db->insert('users', $data);
    }

}
