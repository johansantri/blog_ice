
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
  top: 40px;
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
      

        <div class="container px-5 mx-auto lg:px-20 mt-6 lg:mt-12">
            <div class="flex flex-col lg:flex-row gap-x-20">
                <div class="w-full lg:w-fit">
                    <div class="relative">
                    
                        <h1 class="font-darker-grotesque text-4xl text-red-primary font-bold mt-4 lg:mt-12">Kebijakan Pribadi </h1>
                          <p hidden id="apa"><?php echo base_url()?>privacy</p>

                        <div class="flex items-center justify-between mt-8 lg:mt-24">
                            <ul class="flex items-center gap-x-4 lg:gap-x-5 mt-3">
                                <li>    <!--button share -->
                                <div class="animate slide-in-down notification-button">
                                <i class="fa fa-files-o"></i> Link Copied to Clipboard
                                </div>

                                <div class="container">
                                <div class="share-container">
                                <div class="share-btn btn-danger">Share</div>
                                <div contenteditable="true" class="share-url"></div>
                                </div>
                                </div>

                                <!--end--></li>
                             
                            </ul>
                            <ul class="flex items-center gap-x-4">
                                <li><img class="h-4" src="<?php echo base_url()?>assets/new/images/bookmart-icon.png" alt=""></li>
                                <li><img class="h-4" src="<?php echo base_url()?>/assets/new/images/flag-icon.png" alt=""></li>
                            </ul>
                        </div>
                        <div class="-mt-3 font-darker-grotesque">
                            <p class="mt-8">

<h2 class="font-darker-grotesque text-2xl text-red-primary font-bold mt-4 lg:mt-12">Syarat dan ketentuan penggunaan layanan (KPL) ICE Institute berlaku mulai tanggal 28 Juli 2021</h2>

ICE peduli dengan kerahasiaan dan keamanan informasi Anda. Kebijakan Privasi ini berlaku untuk informasi yang ICE Institute kumpulkan melalui situs ICE Institute saat Anda berinteraksi dengan ICE Institute, dengan pengguna lain, dan umumnya dengan situs ICE Institute. Semua informasi diterima dan dikendalikan oleh ICE sesuai dengan Kebijakan Privasi ini.

Jika Anda tidak menerima ketentuan Kebijakan Privasi ini, maka mohon untuk tidak mengakses, menelusuri, atau menggunakan situs ICE Institute. Jika Anda memilih untuk tidak memberikan informasi tertentu yang diperlukan untuk memberi Anda berbagai produk dan layanan yang ditawarkan di situs ICE Institute, maka Anda mungkin tidak dapat memperoleh produk atau layanan tersebut.
</p>
<br>
<p>
    <h2 class="font-darker-grotesque text-2xl text-red-primary font-bold mt-4 lg:mt-12">Kebijakan Privasi ini diatur sebagai berikut:</h2>


    Informasi yang ICE Institute kumpulkan dari Anda (termasuk Informasi Pribadi)
    Cookie dan Teknologi Pelacakan di situs ICE Institute
    Bagaimana informasi Anda digunakan
    Bagaimana informasi Anda dibagikan

</p>
<br>
<p>

<h3 class="font-darker-grotesque text-1xl text-red-primary font-bold mt-4 lg:mt-12">INFORMASI YANG DIKUMPULKAN ICE DARI ANDA (TERMASUK INFORMASI PRIBADI).</h3>

ICE Institute secara langsung mengumpulkan informasi ketika Anda:

    kontribusikan kode ke ICE Institute, kirimkan Perjanjian Kontributor Repositori Platform ICE Institute.
    hubungi kami dengan mengisi formulir online atau dengan mengirimkan pesan email ke ICE (termasuk pesan ke tim dukungan);
    berpartisipasi dalam survei pengguna; dan
    berpartisipasi dalam milis publik, ruang obrolan, forum, webinar, dan pengalaman interaktif lainnya di situs ICE atau disponsori oleh tim ICE Institute.
    
    ICE Institute juga secara tidak langsung mengumpulkan informasi penggunaan tentang kunjungan Anda ke situs ICE Institute, seperti yang dijelaskan di bagian di bawah berjudul Cookie dan Teknologi Pelacakan.

