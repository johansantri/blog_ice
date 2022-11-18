<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms extends CI_Controller {

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
			       $about= $this->Blog_m->getAbout();
			        $berita= $this->Blog_m->getBerita();
			        $profilmenu= $this->Blog_m->getProfil();
			         $kegiatanmenu= $this->Blog_m->getKegiatan();
	  $data  = array('x' => 'Dasbord',
	  	 					'slide'=>$slide,
                             'partner'=>$partner,
                             'berita'=>$berita,
                             'event'=>$event,
                             'people'=>$people,
                             'about'=>$about,
                             'profilmenu'=>$profilmenu,
                              'kegiatanmenu'=>$kegiatanmenu,
                            'isi'=>'frontand/page/trems' );
                             
            $this->load->view('frontand/setup/konek',$data);
	}



	
    	public function privacy()
	{

			 $slide= $this->Slide_m->getAktif();
			  $partner= $this->Blog_m->getAwal();
			   $event= $this->Blog_m->getEvent();
			      $people= $this->Blog_m->getPeople();
			       $about= $this->Blog_m->getAbout();
			        $berita= $this->Blog_m->getBerita();
			        $profilmenu= $this->Blog_m->getProfil();
			         $kegiatanmenu= $this->Blog_m->getKegiatan();
	  $data  = array('x' => 'Dasbord',
	  	 					'slide'=>$slide,
                             'partner'=>$partner,
                             'berita'=>$berita,
                             'event'=>$event,
                             'people'=>$people,
                             'about'=>$about,
                             'profilmenu'=>$profilmenu,
                              'kegiatanmenu'=>$kegiatanmenu,
                            'isi'=>'frontand/page/privacy' );
                             
            $this->load->view('frontand/setup/konek',$data);
	}

}
