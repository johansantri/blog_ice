
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
        <?php foreach ($satu as $key ) {?>
           <a href="<?php echo base_url()?><?php echo $key->slug_title;?>">
            <img class="hero-slider" src="<?php echo base_url()?>upload/<?php echo $key->image;?>" style="background-size: 100% 100%;" alt="<?php echo $key->title;?>">
            </a>
            <?php }; ?>
   
         </div>
     
    </div>



   

        <div class="container relative flex flex-col-reverse bg-white lg:flex-row items-center px-5 lg:px-20 mx-auto mt-10 lg:mt-12 lg:mt-16">
            <div class="w-full w-full lg:w-5/12 mt-8 -mb-3 lg:mb-0 lg:mt-0 z-10 self-start">
                <h4 class="text-red-primary font-darker-grotesque text-xl">Info</h4>
                <h3 class="text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl"><a href="<?php echo base_url()?>berita" > Berita</a></h3>
            </div>
            <div class="w-full ">
            <img src="<?php echo base_url()?>assets/new/images/Group-324.svg" class="mr-3" alt="user-icon">
            <div class="w-full grid grid-cols-1 mt-4 lg:mt-0 lg:grid-cols-3 gap-x-4 flex-col">
                    
                    <div class="w-6/6 mb-6 lg:mb-0">
                        <!--<div class="gap-x-4 flex items-center">-->
                        <!--    <div class="flex items-center">-->
                        <!--        <img src="<?php echo base_url()?>assets/new/images/user-icon.jpg" class="h-4 mr-3" alt="user-icon">-->
                        <!--        <h3 class="text-red-primary font-darker-grotesque font-bold text-4xl">20K</h3>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<p class="font-darker-grotesque mt-1 lg:mt-3 leading-5">mereka sudah ikut serta dalam mengikuti kampus merdeka, merdeka belajar.</p>-->
                        <a href="https://info.icei.ac.id/tags/pendaftaran" class= "py-3 flex mx-auto my-2 px-6 items-center justify-left text-red-primary font-bold font-darker-grotesque rounded-[1rem]" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, .25);"><img src="<?php echo base_url()?>assets/new/images/Icon-Pendaftaran.svg" class="h-4 mr-3" alt="user-icon">Pendaftaran</a>
                    </div>

                    <div class="w-6/6 mb-6 lg:mb-0">
                        <!--<div class="gap-x-4 flex items-center">-->
                        <!--    <div class="flex items-center">-->
                        <!--        <img src="<?php echo base_url()?>assets/new/images/book-1k.png" class="h-4 mr-3" alt="user-icon">-->
                        <!--        <h3 class="text-red-primary font-darker-grotesque font-bold text-4xl">1K</h3>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<p class="font-darker-grotesque mt-1 lg:mt-3 leading-5">Tersedia berbagai macam pilihan matakuliah di ICE Institute.</p>-->
                        <a href="https://info.icei.ac.id/tags/cef" class= "py-3 flex mx-auto my-2 px-6 items-center justify-left text-red-primary font-bold font-darker-grotesque rounded-[1rem]" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, .25);"><img src="<?php echo base_url()?>assets/new/images/Icon-CEF.svg" class="h-4 mr-3" alt="user-icon">Cyber Education Forum</a>
                    </div>


                    <div class="w-6/6 mb-6 lg:mb-0">
                        <!--<div class="gap-x-4 flex items-center">-->
                        <!--    <div class="flex items-center">-->
                        <!--        <img src="<?php echo base_url()?>assets/new/images/lecture-computer.png" class="h-4 mr-3" alt="user-icon">-->
                        <!--        <h3 class="text-red-primary font-darker-grotesque font-bold text-4xl">600K</h3>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<p class="font-darker-grotesque mt-1 lg:mt-3 leading-5">Diampu oleh dosen-dosen profesioanl dari kampus-kampus terbaik..</p>-->
                        <a href="https://info.icei.ac.id/tags/pmgd" class= "py-3 flex mx-auto my-2 px-2 items-center justify-center text-red-primary font-bold font-darker-grotesque rounded-[1rem]" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, .25);"><img src="<?php echo base_url()?>assets/new/images/Icon-PMGD.svg" class="h-4 mr-3" alt="user-icon">Program Mikrokredensial Game Developer</a>
                    </div>
             
            </div>
            </div>
            <div class="flex justify-end bg-red-primary h-10 lg:h-20 top-10 lg:top-5 w-7 lg:w-10 absolute rounded-3xl -left-1 lg:left-7 -translate-y-6" style="z-index: 1">
                <span class="w-6/12 h-full bg-white"></span>
            </div>
            <div class="bg-red-primary h-24 w-16 absolute rounded-full -left-20 translate-y-20"></div>
            <div class="bg-red-primary h-20 w-16 absolute rounded-3xl -right-20 translate-y-5 hidden lg:block"></div>
        </div>

        <div class="container px-5 mx-auto lg:px-20 mt-10 lg:mt-28">
            <div class="flex flex-col lg:flex-row gap-x-7">
                <div class="w-full lg:w-9/12">
                   
                    
                  <?php foreach ($data->result() as $row) :?>
                    
                     <div class="card-container">
                    <div class="float-layout">
                        <div class="card-image" style="margin: 20px 0px">
                        <img src="<?php echo base_url()?>upload/<?php echo $row->image;?>" alt="<?php echo $row->slug_title;?>">
                        <div class="top-left" style=" position: absolute; background-color: #FFFC33; color:#5825F9;margin: 3px;padding: 0px 5px;"></div>
                        <div class="card">
                            <div class="card-title"><a href="<?php echo base_url()?><?php echo $row->slug_title;?>">
                                
                               
                               
                                
                           <?php echo $row->title;?>
                       

 


                                
                               
                                
                                
                                
                                 </a></div>
                            <div class="card-desc">
                          <span><?php echo $row->nama_sub ;?> </span>   <?php echo $row->create_ad ;?>
                            </div>
                      
                        </div>
                        </div>
                    </div>
                    </div>
                    
                      <?php endforeach; ?>
                    
                    
                    

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
  font-size: 18px;
  padding: 10px;
  text-align: left;
  font-weight: bold;
  
}

