

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
            <div class="hero-slide h-40 lg:h-[85vh] rounded-[17px] lg:rounded-[25px] bg-cover mx-4 w-[90%]" style="background-image: url('upload/slide/<?php echo $key->image;?>') "></div>
            <?php };?>    
    </div>
        <div class="container px-5 lg:px-20 mx-auto lg:mt-3">
            <div class="w-6/6 lg:w-3/6">

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
  

            <div>
            <button class="py-2 px-8 flex items-center justify-center font-bold font-darker-grotesque text-white bg-red-primary text-white rounded-[.8rem]" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, .25); color: #FFF">Cari</button>
        </div>
    </div>                <div class="flex mt-8">
                    <div class="flex flex-col lg:flex-row items-center w-2/6">
                        <span class="rounded-full p-2 bg-red-primary"><img class="w-5 h-5" src="./assets/new/images/book-icon.png" alt="book"></span>
                        <span class="font-darker-grotesque mt-1 lg:mt-0 lg:ml-2 text-gray-600">Dosen Berpengalaman</span>
                    </div>
                    <div class="flex flex-col lg:flex-row items-center w-2/6">
                        <span class="rounded-full p-2 bg-red-primary"><img class="w-5 h-5" src="./assets/new/images/hand-icon.png" alt="hand"></span>
                        <span class="font-darker-grotesque mt-1 lg:mt-0 lg:ml-2 text-gray-600">Harga Terjangkau</span>
                    </div>
                    <div class="flex flex-col lg:flex-row items-center w-2/6">
                        <span class="rounded-full p-2 bg-red-primary"><img class="w-5 h-5" src="./assets/new/images/check-icon.png" alt="check"></span>
                        <span class="font-darker-grotesque mt-1 lg:mt-0 lg:ml-2 text-gray-600">Pembelajaran Berkualitas</span>
                    </div>
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
                        <a href="<?php echo base_url()?>home/about/<?php echo $key->slug_title;?>"><img src="<?php echo base_url()?>upload/<?php echo $key->image; ?>" style="width: 50px;" alt="<?php echo $key->title;?>"></a>
                            
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
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
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
                            <p class="font-darker-grotesque text-white">000 lorem ipsum</p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/handshake.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Business</h4>
                            <p class="font-darker-grotesque text-white">000 lorem ipsum</p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/humanities-icon.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Art & Humanities</h4>
                            <p class="font-darker-grotesque text-white">000 lorem ipsum</p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/social-science.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Social Science</h4>
                            <p class="font-darker-grotesque text-white">000 lorem ipsum</p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/it.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Information Technology</h4>
                            <p class="font-darker-grotesque text-white">000 lorem ipsum</p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/math.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Maths & Logics</h4>
                            <p class="font-darker-grotesque text-white">000 lorem ipsum</p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/lang-learn.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Language Learning</h4>
                            <p class="font-darker-grotesque text-white">000 lorem ipsum</p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/cs.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Computer Science</h4>
                            <p class="font-darker-grotesque text-white">000 lorem ipsum</p>
                        </div>
                    </div>
                                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/new/images/biology.png" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl">Biology</h4>
                            <p class="font-darker-grotesque text-white">000 lorem ipsum</p>
                        </div>
                    </div>
                            </div>
            <div class="flex items-center justify-center my-10 lg:my-12">
                <button class="py-2 px-8 flex items-center justify-center font-bold font-darker-grotesque text-white bg-red-primary text-white rounded-[.8rem]" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, .25); color: #FFF">Lihat Selebihnya</button>
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
                    <img class="w-full h-48 rounded-[20px] object-cover object-center" src="<?php echo base_url()?>upload/<?php echo $key->image;?>" alt="<?php echo $key->title;?>">
                </div>
                <div class="px-6 bg-gray-50 -mt-4 pt-10 pb-6 rounded-b-[1.35rem]">
                    <p class="font-darker-grotesque h-24"><?php echo substr($key->meta, 0,80). '...'?></p>
                    <a href="<?php echo base_url()?>berita/<?php echo $key->slug_title;?>" class="font-darker-grotesque font-bold block mt-10">Baca Selengkapnya <img src="chevron-right-icon.png" alt=""></a>
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
                                            <p class="mt-1 leading-5 font-darker-grotesque"><?php echo $key->description;?></p>
                                            

                                            <img src="./assets/new/images/kutip.png" class="absolute top-0 right-0 w-6" alt="">
                                        </div>
                                </div>
                            </div>
            <?php };?>
                           
            </div>
