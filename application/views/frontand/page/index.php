  
  <style>
.responsive {
  width: 100%;
  height: 110%;
}
</style>
     <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        <div class="rev-slider responsive">
      <div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper " data-alias="news-gallery36" data-source="gallery" >
        <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
        <div id="rev_slider_486_1" class="rev_slider "  data-version="5.3.0.2">
          <ul>  <!-- SLIDE  -->
               <?php foreach ($slide as $key ) {?>
            <li  >
			
              <!-- MAIN IMAGE -->
             
              <a href="<?php echo base_url()?>berita/tags/<?php echo $key->nama_slide;?>">
                <img src="<?php echo base_url()?>upload/slide/<?php echo $key->image;?>"  class="responsive" alt="<?php echo $key->nama_slide;?>" 
                data-bgposition="center center" 
                data-bgfit="cover" 
                data-bgrepeat="no-repeat" 
                data-bgparallax="10" 
                class="rev-slidebg" 
                data-no-retina />
            </a>

            
            
            
            
            
            
            

                   
                
              <!-- LAYER NR. 1 -->
            <!--   <div class="tp-caption tp-shape tp-shapewrapper " 
                id="slide-100-layer-1" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                data-width="full"
                data-height="full"
                data-whitespace="nowrap"
                data-type="shape" 
                data-basealign="slide" 
                data-responsive_offset="off" 
                data-responsive="off"
                data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>  --> 
              <!-- LAYER NR. 2 -->
           <!--    <div class="tp-caption Newspaper-Title   tp-resizeme" 
                id="slide-100-layer-2" 
                data-x="['center','center','center','center']" 
                data-hoffset="['0','0','0','0']" 
                data-y="['top','top','top','top']" 
                data-voffset="['250','250','250','240']" 
                data-fontsize="['50','50','50','30']"
                data-lineheight="['55','55','55','35']"
                data-width="full"
                data-height="none"
                data-whitespace="normal"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                data-textAlign="['center','center','center','center']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[10,10,10,10]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;">
                  <?php echo $key->nama_slide;?>
              </div> -->

              <!-- LAYER NR. 3 -->
            <!--   <div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
                id="slide-100-layer-3" 
                data-x="['center','center','center','center']" 
                data-hoffset="['0','0','0','0']" 
                data-y="['top','top','top','top']" 
                data-voffset="['210','210','210','210']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="text" 
                data-responsive_offset="on"
                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
                 
              </div> -->
              
              <!-- LAYER NR. 3 -->
            <!--   <div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
                id="slide-100-layer-4" 
                data-x="['center','center','center','center']" 
                data-hoffset="['0','0','0','0']" 
                data-y="['top','top','top','top']" 
                data-voffset="['320','320','320','290']" 
                data-width="['800','800','700','420']"
                data-height="['100','100','100','120']"
                data-whitespace="unset"
                data-type="text" 
                data-responsive_offset="on"
                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                data-textAlign="['center','center','center','center']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;">
                   <?php echo $key->deskripsi_slide;?>
              </div> -->
              <!-- LAYER NR. 4 -->
           <!--    <div class="tp-caption Newspaper-Button rev-btn " 
                id="slide-100-layer-5" 
                data-x="['center','center','center','center']" 
                data-hoffset="['90','80','75','90']" 
                data-y="['top','top','top','top']" 
                data-voffset="['400','400','400','420']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="button" 
                data-responsive_offset="on" 
                data-responsive="off"
                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                data-textAlign="['center','center','center','center']"
                data-paddingtop="[12,12,12,12]"
                data-paddingright="[30,35,35,15]"
                data-paddingbottom="[12,12,12,12]"
                data-paddingleft="[30,35,35,15]"
                style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; background-color:var(--primary) !important; border:0; border-radius:30px; margin-right:5px;"> </div> -->
            <!--   <div class="tp-caption Newspaper-Button rev-btn" 
                id="slide-100-layer-6" 
                data-x="['center','center','center','center']" 
                data-hoffset="['-90','-80','-75','-90']" 
                data-y="['top','top','top','top']" 
                data-voffset="['400','400','400','420']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="button" 
                data-responsive_offset="on" 
                data-responsive="off"
                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                data-textAlign="['center','center','center','center']"
                data-paddingtop="[12,12,12,12]"
                data-paddingright="[30,35,35,15]"
                data-paddingbottom="[12,12,12,12]"
                data-paddingleft="[30,35,35,15]"
                style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px;"></div> -->
            </li>
        <?php };?>
           
            <!-- SLIDE  -->
          </ul>
        </div><!-- END REVOLUTION SLIDER -->  
   
      </div>  
    </div>  
        <!-- Main Slider -->
    
    <div class="content-block">
            
      <div class="container">
          <marquee width="100%" direction="left" height="20px" style="text-align: center; ">
              <?php foreach ($berita as $key ) {?>
        <a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>" class="badge badge-info" >&nbsp; &nbsp; #<?php echo $key->title;?></a>
              <?php };?>
        </marquee>
        </div>
   
   
    
        <!-- Our Story ==== -->
      <div class="section-area bg-gray section-sp1 our-story">
        <div class="container">
       
  <div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">Manfaat ICE-Institute</h4>
  <p>ICE-Institute dari berbagai elements.</p>
 
