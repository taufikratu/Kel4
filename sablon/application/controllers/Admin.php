<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->header();
		$this->load->view('admin/dashboard');
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
