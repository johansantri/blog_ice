<!-- Header Top ==== -->
    <header class="header rs-nav header-transparent ">
      <div class="top-bar">
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="topbar-left">
          
          </div>
          <div class="topbar-right">
            <ul>
              <li>
               
                 
                 <style type="text/css">
                   .goog-te-banner-frame.skiptranslate {
    display: none !important;
    } 
body {
    top: 0px !important; 
    }
                 </style>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
          <!-- Header Logo ==== -->
          <div class="menu-logo">
            <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/frontand/images/LOGOICE.png" alt=""></a>
          </div>
          <!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ca,da,de,el,en,es,fr,it,ja,ko,nl,pl,pt,ru,sv,tl,id', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<style>
div#google_translate_element div.goog-te-gadget-simple{background-color:#ffffff;}
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span{color:red}
    
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:hover{color:#ffffff}

</style>


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
              <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/frontand/images/LOGOICE.png" alt=""></a>
            </div>
                        <ul class="nav navbar-nav "> 
              <li class="active"><a href="<?php echo base_url()?>">RUMAH <i class="fa fa-home"></i></a>
               
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
                      
                      <li><a href="<?php echo base_url()?>kegiatan/kegiatan_read/<?php echo $key->slug_title;?>"><?php echo $key->title;?></a></li>
                     
                    <?php };?>
                     
                    </ul>
                  </li>
                  <li class="add-menu-right">
                    <img src="<?php echo base_url()?>assets/frontand/images/adv/adv.jpg" alt=""/>
                  </li>
                </ul>
              </li>
              <li><a href="<?php echo base_url()?>berita">BERITA <i class="fa fa-newspaper-o"></i></a>
             
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
           
            <div class="nav-social-link">
              <a href="javascript:;"><i class="fa fa-facebook"></i></a>
              <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
              <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
            <a href="<?php echo base_url()?>masuk"><i class="fa fa-sign-in"></i></a>
            <a href="<?php echo base_url()?>daftar"><i class="fa fa-external-link"></i></a>
            <div id="google_translate_element" ></div>

            </div>
                    </div>
          <!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header Top END ==== -->