<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	   public function __construct()
    {
        parent::__construct();
       
        $this->load->model("Slide_m");
        $this->load->model('Blog_m');
    }

	public function index()
	{
			$unduh= $this->Blog_m->getUnduh();
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
                     		'unduh'=>$unduh,
                             'profilmenu'=>$profilmenu,
                              'kegiatanmenu'=>$kegiatanmenu,
                            'isi'=>'frontand/page/kegiatan' );
                             
            $this->load->view('frontand/setup/konek',$data);
	}


	public function kegiatan_read($slug_title=NULL)
	{

			/* $slide= $this->Slide_m->getAktif();
			  $partner= $this->Blog_m->getAwal();
			   $event= $this->Blog_m->getEvent();*/
			     $profilmenu= $this->Blog_m->getProfil();
				 $unduh= $this->Blog_m->getUnduh();
			     $berita= $this->Blog_m->getBerita();
			      $people= $this->Blog_m->getPeople();
			        $about= $this->Blog_m->getAbout();
			       $slug= $this->Blog_m->get_news($slug_title);
			        $kegiatanmenu= $this->Blog_m->getKegiatan();
					if (empty($slug))
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
											 'unduh'=>$unduh,
				                             'profilmenu'=>$profilmenu,
				                             'slug'=>$slug,
				                                'kegiatanmenu'=>$kegiatanmenu,
				                            'isi'=>'frontand/page/berita_detail' );
				                             
				         $this->load->view('frontand/setup/konek',$data);
					  //var_dump($data);
					}

	public function tags($tags=NULL)
	{

	
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
