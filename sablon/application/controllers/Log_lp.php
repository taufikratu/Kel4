<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Log_lp extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model("M_Loglp");
			$this->load->library('form_validation');
			$this->load->helper('url', 'html');
		}
		public function index()
		{
			$this->load->view('header');
			$this->load->view('loglp');
			$this->load->view('footer');
			// $data['data_user'] = $this->M_Loglp->get_login($this->session->userdata('iduser'));

		}
		function load(){
			$email = $this->input->post('email');
			$pertanyaan = $this->input->post('pertanyaan');
			$jawaban = $this->input->post('jawaban');
			$password = $this->input->post('password');

			$where = array(
				'email' => "nofita99@gmail.com",
				'pertanyaan' => "Apa nama hewan peliharaan anda?",
				'jawaban' => "asd",
				'password' => "1",
			);
			$cek = $this->M_Loglp->cek_login("user", $where)->num_rows();
			echo $cek;
		}
		public function aksi_login()
		{
			$email = $this->input->post('email');
			$pertanyaan = $this->input->post('pertanyaan');
			$jawaban = $this->input->post('jawaban');
			
			// echo $email;
			// echo $password;

			$where = array(
				'email' => $email,
				'pertanyaan' => $pertanyaan,
				'jawaban' => $jawaban,
			);
			
			$cek = $this->M_Loglp->cek_login("user", $where)->num_rows();
				if($cek > 0) {	
				$data_session = array(
					'email' => $email,
					'pertanyaan' => $pertanyaan,
					'jawaban' => $jawaban,
				);
				$this->session->set_userdata($data_session);
				redirect('index.php/Log_lp/cari');
			}else{
				echo "Password atau Username Salah coy";
			}
		}

		public function cari()
		{
			
			$this->load->view('header');
			$this->load->view('Psw');
			$this->load->view('footer');
		}

		public function result()
		{
			$data['cari'] = $this->M_Loglp->cariPsw();
			
			$this->load->view('header');
			$this->load->view('hasil', $data);
			$this->load->view('footer');
		}
		
	// 	function logout(){
	// 		$this->session->sess_destroy();
	// 		redirect(base_url('index.php/Home'));
	// 	}
	}
?>