ICE Institute mendorong Anda untuk menggunakan kebijaksanaan sebelum secara sukarela membagikan Informasi Pribadi di situs ICE Institute. (Penghapusan Informasi Pribadi Anda akan tunduk pada proses dan batasan yang diuraikan di bawah ini.)

<br>
<h3 class="font-darker-grotesque text-1xl text-red-primary font-bold mt-4 lg:mt-12">COOKIES DAN TEKNOLOGI PELACAKAN PADA SITUS ICE.</h3>



Seperti banyak perusahaan, ICE Institute menggunakan Cookie dan Teknologi Pelacakan umum lainnya di situs ICE Institute dan dalam komunikasi email untuk membantu ICE lebih memahami penggunaan dan kebutuhan Anda atas situs ICE, produk dan layanan terkait ICE saat ini dan di masa mendatang, dan bagaimana ICE Institute dapat memperbaiki. Sebagai contoh:

Berdasarkan pengaturan cookie Anda, ICE melacak informasi yang menunjukkan, antara lain, halaman mana dari situs ICE Institute yang dikunjungi, urutan kunjungannya, waktu kunjungannya, dan hyperlink dan kontrol antarmuka pengguna lainnya yang digunakan;

ICE Institute dapat mencatat alamat IP, sistem operasi, dan perangkat lunak browser (termasuk penggunaan seluler dan jenis perangkat saat Anda menggunakan aplikasi seluler asli ICE Institute) yang Anda gunakan saat mengakses situs ICE Institute, dan ICE mungkin dapat menentukan dari alamat IP Internet Anda Penyedia Layanan dan lokasi geografis titik konektivitas Anda; dan

ICE Institute dapat melacak dan mengumpulkan informasi dari email yang dikirim ICE Institute kepada Anda, misalnya apakah Anda membuka email atau mengklik tautan apa pun dari email tersebut.

ICE Institute juga bermitra dengan pihak ketiga untuk membantu kami melacak dan memahami aktivitas Anda di situs ICE Institute, bagaimana Anda berinteraksi dengan media sosial ICE Institute, dan bagaimana Anda menemukan atau mungkin dirujuk ke situs ICE Institute. Penyedia layanan pihak ketiga yang mendukung komunitas ICE dapat secara terpisah menggunakan Teknologi Pelacakan melalui tautan dari situs ICE Institute ke situs mereka sendiri untuk memahami bagaimana Anda menemukan atau mungkin dirujuk ke situs mereka.
ICE Institute menggunakan Cookie dan Teknologi Pelacakan lainnya untuk tujuan berikut:

    Bila diperlukan untuk administrasi sistem, keamanan, dan integritas untuk memastikan situs ICE Institute berfungsi dengan baik untuk Anda. Tanpa teknologi ini, situs ICE mungkin tidak berfungsi dengan benar;
    Untuk mengaktifkan analitik, kinerja, dan fungsionalitas, untuk membantu ICE Institute mengumpulkan informasi tentang bagaimana pengunjung menggunakan situs ICE Institute dan memantau kinerja situs ICE Institute, dan untuk meningkatkan pengalaman Anda dengan mengenali dan mengingat apakah Anda pernah mengunjungi situs ICE Institute sebelumnya dan mungkin memiliki preferensi pribadi; dan
    Untuk mendukung pemasaran dengan memungkinkan ICE Institute mengirimkan konten yang relevan dengan minat Anda di situs ICE Institute dan situs pihak ketiga berdasarkan cara Anda berinteraksi dengan iklan atau konten ICE Institute. ICE Institute menggunakan cookie "pihak pertama", yang berarti cookie yang disajikan oleh ICE Institute, dan juga cookie "pihak ketiga", yang berarti cookie yang disajikan oleh pihak ketiga yang membantu ICE Institute melacak informasi ini.

