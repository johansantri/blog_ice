<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_m extends CI_Model {
public function __construct(){
	parent::__construct();
}
	public function insert($data)
	{
		$this->db->insert('tb_transaksi_detail', $data);
		return $this->db->insert_id();
	}
	public function buys($data)
	{
	$this->db->insert('tb_transaksi', $data);
		return $this->db->insert_id();	
	}
	public function tampilkodetransaksi()
	{
		$this->db->select_max('kode_transaksi');
		$this->db->from('tb_transaksi');
		$query=$this->db->get();
		return $query->row();
	}
	public function tampilBantu($kode_transaksi=null){
		$this->db->select('tb_transaksi_detail.id_trans,tb_produk.nama_produk,tb_produk.id_produk,tb_produk.harga, tb_transaksi_detail.diskon,tb_transaksi_detail.total');
		$this->db->where('kode_transaksi',$kode_transaksi);
		$this->db->join('tb_produk','tb_produk.id_produk=tb_transaksi_detail.id_produk');
		
		/*$this->db->join('tb_karyawan','tb_karyawan.id_karyawan=tb_transaksi_detail.id_karyawan');*/
		$this->db->from('tb_transaksi_detail');
		$query=$this->db->get();
		return $query->result_array();
	}

	 public function removeBantu($id_trans = null) {
       
        $array = array('id_trans' => $id_trans);
        $this->db->where($array);
        $tes=$this->db->delete('tb_transaksi_detail',$array);
        if($tes===true){
                return true;
            }else{
                return false;
            } 
    }
    public function jumlahTrans($kode_transaksi=null){
    	$data=$this->db
    ->select_sum('total')
    ->where('kode_transaksi',$kode_transaksi)
    ->from('tb_transaksi_detail')
     ->order_by('total desc')
    //->limit(3)
    ->get();
	return $data->result_array();
			}

	public function insertPln()
	{	
	
		
	
		$data = array('nama_pelanggan' 		=>	$this->input->post('nama_pelanggan',TRUE) ,
						
					 'no_hp' 		=> $this->input->post('no_hp',TRUE),
					 'alamat' 		=> $this->input->post('alamat'));

		$sql=$this->db->insert('tb_pelanggan',$data);
		if($sql===TRUE){
			return TRUE;
		}else{
			return FALSE;
		}
	}


	public function listPelanggan(){
		
		$this->db->select('*');
		
		$this->db->from('tb_pelanggan');
		$this->db->order_by("nama_pelanggan", "asc");
		$query=$this->db->get();
		return $query->result_array();
	}


}