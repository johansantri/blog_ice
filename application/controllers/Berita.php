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
			  $berita= $this->Blog_m->getBeritaa();
			   $event= $this->Blog_m->getEvent();
			      $people= $this->Blog_m->getPeople();
      		$unduh= $this->Blog_m->getUnduh();
			       $about= $this->Blog_m->getAbout();
			        $profilmenu= $this->Blog_m->getProfil();
			        	 $kegiatanmenu= $this->Blog_m->getKegiatan();
	  $data  = array('x' => 'Dasbord',
	  	 					'slide'=>$slide,
                             'berita'=>$berita,
                             'event'=>$event,
                             'people'=>$people,
                     		 'unduh'=>$unduh,
                             'about'=>$about,
                              'kegiatanmenu'=>$kegiatanmenu,
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
     			 $unduh= $this->Blog_m->getUnduh();
			      $people= $this->Blog_m->getPeople();
			        $about= $this->Blog_m->getAbout();
			       $slug= $this->Blog_m->get_news($slug_title);
			        $kegiatanmenu= $this->Blog_m->getKegiatan();
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
                                    		 'unduh'=>$unduh,
				                             'profilmenu'=>$profilmenu,
				                               'kegiatanmenu'=>$kegiatanmenu,
				                             'slug'=>$slug,
				                            'isi'=>'frontand/page/berita_detail' );
				                             
				         $this->load->view('frontand/setup/konek',$data);
					  //var_dump($data);
					}

	public function tags($tags)
	{
			if (empty($tags))
					{
					redirect(site_url().'berita');
					}
	
			       $tag= $this->Blog_m->get_tg($tags);
    				$unduh= $this->Blog_m->getUnduh();
			     	$profilmenu= $this->Blog_m->getProfil();
			    	$berita= $this->Blog_m->getBerita();
			      	$people= $this->Blog_m->getPeople();
			        $about= $this->Blog_m->getAbout();
			      
			        $kegiatanmenu= $this->Blog_m->getKegiatan();
					if (empty($tags))
					{
					show_404();
					}
					  $data  = array('x' => 'kegiatan',
					  	 					/*'slide'=>$slide,
				                             'partner'=>$partner,
				                             'event'=>$event,*/
				                             'people'=>$people,
				                              'berita'=>$berita,
				                             'about'=>$about,
				                             'profilmenu'=>$profilmenu,
				                             'tag'=>$tag,
                                   			  'unduh'=>$unduh,
				                              'kegiatanmenu'=>$kegiatanmenu,
				                            'isi'=>'frontand/page/tags' );
				                             
				         $this->load->view('frontand/setup/konek',$data);
					}


	
}
