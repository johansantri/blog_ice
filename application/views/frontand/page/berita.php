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
    <!-- Breadcrumb row END -->
        <!-- contact area -->
         <div class="content-block">
      <div class="section-area section-sp1">
        <div class="container">
          <div class="row">
            <!-- Left part start -->
            <div class="col-lg-8">
              <?php foreach ($berita as $key ) {?>
              <div class="blog-post blog-md clearfix">
                <div class="ttr-post-media"> 
                  <a href="#"><img src="<?php echo base_url()?>upload/<?php echo $key->image; ?>" alt=""></a> 
                </div>
                <div class="ttr-post-info">
                  <ul class="media-post">
                    <li><a href="<?php echo base_url()?>bertia/<?php echo $key->slug_title;?>"><i class="fa fa-calendar"></i><?php echo $key->create_ad;?></a></li>
                    <li><a href="https://icei.ac.id/"><i class="fa fa-user"></i>By ICE-I</a></li>
                  </ul>
                  <h5 class="post-title"><a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>"><?php echo $key->title;?>.</a></h5>
                  <p><?php echo $key->meta;?></p>
                  <div class="post-extra">
                    <a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>" class="btn-link">Baca Selengkapnya</a>
                   
                  </div>
                </div>
              </div>
                <?php };?>

           
        
           
  
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
                <div class="widget widget_gallery gallery-grid-4">
                  <h6 class="widget-title">Our Gallery</h6>
                  <ul>
                    <li><div><a href="#"><img src="assets/images/gallery/pic2.jpg" alt=""></a></div></li>
                    <li><div><a href="#"><img src="assets/images/gallery/pic1.jpg" alt=""></a></div></li>
                    <li><div><a href="#"><img src="assets/images/gallery/pic5.jpg" alt=""></a></div></li>
                    <li><div><a href="#"><img src="assets/images/gallery/pic7.jpg" alt=""></a></div></li>
                    <li><div><a href="#"><img src="assets/images/gallery/pic8.jpg" alt=""></a></div></li>
                    <li><div><a href="#"><img src="assets/images/gallery/pic9.jpg" alt=""></a></div></li>
                    <li><div><a href="#"><img src="assets/images/gallery/pic3.jpg" alt=""></a></div></li>
                    <li><div><a href="#"><img src="assets/images/gallery/pic4.jpg" alt=""></a></div></li>
                  </ul>
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