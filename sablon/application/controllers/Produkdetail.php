<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produkdetail extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('produkdetail');
		$this->load->view('footer');
	}
}
?>