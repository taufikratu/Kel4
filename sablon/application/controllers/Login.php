<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model("M_Login");
			$this->load->library('form_validation');
			$this->load->helper('url', 'html');
		}
		public function index()
		{
			$this->load->view('headerlogin');
			$this->load->view('login');
			$this->load->view('footer');

		}
		function load(){
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$where = array(
				'email' => "nofita99@gmail.com",
				'password' => "22",
			);
			$cek = $this->M_Login->cek_login("user", $where)->num_rows();
			echo $cek;
		}
		public function aksi_login()
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			// echo $email;
			// echo $password;

			$where = array(
				'email' => $email,
				'password' => $password,
			);
			
			$cek = $this->M_Login->cek_login("user", $where)->num_rows();
				if($cek > 0) {	
				$data_session = array(
					'email' => $email,
					'password' => $password,
				);
				$this->session->set_userdata($data_session);
				redirect('home');
			}else{
				echo "Password atau Username Salah coy";
			}
			
		}
		function logout(){
			$this->session->sess_destroy($data_session);
			redirect("login");
		   }
	}
?>