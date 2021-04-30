<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontent extends CI_Controller {
function __construct(){
	parent::__construct();
	if(empty($this->session->userdata['email'])){
                redirect(site_url().'auth/login');
            }

     $this->load->model('Kontent_m');
        $this->load->library('form_validation');

}
	public function index()
	{
		//$kontents=$this->Kontent_m->getAll();	
	  $data  = array('x' => 'Kontent',
                            // 'kontents'=>$kontents,
                            'isi'=>'back/page/kontent' );
                             
            $this->load->view('back/setup/konek',$data);
	}

 public function insert(){
        
            $valid = array('success' =>false,'messages' => array() );
        $config = array(
            array(
                'field'     => 'title',
                'label'     =>'title',
                'rules'     =>'trim|required'
            ),
            array(
                'field'     => 'meta',
                'label'     =>'meta',
                'rules'     =>'trim|required'
            ),
            array(
                'field'     => 'description',
                'label'     =>'description',
                'rules'     =>'trim|required'
            ),
            array(
                'field'     => 'tags',
                'label'     =>'tags',
                'rules'     =>'trim|required'
            ),
            array(
                'field'     => 'id_kategori',
                'label'     =>'kategori',
                'rules'     =>'required'
            ),
            array(
                'field'     => 'id_sub',
                'label'     =>'sub',
                'rules'     =>'required'
            )
            
         );

        $this->form_validation->set_rules($config);
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
        if ($this->form_validation->run() === true) {
            $user=$this->Kontent_m->insert();
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

    public function subKategori()
    {
        if($this->input->post('id_kategori'))
        {
        echo $this->Kontent_m->subKategori($this->input->post('id_kategori'));
        }
    }

    public function esubKategori()
    {
        if($this->input->post('eid_kategori'))
        {
        echo $this->Kontent_m->subKategori($this->input->post('eid_kategori'));
        }
    }

    public function list_all(){
        $result = array('data' =>array() );
        $data=$this->Kontent_m->listAll();
            $no = 1;
        foreach ($data as $key => $value) {
        
            $button='<div class="btn-group">
                 
                 <a type="button" class="btn btn-outline-warning btn-sm" title="klick here on change" onclick="updateKontent('.$value['id_kontent'].')" data-toggle="modal" data-target="#updateModal">  <span class="fa fa-pencil-square-o">edit</span> </a>
                 
                 
                </div>';
            $result['data'][$key]=array(
                $no++,
                $value['title'],
                $value['meta'],
                $value['nama_kategori'],
                $value['nama_sub'],             
                $value['create_ad'],
                $value['update_ad'],
                $value['status'],
                $value['nama_user'],
                
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

    public function get_id($id=null){
         if($id) {
            $data = $this->Kontent_m->getId($id);
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
                'field'     => 'etitle',
                'label'     =>'title',
                'rules'     =>'trim|required'
            ),
            array(
                'field'     => 'emeta',
                'label'     =>'meta',
                'rules'     =>'trim|required'
            ),
            array(
                'field'     => 'edescription',
                'label'     =>'description',
                'rules'     =>'trim|required'
            ),
            array(
                'field'     => 'etags',
                'label'     =>'tags',
                'rules'     =>'trim|required'
            ),
            array(
                'field'     => 'eid_kategori',
                'label'     =>'category',
                'rules'     =>'required'
            ),
            array(
                'field'     => 'eid_sub',
                'label'     =>'sub',
                'rules'     =>'required'
            )
            
         );
             
               
           
        
            $this->form_validation->set_rules($config);
            $this->form_validation->set_error_delimiters('<small class="text-danger control-label ">','</small>');

            if($this->form_validation->run() === true) {

                $edit = $this->Kontent_m->update($id); 

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
