<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produkkaos extends CI_Controller {

	public function index()
	{
		$this->data['bajuproduk']=$this->db->get_where('bajuproduk', array('tipe' => 'kaos'))->result_array();
		$this->load->view('header');
		$this->load->view('produkkaos',$this->data);
		$this->load->view('footer');

	}
}
?>