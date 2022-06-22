

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
        <?php foreach ($slide as $key ) {?>
            <div class="hero-slide h-40 lg:h-[65vh] rounded-[17px] lg:rounded-[25px] bg-cover mx-4 w-[75%]" style="background-image: url('<?php echo base_url()?>upload/slide/<?php echo $key->image;?>') "></div>
            <?php };?>    
         </div>
     
            </div>
        </div>

    




        <div class="container relative flex flex-col-reverse bg-white lg:flex-row items-center px-5 lg:px-20 mx-auto mt-10 lg:mt-12 lg:mt-16">
            <div class="w-full w-full lg:w-5/12 mt-8 -mb-3 lg:mb-0 lg:mt-0 z-10 self-start">
                <h4 class="text-red-primary font-darker-grotesque text-xl">Info</h4>
                <h3 class="text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl">Berita</h3>
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

                         
                   
              

                      <div style="overflow-x:auto;">
                      <h2>Daftar Unduhan</h2>
                      <table>
                        <tr>
                          <th>No</th>
                          <th>Title</th>
                          <th>More</th>
                        <?php $tx=1;?>
                        </tr>
                        <?php foreach ($unduhAll as $key ) {?>
                        <tr>
                          <td><?php echo $tx++?></td>
                          <td><?php echo $key->title;?></td>
                          <td> <a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>" type="button"  class="mt-4 rounded-xl bg-red-primary text-white font-bold px-5 py-2">klik</a> </td>
                        
                        </tr>
                        <?php } ;?>
                      </table>
                    </div>




                     
                 


                 


                  
                </div>
                <div class="w-full lg:w-3/12">
                    <div>
                        <?php $SearchInputButton = false ?>
                     
                        <div class="flex items-center gap-x-6 justify-between p-2 lg:p-3 rounded-[1rem] lg:rounded-[1.2rem] mt-5" style="box-shadow: inset 0px 4px 4px rgba(0, 0, 0, .250)">
    <div class="ml-2 lg:ml-4">
        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="18" height="20" fill="url(#pattern0)" />
            <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_1_56" transform="translate(-0.0555556) scale(0.00217014)" />
                </pattern>
                <image id="image0_1_56" width="512" height="512" xlink:href="data:image/png;base64,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" />
            </defs>
        </svg>
    </div>
    <div class="w-full">
        <input type="text" class="w-full font-darker-grotesque focus:outline-0 placeholder:text-left" name="" id="" placeholder="Cari apa ingin kamu ketahui">
    </div>

    <?php if ($SearchInputButton == true) { ?>
        <div>
            <button class="py-2 px-8 flex items-center justify-center font-bold font-darker-grotesque text-white bg-red-primary text-white rounded-[.8rem]" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, .25); color: #FFF">Cari</button>
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
                                    <p class="text-center font-darker-grotesque"><span class="font-bold">Giveaway</span> xxxxxx xx xxxxx</p>
                                    <h5 class="text-center -mt-1 font-bold font-darker-grotesque">buku</h5>
                                </div>
                                <p class="text-center font-darker-grotesque mt-3 leading-5">Satu orang yang beruntung akan mendapatkan kesempatan untuk memenangkan xxx ini</p>
                                <div class="flex items-center justify-center my-3">
                                    <img src="./assets/new/images/book.png" class="w-full" alt="book">
                                </div>
                                <p class="font-darker-grotesque text-center">Masuk dan ikuti giveaway ini</p>
                                <button class="py-3 px-8 flex mx-auto my-2 items-center justify-center font-bold font-darker-grotesque text-white bg-red-primary text-white rounded-[1rem]" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, .25); color: #FFF">Gunakan Emailmu</button>
                                <p class="font-darker-grotesque text-center text-gray-600 mt-1">Aturan dan ketentuan giveaway</p>
                            </div>
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
                    <?php for ($i = 2016; $i < 2023; $i++) { ?>
                        <div class="rounded-xl border py-1 <?= $i != 2022 ? 'border-gray-600' : 'border-red-primary border-2' ?> px-4">
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
                                        <p class="w-6/12 text-lg text-white font-bold font-darker-grotesque leading-6"> <a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>"> <?php echo $key->title;?></a></p>
                                    </div>
                                    <div class="w-full lg:w-4/12 flex items-center justify-end">
                           <a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>" >  <img src="<?php echo base_url()?>upload/<?php echo $key->image;?>" class="rounded-[2rem] object-cover object-center" style="width: 100%; height: 100%;" alt=""></a>
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

        