<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orderkaos extends CI_Controller {

	public function index()
	{
		$this->data['bajupolos']=$this->db->get_where('bajupolos', array('tipe' => 'kaos'))->result_array();
		$this->load->view('header');
		$this->load->view('orderkaos',$this->data);
		$this->load->view('footer');

	}
}
?>