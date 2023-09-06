<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_all extends CI_Controller {
function __construct(){
	parent::__construct();
	if(empty($this->session->userdata['email'])){
                redirect(site_url().'auth/login');
            }
            
             if ($this->session->userdata['level']!='sultan') {
            	echo "silahkan lapor kan akun untuk membuat log aktifitas";
            	exit();
            }
            $this->load->model('Log_all_m');

}
	public function index()
	{
	  $data  = array('x' => 'Home',
                             
                            'isi'=>'back/page/log_all' );
                             
            $this->load->view('back/setup/konek',$data);
	}




    	public function saya()
	{
	  $data  = array('x' => 'Home',
                             
                            'isi'=>'back/page/log_all_saya' );
                             
            $this->load->view('back/setup/konek',$data);
	}



	public function insert(){
		
			$valid = array('success' =>false,'messages' => array() );
		$config = array(
			array(
				'field'		=> 'nama_log',
				'label'		=>'nama log kerjaan',
				'rules'		=>'trim|required'
			),
			array(
				'field'		=> 'status',
				'label'		=>'status',
				'rules'		=>'trim|required'
			),
			array(
				'field'		=> 'prioritas',
				'label'		=>'prioritas',
				'rules'		=>'trim|required'
			),
			array(
				'field'		=> 'tanggal_mulai',
				'label'		=>'tanggal mulai',
				'rules'		=>'trim|required'
			),
			array(
				'field'		=> 'tanggal_selesai',
				'label'		=>'tanggal selesai',
				'rules'		=>'trim|required'
			)
		 );

		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if ($this->form_validation->run() === true) {
			$user=$this->Log_all_m->insert();
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
		$data=$this->Log_all_m->listAll();
			$no = 1;
		foreach ($data as $key => $value) {
		
			$button='<div class="btn-group">
	             
	             <a type="button" class="btn btn-outline-warning btn-sm" title="klick here on change" onclick="inilog('.$value['id_log'].')" data-toggle="modal" data-target="#updateModal">  <span class="fa fa-pencil-square-o"></span> </a>
	             
	             
	            </div>';
	            

	            
	            
	            
	            
	            
	            # $status_log='<span class="badge badge-primary">'.$value['status_log'].'</span>';
	             $st_log = $value['status_log'];
	             
	             	            $s_log = $st_log;

switch ($s_log) {
  case "progres":
    $status_log='<span class="badge badge-primary">'.$value['status_log'].'</span>'  ;
    break;
  case "done":
    $status_log='<span class="badge badge-success">'.$value['status_log'].'</span>';
    break;
  case "started":
     $status_log='<span class="badge badge-secondary">'.$value['status_log'].'</span>';
    break;
case "not_started":
 $status_log='<span class="badge badge-danger">'.$value['status_log'].'</span>';
break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
	             
	             
	             
	             
	              $xpro = $value['prioritas'];
	             
	             	            $pro = $xpro;

switch ($pro) {
  case "low":
    $apro='<span class="badge badge-secondary">'.$value['prioritas'].'</span>'  ;
    break;
  case "normal":
    $apro='<span class="badge badge-warning">'.$value['prioritas'].'</span>';
    break;
  case "high":
     $apro='<span class="badge badge-danger">'.$value['prioritas'].'</span>';
   
break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
	             
	             
	             
			$result['data'][$key]=array(
				$no++,
				$value['create_at'],
				$value['nama_user'],
				$value['nama_log'],
				$status_log,
			#	$value['status_log'],
			    $apro,
			#	$value['prioritas'],
			    $value['tanggal_mulai'],
			    $value['tanggal_selesai'],
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
	
	
	
	
	public function list_all_saya(){
		$result = array('data' =>array() );
		$data=$this->Log_all_m->list_saya();
			$no = 1;
		foreach ($data as $key => $value) {
		
		
	            
	            
                        $st_log = $value['status_log'];
                        
                                     $s_log = $st_log;
                        
                        switch ($s_log) {
                        case "progres":
                        $status_log='
                        
                         <a type="button" class="btn btn-outline-primary btn-sm" title="klick here on change" onclick="inilog('.$value['id_log'].')" data-toggle="modal" data-target="#updateModal">  
                         
                         
                        <span class="badge badge-primary">'.$value['status_log'].'</span> </a>'  ;
                        break;
                        case "done":
                        $status_log='<span class="badge badge-success">'.$value['status_log'].'</span>';
                        break;
                        case "started":
                        $status_log='
                        
                        <a type="button" class="btn btn-outline-secondary btn-sm" title="klick here on change" onclick="inilog('.$value['id_log'].')" data-toggle="modal" data-target="#updateModal">  
                        
                        
                        <span class="badge badge-secondary">'.$value['status_log'].'</span></a>';
                        break;
                        case "not_started":
                        $status_log='<span class="badge badge-danger">'.$value['status_log'].'</span>';
                        break;
                        default:
                        echo "Your favorite color is neither red, blue, nor green!";
                        }
	            
                    $xpro = $value['prioritas'];
                    
                    $pro = $xpro;
                    
                    switch ($pro) {
                    case "low":
                    $apro='<span class="badge badge-secondary">'.$value['prioritas'].'</span>'  ;
                    break;
                    case "normal":
                    $apro='<span class="badge badge-warning">'.$value['prioritas'].'</span>';
                    break;
                    case "high":
                    $apro='<span class="badge badge-danger">'.$value['prioritas'].'</span>';
                    
                    break;
                    default:
                    echo "Your favorite color is neither red, blue, nor green!";
                    }

	            
			$result['data'][$key]=array(
				$no++,
				$value['create_at'],
			
				$value['nama_log'],
			    $status_log,
			#	$value['status_log'],
			    $apro,
			#	$value['prioritas'],
			    $value['tanggal_mulai'],
			    $value['tanggal_selesai'],
				#$button
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
		$data=$this->Log_all_m->listAll();
			
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
            $data = $this->Log_all_m->getId($id);
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
            'field' => 'estatus',
            'label' => 'status pekerjaan saat ini',
            'rules' => 'trim|required'
            )
             
               
           
        );
            $this->form_validation->set_rules($config);
            $this->form_validation->set_error_delimiters('<small class="text-danger control-label ">','</small>');

            if($this->form_validation->run() === true) {

                $edit = $this->Log_all_m->update($id); 

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
