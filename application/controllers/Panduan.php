<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panduan extends CI_Controller {

	   public function __construct()
    {
        parent::__construct();
       
        $this->load->model("Slide_m");
        $this->load->model('Blog_m');
    }

	public function index()
	{

			 $slide= $this->Slide_m->getAktif();
			 // $panduan= $this->Blog_m->getPanduan();
			  $panduanAll= $this->Blog_m->getPanduanALL();
    			 $new= $this->Blog_m->getNew();
   			  $berita= $this->Blog_m->getBerita();
			   $event= $this->Blog_m->getEvent();
			      $people= $this->Blog_m->getPeople();
			       $about= $this->Blog_m->getAbout();
			        $profilmenu= $this->Blog_m->getProfil();
			        	 $kegiatanmenu= $this->Blog_m->getKegiatan();
	  $data  = array('x' => 'Dasbord',
	  	 					'slide'=>$slide,
                            // 'panduan'=>$panduan,
							 'panduanAll'=>$panduanAll,
                             'event'=>$event,
                             'people'=>$people,
                     		 'berita'=>$berita,
                             'about'=>$about,
                  		    'new'=>$new,
                              'kegiatanmenu'=>$kegiatanmenu,
                              'profilmenu'=>$profilmenu,
                            'isi'=>'frontand/page/panduan' );
                             
            $this->load->view('frontand/setup/konek',$data);
	}

	

	public function panduan_read($slug_title=NULL)
	{

			/* $slide= $this->Slide_m->getAktif();
			  $partner= $this->Blog_m->getAwal();
			   $event= $this->Blog_m->getEvent();*/
			     $profilmenu= $this->Blog_m->getProfil();
			     $panduan= $this->Blog_m->getPanduan();
    			 $new= $this->Blog_m->getNew();
    			 $berita= $this->Blog_m->getBerita();
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
				                                  'panduan'=>$panduan,
                                    		 'new'=>$new,
				                             'about'=>$about,
				                             'profilmenu'=>$profilmenu,
				                               'kegiatanmenu'=>$kegiatanmenu,
				                             'slug'=>$slug,
				                            'isi'=>'frontand/page/panduan_detail' );
				                             
				         $this->load->view('frontand/setup/konek',$data);
					  //var_dump($data);
					}

public function tags($tags)
	{

	
			       $tag= $this->Blog_m->get_tg($tags);
    				$panduan= $this->Blog_m->getPanduan();
			     	$profilmenu= $this->Blog_m->getProfil();
			    	$berita= $this->Blog_m->getBerita();
			      	$people= $this->Blog_m->getPeople();
			        $about= $this->Blog_m->getAbout();
			       $new= $this->Blog_m->getNew();
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
                                   			  'panduan'=>$panduan,
                                    		 'new'=>$new,
				                              'kegiatanmenu'=>$kegiatanmenu,
				                            'isi'=>'frontand/page/tags' );
				                             
				         $this->load->view('frontand/setup/konek',$data);
					}
	
}
