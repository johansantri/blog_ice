<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
function __construct(){
	parent::__construct();
	if(empty($this->session->userdata['email'])){
                redirect(site_url().'auth/login');
            }
 $this->load->model('Transaksi_m');
}
	public function index()
	{
		 $dat = $this->Transaksi_m->tampilkodetransaksi();
             $nourut = substr($dat->kode_transaksi,3,6 );
          
             $kodeTrSekarang = $nourut + 1;
             
	  $data  = array('x' => 'Transaksi',
                             'kode_transaksi'=> $kodeTrSekarang,
                            'isi'=>'back/page/transaksi' );
                             
            $this->load->view('back/setup/konek',$data);
           
	}

	public function insert()
	{	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_produk', 'nama kapster', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			echo "nama kapster belum di pilih";
		}else{
		$id_produk = $this->input->post('id_produk', true);
		$id_karyawan = $this->input->post('id_karyawan', true);
		$id_karyawanA = $this->input->post('id_karyawanA', true);
		$kode_transaksi = $this->input->post('kode_transaksi', true);
		$id_user = $this->input->post('id_user', true);
		$diskon = $this->input->post('diskon', true);
		$total = $this->input->post('total');
		$point_save = $this->input->post('point_save');
		$point = $this->input->post('point');
		$bagi_satu = $this->input->post('bagi_satu');
		$bagi_dua = $this->input->post('bagi_dua');
		$bagi_kapster = $this->input->post('bagi_kapster');
		$tanggal = $tes=date('Y-m-d');

		$data = array(
			'id_produk' => $id_produk,
			'id_karyawan' => $id_karyawan,
			'id_karyawanA' => $id_karyawanA,
			'kode_transaksi' => $kode_transaksi,
			'id_user' => $id_user,
			'diskon' => $diskon,			
			'total' => $total,
			'point_save' => $point_save,
			'point' => $point,
			'bagi_dua' => $bagi_dua,
			'bagi_satu' => $bagi_satu,
			'bagi_kapster' => $bagi_kapster,
			'created'=>$tanggal,
		);

		$this->load->model('Transaksi_m');
		$res = $this->Transaksi_m->insert($data);
		 header('Content-Type: application/json');
		echo json_encode($res);
		}
		
		
	}

	public function buy()
	{	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_pelanggan', 'nama kapster', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			echo "nama kapster belum di pilih";
		}else{
		
		$id_pelanggan = $this->input->post('id_pelanggan', true);
		$total_bayar = $this->input->post('total_bayar', true);
		$kode_transaksi = $this->input->post('kode_transaksi', true);
		$total_diskon = $this->input->post('total_diskon');
		$total_transaksi = $this->input->post('total_transaksi');
		$bayar = $this->input->post('bayar', true);
		$kembali = $this->input->post('kembali');
		
		$tanggal = $tes=date('Y-m-d');

		$data = array(
			
			'id_pelanggan' => $id_pelanggan,
			'total_bayar' => $total_bayar,
			'kode_transaksi' => $kode_transaksi,
			'total_transaksi' => $total_transaksi,
			'total_diskon' => $total_diskon,
			'bayar' => $bayar,			
			'kembali' => $kembali,
			'tgl_transaksi' => $tanggal

		);

		$this->load->model('Transaksi_m');
		$res = $this->Transaksi_m->buys($data);
		 header('Content-Type: application/json');
		echo json_encode($res);
		}
		
		
	}
	public function listBantu($kode_transaksi)
	{
 if($kode_transaksi) {
		$data=$this->Transaksi_m->tampilBantu($kode_transaksi);
		
		
		$this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
	}
}

		public function removeId($id_trans=null){
		 if($id_trans) {
            $data = $this->Transaksi_m->removeBantu($id_trans);
            echo json_encode($data);
        }
	}

	public function jumlahHarga($kode_transaksi)
	{
if($kode_transaksi) {
		$data=$this->Transaksi_m->jumlahTrans($kode_transaksi);
		
		
		$this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
	}
}
	

		public function insertPln(){
		
			$valid = array('success' =>false,'messages' => array() );
		$config = array(
			array(
				'field'		=> 'nama_pelanggan',
				'label'		=>'pelanggan',
				'rules'		=>'trim|required'
			),
			array(
				'field'		=> 'no_hp',
				'label'		=>'no_hp',
				'rules'		=>'trim|required'
			),
			array(
				'field'		=> 'alamat',
				'label'		=>'alamat',
				'rules'		=>'trim|required'
			)
			
		 );

		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if ($this->form_validation->run() === true) {
			$user=$this->Transaksi_m->insertPln();
			if ($user===true) {
				$valid['success']=true;
				$valid['messages']="success create data";
			}else{
				$valid['success']=false;
				$valid['messages']="someting wrong...";
			}
		}else{
			$valid['success']=false;
			foreach ($_POST as $key => $value) {
				$valid['messages'][$key]=form_error($key);
			}
		}
		$this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($valid, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
		

	}

	public function listA(){
		
		$data=$this->Transaksi_m->listPelanggan();
		
		
		$this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
		//echo json_encode($result);
	}
}
