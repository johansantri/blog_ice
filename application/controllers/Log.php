<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {
function __construct(){
	parent::__construct();
	if(empty($this->session->userdata['email'])){
                redirect(site_url().'auth/login');
            }
            
             if ($this->session->userdata['level']!='admin') {
            	echo "silahkan lapor kan akun untuk membuat log aktifitas";
            	exit();
            }
            $this->load->model('Log_m');

}
	public function index()
	{
	  $data  = array('x' => 'Home',
                             
                            'isi'=>'back/page/log' );
                             
            $this->load->view('back/setup/konek',$data);
	}

	public function insert(){
		
			$valid = array('success' =>false,'messages' => array() );
		$config = array(
			array(
				'field'		=> 'nama_log',
				'label'		=>'nama log kerjaan',
				'rules'		=>'trim|required'
			)
		 );

		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if ($this->form_validation->run() === true) {
			$user=$this->Log_m->insert();
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
        ->set_output(json_encode($valid, $user, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
		

	}


	public function list_all(){
		$result = array('data' =>array() );
		$data=$this->Log_m->listAll();
			$no = 1;
		foreach ($data as $key => $value) {
		
			$button='<div class="btn-group">
	             
	             <a type="button" class="btn btn-outline-warning btn-sm" title="klick here on change" onclick="inilog('.$value['id_log'].')" data-toggle="modal" data-target="#updateModal">  <span class="fa fa-pencil-square-o">update status</span> </a>
	             
	             
	            </div>';
	            
	            $status_log='<span class="badge badge-primary">tes</span>';
			$result['data'][$key]=array(
				$no++,
				$value['nama_user'],
				$value['nama_log'],
				#$value['status_log'],
				$status_log,
				$value['prioritas'],
			    $value['create_at'],
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

	public function list_a(){
		$result = array('data' =>array() );
		$data=$this->Log_m->listAll();
			
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
            $data = $this->Log_m->getId($id);
           $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
        }
	}

	public function update($id=null){

		
			 if($id) {
            $validator = array('success' => false, 'messages' => array());

            $config = array(
            array(
            'field' => 'enama_log',
            'label' => 'nama log kerjaan',
            'rules' => 'trim|required'
            )
             
               
           
        );
            $this->form_validation->set_rules($config);
            $this->form_validation->set_error_delimiters('<small class="text-danger control-label ">','</small>');

            if($this->form_validation->run() === true) {

                $edit = $this->Log_m->update($id); 

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
