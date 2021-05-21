<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	   public function __construct()
    {
        parent::__construct();
       
        $this->load->model("Slide_m");
        $this->load->model('Blog_m');
    }

	public function index()
	{

			 $slide= $this->Slide_m->getAktif();
			  $berita= $this->Blog_m->getBerita();
			   $event= $this->Blog_m->getEvent();
			      $people= $this->Blog_m->getPeople();
			       $about= $this->Blog_m->getAbout();
			        $profilmenu= $this->Blog_m->getProfil();
	  $data  = array('x' => 'Dasbord',
	  	 					'slide'=>$slide,
                             'berita'=>$berita,
                             'event'=>$event,
                             'people'=>$people,
                             'about'=>$about,
                              'profilmenu'=>$profilmenu,
                            'isi'=>'frontand/page/berita' );
                             
            $this->load->view('frontand/setup/konek',$data);
	}

	

	public function berita_read($slug_title=NULL)
	{

			/* $slide= $this->Slide_m->getAktif();
			  $partner= $this->Blog_m->getAwal();
			   $event= $this->Blog_m->getEvent();*/
			     $profilmenu= $this->Blog_m->getProfil();
			     $berita= $this->Blog_m->getBerita();
			      $people= $this->Blog_m->getPeople();
			        $about= $this->Blog_m->getAbout();
			       $slug= $this->Blog_m->get_news($slug_title);
					if (empty($slug))
					{
					show_404();
					}
					  $data  = array('x' => 'about',
					  	 					/*'slide'=>$slide,
				                             'partner'=>$partner,
				                             'event'=>$event,*/
				                             'people'=>$people,
				                                  'berita'=>$berita,
				                             'about'=>$about,
				                             'profilmenu'=>$profilmenu,
				                             'slug'=>$slug,
				                            'isi'=>'frontand/page/berita_detail' );
				                             
				         $this->load->view('frontand/setup/konek',$data);
					  //var_dump($data);
					}
	
}
