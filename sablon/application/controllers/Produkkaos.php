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
	public function detail(){
		$data=array(
			'namabaju'=>$namabaju,
			'deskripsi'=>$deskripsi,
			'tipe'=>$tipe,
			'gambar'=>$gambar,
			'hargas'=>$hargas,
			'hargam'=>$hargam,
			'hargal'=>$hargal,
			'hargaxl'=>$hargaxl,);		
		$data['tmp']=$this->db->select('*');
    				$this->db->where('id',$this->uri->segment(3))->row();
	 return $this->db->get('bajuproduk');
	 $this->template->load('produkdetail');
	}
}
?>