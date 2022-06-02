<!-- Header Top ==== -->
    <header class="header rs-nav  ">
    
    <div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
          <!-- Header Logo ==== -->
          <div class="menu-logo">
         <a href="https://icei.ac.id/"><img src="<?php echo base_url()?>assets/frontand/images/LOGOICE.png" alt=""></a>
          </div>
          <!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
         





<br>
<br>
<br>
          </button>
          <!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                         
                            
            </div>
                    </div>
          <!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
            <span id="search-remove"><i class="ti-close"></i></span>
                    </div>
          <!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start "  id="menuDropdown">
            <div class="menu-logo">
              <a href="https://icei.ac.id/"><img src="<?php echo base_url()?>assets/frontand/images/LOGOICE.png" alt=""></a>
            </div>
                        <ul class="nav navbar-nav "> 
              <li class=""><a href="https://icei.ac.id/">RUMAH <i class="fa fa-home"></i></a>
               
              </li>
            <li class="add-mega-menu"><a href="javascript:;">PROFIL<i class="fa fa-chevron-down"></i></a>
                <ul class="sub-menu add-menu">
                  <li class="add-menu-left">
                    <h5 class="menu-adv-title">Profil ICE-Institute</h5>
                    <ul>
                      <?php foreach ($profilmenu as $key ) {?>
                      
                      <li><a href="<?php echo base_url()?>profile/<?php echo $key->slug_title;?>"><?php echo $key->title;?></a></li>
                     
                    <?php };?>
                    </ul>
                  </li>
                  <li class="add-menu-right">
                    <img src="<?php echo base_url()?>assets/frontand/images/LOGOICE.png" alt=""/>
                  </li>
                </ul>
              </li>
              <li class="add-mega-menu"><a href="javascript:;">KEGIATAN<i class="fa fa-chevron-down"></i></a>
                <ul class="sub-menu add-menu">
                  <li class="add-menu-left">
                    <h5 class="menu-adv-title">Kegiatan ICE-Institute</h5>
                    <ul>
                      <?php foreach ($kegiatanmenu as $key ) {?>
                      
                      <li><a href="<?php echo base_url()?>kegiatan/<?php echo $key->slug_title;?>"><?php echo $key->title;?></a></li>
                     
                    <?php };?>
                     
                    </ul>
                  </li>
                  <li class="add-menu-right">
                    <img src="<?php echo base_url()?>upload/ICE.png" alt=""/>
                  </li>
                </ul>
              </li>
              <li><a href="<?php echo base_url()?>berita">BERITA <i class="fa fa-newspaper-o"></i></a>
               <li><a href="<?php echo base_url()?>unduh">UNDUH <i class="fa fa-download"></i></a>
                <li><a href="http://sl.ut.ac.id/beasiswa-merdeka-belajar" target=“_blank”>DAFTAR <i class="fa fa-registered"></i></a>
              <li><a href="https://info-icei.ut.ac.id/unduh/panduan-pendaftaran-beasiswa" target=“_blank”>PANDUAN <i class="fa fa-registered"></i></a>
               <li><a href="https://info-icei.ut.ac.id/berita/pakta-integritas" target=“_blank”>PAKTA INTEGRITAS <i class="fa fa-registered"></i></a>
              </li>
              <li class="nav-dashboard"><?php foreach ($about as $key) {?>
                <a href="<?php echo base_url()?>home/about/<?php echo $key->slug_title?>">TENTANG <i class="fa fa-info-circle"></i></a>
              <?php };?>
              </li>

               <li class="nav-dashboard"><?php foreach ($about as $key) {?>
                <a href="<?php echo base_url()?>home/faq">Tanya Jawab <i class="fa fa-question"></i></a>
              <?php };?>
              </li>


            </ul>
           
           
                    </div>
          <!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header Top END ==== -->