</div>
              
              <div class="row">

              
      
              

              <div class="col-md-4">
              <div class="card border-dark" >
                <div class="card-body">
                  <h5 class="card-title" style="text-align:center;"><i class="fa fa-building-o fa-5x" aria-hidden="true"></i>
              </h5>
                  <h6 class="card-subtitle mb-2 text-muted" style="text-align:center">Pemerintahan</h6>
                  <p class="card-text">Pemerataan kualitas pendidikan tinggi. Mempercepat peningkatan APK. Perluasan akses pendidikan. Akuntabilitas pendidikan tinggi di indonesia. Internationalisasi dan koenktivitas pendidikan tinggi di indonesia.</p>
                
                </div>
              </div>
              </div>


               


              <div class="col-md-4">
              <div class="card border-warning" >
                <div class="card-body">
                  <h5 class="card-title" style="text-align:center;"><i class="fa fa-users fa-5x" aria-hidden="true"></i>
              </h5>
                  <h6 class="card-subtitle mb-2 text-muted" style="text-align:center">Masyarakat</h6>
                  <p class="card-text" >Memiliki akses pendidikan yang lebih murah dan bermutu. Memperoleh peluang untuk belajar sepanjang hayat (upskilling, reskilling, peningkatan karir). Meningkatnya tingkat kepercayaan di pendidikan tinggi.</p>
                
                </div>
              </div>
              </div>

              <div class="col-md-4">
              <div class="card border-success " >
                <div class="card-body">
                  <h5 class="card-title" style="text-align:center;"><i class="fa fa-btc fa-5x" aria-hidden="true"></i>
              </h5>
                  <h6 class="card-subtitle mb-2 text-muted" style="text-align:center">Pengguna Lulusan</h6>
                  <p class="card-text">Pemanfaatan Blockchain tecnology untuk penulusan dalam proses recruitment.</p>
               
                </div>
              </div>
              </div>



              
              </div>

              <div class="row">
             
              <div class="col-md-4">
            
                <div class="card border-danger" >
                <div class="card-body">
                <h5 class="card-title" style="text-align:center;"><i class="fa fa-university fa-5x" aria-hidden="true"></i>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted" style="text-align:center">Perguruan Tinggi Asal</h6>
                <p class="card-text">Mengatasi Keterbatasan sumber daya (SDM, Teknologi, fasilitas). Memungkinkan adanya transfer knowledge antar SDM. Pemerataan Kualitas Pendidikan. Meningkatakan Inovasi Berbasis Kearifan local, memungkinkan terjadinya alih kredit dan pertukaran matakuliah.</p>
              
                </div>
                </div>

              </div>


              <div class="col-md-4">
              <div class="card border-info" >
                <div class="card-body">
                  <h5 class="card-title" style="text-align:center;"><i class="fa fa-home fa-5x" aria-hidden="true"></i>
              </h5>
                  <h6 class="card-subtitle mb-2 text-muted" style="text-align:center">Perguruan Tinggi Penyelengara</h6>
                  <p class="card-text">Perluasan akses. Penjaminan mutu konten. Penyetaraan dan pengakuan mutu. Peningkatan citra perguruan tinggi. Peningkatan kredibilitas perguruan tinggi. Terbukanya peluang kerjasama dengan berbagai pihak. Memanfaatkan fasilitas teknologi maju (learning analitycs blockchain technology untuk ledger). Meningkatkan diseminasi ilmu pengetahuan. Pemerataan kualitas pendidikan</p>
                
                </div>
              </div>
              </div>

              <div class="col-md-4">
              <div class="card border-secondary" >
                <div class="card-body">
                  <h5 class="card-title" style="text-align:center;"><i class="fa fa-user fa-5x" aria-hidden="true"></i>
              </h5>
                  <h6 class="card-subtitle mb-2 text-muted" style="text-align:center">Mahasiswa Peserta</h6>
                  <p class="card-text">Memiliki akses pendidikan bermutu yang lebih luas dan fleksibel. Membangun jejaring. Meningkatkan daya saing mahasiswa, dan kepercayaan diri. Memperluas digital experience dan digital horizon.</p>
                 
                </div>
              </div>
              </div>
        </div>
      </div>
      <!-- Our Story END ==== -->
     
      <!-- Form -->
      <div class="section-area section-sp1 ovpr-dark bg-fix online-cours" style="background-image:url(<?php echo base_url()?>assets/frontand/images/background/bg1.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center text-white">
              <h2>Kuliah Online</h2>
              <h5>Kapan lagi bisa merasakan belajar di kampus impian</h5>
             
            </div>
          </div>
          <div class="mw800 m-auto">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="cours-search-bx m-b30">
                  <div class="icon-box">
                    <h3><i class="ti-user"></i><span class="counter">5</span>K</h3>
                  </div>
                  <span class="cours-search-text">Mahasiswa kuliah online</span>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="cours-search-bx m-b30">
                  <div class="icon-box">
                    <h3><i class="ti-book"></i><span class="counter">300 </span>+</h3>
                  </div>
                  <span class="cours-search-text"> Matakuliah</span>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="cours-search-bx m-b30">
                  <div class="icon-box">
                    <h3><i class="ti-layout-list-post"></i><span class="counter">250 </span>+</h3>
                  </div>
                  <span class="cours-search-text">Dosen Online</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-area section-sp2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center heading-bx">
              <h2 class="title-head m-b0">Kegiatan ICE-I</h2>
              <p class="m-b0">Indonesia Cyber Education Institute</p>
            </div>
          </div>
          <div class="row">
          <div class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30">
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
                    <h4 class="event-title"><a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>"><?php echo $key->title;?></a></h4>
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
      
      <!-- Testimonials -->
      <div class="section-area section-sp2 bg-fix ovbl-dark" style="background-image:url(<?php echo base_url()?>assets/frontand/images/background/bg1.jpg);">
                <div class="container">
          <div class="row">
            <div class="col-md-12 text-white heading-bx left">
              <h2 class="title-head text-uppercase">apa kata <span>mereka</span></h2>
              <p>Tentang ICE-I</p>
            </div>
          </div>
          <div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
            <?php foreach ($people as $key ) {?>
              
            <div class="item">
              <div class="testimonial-bx">
                <div class="testimonial-thumb">
                  <img src="<?php echo base_url()?>upload/<?php echo $key->image;?>" alt="">
                </div>
                <div class="testimonial-info">
                  <h5 class="name"><?php echo $key->title;?></h5>
                  
                </div>
                <div class="testimonial-content">
                  <p><?php echo $key->description;?></p>
                </div>
              </div>
            </div>
          <?php };?>
   
          </div>
        </div>
      </div>
      <!-- Testimonials END -->
      
      <!-- Recent News -->
      <div class="section-area section-sp2">
                <div class="container">
          <div class="row">
            <div class="col-md-12 heading-bx left">
              <h2 class="title-head">Berita <span>Terbaru</span></h2>
              <p>Bacaan Terbaik Untuk Anda Pilih</p>
            </div>
          </div>
          <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">

               <?php foreach ($berita as $key ) {?>
            <div class="item">
              <div class="recent-news">
                <div class="action-box">
                  <img src="<?php echo base_url()?>upload/<?php echo $key->image;?>" alt="" style="max-width:115%; max-height:100%; height:280px">
                </div>
                <div class="info-bx">
                  <ul class="media-post">
                    <li><a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>"><i class="fa fa-calendar"></i><?php echo $key->create_ad;?></a></li>
                    
                  </ul>
                  <h5 class="post-title"><a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>"><?php echo $key->title;?></a></h5>
                  <p><?php echo substr($key->meta, 0,100). '...'?>.</p>
                  <div class="post-extra">
                    <a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>" class="btn-link">Baca Selengkapnya</a>
                  
                  </div>
                </div>
              </div>
            </div>
            <?php };?>

       
          </div>
        </div>
      </div>
      <!-- Recent News End -->
      
         <!-- Popular Courses -->
      <div class="section-area section-sp2 popular-courses-bx">
                <div class="container">
          <div class="row">
            <div class="col-md-12 heading-bx left">
              <h2 class="title-head">Mitra <span>ICE-I</span></h2>
              <p>Kampus mitra yang sudah bergabung bersama Indonesia Cyber Education Institute (ICE-I)</p>
            </div>
          </div>
          <div class="row">
          <div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
            <?php foreach ($partner as $key ) {?>
              
            <div class="item">
              <div class="cours-bx">
                <div class="action-box">
                  <img src="<?php echo base_url()?>upload/<?php echo $key->image; ?>" alt="">
                  <a href="<?php echo base_url()?>home/about/<?php echo $key->slug_title;?>" class="btn">Selengakapnya</a>
                </div>
               
              
              </div>
            </div>
          <?php }; ?>
          
          
         

         
          </div>
          </div>
        </div>
      </div>
      <!-- Popular Courses END -->
      


        </div>
    <!-- contact area END -->
    </div>
    <!-- Content END-->