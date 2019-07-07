<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ATambahbajuproduk extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/tambahbajuproduk');
		$this->load->view('admin/footer');	

	}
	
	public function upload()
	{
		
			$config['upload_path']          = './assets/produk/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 5000;
			$config['max_height']           = 5000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
					echo 'gagal upload';
			}
			else
			{
				$img=$this->upload->data();
				$gambar=$img['file_name'];
				$namabaju=$this->input->post('namabaju',true);
				$deskripsi=$this->input->post('deskripsi',true);
				$tipe=$this->input->post('tipe',true);
				$hargas=$this->input->post('hargas',true);
				$hargam=$this->input->post('hargam',true);
				$hargal=$this->input->post('hargal',true);
				$hargaxl=$this->input->post('hargaxl',true);
				$data=array(
					'namabaju'=>$namabaju,
					'deskripsi'=>$deskripsi,
					'tipe'=>$tipe,
					'gambar'=>$gambar,
					'hargas'=>$hargas,
					'hargam'=>$hargam,
					'hargal'=>$hargal,
					'hargaxl'=>$hargaxl,
				);
				$this->db->insert('bajuproduk',$data);
				redirect ('atambahbajuproduk');
			}
	}
	

}
