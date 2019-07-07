<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Loglp extends CI_Model
    {
        function __construct()
        {
              parent::__construct();
        }
        function cek_login($table,$where)
        {
            return $this->db->get_where($table,$where);
        }
    

    public function cariPsw()
    {
        $cari = $this->input->GET('cari', TRUE);
        $data =$this->db->query("SELECT * from user where email like '%cari%' or password like '%cari%' ");
        return $data->result();
    }

}
?>