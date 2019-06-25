<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

		public function __construct()
{
	parent::_construct();
	$this->load->model('m_login');
	$this->load->library('form_validation');
	$this->load->helper('url', 'html');
}
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');

	}
	public function insertUser()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required');
		$this->form_validation->set_rules('jawaban', 'jawaban', 'required');
		$this->form_validation->set_rules('telp', 'telp', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		if ($this->form_validation->run()) 
		{
			$nama = $this->input->post('nama');
			$password = $this->input->post('password');
			$pertanyaan = $this->input->post('pertanyaan');
			$jawaban = $this->input->post('jawaban');
			$telp = $this->input->post('telp');	

			$user = (['nama'=>$nama,
						'password'=>$password,
						'pertanyaan'=>$pertanyaan,
						'jawaban'=>$jawaban,
						'telp'=>$telp]);
			$data = array_merge($user);
			if ($this->m_login->TambahUser($data) == false ) 
			{
				$this->session->set_flashdata('pesan', 'data anda sudah tersimpan ke database');
				redirect('Register', 'refresh');
			}
			else{
				$this->index();
				
		}
			else 
		{
			$this->index();
		}
			}
	}
}
?>