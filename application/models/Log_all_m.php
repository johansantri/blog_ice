<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_all_m extends CI_Model {
public function __construct(){
	parent::__construct();
}
	
	public function insert()
	{
		 $slug = url_title($this->input->post('nama_log'), 'dash', TRUE);
		$data = array('nama_log' 		=>	$this->input->post('nama_log',true) ,
		               'id_user'        => $this->session->userdata('id_user'),
                        'slug_log'      => $slug,
                        'status_log'        => $this->input->post('status'),
                        'prioritas'     =>$this->input->post('prioritas'),
                        'tanggal_mulai' =>$this->input->post('tanggal_mulai'),
                        'tanggal_selesai'=>$this->input->post('tanggal_selesai'));

		$sql=$this->db->insert('tb_log',$data);
		if($sql===true){
			return true;
		}else{
			return false;
		}
	}

	public function listAll(){
		
		$this->db->select('*');
		$this->db->join('tb_user','tb_user.id_user=tb_log.id_user');
		 $this->db->order_by('tb_log.create_at', 'DESC');
		$this->db->from('tb_log');
		$query=$this->db->get();
		return $query->result_array();
	}
	
	
	
		public function list_saya(){
		$id = $this->session->userdata['id_user']; 
		$this->db->where('tb_log.id_user',$id);
		$this->db->select('*');
		$this->db->join('tb_user','tb_user.id_user=tb_log.id_user');
		 $this->db->order_by('tb_log.create_at', 'DESC');
		$this->db->from('tb_log');
		$query=$this->db->get();
		return $query->result_array();
	}

	public function getId($id=null){
		if ($id) {
    		
    	
    	$this->db->where('tb_log.id_log',$id);
		$this->db->select('*');		
		$this->db->from('tb_log');
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
			
			$data = array('status_log' 		=> $this->input->post('estatus',true));
						
			$this->db->where('id_log', $id);
			$sql=$this->db->update('tb_log',$data);
			if($sql===true){
				return true;

			}else{
				return false;
			}
		}
	}






	
	function jumlah_data(){
		return $this->db->get('tb_log')->num_rows();
	}
    

}

