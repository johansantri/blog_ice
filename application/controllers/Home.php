<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	   public function __construct()
    {
        parent::__construct();
       
        $this->load->model("Slide_m");
        $this->load->model('Blog_m');
    }

	public function index()
	{

			 $slide= $this->Slide_m->getAktif();
			  $partner= $this->Blog_m->getAwal();
			   $event= $this->Blog_m->getEvent();
			      $people= $this->Blog_m->getPeople();
	  $data  = array('x' => 'Dasbord',
	  	 					'slide'=>$slide,
                             'partner'=>$partner,
                             'event'=>$event,
                             'people'=>$people,
                            'isi'=>'frontand/page/index' );
                             
            $this->load->view('frontand/setup/konek',$data);
	}
}
