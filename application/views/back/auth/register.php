<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
     <link href="<?php echo base_url()?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SigUp - Document Code</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1></h1>
         <?php
         $arr = $this->session->flashdata();
          if(!empty($arr['flash_message'])){
              $html = '<div class="bg-danger  flash-message ">';
              $html .= $arr['flash_message'];
              $html .= '</div>';
              echo $html;
          }
      ?>
      </div>
      <div class="login-box">
        <?php
   
   echo form_open('daftar');  ?>
       


          <div class="login-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN UP</h3>
           <div class="row">
            <div class="col">
               <label class="control-label">FIRST NAME</label>
              <input type="text" class="form-control" name="nama_user" placeholder=" " required >
            </div>
           
          </div>
          
          <div class="form-group">
            <br>
             <label class="control-label">EMAIL</label>
            <input class="form-control" type="Email" name="email" placeholder="" required="@">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                
              </div>
              <label>
                  <input type="checkbox" required ><span class="label-text">Trime and condition</span>
                </label>
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN UP</button>
               <a class="btn btn-info btn-block" href="<?php echo base_url()?>">
           <i class="fa fa-home" aria-hidden="true"></i>HOME
 </a>
          </div>
          
        </div>
        <?php echo form_close(); ?>
       
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url()?>assets/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>