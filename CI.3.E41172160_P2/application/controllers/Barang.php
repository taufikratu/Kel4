<?php

class Barang extends CI_Controller{

    function index(){
        $this->load->model("m_barang");
        $nama="Judul Barang";
        $data['judul']=$nama;
        $data['item']=$this->m_barang->list_barang();
        $this->load->view("v_barang",$data);
    }


    function index(){
        
    }

function edit(){
    echo"Edit";
}
}