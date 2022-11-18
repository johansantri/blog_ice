<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {

	   public function __construct()
    {
        parent::__construct();
		$this->load->library('pagination');
        $this->load->model("Slide_m");
        $this->load->model('Blog_m');
    }

	public function index()
	{
            
            header("Content-type: text/xml");
			$post = $this->Blog_m->getSite();
                $data = [
                'post'   => $post
                ];
            $this->load->view('sitemap',$data);			



	}

	
}