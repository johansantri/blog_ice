
	


	   <div class="page-content">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(<?php echo base_url()?>assets/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white"></h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="<?php echo base_url()?>">Rumah</a></li>
					<li><?php echo $slug['title'];?></li>
				</ul>
			</div>
		</div>
		<!-- Page Heading Box END ==== -->
		<!-- Page Content Box ==== -->
		<div class="content-block">
            <!-- About Us ==== -->
			
			<!-- About Us END ==== -->
            <!-- Our Story ==== -->
			<div class="section-area bg-gray section-sp1 our-story">
				<div class="container">
					<div class="row align-items-center d-flex">
						
						
						<div class="col-md-12 heading-bx">
							<h2 class="m-b10"><?php echo $slug['title'];?></h2>
						
							<p><?php echo $slug['description'];?></p>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Our Story END ==== -->

			<!-- About Content ==== -->
			<div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center" style="background-image:url(assets/images/background/bg1.jpg);">
                <div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="join-content-bx text-white">
								<h2>Pelajari Keterampilan baru <br/> Dengan berbagai waktu</h2>
								<h4><span class="counter">57,000 </span> Kursus Online </h4>
								<p>Untuk mendapatkan pengalaman baru, ilmu baru dan sesuai dengan ke butuhan anda saat ini, segera bergabung bersama Indonesia Cyber Eduction Institute (ICE-I).</p>
								<a href="#" class="btn button-md">Bergabung Sekarang</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Content END ==== -->
			<!-- Testimonials ==== -->
			<div class="section-area section-sp2">
				<div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
							   <h2 class="title-head text-uppercase">Apa Kata Mereka Tentang <span>ICE-I</span></h2>
              <p>ICE-I itu adalah</p>
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
			<!-- Testimonials END ==== -->
		</div>
		<!-- Page Content Box END ==== -->
    </div>
