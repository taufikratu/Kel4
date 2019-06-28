<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class M_register extends CI_Model
	{
		private $_table = "user";

		// public $iduser;
		public $email;
		public $password;
		public $nama;
		public $telp;
		public $pertanyaan;
		public $jawaban;

		function add_user()
		{
			// $iduser = $this->input->post("iduser");
			$email = $this->input->post("email");
			$password = $this->input->post("password");
			$nama = $this->input->post("nama");
			$telp = $this->input->post("telp");
			$pertanyaan = $this->input->post("pertanyaan");
			$jawaban = $this->input->post("jawaban");
			$data = array(
				// 'iduser' => $iduser,
				'email' => $email,
				'password' => $password,
				'nama' => $nama,
				'telp' => $telp, 
				'pertanyaan' => $pertanyaan,
				'jawaban' => $jawaban);
			$this->db->insert("user",$data);
		}

	public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["iduser" => $id]);
    }

    public function save($table, $user)
    {    
        $this->db->insert($table, $user);
    }

    function ambil_data()
    {
        return $this->db->get('user');
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
		
		// function __construct()
		// {
		// 	# code...
		// 	parent:: __construct();
		// }
	}

 ?>