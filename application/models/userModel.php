<?php

class userModel extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }

    function registerUser($data) {
        return $this->db->insert('users', $data);
    }

}
