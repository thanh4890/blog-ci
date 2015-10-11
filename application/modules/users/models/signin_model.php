<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Signin_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function does_user_exist($email) {
        $this->db->where('usr_email', $email);
        $query = $this->db->get('users');
        return $query;
    }

}