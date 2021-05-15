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
                    <li><a href="<?php echo base_url()?>bertia/berita_read/<?php echo $key->slug_title;?>"><i class="fa fa-calendar"></i><?php echo $key->create_ad;?></a></li>
                    <li><a href="#"><i class="fa fa-user"></i>By William</a></li>
                  </ul>
                  <h5 class="post-title"><a href="<?php echo base_url()?>berita/berita_read/<?php echo $key->slug_title;?>"><?php echo $key->title;?>.</a></h5>
                  <p><?php echo $key->meta;?></p>
                  <div class="post-extra">
                    <a href="<?php echo base_url()?>berita/berita_read/<?php echo $key->slug_title;?>" class="btn-link">Baca Selengkapnya</a>
                   
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
                    <div class="widget-post clearfix">
                      <div class="ttr-post-media"> <img src="assets/images/blog/recent-blog/pic1.jpg" width="200" height="143" alt=""> </div>
                      <div class="ttr-post-info">
                        <div class="ttr-post-header">
                          <h6 class="post-title"><a href="blog-details.html">This Story Behind Education Will Haunt You Forever.</a></h6>
                        </div>
                        <ul class="media-post">
                          <li><a href="#"><i class="fa fa-calendar"></i>Oct 23 2019</a></li>
                          <li><a href="#"><i class="fa fa-comments-o"></i>15 Comment</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="widget-post clearfix">
                      <div class="ttr-post-media"> <img src="assets/images/blog/recent-blog/pic2.jpg" width="200" height="160" alt=""> </div>
                      <div class="ttr-post-info">
                        <div class="ttr-post-header">
                          <h6 class="post-title"><a href="blog-details.html">What Will Education Be Like In The Next 50 Years?</a></h6>
                        </div>
                        <ul class="media-post">
                          <li><a href="#"><i class="fa fa-calendar"></i>May 14 2019</a></li>
                          <li><a href="#"><i class="fa fa-comments-o"></i>23 Comment</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="widget-post clearfix">
                      <div class="ttr-post-media"> <img src="assets/images/blog/recent-blog/pic3.jpg" width="200" height="160" alt=""> </div>
                      <div class="ttr-post-info">
                        <div class="ttr-post-header">
                          <h6 class="post-title"><a href="blog-details.html">Eliminate Your Fears And Doubts About Education.</a></h6>
                        </div>
                        <ul class="media-post">
                          <li><a href="#"><i class="fa fa-calendar"></i>June 12 2019</a></li>
                          <li><a href="#"><i class="fa fa-comments-o"></i>27 Comment</a></li>
                        </ul>
                      </div>
                    </div>
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
                <div class="widget widget_tag_cloud">
                  <h6 class="widget-title">Tags</h6>
                  <div class="tagcloud"> 
                    <a href="#">Design</a> 
                    <a href="#">User interface</a> 
                    <a href="#">SEO</a> 
                    <a href="#">WordPress</a> 
                    <a href="#">Development</a> 
                    <a href="#">Joomla</a> 
                    <a href="#">Design</a> 
                    <a href="#">User interface</a> 
                    <a href="#">SEO</a> 
                    <a href="#">WordPress</a> 
                    <a href="#">Development</a> 
                    <a href="#">Joomla</a> 
                    <a href="#">Design</a> 
                    <a href="#">User interface</a> 
                    <a href="#">SEO</a> 
                    <a href="#">WordPress</a> 
                    <a href="#">Development</a> 
                    <a href="#">Joomla</a> 
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