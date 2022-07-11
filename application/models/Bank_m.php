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

  

    public function save()
    {
        $post = $this->input->post();
        $this->id_galery = uniqid();
        $this->nama_galery = $post["nama_galery"];
   
            
        $this->image = $this->_uploadImage(); 
             
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_galery = $post["id"];
         $this->nama_galery = $post["nama_galery"];

       
       
        
        
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

      
        $this->db->update($this->_table, $this, array('id_galery' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_galery" => $id));
    }
    
    private function _uploadImage()
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $this->id_galery;
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $personal = $this->getById($id);
        if ($personal->image != "default.jpg") {
            $filename = explode(".", $personal->image)[0];
            return array_map('unlink', glob(FCPATH."upload/$filename.*"));
        }
    }



    public function set($key=null){         

          
         
        $this->db->select('*');

       
        $this->db->like('nama_galery',$key);

       
        $this->db->from('tb_galery');
        $hasil=$this->db->get();
        //return $query->result_array(); 
         if ($hasil->num_rows()>0){
                            return $hasil->result_array();
                        } else {
                            return redirect();
                        }
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
