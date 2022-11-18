
<style>
 .viewport {
  width: 100%;
  height: 100%;
  margin: 0;
}

.flex-container {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -moz-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

#flex-item {
  text-align: center;
  margin: auto;
}

#splash {
  display: flex;
  justify-content: center;
  align-items: center;
}   
iframe {
 max-width: 100%;
  height: 360px;
  width: 100%;
}





</style>


<body class="overflow-x-hidden" id="main">
    
    <nav class="w-full fixed bg-white z-20 shadow">
        <div class="flex container mx-auto px-5 lg:px-20 py-1 justify-center lg:justify-between">
            <div class="logo flex-initial w-full lg:w-2/6 flex justify-center lg:justify-start items-center ">
               <a href="<?php echo base_url()?>"> <img src="<?php echo base_url()?>assets/new/images/LOGOICE.png" style="width: 200px; " class="w-12 lg:w-16" alt=""></a>
                <!--<h4 class="text-red-600 text-sm font-medium ml-2">ABCDEFG</h4>-->
            </div>
            <ul id="navbar-mobile" class="flex-initial nav-hidden w-full lg:w-4/6 fixed lg:relative bg-white left-0 top-14 lg:top-0 shadow-md lg:shadow-none lg:flex justify-between items-center nav-links py-4 lg:py-0">
                <li>
                    <a href="<?php echo base_url()?>" class="px-4 py-2 w-full block lg:py-0 lg:px-0 font-darker-grotesque text-lg text-black">Beranda</a>
                </li>
                <li>
                    <div class="dropdown inline-block relative w-full">
                        <button class=" rounded inline-flex items-center w-full px-4 py-2 w-full lg:py-0 lg:px-0 text-left flex justify-start items-center gap-x-1">
                            <span class="font-darker-grotesque text-lg lg:mr-1 ">Profil</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu absolute left-3 lg:left-[50%] lg:translate-x-[-50%] border hidden text-gray-700 z-10 pt-1 lg:w-[12rem]">
                        <?php foreach ($profilmenu as $key ) {?>
                            <li class=""><a class="rounded-t bg-white hover:bg-gray-200 py-2 font-darker-grotesque text-lg px-4 block whitespace-no-wrap" href="<?php echo base_url()?>profile/<?php echo $key->slug_title;?>"><?php echo $key->title;?></a></li>
                            <?php };?>
                           
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="dropdown inline-block relative w-full">
                        <button class=" rounded inline-flex items-center w-full px-4 py-2 w-full lg:py-0 lg:px-0 text-left flex justify-start items-center gap-x-1">
                            <span class="font-darker-grotesque text-lg lg:mr-1 ">Kegiatan</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu absolute left-3 lg:left-[50%] lg:translate-x-[-50%] border hidden text-gray-700 z-10 pt-1 lg:w-[12rem]">
                        <?php foreach ($kegiatanmenu as $key ) {?>
                        <li class=""><a class="rounded-t bg-white hover:bg-gray-200 py-2 font-darker-grotesque text-lg px-4 block whitespace-no-wrap" href="<?php echo base_url()?>kegiatan/<?php echo $key->slug_sub;?>"><?php echo $key->nama_sub;?></a></li>
                        <?php };?>    
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo base_url()?>berita" class="px-4 py-2 w-full block lg:py-0 lg:px-0 font-darker-grotesque text-lg text-black">Berita</a>
                </li>
                <li>
                    <a href="https://icei.ac.id/courses" class="px-4 py-2 w-full block lg:py-0 lg:px-0 font-darker-grotesque text-lg text-black">Galeri Matakuliah</a>
                </li>
                <li>
                    <div class="dropdown inline-block relative w-full">
                        <button class=" rounded inline-flex items-center w-full px-4 py-2 w-full lg:py-0 lg:px-0 text-left flex justify-start items-center gap-x-1">
                            <span class="font-darker-grotesque text-lg lg:mr-1 ">Program</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu absolute left-3 lg:left-[50%] lg:translate-x-[-50%] border hidden text-gray-700 z-10 pt-1 lg:w-[12rem]">
                            <li class=""><a class="rounded-t bg-white hover:bg-gray-200 py-2 font-darker-grotesque text-lg px-4 block whitespace-no-wrap" href="https://gamedev.icei.ac.id/">Game Dev</a></li>
                              <li class=""><a class="rounded-t bg-white hover:bg-gray-200 py-2 font-darker-grotesque text-lg px-4 block whitespace-no-wrap" href="https://pkbn.icei.ac.id/">Bela Negara</a></li>
                                <li class=""><a class="rounded-t bg-white hover:bg-gray-200 py-2 font-darker-grotesque text-lg px-4 block whitespace-no-wrap" href="https://icei.ac.id/tracks/international-courses/">International courses</a></li>
                            
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo base_url()?>panduan" class="px-4 py-2 w-full block lg:py-0 lg:px-0 font-darker-grotesque text-lg text-black">Panduan</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>pakta-integritas" class="px-4 py-2 w-full block lg:py-0 lg:px-0 font-darker-grotesque text-lg text-black">Pakta Integritas</a>
                </li>
            </ul>