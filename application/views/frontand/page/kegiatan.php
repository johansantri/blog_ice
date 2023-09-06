
 <p hidden id="apa"><?php echo base_url()?>kegiatan/</p>
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

    


        <div class="lg:w-4/6 px-5 mx-auto mt-8 lg:mt-20">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:w-5/12 self-start">
                        <h4 class="text-red-primary font-darker-grotesque text-xl">Kegiatan</h4>
                        <h3 class="text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl">ICE Institute</h3>
                    </div>
                    <div class="w-full lg:w-7/12">
                        <p class="font-darker-grotesque mt-3 lg:mt-0"> Untuk menyebarluaskan gagasan tentang ICE Institute dan berbagai programnya, kami mengadakan webinar dengan topik utama Cyber Education Forum. Dalam setiap serinya, penyelenggara mengangkat tema yang mengacu pada penelitian yang sedang berlangsung di ICE Institute.
                        </p>
                        <p class="font-darker-grotesque mt-3 lg:mt-0">Narasumber untuk kegiatan merupakan pakar atau Ketua Peneliti dari berbagai Universitas yang berkolaborasi dengan ICE Insititute dan pakar atau praktisi dari berbagai Institusi yang berada di luar negeri.</p>
                        <p class="font-darker-grotesque mt-3 lg:mt-0">.Untuk mengenal lebih lanjut mengenai ICE Institute, silakan klik <b style="color: blue;"><a href=https://sway.office.com/kc5V3NfCTc2KHUHA?ref=Link>Disini</a></b></p>
                        
                    </div>
                </div>
              
            </div>

      
        <div class="container px-5 mx-auto lg:px-20 mt-10 lg:mt-28">
            <div class="flex flex-col lg:flex-row gap-x-7">
                <div class="w-full lg:w-9/12">
                    <div class="grid gap-3 grid-cols-1 lg:grid-cols-3">
                      
                     

                         
                    <?php foreach ($tag as $key ) {?>
                        <div>
                            <div class="bg-gray-50 pt-6 pb-12 rounded-t-[1.35rem] px-6">
                                <span class="font-darker-grotesque"><?php echo $key->create_ad;?></span>  <small>admin</small>
                                <a href="<?php echo base_url()?><?php echo $key->slug_title;?>" class="text-red-primary font-darker-grotesque mt-3 block font-bold leading-7 text-[1.3rem]">
                                    <h5 class="h-20"><?php echo substr($key->title, 0,100). '...'?></h5>
                                </a>
                               
                            </div>
                            <div class="-mt-7">
                              <a href="<?php echo base_url()?><?php echo $key->slug_title;?>"><img style="width:100%; height:200px; border-radius: 5%;" src="<?php echo base_url()?>upload/<?php echo $key->image;?>" alt="<?php echo $key->title;?>"></a>  
                            </div>
                            <div class="px-6 bg-gray-50 -mt-4 pt-10 pb-6 rounded-b-[1.35rem]">
                                <p class="font-darker-grotesque h-24"><?php echo substr($key->meta, 0,125). '...'?> <a href="<?php echo base_url()?><?php echo $key->slug_title;?>" class="font-bold ">Baca Selengkapnya</a></p>
                               
                            </div>
                        </div>
                      

                        <?php } ;?>
                    </div>


                 


                  
                </div>
                <div class="w-full lg:w-3/12">
                    <div>
                        <?php $SearchInputButton = false ?>
                     
                        <div class="flex items-center gap-x-6 justify-between p-2 lg:p-3 rounded-[1rem] lg:rounded-[1.2rem] mt-5" style="box-shadow: inset 0px 4px 4px rgba(0, 0, 0, .250)">
    
   
    <?php if ($SearchInputButton == true) { ?>
        <div>
          
        </div>
    <?php } ?>
</div>


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
                                        <img class="rounded-lg w-full h-16 object-center object-cover" src="<?php echo base_url()?>upload/<?php echo $key->image;?>" alt="<?php echo $key->title;?>">
                                        <span class="bg-red-primary w-5 rounded-full h-5 top-0 left-0 absolute"></span>
                                    </div>
                                    <div class="w-7/12">
                                        <a href="<?php echo base_url()?><?php echo $key->slug_title;?>" class="font-darker-grotesque text-red-primary leading-5 block"><?php echo $key->title;?> </a>
                                        <span class="font-darker-grotesque block mt-1 text-sm"><?php echo $key->create_ad;?></span>
                                    </div>
                                </div>
                            <?php } ;?>
                        </div>
                    </div>
                </div>
            </div>
       

            <div class="flex justify-end bg-red-primary h-12 lg:h-20 w-7 lg:w-12 absolute rounded-3xl -left-2 lg:left-16 -translate-y-16 lg:-translate-y-6" style="z-index: 1">
                <span class="w-6/12 h-full bg-white"></span>
            </div>
            <div class="bg-red-primary h-16 lg:h-24 w-12 lg:w-16 absolute rounded-full -left-7 lg:-left-8  translate-y-28 lg:translate-y-20"></div>
        </div>

       

        <div class="container px-5 mx-auto lg:px-20 mt-16 lg:mt-20 mb-12 hidden">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-9/12 flex items-center justify-start">
                    <div class="lg:w-2/12"></div>
                    <p class="text-left text-lg leading-5 lg:w-7/12 font-darker-grotesque">Sign up to our newsletter and we’ll send fresh new courses and special offers direct to your inbox

                        <span class="block mt-4">You can update your preferences and unsubscribe at any time</span>
                    </p>
                </div>
                <div class="w-full mt-10 lg:mt-0 lg:w-3/12 flex items-start justify-center flex-col">
                    <h4 class="font-bold text-xl font-darker-grotesque">Newsletter</h4>
                    <input type="text" placeholder="your email address" class="mt-2 placeholder:text-white text-white placeholder:font-semibold font-semibold placeholder:text-xl text-xl focus:outline-none px-7 py-3 font-darker-grotesque bg-red-primary rounded-2xl w-full" style="box-shadow: inset 0px 4px 4px rgba(0, 0, 0, .25);">
                </div>
            </div>
        </div>

        