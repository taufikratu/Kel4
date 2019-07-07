<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Psw extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('psw');
		$this->load->view('footer');

	}
}
?>