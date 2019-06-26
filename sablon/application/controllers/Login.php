<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __costruct()
	{
		parent::__costruct();
		$this->load->model('m_login');	
		$this->load->library('form_validation');
		$this->load->helper('url', 'html');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');

	}

	public function user_login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_lenght[3]');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		if ($this->form_validation->run()) 
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
				
		}
		else
		{
			$this->index();
		}
	}
}
?>