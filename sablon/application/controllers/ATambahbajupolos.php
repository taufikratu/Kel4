<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ATambahbajupolos extends CI_Controller {

	public function index()
	{
		$this->header();
		$this->load->view('admin/tambahbajupolos');
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

	function input_data($data,$tabel){
		$this->db->insert($tabel,$data);
	}

	public function upload()
	{
		
			$config['upload_path']          = './assets/polos/';
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
				$this->db->insert('bajupolos',$data);
				redirect ('atambahbajupolos');
			}
	}
}
