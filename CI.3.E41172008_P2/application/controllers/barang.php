<?php

class barang extends CI_controler{
	function index(){
		$this->load->model("m_barang");
		$data['judul']="ini judul loh";
		$data['nama']=$this->m_barang->list_barang();
		$this->load->view('v_barang',$data);
	}
	fucntion edit(){
		echo "Edit";
	}
}
?>