<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produkkaos extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('produkdetail',$data);
		$this->load->view('footer');
	}
}
?>