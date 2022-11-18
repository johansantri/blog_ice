<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_m extends CI_Model
{
    private $_table = "tb_galery";

    public $id_galery;
    public $nama_galery;
 
    public $image = "default.jpg";
  

    public function rules()
    {
        return [
            ['field' => 'nama_galery',
            'label' => 'nama_galery',
            'rules' => 'required']
        ];
    }

  
        
 

     public function getAll()
    {
        $this->db->select('*');
        

        return $this->db->get($this->_table)->result();
    }
    public function getAktif()
    {
        $this->db->select('tb_galery.id_galery,tb_galery.nama_galery,tb_galery.deskripsi_slide,tb_galery.image,tb_kategori.nama_kategori');
        
        $this->db->join('tb_kategori','tb_galery.id_kategori=tb_kategori.id_kategori');

        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        $this->db->select('*');
       
        return $this->db->get_where($this->_table, ["id_galery" => $id])->row();
    }

}
