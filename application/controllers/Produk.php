<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
function __construct(){
	parent::__construct();
	if(empty($this->session->userdata['email'])){
                redirect(site_url().'auth/login');
            }
            $this->load->model('Produk_m');
}
	public function index()
	{
	  $data  = array('x' => 'master produk',
                             
                            'isi'=>'back/page/produk' );
                             
            $this->load->view('back/setup/konek',$data);
	}
	public function insert(){
		
			$valid = array('success' =>false,'messages' => array() );
		$config = array(
			array(
				'field'		=> 'nama_produk',
				'label'		=>'produk',
				'rules'		=>'trim|required'
			),
			array(
				'field'		=> 'satuan',
				'label'		=>'satuan',
				'rules'		=>'trim|required'
			),
			array(
				'field'		=> 'keterangan_produk',
				'label'		=>'keterangan',
				'rules'		=>'trim|required'
			),
			array(
				'field'		=> 'harga',
				'label'		=>'harga',
				'rules'		=>'trim|required'
			)
			
		 );

		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if ($this->form_validation->run() === true) {
			$user=$this->Produk_m->insert();
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
	public function list_all(){
		$result = array('data' =>array() );
		$data=$this->Produk_m->listAll();
			$no = 1;
		foreach ($data as $key => $value) {
		
			$button='<div class="btn-group">
	             
	             <a type="button" class="btn btn-outline-warning btn-sm" title="klick here on change" onclick="updateProduk('.$value['id_produk'].')" data-toggle="modal" data-target="#updateModal">  <span class="fa fa-pencil-square-o">edit</span> </a>
	             
	             
	            </div>';
			$result['data'][$key]=array(
				$no++,
				$value['nama_produk'],
				$value['satuan'],
				$value['harga'],				
				$button
			);
		}
		$this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        
        ->set_output(json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
		//echo json_encode($result);
	}

		public function listA(){
		
		$data=$this->Produk_m->listAll();
		
		
		$this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
		//echo json_encode($result);
	}

public function get_id($id=null){
		 if($id) {
            $data = $this->Produk_m->getId($id);
           $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
        }
	}

	public function ko(){
		
            $data = $this->Produk_m->makode();
           $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
       
	}

	public function update($id=null){

		
			 if($id) {
            $validator = array('success' => false, 'messages' => array());

          $config = array(
			array(
				'field'		=> 'enama_produk',
				'label'		=>'produk',
				'rules'		=>'trim|required'
			),
			array(
				'field'		=> 'esatuan',
				'label'		=>'satuan',
				'rules'		=>'trim|required'
			),
			array(
				'field'		=> 'eketerangan_produk',
				'label'		=>'keterangan_produk',
				'rules'		=>'trim|required'
			),
			array(
				'field'		=> 'eharga',
				'label'		=>'harga',
				'rules'		=>'trim|required'
			)
			
			
		 );
             
               
           
        
            $this->form_validation->set_rules($config);
            $this->form_validation->set_error_delimiters('<small class="text-danger control-label ">','</small>');

            if($this->form_validation->run() === true) {

                $edit = $this->Produk_m->update($id); 

                if($edit === true) {
                    $validator['success'] = true;
                    $validator['messages'] = "Successfully updated";
                } else {
                    $validator['success'] = false;
                    $validator['messages'] = "Error while updating the infromation";
                }           
            } 
            else {
                $validator['success'] = false;
                foreach ($_POST as $key => $value) {
                    $validator['messages'][$key] = form_error($key);    
                }           
            }

           $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($validator, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
        }
	}	

}
