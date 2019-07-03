<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AListuser extends CI_Controller {

	public function index()
	{
		$this->data['user']=$this->db->get('user')->result_array();
		$this->header();
		$this->load->view('admin/listuser',$this->data);
		$this->footer();		

	}
	public function header()
	{
		$this->load->view('admin/header');
	}
	public function footer()
	{
		$this->load->view('admin/footer');
	}
}
