

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
            <div class="hero-slide h-40 lg:h-[50vh] rounded-[17px] lg:rounded-[25px] bg-cover mx-4 w-[80%]" style="background-size: 100% 100%; background-image: url('upload/slide/<?php echo $key->image;?>') "></div>
            <?php };?>    
         </div>
     
            </div>
        </div>

    

        <div class="container mt-5 lg:mt-24 mx-auto px-5 lg:px-40">
            <div class="w-6/6 flex flex-col lg:flex-row items-center">
                <div class="w-full lg:w-4/12">
                    <h4 class="text-red-primary font-darker-grotesque text-xl">Tentang</h4>
                    <h3 class="text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl">ICE Institute</h3>
                </div>
                <div class="w-100 lg:w-8/12">
                    <p class="mt-1 lg:mt-0 font-darker-grotesque text-lg leading-5 lg:leading-6">ICE Institute adalah Indonesia Cyber Education Institute (ICE-I), merupakan pusat kuliah online yang terakreditasi oleh Kementerian Pendidikan dan Kebudayaan. Menyediakan bermacam kuliah online dari banyak Perguruan Tinggi dan penyedia pembelajaran daring di seluruh Indonesia. Tujuan utama dari ICE Institute adalah untuk memfasilitasi penyediaan pendidikan berkualitas sekaligus menjamin kualitas layanan pembelajaran daring dan pendidikan jarak jauh. Lewat ICE Institute, pengguna akan termudahkan dalam memilih kuliah online yang tepat untuk pengembangan karir di era Industri 4.0</p>
                </div>
            </div>
        </div>

        <div class="mb-24 mt-12 lg:mt-20 mx-auto px-5 lg:px-20 container">
            <div class="w-full lg:w-7/12 mx-auto">
                <p class="text-center font-darker-grotesque text-xl">Mitra yang terlah bergabung di ICE Institute</p>
                <div class="mt-6 px-3 lg:px-0" id="companies-loved-wrapper">
                <?php foreach ($partner as $key ) {?>
                        <div class="bg-none-200 w-3/12 mx-2 lg:mx-5 rounded-[.7rem] h-11">
                        <a href="<?php echo base_url()?>about/<?php echo $key->slug_title;?>"><img src="<?php echo base_url()?>upload/<?php echo $key->image; ?>" style="width: 50px;" alt="<?php echo $key->title;?>"></a>
                            
                        </div>
                <?php }; ?>
                       
                                    </div>
            </div>
        </div>

        <div class="bg-gray-100 pb-16 lg:pt-0 -mt-8 lg:mt-0 rounded-b-[8.5rem]">
            <div class="w-full flex flex-col lg:flex-row mx-auto px-5 lg:px-20 container">
                <div class="w-full pt-6 lg:pt-0 lg:w-3/6">
                    <div class="flex items-center justify-center">
                        <img class="h-48 lg:-mt-12" src="./assets/new/images/visi-illustration.png" alt="visi">
                    </div>
                    <h2 class="text-center text-red-primary font-bold font-darker-grotesque text-4xl mt-8">Visi</h2>
                    <p class="font-darker-grotesque text-lg leading-6 mt-5 w-full lg:w-9/12 mx-auto text-justify">Indonesia Cyber Education Institute atau bisa disebut ICE Institute, merupakan lokapasar digital untuk matakuliah daring berkualitas di Indonesia. Tujuan utama dari ICE Institute adalah untuk memfasilitasi penyediaan pendidikan berkualitas sekaligus menjamin kualitas layanan pembelajaran daring dan pendidikan jarak jauh.</p>
                </div>
                <div class="w-full pt-12 lg:pt-0 lg:w-3/6">
                    <div class="flex items-center justify-center">
                        <img class="h-48 lg:-mt-12" src="./assets/new/images/misi-illustration.png" alt="misi">
                    </div>
                    <h2 class="text-center text-red-primary font-bold font-darker-grotesque text-4xl mt-8">Misi</h2>
                    <p class="font-darker-grotesque text-lg leading-6 mt-5 w-full lg:w-9/12 mx-auto text-justify">ICE Institute diharapkan mampu berperan dalam peningkatan perluasan akses dan pemerataan kualitas pendidikan untuk mendorong Angka Partisipasi Pendidikan (APK) menjadi 40%. ICE Institute juga akan membantu pemenuhan kebutuhan lifelong learner melalui penyediaan sistem dan content pembelajaran bermutu yang dapat diakses kapanpun dan dimanapun.</p>
                </div>
            </div>
        </div>

        <div class="container px-5 lg:px-20 mx-auto mt-12 lg:mt-16">
            <div class="w-full flex flex-col lg:flex-row">
                <div class="w-6/6 mb-6 lg:mb-0 lg:w-2/6">
                    <div class="gap-x-4 flex items-center">
                        <div class="w-1/12 flex items-center">
                            <img src="./assets/new/images/user-icon.jpg" class="h-6" alt="user-icon">
                        </div>
                        <div class="w-11/12 flex items-center">
                            <div class="w-2/6">
                                <h3 class="text-red-primary font-darker-grotesque font-bold text-4xl">20K</h3>
                            </div>
                            <div class="w-4/6">
                                <span class="font-darker-grotesque text-2xl font-medium text-gray-700">Mahasiswa</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-x-4">
                        <div class="w-1/12">
                        </div>
                        <div class="w-11/12">
                            <p class="font-darker-grotesque mt-3 leading-5">mereka sudah ikut serta dalam mengikuti kampus merdeka, merdeka belajar.</p>
                        </div>
                    </div>
                </div>
                <div class="w-6/6 mb-6 lg:mb-0 lg:w-2/6">
                    <div class="gap-x-4 flex items-center">
                        <div class="w-1/12 flex items-center">
                            <img src="./assets/new/images/book-1k.png" class="h-6" alt="book-1k">
                        </div>
                        <div class="w-11/12 flex items-center">
                            <div class="w-2/6">
                                <h3 class="text-red-primary font-darker-grotesque font-bold text-4xl">1K+</h3>
                            </div>
                            <div class="w-4/6">
                                <span class="font-darker-grotesque text-2xl font-medium text-gray-700">Matakuliah</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-x-4">
                        <div class="w-1/12">
                        </div>
                        <div class="w-11/12">
                            <p class="font-darker-grotesque mt-3 leading-5">Tersedia berbagai macam pilihan matakuliah di ICE Institute.</p>
                        </div>
                    </div>
                </div>
                <div class="w-6/6 mb-6 lg:mb-0 lg:w-2/6">
                    <div class="gap-x-4 flex items-center">
                        <div class="w-1/12 flex items-center">
                            <img src="./assets/new/images/lecture-computer.png" class="h-6" alt="lecture-computer">
                        </div>
                        <div class="w-11/12 flex items-center">
                            <div class="w-2/6">
                                <h3 class="text-red-primary font-darker-grotesque font-bold text-4xl">600+</h3>
                            </div>
                            <div class="w-4/6">
                                <span class="font-darker-grotesque text-2xl font-medium text-gray-700">Dosen</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-x-4">
                        <div class="w-1/12">
                        </div>
                        <div class="w-11/12">
                            <p class="font-darker-grotesque mt-3 leading-5">Diampu oleh dosen-dosen profesioanl dari kampus-kampus terbaik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 lg:mt-24 mx-auto px-5 lg:px-40">
            <div class="w-6/6 flex flex-col lg:flex-row items-center">
                <div class="w-full lg:w-4/12">
                    <h4 class="text-red-primary font-darker-grotesque text-xl">MataKuliah</h4>
                    <h3 class="text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl">ICE Institute</h3>
                </div>
                <div class="w-100 lg:w-8/12">
                    <p class="mt-1 lg:mt-0 font-darker-grotesque text-lg leading-5 lg:leading-6">Berikut rumpun ilmu yang ada di ICE Institute</p>
                </div>
            </div>
        </div>

        <div class="container px-5 mt-5 lg:mt-0 lg:px-20 mx-auto">
            <div class="flex justify-end">
                <div class="mb-3 mt-6 w-4/6 lg:w-3/12">
                    <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 rounded-full px-5 font-darker-grotesque bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        <option selected disabled>Mata Kuliah Paling Populer</option>
                       
                    </select>
                </div>
            </div>
        </div>

        <div class="container px-5 lg:px-20 mx-auto">
            <div class="flex grid grid-cols-1 lg:grid-cols-3 flex-wrap gap-y-4 lg:gap-y-10 mt-3 lg:mt-5 gap-x-14">
                
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/data-science-icon.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Data Science</h4>
                            <p class="font-darker-grotesque text-white"></p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/handshake.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Business</h4>
                            <p class="font-darker-grotesque text-white"></p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/humanities-icon.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Art & Humanities</h4>
                            <p class="font-darker-grotesque text-white"></p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/social-science.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Social Science</h4>
                            <p class="font-darker-grotesque text-white"></p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/it.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Information Technology</h4>
                            <p class="font-darker-grotesque text-white"></p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/math.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Maths & Logics</h4>
                            <p class="font-darker-grotesque text-white"></p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/lang-learn.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Language Learning</h4>
                            <p class="font-darker-grotesque text-white"></p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/cs.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Computer Science</h4>
                            <p class="font-darker-grotesque text-white"></p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/biology.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Biology</h4>
                            <p class="font-darker-grotesque text-white"></p>
                        </div>
                    </div>
                            </div>
            <div class="flex items-center justify-center my-10 lg:my-12">
                <a href="https://icei.ac.id/courses" class="py-2 px-8 flex items-center justify-center font-bold font-darker-grotesque text-white bg-red-primary text-white rounded-[.8rem]" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, .25); color: #FFF" type="button">Selengkapnya</a>
              
            </div>
        </div>

        <div class="container px-5 lg:px-20 mx-auto">
            <div class="flex flex-col lg:flex-row">
                <div class="w-full lg:w-1/6">
                    <h4 class="text-red-primary font-darker-grotesque text-xl">Info</h4>
                    <h3 class="text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl">Berita</h3>
                </div>

