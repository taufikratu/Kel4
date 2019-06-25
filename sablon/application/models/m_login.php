<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_login extends CI_Model {
	var $table = "user";
	public function_construct()
	{
		parent::_construct();
		$this->load->database();
	}
    public function login( $email, $password)
    {
    	$this->db->select(*);
    	$this->db->from($this->table);
    	$this->db->where([ 'email'=>$email, 'password'=>$password ]);
    	$return= $this->db->get('');
    	if ($return->num_rows() > 0) {
    		echo "sukses";
    	}
    	else
    {
    	echo "tidak ada";
    }

    {
        public function TambahUser($data)
        {
            $this->db->insert('user', '$data');
        }
    }