Anda memiliki beberapa opsi untuk mengelola Cookie dan Teknologi Pelacakan lainnya. Ini termasuk:

    Memodifikasi pengaturan browser Anda: Anda harus dapat mengontrol bagaimana dan apakah browser web Anda menerima Cookie dengan menyesuaikan pengaturan privasi dan keamanannya. Fitur "bantuan" pada bilah menu di sebagian besar browser akan memberi tahu Anda cara berhenti menerima Cookie baru, cara menerima pemberitahuan Cookie baru, dan cara menonaktifkan Cookie yang ada. Jika Anda menolak Cookie ICE Institute, banyak fungsi dan kemudahan situs ICE Institute mungkin tidak berfungsi dengan baik.
    Menyisih dari pelacakan dan iklan pihak ketiga tertentu: Beberapa pihak ketiga yang digunakan oleh ICE Institute untuk Cookie dan Teknologi Pelacakan menawarkan kemampuan untuk keluar dari pelacakan mereka dengan mengikuti proses yang dijelaskan di situs mereka. Daftar beberapa pihak ketiga tersebut disimpan dan tersedia di Pusat Bantuan ICE Institute pelajar dan termasuk, untuk beberapa, tautan ke proses penyisihan yang berlaku. ICE Institute tidak bertanggung jawab atas keefektifan opsi penyisihan pihak ketiga mana pun.



<br>
<h3 class="font-darker-grotesque text-1xl text-red-primary font-bold mt-4 lg:mt-12">BAGAIMANA INFORMASI ANDA DIGUNAKAN.</h3>


ICE Institute menggunakan informasi, termasuk Informasi Pribadi, untuk melakukan tujuan berikut:

    Mengoperasikan dan meningkatkan situs ICE Institute – Ini termasuk membuat dan meningkatkan fitur yang memungkinkan penggunaan situs ICE Institute dalam skala besar dan sebaliknya mendukung komunitas ICE Institute, termasuk melalui ICE Institute Marketplace dan Program Penyedia Pilihan ICE Institute. Ini juga termasuk mempersonalisasi situs ICE Institute, sehingga pengalaman Anda disesuaikan dengan minat dan kebutuhan Anda.
    Menawarkan dan meningkatkan produk dan layanan – Ini termasuk memungkinkan Anda untuk menavigasi situs ICE Institute dan untuk berpartisipasi dalam milis publik, ruang obrolan, forum, webinar, dan pengalaman interaktif lainnya yang ditawarkan di situs ICE Institute atau disponsori oleh tim ICE Institute .
    Mengembangkan dan memelihara keamanan dan kinerja situs ICE Institute – Ini termasuk melacak penghentian situs ICE Institute dan membuat solusi perangkat lunak, mendeteksi pelanggaran terhadap Persyaratan Layanan, dan memantau penggunaan, penyalahgunaan, dan potensi penyalahgunaan situs ICE Institute.
    Berkomunikasi dengan Anda – Ini termasuk memberi tahu Anda tentang pemeliharaan dan pembaruan situs ICE Institute, menjawab pertanyaan Anda mengenai platform dan/atau ICE Institute Marketplace, memasarkan kepada Anda tentang penawaran, berita, dan produk serta layanan terkait ICE Institute, dan sebagaimana diizinkan berdasarkan hukum yang berlaku, mengirimi Anda komunikasi tentang produk atau layanan dari mitra bisnis terpilih yang mungkin menarik bagi Anda.
    Lacak penggunaan situs ICE Institute terhadap tujuan dan misi – Ini termasuk melakukan analitik untuk mengevaluasi penggunaan ICE Institute Marketplace dan akses ke produk dan layanan dan untuk melaporkan informasi penggunaan agregat (bukan Informasi Pribadi) kepada mitra bisnis dan audiens eksternal.
    Menjalankan, menegakkan, dan mematuhi hak dan kewajiban hukum – Ini termasuk menanggapi panggilan pengadilan, perintah pengadilan, atau proses hukum lainnya; dan menyelidiki, mencegah, atau mengambil tindakan terkait aktivitas ilegal, dugaan penipuan, masalah keamanan atau teknis, atau untuk melindungi hak, properti, atau keselamatan ICE Institute atau lainnya, dan sebagaimana diwajibkan oleh hukum yang berlaku.

