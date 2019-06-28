<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Register extends CI_Controller
	{
		
		function __construct()
		{
			
			parent::__construct();
			$this->load->model('m_register');
			$this->load->library('form_validation');
			$this->load->helper('url', 'form');
		}
		function index()
		{
			
			$this->load->view('header.php');
			$data['user'] = $this->m_register->ambil_data()->result();
			$this->load->view('register',$data);
			
			// $this->load->view('register.php');
			$this->load->view('footer.php');
		}

		function tambah_user()
		{ 
			$user = $this->m_register;
			$user->add_user();
			redirect('register');
		}

		function form_register()
		{
			$this->load->view('dd_user');
		}
	}
?>