.card-desc {
  padding: 10px;
  text-align: left;
  font-size: 12px;
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


   






                    <style>
    

        /* class to hide content visually leaving it available to screenreaders.
        See notes in cookbook recipe. 
        https://github.com/h5bp/html5-boilerplate/issues/1985#issuecomment-394096182
        https://medium.com/@matuzo/writing-css-with-accessibility-in-mind-8514a0007939 
        */
        .visuallyhidden {
            border: 0;
            clip: rect(0 0 0 0);
            height: auto;
            margin: 0;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            white-space: nowrap;
        }

      

        .pagination {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .pagination li {
            margin: 0 1px;
        }

        .pagination a {
            display: block;
            padding: .5em 1em;
            border: 1px solid #999;
            border-radius: .2em;
            text-decoration: none;
        }

        .pagination a[aria-current="page"] {
            background-color: #333;
            color: #fff;
        }
        
        @media only screen and (min-width: 1200px) {
            .hero-slider{
                max-height: 600px;
                min-width: fit-content;
            }
        }
    </style>


                    <div class="flex justify-center gap-x-8 mt-8 items-center">                   
                  
                       
                        <?php echo $pagination; ?>

                    </div>
                </div>
                <div class="w-full lg:w-3/12">
                    <div>
                        <?php $SearchInputButton = false ?>
                     
                      


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
                                        <img class="rounded-lg w-full h-16 object-center object-cover"  style="width: 100%; height: auto;" src="<?php echo base_url()?>upload/<?php echo $key->image;?>" alt="<?php echo $key->title;?>">
                                        <span class="bg-red-primary w-5 rounded-full h-5 top-0 left-0 absolute"></span>
                                    </div>
                                    <div class="w-7/12">
                                        <a href="<?php echo base_url()?><?php echo $key->slug_title;?>" class="font-darker-grotesque text-red-primary leading-5 block"><?php echo $key->title;?> </a>
                                        <span class="font-darker-grotesque block mt-1 text-sm"><?php echo $key->create_ad;?></span>
                                    </div>
                                </div>
                                <?php }; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-4/6 mx-auto mt-8 lg:mt-20">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:w-5/12 self-start">
                        <h4 class="text-red-primary font-darker-grotesque text-xl">Kegiatan</h4>
                        <h3 class="text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl">ICE Institute</h3>
                    </div>
                    <div class="w-full lg:w-7/12">
                        <p class="font-darker-grotesque mt-3 lg:mt-0">ICE Institute sebagai marketplace matakuliah daring menjadi wadah para pakar, peneliti, pengajar dan pelajar untuk berbagi wawasan sesuai dengan keahlian mereka untuk disampaikan kepada kepada khalayak umum. </p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-y-3 gap-x-3 mt-12">
                    <?php for ($i = 2020; $i < 2024; $i++) { ?>
                        <div class="rounded-xl border py-1 <?= $i != 2023 ? 'border-gray-600' : 'border-red-primary border-2' ?> px-4">
                            <span class="font-darker-grotesque"><?= $i ?></span>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="flex justify-end bg-red-primary h-12 lg:h-20 w-7 lg:w-12 absolute rounded-3xl -left-2 lg:left-16 -translate-y-16 lg:-translate-y-6" style="z-index: 1">
                <span class="w-6/12 h-full bg-white"></span>
            </div>
            <div class="bg-red-primary h-16 lg:h-24 w-12 lg:w-16 absolute rounded-full -left-7 lg:-left-8  translate-y-28 lg:translate-y-20"></div>
        </div>

        <div class="container px-5 mx-auto lg:px-20 mt-20 mb-16">
            <div class="news-wrap px-5">

            <?php foreach ($event as $key ) {?>
                
                    <div class="px-3 mb-4">
                        <div class="w-full flex flex-col">
                            <div class="flex flex-col-reverse lg:flex-row rounded-[2rem]" style="box-shadow: 0px, 4px, 4px rgba(0, 0, 0, .25)">
                                <div class="w-full lg:w-7 lg:self-stretch h-8 lg:h-[unset] bg-[#C4C4C4] rounded-bl-[2rem] rounded-br-[2rem] lg:rounded-br-none lg:rounded-tl-[2rem]"></div>
                                <div class="w-full lg:w-fit flex flex-col-reverse lg:flex-row bg-red-primary rounded-tr-[2rem] rounded-tl-[2rem] lg:rounded-tl-none lg:rounded-br-[2rem]">
                                    <div class="w-full lg:w-8/12 flex py-8 px-4 items-start">
                                        <span class="w-4/12 text-white font-darker-grotesque"><?php echo $key->create_ad;?></span>
                                        <span class="w-1/12 text-white font-darker-grotesque">|</span>
                                        <p class="w-6/12 text-lg text-white font-bold font-darker-grotesque leading-6"> <a href="<?php echo base_url()?><?php echo $key->slug_title;?>"> <?php echo $key->title;?></a></p>
                                    </div>
                                    <div class="w-full lg:w-4/12 flex items-center justify-end">
                           <a href="<?php echo base_url()?><?php echo $key->slug_title;?>" >  <img src="<?php echo base_url()?>upload/<?php echo $key->image;?>" class="rounded-[2rem] object-cover object-center" style="width: 100%; height: 100%;" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="flex justify-between items-center px-2 mt-2 lg:mt-2">
                                <span class="font-darker-grotesque">April 02, 2022</span>
                                <span class="font-darker-grotesque">ABCDEFG Building</span>
                            </div>
                            -->
                        </div>
                    </div>
                <?php }; ?>
            </div>
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

        