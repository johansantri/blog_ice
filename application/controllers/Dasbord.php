<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbord extends CI_Controller {
function __construct(){
	parent::__construct();
	if(empty($this->session->userdata['email'])){
                redirect(site_url().'auth/login');
            }
 $this->load->model('Blog_m');
}
   
	public function index()
	{
	    
	    	$blog = $this->Blog_m->getComment();
	
	  $data  = array('x' => 'Home',
                              'blog'=>$blog,
                            'isi'=>'back/page/dasbord' );
                             
            $this->load->view('back/setup/konek',$data);
	}
    
    
    
	public function blogs()
	{
	  $data  = array('x' => 'Home',
                             
                            'isi'=>'back/page/blog' );
                             
            $this->load->view('back/setup/konek',$data);
	}

	public function details()
	{
	  $data  = array('x' => 'Home',
                             
                            'isi'=>'back/page/details' );
                             
            $this->load->view('back/setup/konek',$data);
	}

	public function categoris()
	{
	  $data  = array('x' => 'Home',
                             
                            'isi'=>'back/page/kategori' );
                             
            $this->load->view('back/setup/konek',$data);
	}
	
	
		public function get_id($id=null){
		 if($id) {
            $data = $this->Blog_m->getId($id);
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
            'field' => 'status_comment',
            'label' => 'status_comment',
            'rules' => 'trim|required|max_length[1]'
            )
             
               
           
        );
            $this->form_validation->set_rules($config);
            $this->form_validation->set_error_delimiters('<small class="text-danger control-label ">','</small>');

            if($this->form_validation->run() === true) {

                $edit = $this->Blog_m->updateComment($id); 

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
