<style>
    .float-layout {
  padding: 5px 5px;
  float: left;
  width: 100%;
  height: auto;
  box-sizing: border-box;
  margin: 0;
}

.card-container {
  overflow: hidden;
}

.card {
  background-color: #fff2f2;
  color: black;
  min-height: 100%; /*replace this it in width: 100%*/
  width: 100%;
  float: right;
}

.card-title {
  font-size: 20px;
  padding: 10px;
  text-align: left;
  font-weight: bold;
  
}

.card-desc {
  padding: 10px;
  text-align: left;
  font-size: 18px;
}

/*add this it*/
.card-image {
  display: flex;
}
/*-------------*/

div.card-image img {
  width: 25%;
  height: 25%;
}

/* Phone Devices Query */
@media only screen and (max-width: 37.5em) {
  div.card-image img {
    width: 100%;
    height: auto;
  }
  
  /*add this it*/
  .card-image {
     flex-direction: column;
  }
  /*----------------------*/

  .card {
    width: 100%;
    margin-top: -4px;
  }
  
  .top-left {
 /*position: absolute;*/
 /* bottom: 8px;*/
 /* right: 16px;*/
  
}
}
</style>
 <p hidden id="apa"><?php echo base_url()?>cari/</p>
            <!-- Hamburger -->
            <div onclick="toggleNavbar()" id="hamburger" class="fixed flex flex-col items-end gap-y-1 top-4 cursor-pointer nav-hidden right-4 z-30 w-9 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </div>
            <!-- End of Hamburger -->
        </div>
    </nav>
    <div class="pt-12 lg:pt-16">
        <div class="mb-5 lg:mb-8 my-8 hero-wrapper">
        
         </div>
     
            </div>
        </div>

    


      
      
        <div class="container px-5 mx-auto lg:px-20 mt-10 lg:mt-28">
          


        <?php if ($search_result) : ?>
			<div >
				<hr>
				<?php foreach ($search_result as $article) : ?>

                  



                    <div class="card-container">
                    <div class="float-layout">
                        <div class="card-image" style="margin: 20px 0px">
                        <img src="<?= site_url('/upload/' . $article->image) ?>" alt="<?= html_escape($article->title) ?>">
                        <div class="top-left" style=" position: absolute; background-color: #FFFC33; color:#5825F9;margin: 3px;padding: 0px 5px;"><?= html_escape($article->nama_sub) ?></div>
                        <div class="card">
                            <div class="card-title"><a href="<?= site_url('/' . $article->slug_title) ?>"><?= html_escape($article->title) ?></a></div>
                            <div class="card-desc">
                            <?= strip_tags(substr($article->meta, 0, 200)) ?>
                            </div>
                      
                        </div>
                        </div>
                    </div>
                    </div>
                    <hr>













				<?php endforeach ?>
			</div>
		<?php else : ?>
			<?php if (empty($search_result)) : ?>
				<div style="height: 400px;">
					
					<img src="<?php echo base_url()?>assets/new/images/LOGOICE.png">
				</div>
			<?php endif ?>
		<?php endif ?>

<br>
                  
                 




<br>
                
                
             

        
        </div>

       


        