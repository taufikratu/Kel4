<?php

class Barang extends CI_Controller{
    function index(){
        $this->load->model("m_barang"); 
        $data['judul']="ini adalah merk android";
        $data['item']=$this->m_barang->list_barang(); 
        $this->load->view("v_barang",$data);
    }
}
?>