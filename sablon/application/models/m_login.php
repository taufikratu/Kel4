<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Login extends CI_Model
    {
        function __construct()
        {
              parent::__construct();
        }
        function cek_login($table,$where)
        {
            return $this->db->get_where($table,$where);
        }
    }
?>