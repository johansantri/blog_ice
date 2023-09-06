 <header class="app-header"><a class="app-header__logo" href="<?php echo base_url()?>dasbord"><img src="https://icei.ac.id/static/comprehensive/images/logo.3a535928f907.png" style="width: 150px;" alt=""></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
         
        </li>
       
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="<?php echo base_url()?>dasbord" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
      
            <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i>  <?php echo $this->session->userdata('email')?></a></li>
            <li><a class="dropdown-item" href="<?php echo base_url()?>keluar"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>