<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(empty($this->session->userdata['email'])){
                redirect(site_url().'auth/login');
            }
        $this->load->model("Bank_m");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $personal= $this->Bank_m->getAll();
        $data  = array('x' => 'bank',
                             'personal'=>$personal,
                            'isi'=>'back/bank/index' );
                             
            $this->load->view('back/setup/konek',$data);

        //$this->load->view("admin/personal/list", $data);
       // var_dump($data);
    }

    public function add()
    {
        $personal = $this->Bank_m;
      
        $validation = $this->form_validation;
        $validation->set_rules($personal->rules());

        if ($validation->run()) {
            $personal->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('bank'));
        }

        $data  = array('x' => 'bank',
                             'validation'=>$validation,
                          
                            'isi'=>'back/bank/new_form' );
                             
            $this->load->view('back/setup/konek',$data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('bank');
       
        $personal = $this->Bank_m;
        $validation = $this->form_validation;
   
        $validation->set_rules($personal->rules());

        if ($validation->run()) {
            $personal->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('bank'));
        }

        $person = $personal->getById($id);
        if (!$person) show_404();
        
          $data  = array('x' => 'bank',
                             'validation'=>$validation,
                             
                              'personal'=>$person,
                            'isi'=>'back/bank/edit' );
                             
            $this->load->view('back/setup/konek',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Bank_m->delete($id)) {
            redirect(site_url('bank'));
        }
    }
}