<div class="w-full lg:w-5/6">
    <div class="gap-y-5 lg:gap-y-0 lg:gap-x-3 mt-5 lg:mt-0 grid grid-cols-1 lg:grid-cols-3">
    <?php foreach ($berita as $key ) {?>
            <div>
                        
                <div class="bg-gray-50 pt-6 pb-12 rounded-t-[1.35rem] px-6">
                    <span class="font-darker-grotesque"><small> <?php echo $key->create_ad;?></small></span>
                    <a href="" class="text-red-primary font-darker-grotesque mt-3 block font-bold leading-7 text-[1.3rem]">
                        <h4 class="h-20"><?php echo substr($key->title, 0,80). '...'?></h4>
                    </a>
                    <span class="font-darker-grotesque mt-6 block">oleh <span class="font-bold">admin</span></span>
                </div>
                <div class="-mt-7">
                   <a href="<?php echo base_url()?><?php echo $key->slug_title;?>"><img style="width:100%; height:200px; border-radius: 5%;" src="<?php echo base_url()?>upload/<?php echo $key->image;?>" alt="<?php echo $key->title;?>"></a> 
                </div>
                <div class="px-6 bg-gray-50 -mt-4 pt-10 pb-6 rounded-b-[1.35rem]">
                    <p class="font-darker-grotesque h-24"><?php echo substr($key->meta, 0,80). '...'?></p>
                    <a href="<?php echo base_url()?><?php echo $key->slug_title;?>" class="font-darker-grotesque font-bold block mt-10">Baca Selengkapnya </a>
                </div>          
            
            </div>    

    <?php };?>

   

    </div>
