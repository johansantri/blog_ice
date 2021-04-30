<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontent_m extends CI_Model {
public function __construct(){
    parent::__construct();
}
    
    public function insert()
    {   
        $status="draft";
         $slug = url_title($this->input->post('title'), 'dash', TRUE);
        $data = array('title'       =>  $this->input->post('title',true) ,
                        'slug_title' => $slug,
                     'meta'         => $this->input->post('meta',true),
                     'description'      => $this->input->post('description'),
                     'tags'         => $this->input->post('tags',true),
                     'status'       => $status,
                     'id_kategori'      => $this->input->post('id_kategori',true),
                     'id_sub'      => $this->input->post('id_sub',true),
                    'id_user'        => $this->session->userdata('id_user'));

        $sql=$this->db->insert('tb_kontent',$data);
        if($sql===true){
            return true;
        }else{
            return false;
        }
    }

    public function listAll(){
        /*$id = $this->session->userdata['id_user']; 
        $this->db->where('t_jurusan.id_user',$id);*/
        $this->db->select('tb_kontent.id_kontent,tb_kontent.title,tb_kontent.meta,tb_kontent.status,tb_kontent.create_ad,tb_kontent.update_ad,tb_user.nama_user,tb_kategori.nama_kategori,tb_sub_kategori.nama_sub');
        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_kontent.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_kontent.id_sub');
        $this->db->join('tb_user','tb_user.id_user=tb_kontent.id_user');
        $this->db->from('tb_kontent');
        $query=$this->db->get();
        return $query->result_array();
    }

    public function getId($id=null){
        if ($id) {
            
        
        $this->db->where('tb_kontent.id_kontent',$id);
        $this->db->select('tb_kontent.id_kontent,tb_kontent.title,tb_kontent.meta,tb_kontent.description,tb_kontent.tags,tb_kontent.status,tb_kontent.create_ad,tb_kontent.update_ad,tb_user.nama_depan,tb_kategori.nama_kategori,tb_kategori.id_kategori,tb_sub_kategori.nama_sub,tb_sub_kategori.id_sub');
        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_kontent.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_kontent.id_sub');
        $this->db->join('tb_user','tb_user.id_user=tb_kontent.id_user');
        $this->db->from('tb_kontent');
        $query=$this->db->get();
        return $query->row_array();
        if ($query===true) {
        return true;
        }else{
        return false;
        }
    }
    }
    public function update($id=null){
        if ($id) {
            $status="draft";
            $update_ad=date("Y-m-d h:i:s");
            $slug = url_title($this->input->post('etitle'), 'dash', TRUE);
            $data = array('title'       =>  $this->input->post('etitle',true) ,
                        'slug_title' => $slug,
                     'meta'         => $this->input->post('emeta',true),
                     'description'      => $this->input->post('edescription'),
                     'tags'         => $this->input->post('etags',true),
                     'status'       => $status,
                     'update_ad'    =>$update_ad,
                     'id_kategori'      => $this->input->post('eid_kategori',true),
                     'id_sub'      => $this->input->post('eid_sub',true),
                    'id_user'        => $this->session->userdata('id_user'));

            $this->db->where('id_kontent', $id);
            $sql=$this->db->update('tb_kontent',$data);
            if($sql===true){
                return true;

            }else{
                return false;
            }
        }
    }


    public function insertSub()
    {
        $data = array('nama_sub'        =>  $this->input->post('nama_sub',true) ,
                     'id_kategori'      => $this->input->post('id_kategori',true));

        $sql=$this->db->insert('tb_sub_kategori',$data);
        if($sql===true){
            return true;
        }else{
            return false;
        }
    }

    public function listAllSub(){
        /*$id = $this->session->userdata['id_user']; 
        $this->db->where('t_jurusan.id_user',$id);*/
        $this->db->select('tb_sub_kategori.id_sub,tb_sub_kategori.nama_sub,tb_sub_kategori.id_kategori,tb_kategori.nama_kategori');    
        $this->db->join('tb_kategori','tb_sub_kategori.id_kategori=tb_kategori.id_kategori');  
        $this->db->from('tb_sub_kategori');
        
        $query=$this->db->get();
        return $query->result_array();
    }

    public function getIdSub($id=null){
        if ($id) {
            
        
        $this->db->where('tb_sub_kategori.id_sub',$id);
        $this->db->select('tb_sub_kategori.id_sub,tb_sub_kategori.nama_sub,tb_sub_kategori.id_kategori,tb_kategori.nama_kategori');    
        $this->db->join('tb_kategori','tb_sub_kategori.id_kategori=tb_kategori.id_kategori');  
        $this->db->from('tb_sub_kategori');
        $query=$this->db->get();
        return $query->row_array();
        if ($query===true) {
            return true;
        }else{
            return false;
        }
    }
    }
    public function updateSub($id=null){
        if ($id) {
            $data = array('nama_sub'        => $this->input->post('enama_sub',true),
                        'id_kategori'       => $this->input->post('eid_kategori',true));
            $this->db->where('id_sub', $id);
            $sql=$this->db->update('tb_sub_kategori',$data);
            if($sql===true){
                return true;

            }else{
                return false;
            }
        }
    }

    
    function jumlah_data(){
        return $this->db->get('tb_kategori')->num_rows();
    }
    



 function subKategori($id_kategori)
 {
  $this->db->where('id_kategori', $id_kategori);
  $this->db->order_by('nama_sub', 'ASC');
  $query = $this->db->get('tb_sub_kategori');
  $output = '<option value="">Select State</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id_sub.'">'.$row->nama_sub.'</option>';
  }
  return $output;
 }


}