ICE Institute juga dapat meminta persetujuan Anda untuk penggunaan informasi tambahan, termasuk Informasi Pribadi, dan akan menggunakannya hanya untuk tujuan yang dijelaskan kepada Anda. Semua penggunaan Informasi Pribadi tunduk pada hukum yang berlaku. 
</p>
                           
             
                           
        <br>
<h3 class="font-darker-grotesque text-1xl text-red-primary font-bold mt-4 lg:mt-12">BAGAIMANA INFORMASI ANDA DIBAGIKAN.</h3>




ICE Institute membagikan informasi, termasuk Informasi Pribadi, dengan pihak ketiga untuk tujuan berikut:

Dengan penyedia layanan, kontraktor, dan pihak ketiga lainnya yang membantu melaksanakan penggunaan yang dijelaskan di atas, termasuk penyedia yang ingin Anda hubungi melalui ICE Institute Marketplace – ICE Institute mengharuskan pihak ketiga untuk: (1) mematuhi Kebijakan Privasi ini dan hukum yang berlaku; (2) menangani Informasi Pribadi secara rahasia dan menjaga keamanan yang memadai; dan (3) menggunakan Informasi Pribadi hanya jika diperlukan untuk memenuhi tujuan yang relevan. Dalam beberapa kasus, situs ICE terintegrasi dengan layanan pihak ketiga atau berisi tautan ke situs yang diterbitkan oleh pihak ketiga, termasuk penyedia konten dan penyedia layanan lainnya. Pihak ketiga ini bertanggung jawab atas praktik privasi mereka sendiri, jadi Anda harus memperhatikan kapan pun Anda diarahkan ke situs pihak ketiga dan pastikan untuk meninjau kebijakan privasinya.

Dengan pengunjung lain ke situs ICE Institute, untuk menciptakan lingkungan komunitas yang interaktif – Ini termasuk memberikan kesempatan bagi Anda untuk berkomunikasi dengan pengguna lain yang mungkin memiliki minat atau tujuan pendidikan yang sama, misalnya, merekomendasikan mitra platform tertentu.

Dengan afiliasi ICE Institute, atau dengan penerusnya jika terjadi merger, akuisisi, atau reorganisasi, untuk penggunaannya sesuai dengan Kebijakan Privasi ini.

ICE Institute juga dapat meminta persetujuan Anda untuk pengungkapan informasi tambahan, termasuk Informasi Pribadi, dan akan membagikannya hanya seperti yang dijelaskan kepada Anda. Selain itu, ICE Institute dapat berbagi dengan publik dan dengan pihak ketiga, termasuk namun tidak terbatas pada peneliti dan mitra bisnis, informasi dan Informasi Pribadi yang tidak teridentifikasi atau dikumpulkan dengan cara yang tidak mengidentifikasi Anda secara pribadi.
</p>
                                 

                    
                                      
                                           
                                        </div>
                                                                    </div>
                            </div>
                        </div>

                        <div class="flex justify-end bg-red-primary h-20 w-10 absolute top-0 rounded-3xl -left-16 translate-y-0" style="z-index: 1">
                            <span class="w-6/12 h-full bg-white"></span>
                        </div>
                        <div class="bg-red-primary h-32 w-24 absolute rounded-full -left-44 translate-y-20 top-0"></div>
                    </div>
                </div>
			
        </div>