</div>



                <div class="flex justify-end bg-red-primary h-16 w-5 absolute rounded-3xl -left-1 lg:left-16 translate-y-0" style="z-index: 1">
                    <span class="w-6/12 h-full bg-white"></span>
                </div>
                <div class="bg-red-primary h-20 lg:h-28 w-16 lg:w-24 absolute rounded-full -left-12 lg:-left-12 translate-y-24 lg:translate-y-20"></div>
                <div class="bg-red-primary h-16 lg:h-20 w-12 lg:w-16 absolute rounded-3xl -right-9 lg:-right-11 translate-y-60"></div>
            </div>
        </div>

        <div class="container px-5 lg:px-20 mx-auto mt-8 lg:mt-20">
            <h4 class="text-red-primary font-darker-grotesque text-xl inline">Apa <h3 class="inline text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl">Kata Mereka</h3>
            </h4>
        </div>

        <div class="container mt-3 lg:-mb-20 -mb-10 lg:mt-10 px-12 mx-auto gap-x-8" id="testimonial-wrap">
        <?php foreach ($people as $key ) {?>
                            <div class="pt-10 mx-2 lg:mx-5">
                                <div class="py-5 pt-8 px-5 lg:px-7 bg-gray-200 relative rounded-[1.5rem] lg:rounded-[1.8rem]">
                                        <div class="absolute -top-6 left-8 lg:left-14 bg-none-100 p-4 rounded-full flex items-center justify-center">
                                            <img src="<?php echo base_url()?>upload/<?php echo $key->image;?>" style="width: 50px;  border-radius: 90%;" class="w-5" alt="<?php echo $key->title;?>">
                                        </div>
                                        <div class="relative mt-2">
                                            <h4 class="font-semibold text-xl font-darker-grotesque text-red-primary"><?php echo $key->title;?></h4>
                                            
                                            <small class="mt-1 leading-5 font-darker-grotesque"><?php echo $key->description;?></small>
                                            

                                            <img src="./assets/new/images/kutip.png" class="absolute top-0 right-0 w-6" alt="">
                                        </div>
                                </div>
                            </div>
            <?php };?>
                           
            </div>
