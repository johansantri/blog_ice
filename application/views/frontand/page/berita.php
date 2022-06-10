    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                   
        </div>
            </div>
        </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
      <div class="container">
        <ul class="list-inline">
          <li><a href="<?php echo base_url()?>">Home</a></li>
          <li>Update berita</li>
        </ul>
      </div>
    </div>

    <div class="container" >
      <div class="row">
        <div class="col-md-6">

        <small style="color:red">Info</small>
        <h1 class="alert-heading" style="color:red">Berita</h1>
        <style>
        .warna {
          color: red;
        }
        </style>
        </div>
              <div class="col-md-6">
              <small style="color:red;  font-weight: bold;">ICE-Insitute in Members.</small>
              <br>
              <br>
              
              <div class="row">
                <div class="col-sm-4">
                <i class="fa fa-user fa-lg warna" aria-hidden="true"> 5 K</i><br>
                <small>Mahasiswa</small>
                </div>
                <div class="col-sm-4">
                <i class="fa fa-book fa-lg warna" aria-hidden="true"> 300 +</i><br>
                <small>Matakuliah</small>
                </div>
                <div class="col-sm-4">
                <i class="fa fa-users fa-lg warna" aria-hidden="true"> 250 +</i><br>
                <small>Dosen</small>  
              </div>
              </div>
              
            </div>
        </div>
    </div>
    <!-- Breadcrumb row END -->
        <!-- contact area -->
         <div class="content-block">
      <div class="section-area section-sp1">
        <div class="container">
          <div class="row">
            <!-- Left part start -->
           
            <div class="col-lg-8">
            
            <div class="row">
                <!--card--> 
                <?php foreach ($berita as $key ) {?>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
               <small> <i class="fa fa-calendar"></i> &nbsp; <?php echo $key->create_ad;?></small>
               
                  <p class="card-title"><?php echo substr($key->title, 0,50). '...'?></p>
                  <a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>"><img style="border-radius: 5%;" src="<?php echo base_url()?>upload/<?php echo $key->image; ?>" alt=""></a>
                <br>
                  <a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>" class="btn-link">Baca Selengkapnya</a>
                </div>
                
              </div>
            </div>
            <?php };?>


             <!--end card--> 
            </div>
           
        

            <br>
            <br>
            <br>


            <div class="container" >
      <div class="row">
        <div class="col-md-6">

        <small style="color:red">Kegiatan</small>
        <h1 class="alert-heading" style="color:red">ICE Institute</h1>
        <style>
        .warna {
          color: red;
        }
        </style>
        </div>
             
        <small style="color:black;  font-weight: bold;">ICE Institute sebagai marketplace matakuliah daring menjadi wadah para pakar, peneliti, pengajar dan pelajar untuk berbagi wawasan sesuai dengan keahlian mereka untuk disampaikan kepada kepada khalayak umum.

Mengusung tema MERDEKA BELAJAR UNTUK SEMUA, webinar yang dikemas dalam Cyber Education Forum (CEF) menjadi agenda rutin dari ICE Institute yang diselenggarakan setiap bulannya.

Webinar terbuka untuk umum, tidak dipungut biaya dan setiap peserta berhak atas sertifikat di setiap penyelenggaraannya. </small>





<div class="section-area section-sp2">
        <div class="container">
         
          <div class="row">
          <div class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-8 p-lr0  m-b30">
            <?php foreach ($event as $key ) {?>
            
            <div class="item">
              <div class="event-bx">
                <div class="action-box">
                  <img src="<?php echo base_url()?>upload/<?php echo $key->image;?>" alt="">
                </div>
                <div class="info-bx d-flex">
                  <div>
                 
                  </div>
                  <div class="event-info">
                    <p ><a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>"><?php echo $key->title;?></a></p>
                    <ul class="media-post">
                      
                  
                    </ul>
                    
                  </div>
                </div>
              </div>
            </div>
          <?php };?>
         
           
          </div>
          </div>
          <div class="text-center">
           
          </div>
        </div>
      </div>


        </div>
    </div>


  
            </div>



            

     
            <!-- Left part END -->
            <!-- Side bar start -->
            <div class="col-lg-4 sticky-top">
              <aside class="side-bar sticky-top">
                <div class="widget">
                  <h6 class="widget-title">Search</h6>
                  <div class="search-bx style-1">
                    <form role="search" method="post">
                      <div class="input-group">
                        <input name="text" class="form-control" placeholder="Enter your keywords..." type="text">
                        <span class="input-group-btn">
                          <button type="submit" class="fa fa-search text-primary"></button>
                        </span> 
                      </div>
                    </form>
                  </div>
                </div>
               <div class="widget recent-posts-entry">
                  <h6 class="widget-title">Recent Posts</h6>
                  <div class="widget-post-bx">

                     <?php foreach ($unduh as $key ) {?>

                    <div class="widget-post clearfix">
                      <div class="ttr-post-media"> <img src="<?php echo base_url()?>upload/<?php echo $key->image;?>" width="200" height="143" alt=""> </div>
                      <div class="ttr-post-info">
                        <div class="ttr-post-header">
                          <h6 class="post-title"><a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>"><?php echo $key->title;?>.</a></h6>
                        </div>
                        <ul class="media-post">
                          <li><a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>"><i class="fa fa-calendar"></i><?php echo $key->create_ad;?></a></li>
                      
                        </ul>
                      </div>
                    </div>

                  <?php };?>
        
            
                  </div>
                </div>
                <div class="widget widget-newslatter">
                  <h6 class="widget-title">Newsletter</h6>
                  <div class="news-box">
                    <p>Enter your e-mail and subscribe to our newsletter.</p>
                    <form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
                      <div class="ajax-message"></div>
                      <div class="input-group">
                        <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address"/>
                        <button name="submit" value="Submit" type="submit" class="btn black radius-no">
                          <i class="fa fa-paper-plane-o"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                
             
              </aside>
            </div>
            <!-- Side bar END -->
          </div>
        </div>
      </div>
        </div>
    </div>
    <!-- Content END-->