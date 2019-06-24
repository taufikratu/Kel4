<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Model
{
    private $_table = "user";

    public $iduser;
    public $email;
    public $password;
	public $nama;
	public $telp;
	public $pertanyaan;
	public $jawaban;
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["iduser" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->iduser = uniqid();
        $this->email = $post["email"];
		$this->password = $post["password"];
		$this->nama = $post["nama"];
		$this->telp = $post["telp"];
		$this->pertanyaan = $post["pertanyaan"];
		$this->jawaban = $post["jawaban"];

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}
