 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo base_url()?>assets/Logo ICE-I.png" style="width: 50px;" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">helo: <?php echo $this->session->userdata('nama_user')?></p>
          <p class="app-sidebar__user-designation">---</p>
        </div>
      </div>
      <ul class="app-menu">
          
          
            

    <?php
$siapa=$this->session->userdata['level'];

switch ($siapa) {
  case $siapa ==='admin': ?>
          <li><a class="app-menu__item" href="<?php echo base_url()?>log"><i class="app-menu__icon fa fa-sticky-note-o"></i><span class="app-menu__label">Logbook</span></a></li>
       
          
  <?php  break;
  case $siapa==='super': ?>
            
             <li><a class="app-menu__item active" href="<?php echo base_url()?>dasbord"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
       
    
             <li class="treeview"><a class="app-menu__item" href="<?php echo base_url()?>dasbord" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Master Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo base_url()?>kategori"><i class="app-menu__icon fa fa-edit"></i> Kategori</a></li>
            <li><a class="treeview-item" href="<?php echo base_url()?>sub"  rel="noopener"><i class="app-menu__icon fa fa-edit"></i> Sub Kategori</a></li>
           
            <li><a class="treeview-item" href="<?php echo base_url()?>slide"><i class="app-menu__icon fa fa-edit"></i> Slide</a></li>
              <li><a class="treeview-item" href="<?php echo base_url()?>komentar"><i class="app-menu__icon fa fa-edit"></i> Komentar</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="<?php echo base_url()?>blog"><i class="app-menu__icon fa fa-sticky-note-o"></i><span class="app-menu__label">Posting</span></a></li>
            
            
         
    <?php break;
  case $siapa==='sultan': ?>
   
           <li><a class="app-menu__item" href="<?php echo base_url()?>log_all"><i class="app-menu__icon fa fa-sticky-note-o"></i><span class="app-menu__label">logs all team</span></a></li>
               <li><a class="app-menu__item" href="<?php echo base_url()?>log_all/saya"><i class="app-menu__icon fa fa-sticky-note-o"></i><span class="app-menu__label">my log</span></a></li>
           
           
        
  <?php  break;
  default:?>
     <h1>member baru, silahkan lapor</h1>
<?php }
?>
          
          
          
          
          
          
            
       
         
       
       
       
        
    
   
    
    
    
   
    
    
         
    
  
    
    
    
    
    
    
    
    
    
      </ul>
    </aside>