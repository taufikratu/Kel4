<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AListbajuproduk extends CI_Controller {

	public function index()
	{
		$this->data['bajuproduk']=$this->db->get('bajuproduk')->result_array();
		$this->header();
		$this->load->view('admin/listbajuproduk',$this->data);
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
