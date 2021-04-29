<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_m extends CI_Model {
public function __construct(){
	parent::__construct();
}
	
	public function insert()
	{	
	
		
		    $tanggal=date('d-m-Y');
                $no=$this->input->post('kode_produk',TRUE);
                $tes=($no .'-'. $tanggal);
               

		 $slug = url_title($this->input->post('nama_produk'), 'dash', TRUE);
		$data = array('nama_produk' 		=>	$this->input->post('nama_produk',TRUE) ,
						'slug' => $slug,
						'kode_produk'=>$tes,
					 'satuan' 		=> $this->input->post('satuan',TRUE),
					 'keterangan_produk' 		=> $this->input->post('keterangan_produk'),
					 'harga' 		=> $this->input->post('harga',TRUE));

		$sql=$this->db->insert('tb_produk',$data);
		if($sql===TRUE){
			return TRUE;
		}else{
			return FALSE;
		}
	}


	public function listAll(){
		/*$id = $this->session->userdata['id_user']; 
		$this->db->where('t_jurusan.id_user',$id);*/
		$this->db->select('*');
		
		$this->db->from('tb_produk');
		$query=$this->db->get();
		return $query->result_array();
	}
	public function makode()
    {
        $this->db->select_max('kode_produk', 'kode');

       $this->db->from('tb_produk');
		$query=$this->db->get();
		return $query->row();
    }
		public function getId($id=null){
		if ($id) {
    		
    	
		$this->db->where('tb_produk.id_produk',$id);
		$this->db->select('*');
		
		$this->db->from('tb_produk');
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
			
		 
               
			$slug = url_title($this->input->post('enama_produk'), 'dash', TRUE);
			$data = array('nama_produk' 		=>	$this->input->post('enama_produk',true) ,
						'slug' => $slug,
					 'satuan' 		=> $this->input->post('esatuan',true),
					 'keterangan_produk' 		=> $this->input->post('eketerangan_produk'),
					 'harga' 		=> $this->input->post('eharga',true));

			$this->db->where('id_produk', $id);
			$sql=$this->db->update('tb_produk',$data);
			if($sql===true){
				return true;

			}else{
				return false;
			}
		}
	}
}