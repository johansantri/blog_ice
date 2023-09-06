

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

    

 <p hidden id="apa"><?php echo base_url()?></p>


        <div class="container relative flex flex-col-reverse bg-white lg:flex-row items-center px-5 lg:px-20 mx-auto mt-10 lg:mt-12 lg:mt-16">
            <div class="w-full w-full lg:w-5/12 mt-8 -mb-3 lg:mb-0 lg:mt-0 z-10 self-start">
                <h4 class="text-red-primary font-darker-grotesque text-xl">Info</h4>
                <h3 class="text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl">Daftar unduhan</h3>
            </div>
            <div class="w-full lg:w-7/12 grid grid-cols-1 mt-4 lg:mt-0 lg:grid-cols-3 gap-x-4 flex-col">
                
                    <div class="w-6/6 mb-6 lg:mb-0">
                        <div class="gap-x-4 flex items-center">
                            <div class="flex items-center">
                                <img src="<?php echo base_url()?>assets/new/images/user-icon.jpg" class="h-4 mr-3" alt="user-icon">
                                <h3 class="text-red-primary font-darker-grotesque font-bold text-4xl">20K</h3>
                            </div>
                        </div>
                        <p class="font-darker-grotesque mt-1 lg:mt-3 leading-5">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>

                    <div class="w-6/6 mb-6 lg:mb-0">
                        <div class="gap-x-4 flex items-center">
                            <div class="flex items-center">
                                <img src="<?php echo base_url()?>assets/new/images/book-1k.png" class="h-4 mr-3" alt="user-icon">
                                <h3 class="text-red-primary font-darker-grotesque font-bold text-4xl">20K</h3>
                            </div>
                        </div>
                        <p class="font-darker-grotesque mt-1 lg:mt-3 leading-5">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>


                    <div class="w-6/6 mb-6 lg:mb-0">
                        <div class="gap-x-4 flex items-center">
                            <div class="flex items-center">
                                <img src="<?php echo base_url()?>assets/new/images/lecture-computer.png" class="h-4 mr-3" alt="user-icon">
                                <h3 class="text-red-primary font-darker-grotesque font-bold text-4xl">20K</h3>
                            </div>
                        </div>
                        <p class="font-darker-grotesque mt-1 lg:mt-3 leading-5">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
             
            </div>

            <div class="flex justify-end bg-red-primary h-10 lg:h-20 top-10 lg:top-5 w-7 lg:w-10 absolute rounded-3xl -left-1 lg:left-7 -translate-y-6" style="z-index: 1">
                <span class="w-6/12 h-full bg-white"></span>
            </div>
            <div class="bg-red-primary h-24 w-16 absolute rounded-full -left-20 translate-y-20"></div>
            <div class="bg-red-primary h-20 w-16 absolute rounded-3xl -right-20 translate-y-5 hidden lg:block"></div>
        </div>

        <div class="container px-5 mx-auto lg:px-20 mt-10 lg:mt-28">
            
                      <div style="overflow-x:auto;">
                      <h2>Daftar Unduhan</h2>
                      <table>
                        <tr>
                          <th>No</th>
                          <th>Title</th>
                       
                        <?php $tx=1;?>
                        </tr>
                        <?php foreach ($unduhAll as $key ) {?>
                        <tr>
                          <td><?php echo $tx++?></td>
                          <td> <a href="<?php echo base_url()?><?php echo $key->slug_title;?>" type="button"  class="mt-4 rounded-xl bg-red-primary text-white font-bold px-5 py-2"><?php echo $key->title;?></a></td>
                
                        
                        </tr>
                        <?php } ;?>
                      </table>
                    </div>

            <div class="flex flex-col lg:flex-row gap-x-7">
                <div class="w-full lg:w-9/12">
                   
                <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>              

                         
                   
              




                     
                 


                 


                  
                </div>
                <div class="w-full lg:w-3/12">
                   


                      
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

        