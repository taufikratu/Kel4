<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produkjaket extends CI_Controller {

	public function index()
	{
		$this->data['bajuproduk']=$this->db->get_where('bajuproduk', array('tipe' => 'jaket'))->result_array();
		$this->load->view('header');
		$this->load->view('produkkaos',$this->data);
		$this->load->view('footer');

	}
}
?>