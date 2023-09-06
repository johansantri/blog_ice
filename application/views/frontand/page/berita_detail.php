
            <!-- Hamburger -->
            <div onclick="toggleNavbar()" id="hamburger" class="fixed flex flex-col items-end gap-y-1 top-4 cursor-pointer nav-hidden right-4 z-30 w-9 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </div>
            <!-- End of Hamburger -->
        </div>
    </nav>
    
    
    <style>
    *, *::before, *::after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}



.share-container {
  border-radius: 15px;
  display: flex;
  padding-right: 0;
  text-align: center;
  transition: width 0.5s;
  width: 80px;
  background-color: #eeeeee;
}

.share-container.active {
  width: 100%;
}

.share-btn {
  width: 90px;
  padding: 5px;
  font-size: 11px;
  font-weight: 800;
  color: #f50a0a;
  border-radius: 15px;
  background-color: #eeeeee;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.share-btn:hover {
  color: #343a40;
  cursor: pointer;
}

.share-btn.active {
  color: #ffffff;
  background-color: #dc3545;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  padding: 5px 5px 5px 12px;
}

.share-btn.active:hover {
  background-color: #cf2838;
}

.share-url {
  width: 0;
  text-align: center;
  overflow: hidden;
  white-space: nowrap;
  font-size: 10px;
  color: #eeeeee;
  transition: all 0.2s;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.share-url.active {
  width: 50%;
  color: #343a40;
  padding: 6px;
}

/*fade*/
.animate {
  opacity: 0;
  transition: all 1s;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animate.active {
  opacity: 1;
  transform: translateX(-50%) translateY(-50%);
}

.slide-in-down {
  transform: translateY(-100%) translateX(-50%);
}

/*notification*/
.notification-button {
  position: fixed;
  top: 100px;
  left: 50%;
  padding: 10px 20px;
  background: #343a40;
  color: #eeeeee;
  border-radius: 5px;
  font-size: 14px;
  font-weight: 800;
  box-shadow: 0 0 14px rgba(0, 0, 0, 0.05);
}
</style>
    
    
    
    <div class="pt-12">
        <div class="container px-5 lg:px-20 mx-auto mt-10 lg:mt-12 lg:mt-16">
            <div class="w-full w-full self-start">
                <h4 class="text-red-primary font-darker-grotesque text-xl"><a href="<?php echo base_url()?>"> Info</a> </h4> 
                <h3 class="text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl"> <a href="<?php echo base_url()?>tags/<?php echo strtolower ($slug['slug_sub']);?>" target="_blank"><?php echo $slug['nama_sub'];?></a> </h3>
            </div>
            <div class=" w-full">
                
          <!--<div class="mb-5 lg:mb-8 my-8 hero-wrapper ">
                <div class="hero-slide h-40 lg:h-[50vh] rounded-[17px] lg:rounded-[25px] bg-cover mx-4 w-[92%]" alt="<?php echo $slug['title'];?>" style="background-size: 100% 100%; display:block; background-image: url('<?php echo base_url()?>upload/<?php echo $slug['image']; ?>') "></div>
            </div>-->
            </div>
            <hr>
        </div>

        <div class="container px-5 mx-auto lg:px-20 mt-6 lg:mt-12">
            <div class="flex flex-col lg:flex-row gap-x-20">
                <div class="w-full lg:w-fit">
                    <div class="relative">
                        <div class="flex justify-between">
                            <span class="font-darker-grotesque"><?php echo $slug['create_ad'];?></span>
                            <span class="font-darker-grotesque">oleh <span class="font-bold">admin</span></span>
                        </div>
                        <h1 class="font-darker-grotesque text-4xl text-red-primary font-bold mt-4 lg:mt-12"><?php echo $slug['title'];?></h1>
                          <p hidden id="apa"><?php echo base_url()?><?php echo $slug['slug_title'];?></p>

                        <div class="flex items-center justify-between mt-8 lg:mt-24">
                            <ul class="flex items-center gap-x-4 lg:gap-x-5 mt-3">
                                <li>         
                                <!--button share -->
                                <div class="animate slide-in-down notification-button">
                                <i class="fa fa-files-o"></i> Link Copied to Clipboard
                                </div>

                                <div class="container">
                                <div class="share-container">
                                <div class="share-btn btn-danger">Share</div>
                                <div contenteditable="true" class="share-url"></div>
                                </div>
                                </div>

                                <!--end-->
                                </li>
                                
                            </ul>
                            <ul class="flex items-center gap-x-4">
                                <li><img class="h-4" src="<?php echo base_url()?>assets/new/images/bookmart-icon.png" alt="ice institute"></li>
                                <li><img class="h-4" src="<?php echo base_url()?>/assets/new/images/flag-icon.png" alt="ice institute"></li>
                            </ul>
                        </div>
                        <div class="-mt-3 font-darker-grotesque" >
                            <div style="overflow-x:auto;">
                            <p class="mt-8"><?php echo $slug['description'];?>.</p>
                         
                            <style>
                              iframe { width: 100%; height: 400px; }
                                 .tags {
  list-style: none;
  margin: 0;
  overflow: hidden; 
  padding: 0;
}

.tags li {
  float: left; 
}

.tag {
  background: #eee;
  border-radius: 3px 0 0 3px;
  color: #999;
  display: inline-block;
  height: 26px;
  line-height: 26px;
  padding: 0 20px 0 23px;
  position: relative;
  margin: 0 10px 10px 0;
  text-decoration: none;
  -webkit-transition: color 0.2s;
}

.tag::before {
  background: #fff;
  border-radius: 10px;
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
  content: '';
  height: 6px;
  left: 10px;
  position: absolute;
  width: 6px;
  top: 10px;
}

.tag::after {
  background: #fff;
  border-bottom: 13px solid transparent;
  border-left: 10px solid #eee;
  border-top: 13px solid transparent;
  content: '';
  position: absolute;
  right: 0;
  top: 0;
}

.tag:hover {
  background-color: crimson;
  color: white;
}

.tag:hover::after {
   border-left-color: crimson; 
   
}

                         </style>
                            <hr class="mt-12 lg:mt-24">
                            &nbsp;
                             <!-- <a href="#"><?php echo $slug['tags'];?></a>  -->
 <ul class="tags">
                  <?php
                        $str = $slug['tags'];
                        $people= (explode(",",$str));
                        for($i = 0; $i < count($people); ++$i) {?>
                
                  
               
                       
  <li><a href="tags/<?php 
            
            $asa= explode(" ",$people[$i]);

$satu = implode("-",$asa);
$ye= strtolower($satu);
echo ($ye);
            
            ?> " class="tag"><?php echo  $people[$i]?></a></li>


           <?php }   ?>   
           </ul>
                         </div>
                            <div class="bg-gray-50 rounded-2xl mt-10 py-4 px-4 lg:px-12">
                                <h4 class="font-bold text-red-primary text-xl font-darker-grotesque">Beri Komentar</h4>
                                <?php echo validation_errors(); ?>
                               
                                <form id="form-id">
                                <input type="hidden" name="id_blog"  value="<?php echo $slug['id_blog']?>">
                                <input required  type="text" name="nama_comment"   placeholder="name" style="box-shadow: inset 0px 1px 2px rgba(0, 0, 0, .25);" class="h-10 mt-4  p-3 focus:outline-none font-darker-grotesque placeholder:font-darker-grotesque rounded-sm">
                                <input required  type="email" name="email_comment"  placeholder="email" style="box-shadow: inset 0px 1px 2px rgba(0, 0, 0, .25);" class="h-10 mt-4  p-3 focus:outline-none font-darker-grotesque placeholder:font-darker-grotesque rounded-sm">                               
                                <textarea required  name="description_comment"  style="box-shadow: inset 0px 1px 2px rgba(0, 0, 0, .25);" class="h-36 mt-4 w-full p-3 focus:outline-none font-darker-grotesque placeholder:font-darker-grotesque rounded-xl" placeholder="Tulis tanggapan anda..." cols="30" rows="10"></textarea>
                                <input  type="submit" name="submit" id="oww" value="kirim" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, .25);" class="mt-4 rounded-xl bg-red-primary text-white font-bold px-10 py-2" id="ok">
                             
                                
                               
                               </form>
                                 <small>Berkomentarlah secara bijaksana dan bertanggung jawab. Komentar sepenuhnya menjadi tanggung jawab komentator seperti diatur dalam UU ITE</small>
                            </div>

                            <div class="mt-10">
                                <div class="flex items-center justify-between">
                                   
                                   
                                </div>
                                <hr>
                                <div>
                                    
                                    <?php foreach ($comment as $person): ?>
                                             
                                             
                                    <?php            
                                    if ($person->id_blog === $slug['id_blog']) {?>
                                    
                                    
                                    
                                    
                                    
                                        <div class="flex items-start gap-x-3 mt-12">
                                            <div class="w-10/12 flex gap-x-5 items-start">
                                   
                                                <div>
                                                    <h4 class="font-darker-grotesque" style="color:red;  font-weight: bold;  font-size: 25px"><i class="fa fa-user" aria-hidden="true"></i>
<?php echo $person->nama_comment ?></h4>
                                                    <p class="font-darker-grotesque"><?php echo $person->description_comment ?></p>
                                                    <div class="flex items-center gap-x-4 mt-2">
                                                  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-2/12">
                                                <span class="font-darker-grotesque text-sm"> <?php echo $person->created_comment ?> <?php $person->id_comment ?></span>
                                            </div>
                                        </div>
                                    
                                    
                                    
                                
                                      <?php foreach ($commentbl as $per): ?>
                            
                                <?php            
                                    if ($person->id_comment === $per->id_balas) {?>
                            
                                      
                                              
                                              
                                              
                                              
                                              
                               <div>
                                  
                                        <div class="flex items-start gap-x-3 mt-12">
                                            <div class="w-10/12 flex gap-x-5 items-start">
                                            &nbsp;
                                             &nbsp;
                                                <div>
                                                    <h6 class="font-darker-grotesque" style="color:blue;  font-weight: bold;  font-size: 20px"><i class='fas fa-user-check'></i> <?php echo $per->nama_comment ?> </h6>
                                                    <p class="font-darker-grotesque"><?php echo $per->description_comment ?></p>
                                                 
                                                </div>
                                            </div>
                                            <div class="w-2/12">
                                                <span class="font-darker-grotesque text-sm"><?php echo $per->created_comment ?></span>
                                            </div>
                                        </div>
                                   
                                </div>
                           
                                              
                                              
                                              
                                              
                                              
                                               <?php } else {?>
                             
                                    
                                    <?php } ?>
                           <?php endforeach; ?>
                                    
                                    
                                    
                                    
                                    
                                    

                                         <hr>
                                    
                                    <?php } else {?>
                                  
                                    
                                    <?php } ?>
                                             
                                                 
                                                 <?php endforeach; ?>
         
                                       
                                      
                                    </div>
                           
                          
                           
                
                           
                        
                           
                     
                           
                           
                           
                           
                           
                                     &nbsp;
                            </div>
                        </div>

                        <div class="flex justify-end bg-red-primary h-20 w-10 absolute top-0 rounded-3xl -left-16 translate-y-0" style="z-index: 1">
                            <span class="w-6/12 h-full bg-white"></span>
                        </div>
                        <div class="bg-red-primary h-32 w-24 absolute rounded-full -left-44 translate-y-20 top-0"></div>
                    </div>
                </div>
                <div class="w-full lg:w-[42%]">
                    <div class="mt-20 lg:mt-0">
                                                <div class="flex items-center gap-x-6 justify-between p-2 lg:p-3 rounded-[1rem] lg:rounded-[1.2rem] mt-5" style="box-shadow: inset 0px 4px 4px rgba(0, 0, 0, .250)">
                       <div class="rounded-3xl shadow-lg mt-8">
                            <div class="grid grid-cols-3">
                                <?php for ($i = 0; $i < 3; $i++) { ?>
                                    <div class="font-darker-grotesque py-3 px-2 <?= $i == 1 ? 'border-x-2 border-gray-300' : '' ?> <?= $i == 0 ? 'rounded-tl-3xl' : '' ?> <?= $i == 2 ? 'rounded-tr-3xl' : '' ?> bg-gray-200">
                                        <h4 class="text-center">0</h4>
                                        <p class="font-darker-grotesque px-0 mx-0 text-center">Total Entries</p>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="border-2 border-gray-200 bg-gray-50 p-6 rounded-b-3xl">
                                <div class="pt-2">
                                    <p class="text-center font-darker-grotesque"><span class="font-bold">Unduhan</span> Dokument</p>
                                    <h5 class="text-center -mt-1 font-bold font-darker-grotesque">Panduan</h5>
                                </div>
                                <p class="text-center font-darker-grotesque mt-3 leading-5">Anda dapat mengunduh dokument panduan terkait ICE Insitute</p>
                                <div class="flex items-center justify-center my-3">
                                    <img src="<?php echo base_url()?>assets/new/images/Unduh.png" alt="book">
                                </div>
                                <p class="font-darker-grotesque text-center">Dengan cara mengklik </p>
                                
                                <a href="<?php echo base_url()?>unduh" class= "py-3 px-8 flex mx-auto my-2 items-center justify-center font-bold font-darker-grotesque text-white bg-red-primary text-white rounded-[1rem]" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, .25); color: #FFF">Unduh</a>
                              
                            </div>
                        </div>
                    </div>
                    <div class="mt-12">
                        <h4 class="font-darker-grotesque text-red-primary font-semibold text-2xl">Populer Now</h4>
                        <div class="mt-5">
                        <?php foreach ($unduh as $key ) {?>
                                <div class="flex gap-x-4 mb-7">
                                    <div class="w-5/12 relative">
                                        <img class="rounded-lg  object-center object-cover" style="background-size: 100% 100%; display:block;" src="<?php echo base_url()?>upload/<?php echo $key->image;?>" alt="<?php echo $key->title;?>">
                                        <span class="bg-red-primary w-5 rounded-full h-5 top-0 left-0 absolute"></span>
                                    </div>
                                    <div class="w-7/12">
                                        <a href="<?php echo base_url()?><?php echo $key->slug_title;?>" class="font-darker-grotesque text-red-primary leading-5 block"><?php echo $key->title;?> </a>
                                        <span class="font-darker-grotesque block mt-1 text-sm"><?php echo $key->create_ad;?></span>
                                    </div>
                                </div>
                          <?php };?>
                               
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
