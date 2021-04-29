<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_m extends CI_Model {
public function __construct(){
	parent::__construct();
}
	
	public function insert()
	{	
	
		
	
		$data = array('nama_karyawan' 		=>	$this->input->post('nama_karyawan',TRUE) ,
						
					 'no_hp' 		=> $this->input->post('no_hp',TRUE),
					 'alamat' 		=> $this->input->post('alamat'));

		$sql=$this->db->insert('tb_karyawan',$data);
		if($sql===TRUE){
			return TRUE;
		}else{
			return FALSE;
		}
	}


	public function listAll(){
		
		$this->db->select('*');
		
		$this->db->from('tb_karyawan');
		$this->db->order_by("nama_karyawan", "asc");
		$query=$this->db->get();
		return $query->result_array();
	}

		public function getId($id=null){
		if ($id) {
    		
    	
		$this->db->where('tb_karyawan.id_karyawan',$id);
		$this->db->select('*');
		
		$this->db->from('tb_karyawan');
		$this->db->order_by("nama_karyawan", "asc");
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
			
		 
               
			
			$data = array('nama_karyawan' 		=>	$this->input->post('enama_karyawan',true) ,
						
					 'no_hp' 		=> $this->input->post('eno_hp',true),
					 'alamat' 		=> $this->input->post('ealamat'));

			$this->db->where('id_karyawan', $id);
			$sql=$this->db->update('tb_karyawan',$data);
			if($sql===true){
				return true;

			}else{
				return false;
			}
		}
	}
}