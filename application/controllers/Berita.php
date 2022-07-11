<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	   public function __construct()
    {
        parent::__construct();
		$this->load->library('pagination');
        $this->load->model("Slide_m");
        $this->load->model('Blog_m');
    }

	public function index()
	{

			$slide = $this->Slide_m->getAktif();
			$berita = $this->Blog_m->getBeritaa();
			$event = $this->Blog_m->getEvent();
			$people = $this->Blog_m->getPeople();
			$unduh = $this->Blog_m->getUnduh();
			
			$about = $this->Blog_m->getAbout();
			$profilmenu = $this->Blog_m->getProfil();
			$kegiatanmenu = $this->Blog_m->getKegiatan();
			$pages = $this->pages();

			$data  = array(			'x' => 'Dasbord',
									'slide'=>$slide,
									'berita'=>$berita,
									'event'=>$event,
									'people'=>$people,
									'unduh'=>$unduh,
									'about'=>$about,
								
									'pages'=>$pages,
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
				                             
				         $this->load->view('frontand/setup/konek_detail',$data);
					  //var_dump($data);
					  $this->add_count($slug_title);
					}

	public function kegiatan($tags)
	{
			if (empty($tags))
					{
					redirect(site_url().'berita');
					}
	
			       $tag= $this->Blog_m->get_tg($tags);
				   $slide= $this->Slide_m->getAktif();
    				$unduh= $this->Blog_m->getUnduh();
			     	$profilmenu= $this->Blog_m->getProfil();
			    	$berita= $this->Blog_m->getBerita();
					$event= $this->Blog_m->getEvent();
			      	$people= $this->Blog_m->getPeople();
			        $about= $this->Blog_m->getAbout();
			
				//	$pages=$this->pages();
			        $kegiatanmenu= $this->Blog_m->getKegiatan();
					if (empty($tags))
					{
					show_404();
					}
					  $data  = array('x' => 'kegiatan',
					  	 					/*'slide'=>$slide,
				                             'partner'=>$partner,*/
				                             'event'=>$event,
				                             'people'=>$people,
				                              'berita'=>$berita,
											  'slide'=>$slide,
				                             'about'=>$about,
										
											// 'pages'=>$pages,
				                             'profilmenu'=>$profilmenu,
				                             'tag'=>$tag,
                                   			  'unduh'=>$unduh,
				                              'kegiatanmenu'=>$kegiatanmenu,
				                            'isi'=>'frontand/page/kegiatan' );
				                             
				         $this->load->view('frontand/setup/konek',$data);
					}

					public function tags($tags)
	{
			if (empty($tags))
					{
					redirect(site_url().'berita');
					}
	
			       $tag= $this->Blog_m->get_tg($tags);
				   $slide= $this->Slide_m->getAktif();
    				$unduh= $this->Blog_m->getUnduh();
			     	$profilmenu= $this->Blog_m->getProfil();
			    	$berita= $this->Blog_m->getBerita();
					$event= $this->Blog_m->getEvent();
			      	$people= $this->Blog_m->getPeople();
			        $about= $this->Blog_m->getAbout();
			
				//	$pages=$this->pages();
			        $kegiatanmenu= $this->Blog_m->getKegiatan();
					if (empty($tags))
					{
					show_404();
					}
					  $data  = array('x' => 'kegiatan',
					  	 					/*'slide'=>$slide,
				                             'partner'=>$partner,*/
				                             'event'=>$event,
				                             'people'=>$people,
				                              'berita'=>$berita,
											  'slide'=>$slide,
				                             'about'=>$about,
										
											// 'pages'=>$pages,
				                             'profilmenu'=>$profilmenu,
				                             'tag'=>$tag,
                                   			  'unduh'=>$unduh,
				                              'kegiatanmenu'=>$kegiatanmenu,
				                            'isi'=>'frontand/page/tags' );
				                             
				         $this->load->view('frontand/setup/konek',$data);
					}

					public function pages()
					{
						  //konfigurasi pagination
						  $config['base_url'] = site_url('berita/pages'); //site url
						  $config['total_rows'] = $this->db->count_all('tb_blog'); //total row
						  $config['per_page'] = 6;  //show record per halaman
						  $config["uri_segment"] = 3;  // uri parameter
						  $choice = $config["total_rows"] / $config["per_page"];
						  //$config["num_links"] = floor($choice);
				   
						  // Membuat Style pagination untuk BootStrap v4
						$config['first_link']       = 'First';
						  $config['last_link']        = 'Last';
						  $config['next_link']        = 'Next';
						  $config['prev_link']        = 'Prev';
						  $config['full_tag_open']    = '<div ><nav aria-label="pagination"><ul class="pagination">';
						  $config['full_tag_close']   = '</ul></nav></div>';
						  $config['num_tag_open']     = '<li ><span class="visuallyhidden">';
						  $config['num_tag_close']    = '</span></li>';
						  $config['cur_tag_open']     = '<li aria-current="page"><span class="visuallyhidden">';
						  $config['cur_tag_close']    = '<span class="visuallyhidden"></span></span></li>';
						  $config['next_tag_open']    = '<li ><span >';
						  $config['next_tagl_close']  = '<span class="visuallyhidden">&raquo;</span></span></li>';
						  $config['prev_tag_open']    = '<li ><span >';
						  $config['prev_tagl_close']  = '</span>Next</li>';
						  $config['first_tag_open']   = '<li ><span class="visuallyhidden">';
						  $config['first_tagl_close'] = '</span></li>';
						  $config['last_tag_open']    = '<li ><span class="visuallyhidden">';
						  $config['last_tagl_close']  = '</span></li>';
				   
						  $this->pagination->initialize($config);
						  $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				   
						  //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
						  $data['data'] = $this->Blog_m->get_berita_list($config["per_page"], $data['page']);           
				   
						  $data['pagination'] = $this->pagination->create_links();
						
					//  echo $data;
					//load view mahasiswa view
						$data ['slide']= $this->Slide_m->getAktif();
						//$berita= $this->Blog_m->getBeritaa();
						$data['event']= $this->Blog_m->getEvent();
						$data['people']= $this->Blog_m->getPeople();
						$data['unduh']= $this->Blog_m->getUnduh();
						$data['about']= $this->Blog_m->getAbout();
						$data['profilmenu']= $this->Blog_m->getProfil();
						$data['kegiatanmenu']= $this->Blog_m->getKegiatan();
						$data['isi']='frontand/page/berita';
				  
				         $this->load->view('frontand/setup/konek',$data);
						
					
						 // var_dump($data);
					}


					public function addcom()
					{
					
						$this->load->helper('form');
						$this->load->library('form_validation');										
					
						$this->form_validation->set_rules('nama_comment', 'nama_comment', 'trim|required|min_length[5]|max_length[50]');
						$this->form_validation->set_rules('email_comment', 'email_comment', 'trim|required|min_length[5]|max_length[50]|valid_email');
						$this->form_validation->set_rules('description_comment', 'description_comment', 'trim|required|min_length[5]|max_length[200]');
					
						if ($this->form_validation->run() === FALSE)
						{
							redirect('/berita/'.$this->uri->segment(3));
					
						}
						else
						{
							
							$this->Blog_m->addcomment();
							redirect('/berita/'.$this->uri->segment(3));
						}
					
					}
	

					function add_count($slug_title)
					{
						// load cookie helper
						$this->load->helper('cookie');
						// this line will return the cookie which has slug name
						$check_visitor = $this->input->cookie(urldecode($slug_title), FALSE);
						// this line will return the visitor ip address
						$ip = $this->input->ip_address();
					   
						if ($check_visitor == false) {
							$cookie = array("name" => urldecode($slug_title), "value" => "$ip", "expire" => time() + 300, "secure" => false);
							$this->input->set_cookie($cookie);
							$this->Blog_m->update_counter(urldecode($slug_title));
						}
					}
				
}
