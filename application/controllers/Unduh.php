<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unduh extends CI_Controller {

	   public function __construct()
    {
        parent::__construct();
       
        $this->load->model("Slide_m");
        $this->load->model('Blog_m');
    }

	public function index()
	{

			 $slide= $this->Slide_m->getAktif();
			 // $unduh= $this->Blog_m->getUnduh();
			  $unduhAll= $this->Blog_m->getUnduhALL();
    			 $new= $this->Blog_m->getNew();
   			  $berita= $this->Blog_m->getBerita();
			   $event= $this->Blog_m->getEvent();
			      $people= $this->Blog_m->getPeople();
			       $about= $this->Blog_m->getAbout();
			        $profilmenu= $this->Blog_m->getProfil();
			        	 $kegiatanmenu= $this->Blog_m->getKegiatan();
	  $data  = array('x' => 'Dasbord',
	  	 					'slide'=>$slide,
                            // 'unduh'=>$unduh,
							 'unduhAll'=>$unduhAll,
                             'event'=>$event,
                             'people'=>$people,
                     		 'berita'=>$berita,
                             'about'=>$about,
                  		    'new'=>$new,
                              'kegiatanmenu'=>$kegiatanmenu,
                              'profilmenu'=>$profilmenu,
                            'isi'=>'frontand/page/unduh' );
                             
            $this->load->view('frontand/setup/konek',$data);
	}

	

	public function unduh_read($slug_title=NULL)
	{

			/* $slide= $this->Slide_m->getAktif();
			  $partner= $this->Blog_m->getAwal();
			   $event= $this->Blog_m->getEvent();*/
			     $profilmenu= $this->Blog_m->getProfil();
			     $unduh= $this->Blog_m->getUnduh();
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
				                                  'unduh'=>$unduh,
                                    		 'new'=>$new,
				                             'about'=>$about,
				                             'profilmenu'=>$profilmenu,
				                               'kegiatanmenu'=>$kegiatanmenu,
				                             'slug'=>$slug,
				                            'isi'=>'frontand/page/unduh_detail' );
				                             
				         $this->load->view('frontand/setup/konek',$data);
					  //var_dump($data);
					}

public function tags($tags)
	{

	
			       $tag= $this->Blog_m->get_tg($tags);
    				$unduh= $this->Blog_m->getUnduh();
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
                                   			  'unduh'=>$unduh,
                                    		 'new'=>$new,
				                              'kegiatanmenu'=>$kegiatanmenu,
				                            'isi'=>'frontand/page/tags' );
				                             
				         $this->load->view('frontand/setup/konek',$data);
					}
	
}
