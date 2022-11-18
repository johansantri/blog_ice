<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_m extends CI_Model
{
    private $_table = "tb_blog";
    public $id_blog;
    public $title;
    public $meta;
    public $description;
    public $tags;
    public $id_kategori;
    public $id_sub;

    public $image = "default.jpg";
    public $status="draft";
    //public $create_ad=date("Y-m-d h:i:s");
    //public $status_comment="0";
    public function rules()
    {
        return [
            ['field' => 'title',
            'label' => 'title',
            'rules' => 'required|max_length[255]'],

            ['field' => 'meta',
            'label' => 'keyword google',
            'rules' => 'required'],

            ['field' => 'description',
            'label' => 'deskripsi',
            'rules' => 'required'],

            ['field' => 'tags',
            'label' => 'tags label keyword',
            'rules' => 'required|max_length[255]'],

            ['field' => 'id_kategori',
            'label' => 'kategori',
            'rules' => 'required'],
            
            ['field' => 'id_sub',
            'label' => 'sub kategori',
            'rules' => 'required']
        ];
    }
    public function getAll()
    {
      $this->db->select('tb_blog.id_blog,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
          $this->db->where('tb_blog.status != "delete"');
        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
       // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->result();
    }

    //forntend partner
        public function getAwal()
    {
      $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
          $this->db->where('tb_blog.status = "post"');
          $this->db->where('tb_blog.id_kategori = "10"');
            $this->db->order_by('rand()');

        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
       // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->result();
    }

     //forntend kategori profile menu
        public function getProfil()
    {
      $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
          $this->db->where('tb_blog.status = "post"');
          $this->db->where('tb_blog.id_kategori = "6"');
            $this->db->order_by('rand()');

        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
       // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->result();
    }
    
    //sitemap
    
         public function getSite()
    {
      $this->db->select('tb_blog.title,tb_blog.slug_title,tb_blog.create_ad');
          $this->db->where('tb_blog.status = "post"');
     
        $query=$this->db->get('tb_blog');
        return $query->result_array();
    }
    
    

       //forntend kategori kegiatan menu
        public function getKegiatan()
    {
    //   $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
    //       $this->db->where('tb_blog.status = "post"');
    //       $this->db->where('tb_blog.id_kategori = "7"');
    //         $this->db->order_by('rand()');

    //     $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
    //     $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
    //    // $this->db->from('tb_blog');
    //     $query=$this->db->get('tb_blog');
    //     return $query->result();
   
    $this->db->select('tb_sub_kategori.id_sub,tb_sub_kategori.nama_sub,tb_sub_kategori.slug_sub,tb_sub_kategori.id_kategori,tb_kategori.nama_kategori');	
    $this->db->join('tb_kategori','tb_sub_kategori.id_kategori=tb_kategori.id_kategori');	
    $this->db->where('tb_kategori.id_kategori = "7"');
    $this->db->from('tb_sub_kategori');
    
    $query=$this->db->get();
    return $query->result();

    }

        //forntend events
        public function getEvent()
    {
      $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
          $this->db->where('tb_blog.status = "post"');
          $this->db->where('tb_blog.id_sub = "10"');
          $this->db->order_by('tb_blog.create_ad', 'DESC');
        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
       // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->result();
    }

            //forntend kursus
        public function getKursus()
    {
      $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
          $this->db->where('tb_blog.status = "post"');
          $this->db->where('tb_blog.id_kategori = "9"');
        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
       // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->result();
    }

    //forntend events
        public function getPeople()
    {
      $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
          $this->db->where('tb_blog.status = "post"');
          $this->db->where('tb_blog.id_kategori = "9"');
        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
       // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->result();
    }
    

    //forntend tentang
        public function getAbout()
    {
      $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
          $this->db->where('tb_blog.status = "post"');
          $this->db->where('tb_blog.id_sub = "5"');
          $this->db->limit(1);
        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
       // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->result();
    }
    

      //forntend berita
        public function getBerita()
    {
      $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
          $this->db->where('tb_blog.status = "post"');
          $this->db->where('tb_blog.id_kategori= "8"');
          $this->db->limit(3);
          $this->db->order_by('tb_blog.create_ad', 'DESC');
        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
       // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->result();
    }


         //forntend berita
         public function getBeritaa()
         {
           $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
               $this->db->where('tb_blog.status = "post"');
               $this->db->where('tb_blog.id_kategori= "8"');
               $this->db->limit(6);
               $this->db->order_by('tb_blog.create_ad', 'DESC');
             $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
             $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
            // $this->db->from('tb_blog');
             $query=$this->db->get('tb_blog');
             return $query->result();
         }


       public function getNew()
    {
      $this->db->select('tb_sub_kategori.nama_sub,tb_sub_kategori.slug_sub,tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
          $this->db->where('tb_blog.status = "post"');
         // $this->db->where('tb_blog.id_kategori= "8"');
          $this->db->limit(6);
           $this->db->order_by('tb_blog.create_ad', 'DESC');
        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
       // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->result();
    }

   //forntend berita
        public function getUnduh()
        {
 
        $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
        $this->db->where('tb_blog.status = "post"');
        // $this->db->where('tb_blog.id_kategori= "11"');
        $this->db->limit(6);
        $this->db->order_by('tb_blog.visit', 'DESC');
        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
        // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->result();
        }

  


    

    public function getPanduan()
    {
      $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
          $this->db->where('tb_blog.status = "post"');
          $this->db->where('tb_blog.id_kategori= "11"');
          $this->db->limit(6);
             $this->db->order_by('tb_blog.create_ad', 'DESC');
        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
       // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->result();
    }

    public function getUnduhALL()
    {
      $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
          $this->db->where('tb_blog.status = "post"');
          $this->db->where('tb_blog.id_kategori= "11"');
       
             $this->db->order_by('tb_blog.create_ad', 'DESC');
        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
       // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->result();
    }


    public function getPanduanALL()
    {
      $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
          $this->db->where('tb_blog.status = "post"');
          $this->db->where('tb_blog.id_kategori= "14"');
       
             $this->db->order_by('tb_blog.create_ad', 'DESC');
        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
       // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->result();
    }



    public function getById($id)
    {
        $this->db->select('tb_blog.id_blog,tb_blog.title,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
        $this->db->where('tb_blog.id_blog',$id);
        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
       // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_blog = uniqid();
        $this->title = $post["title"];
        $this->slug_title =url_title($this->input->post('title'), 'dash', TRUE);
        $this->meta = $post["meta"];
        $this->description = $post["description"];
        $this->id_kategori = $post["id_kategori"];
        $this->id_sub = $post["id_sub"];
        $this->tags = $post["tags"];
        $this->status=$this->status;
       // $this->create_ad=$create_ad;
        $this->image = $this->_uploadImage();
       
           $this->create_ad = date("Y-m-d h:i:s");
        $this->id_user=$this->session->userdata('id_user');
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_blog = $post["id"];
        $this->title = $post["title"];
         $this->slug_title =url_title($this->input->post('title'), 'dash', TRUE);
        $this->meta = $post["meta"];
        $this->description = $post["description"];
        $this->id_kategori = $post["id_kategori"];
        $this->id_sub = $post["id_sub"];
        $this->tags = $post["tags"];
        $this->status=$this->status;
        $this->update_ad=date("Y-m-d h:i:s");
        $this->image = $this->_uploadImage();
       
        $this->id_user=$this->session->userdata('id_user');
        
        
        if ($_FILES["image"]["name"]) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        
        $this->db->update($this->_table, $this, array('id_blog' => $post['id']));
    }

    public function delete($id)
    {
        if($id) {
            $sql = "UPDATE tb_blog SET status ='delete' WHERE id_blog = ?";
            $query = $this->db->query($sql, array($id));
            return ($query === true) ? true : false;           
        }
    }
    
    private function _uploadImage()
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $this->id_blog;
        $config['overwrite']            = TRUE;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $personal = $this->getById($id);
        if ($personal->image != "default.jpg") {
            $filename = explode(".", $personal->image)[0];
            return array_map('unlink', glob(FCPATH."upload/$filename.*"));
        }
    }



    public function set($key=null){         

          
         
        $this->db->select('*');

       
        $this->db->like('title',$key);
        $this->db->or_like('description',$key);
        $this->db->or_like('tags',$key);
        $this->db->or_like('meta',$key);
        $this->db->or_like('status',$key);
        
        $this->db->from('tb_blog');
        $hasil=$this->db->get();
        //return $query->result_array(); 
         if ($hasil->num_rows()>0){
                            return $hasil->result_array();
                        } else {
                            return redirect();
                        }

         
         
        
    }

     public function postBlog($id = null) {
        if($id) {
            $sql = "UPDATE tb_blog SET status ='post' WHERE id_blog = ?";
            $query = $this->db->query($sql, array($id));
            return ($query === true) ? true : false;           
        }
    }

            public function get_news($slug_title = FALSE)
        {
                if ($slug_title === FALSE)
                {       

                        $query = $this->db->get('tb_blog');
                        return $query->result_array();
                }

                $this->db->select('tb_sub_kategori.nama_sub,tb_sub_kategori.slug_sub,tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
                 $this->db->order_by("tb_blog.id_blog", "asc");
               // $this->db->group_by("tb_blog.id_blog");
                      // $this->db->where('tb_comment.status_comment = "0"');
                $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
                $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
               // $this->db->join('tb_comment','tb_blog.id_blog=tb_comment.id_blog','left');
          
            // $this->db->from('tb_blog');
                $query = $this->db->get_where('tb_blog', array('slug_title' => $slug_title,
                                                                'status'=>'post'));
                return $query->row_array();
        }
        
        
            
            
        
        
        
        
                public function get_tg($tags = null)
            {
                
                
                
                $this->db->select('*');
                    
                  
                
                   // $this->db->like('tb_blog.title',$tags);
                    $this->db->or_like('tb_blog.title',$tags);
                    $this->db->or_like('tb_blog.tags',$tags);
                    $this->db->from('tb_blog');
                      $this->db->where("tb_blog.status = 'post'");// 
                    $query=$this->db->get();
                    return $query->result();
                
                    

                
            }

        function get_berita_list($limit, $start){
                $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
                $this->db->where('tb_blog.status = "post"');
                $this->db->where('tb_blog.id_kategori= "8"');

                $this->db->order_by('tb_blog.create_ad', 'DESC');
                $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
                $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
                //$this->db->from('tb_blog');
                    $query = $this->db->get('tb_blog', $limit, $start);
                    return $query;
        }
        
        
          //forntend kategori profile menu
        public function getKusus()
    {
      $this->db->select('tb_blog.id_blog,tb_blog.slug_title,tb_blog.title,tb_blog.status,tb_blog.create_ad,tb_blog.update_ad,tb_blog.description,tb_blog.tags,tb_kategori.nama_kategori,tb_blog.id_kategori,tb_blog.id_sub,tb_sub_kategori.nama_sub,tb_blog.image,tb_blog.meta');
          $this->db->where('tb_blog.status = "post"');
          $this->db->where('tb_blog.id_kategori = "12"');
            $this->db->order_by('rand()');

        $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_blog.id_kategori');
        $this->db->join('tb_sub_kategori','tb_sub_kategori.id_sub=tb_blog.id_sub');
       // $this->db->from('tb_blog');
        $query=$this->db->get('tb_blog');
        return $query->result();
    }

    public function addcomment()
        {
            $this->load->helper('url');
            $data = array('nama_comment' 		=>	$this->input->post('nama_comment',true) ,
                          'email_comment'       => $this->input->post('email_comment',true),
                          'description_comment'  => $this->input->post('description_comment',true),
                          'id_blog'             => $this->input->post('id_blog',true),
                          'status_comment'      => $this->status_comment="0");

            return $this->db->insert('tb_comment',$data);
           
        }

        function update_counter($slug_title)
        {
       
             //return current article views
            $this->db->where('slug_title', urldecode($slug_title));
                 $this->db->where('tb_blog.status = "post"');
            $this->db->select('visit'); $count = $this->db->get('tb_blog')->row();
            // then increase by one
            if (empty($count)) {
               redirect(404);
            }
            $this->db->where('slug_title', urldecode($slug_title));
                 $this->db->where('tb_blog.status = "post"');
            $this->db->set('visit', ($count->visit + 1));
            $this->db->update('tb_blog');   
              
           
            
        }
        
             public function getComment()
                {
                  $this->db->select('tb_comment.id_blog,tb_comment.id_comment,tb_comment.nama_comment,tb_comment.email_comment,tb_comment.description_comment,tb_comment.status_comment,tb_comment.created_comment, tb_blog.title,tb_blog.slug_title');
                     $this->db->join('tb_blog','tb_blog.id_blog=tb_comment.id_blog');
                    $query=$this->db->get('tb_comment');
                    return $query->result();
                }
                
                
           public function getCo()
                {
                  $this->db->select('tb_comment.id_blog,tb_comment.id_comment,tb_comment.nama_comment,tb_comment.email_comment,tb_comment.description_comment,tb_comment.status_comment,tb_comment.created_comment, tb_blog.title');
                      $this->db->where('tb_comment.status_comment = "1"');
                     $this->db->join('tb_blog','tb_blog.id_blog=tb_comment.id_blog');
                    $query=$this->db->get('tb_comment');
                    return $query->result();
                }
                
                
            public function getId($id=null){
            if ($id) {
            
            
            $this->db->where('tb_comment.id_comment',$id);
            $this->db->select('*');		
            $this->db->from('tb_comment');
            $query=$this->db->get();
            return $query->row_array();
            if ($query===true) {
            return true;
            }else{
            return false;
            }
            }
            }

        public function updateComment($id=null){
        		if ($id) {
        	
        			$data = array('status_comment' 		=> $this->input->post('status_comment',true));
        			$this->db->where('id_comment', $id);
        			$sql=$this->db->update('tb_comment',$data);
        			if($sql===true){
        				return true;
        
        			}else{
        				return false;
        			}
        		}
        	}

}
