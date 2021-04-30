<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Slide_model extends CI_Model
{
    private $_table = "tb_slide";

    public $id_slide;
    public $nama_slide;
    public $deskripsi_slide;
  
    public $image = "default.jpg";
   

    public function rules()
    {
        return [
            ['field' => 'nama_slide',
            'label' => 'nama_slide',
            'rules' => 'required|max_length[100]'],

          

            ['field' => 'deskripsi_slide',
            'label' => 'address',
            'rules' => 'required|max_length[255]'],

            
        ];
    }

    public function getAll()
    {
        $this->db->select('tb_slide.id_slide,tb_slide.nama_slide,tb_slide.deskripsi_slide,tb_slide.image,tb_kategori.nama_kategori');
        $this->db->join('tb_kategori','tb_slide.id_kategori=tb_kategori.id_kategori');

        return $this->db->get($this->_table)->result();
    }
    public function getKategori()
    {
        $this->db->select('*');
        $this->db->from('tb_kategori');
        $query=$this->db->get();
        return $query->result_array();

    }
    
    public function getById($id)
    {
        $this->db->select('tb_slide.id_slide,tb_slide.id_kategori,tb_slide.nama_slide,tb_slide.deskripsi_slide,tb_slide.image,tb_kategori.nama_kategori');
        $this->db->join('tb_kategori','tb_slide.id_kategori=tb_kategori.id_kategori');
        return $this->db->get_where($this->_table, ["id_slide" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_slide = uniqid();
        $this->nama_slide = $post["nama_slide"];
       
        $this->deskripsi_slide = $post["deskripsi_slide"];
        $this->image = $this->_uploadImage();
        $this->id_kategori = $post["id_kategori"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_slide = $post["id"];
         $this->nama_slide = $post["nama_slide"];
        
        $this->deskripsi_slide = $post["deskripsi_slide"];
        
        
        if (!empty($_FILES["image"]["nama_slide"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        $this->id_kategori= $post["id_kategori"];
       
        $this->db->update($this->_table, $this, array('id_slide' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_slide" => $id));
    }
    
    private function _uploadImage()
    {
        $config['upload_path']          = './upload/personal/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_nama_slide']            = $this->id_slide;
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        $config['max_width']            = 1280;
        $config['max_height']           = 720;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_nama_slide");
        }
        
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $personal = $this->getById($id);
        if ($personal->image != "default.jpg") {
            $filenama_slide = explode(".", $personal->image)[0];
            return array_map('unlink', glob(FCPATH."upload/personal/$filenama_slide.*"));
        }
    }



    public function set($key=null){         

          
         
        $this->db->select('*');

       
        $this->db->like('nama_slide',$key);
        
        $this->db->or_like('deskripsi_slide',$key);
        
        $this->db->from('tb_slide');
        $hasil=$this->db->get();
        //return $query->result_array(); 
         if ($hasil->num_rows()>0){
                            return $hasil->result_array();
                        } else {
                            return redirect();
                        }

         
         
        
    }
}
