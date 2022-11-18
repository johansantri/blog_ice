
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
                    
                        <h1 class="font-darker-grotesque text-4xl text-red-primary font-bold mt-4 lg:mt-12">Syarat dan Ketentuan Penggunaan Layanan (KPL) ICE Institute </h1>
                          <p hidden id="apa"><?php echo base_url()?>terms</p>

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

Selamat datang di ICE Institute. Harap baca KPLini sebelum Anda mendaftarkanakundi ICE Institute atau menggunakan bagian mana pun dari situs atau aplikasi seluler ICE Institute (secara bersama-sama disebut "Situs ICE Institute", yang terdiri dari semua konten dan halaman yang terletak di dalam domain icei.ac.id dan semua aplikasi seluler ICE Institute), termasuk mengakses materi kursus, ruang obrolan, atau layanan elektronik lainnya. Dengan menggunakan Situs ICE Institute, Anda menerima dan menyetujui untuk terikat secara hukum oleh Perjanjian, baik Anda pengguna terdaftar atau bukan. Harap baca juga Kebijakan Privasi untuk SitusICE Institute sebelum Anda menggunakan bagian mana pun dari SitusICE Institute. Kebijakan Privasi menjelaskan bagaimana data pribadi Anda dikumpulkan dan diproses saat Anda menggunakan Situs ICE Institute.
</p>
<br>
<p>
ICE Institute berhak untuk mengubah KPL ini kapan saja tanpa pemberitahuan sebelumnya. Setiap perubahan pada KPLini akan berlaku segera setelah di-posting di halaman ini, dengan tanggal efektif yang diperbarui. Dengan mengakses Situs ICE Institute setelah perubahan apa pun yang dilakukan, menandakan Anda menyetujui secara prospektif terhadap KPL yang telah dimodifikasi dan terhadap semua perubahan.
</p>
<br>
<p>

<h3 class="font-darker-grotesque text-1xl text-red-primary font-bold mt-4 lg:mt-12">KPL ini meliputi hal-hal sebagai berikut.</h3>
Aturan dan Etika Kegiatan di Dunia Maya

Anda setuju bahwa Anda bertanggung jawab atas penggunaan Situs ICE Institute dan atas posting-an Anda. "Posting-an Pengguna" adalah semua konten yang dikirimkan, di-posting, diterbitkan, atau di distribusikan di Situs ICE Institute, termasuk posting-an diforum diskusi, suntingan wiki, catatan, pertanyaan, komentar, video, dan unggahan berkas. Anda menyetujui bahwa Anda akan menggunakan Situs ICE Institute sesuai dengan aturan ini dan sesuai dengan undang-undang, peraturan dan regulasi lokal, nasional dan internasional yang berlaku, termasuk undang-undang hak cipta, dan undang-undang apa pun mengenai transmisi data teknis di Indonesia.

Syarat penggunaan Situs ICE Institute adalah Anda tidak akan menggunakan Situs ICE Institute dengan tujuan merusak, menonaktifkan, membebani, merusak server ICE Institute atau jaringan yang terhubung ke server ICE Institute, atau mengganggu penggunaan dan kenikmatan pihak lain di Situs ICE Institute. Anda tidak diperbolehkan mencoba untuk mendapatkan akses tidak sah ke Situs ICE Institute, akun lain, sistem komputer, atau jaringan yang terhubung ke server ICE Institute melalui peretasan, penambangan kata sandi, atau cara lain. Anda tidak diperbolehkan memperoleh atau mencoba memperoleh materi atau informasi apa pun yang disimpan pada Situs ICE Institute, pada server, atau pada komputer terkait melalui cara apa pun. Jika Anda adalah pengguna terdaftar, Anda tidak diperbolehkan membagikan kata sandi Anda atau membiarkan orang lain mengakses Situs ICE Institute dengan akun Anda karena akan membahayakan akun Anda sendiri.

Selanjutnya, Anda menyetujui untuk tidak mengunduh secara massal, konten apa pun pada Situs ICE Institute, termasuk tetapi tidak terbatas pada daftar atau direktori pengguna di sistem, posting-an pengguna atau informasi pengguna, buku teks online, materi kursus, atau merek dagang dan logo. Anda menyetujui untuk tidak memberikan informasi yang salah atau mencoba untuk memberikan informasi yang salah terkait dengan identitas Anda saat menggunakan Situs ICE Institute (walaupun Anda diperbolehkan untuk menggunakan nama pengguna anonim di forum).
<br>
<h3 class="font-darker-grotesque text-1xl text-red-primary font-bold mt-4 lg:mt-12">Hal-hal yang tidak diperbolehkan.</h3>


Hal-hal yang dilarang keras untuk di-posting di Situs ICE Institute sebagai berikut.

    Konten yang mencemarkan nama baik, melecehkan, atau mengancam orang lain;
    Konten yang membahas aktivitas ilegal;
    Konten yang melanggar kekayaan intelektual orang lain, termasuk hak cipta atau merek dagang;
    Konten yang tidak senonoh, pornografi, atau yang melanggar hukum;
    Konten yang berbau sara atau kebencian terhadap kelompok tertentu;
    Iklan atau segala bentuk ajakan komersial;
    Virus, trojan horse, worm, malware, spyware, atau perangkat lunak serupa lainnya yang dapat merusak pengoperasian komputer atau properti orang lain; dan
    Konten yang berisi informasi yang tidak akurat.


<br>
<h3 class="font-darker-grotesque text-1xl text-red-primary font-bold mt-4 lg:mt-12">Akun Pengguna.</h3>

Untuk membuat akun pengguna, Anda harus memberikan nama lengkap, alamat email, negara atau wilayah tempat tinggal Anda, nama penggunayang akan digunakan sebagai nama akun, dan kata sandi pengguna. Anda menyetujui bahwa Anda tidak akan pernah membocorkan atau membagikan kewenangan akses akun pengguna Anda kepada pihak ketiga mana pun untuk alasan apa pun. Dalam mengatur akun pengguna Anda, Anda mungkin diminta untuk memasukkan informasi opsional tambahan (misalnya, tahun lahir Anda). Anda menyatakan bahwa semua informasi yang Anda berikan adalah akurat dan terkini. Anda setuju untuk menyimpan dan memperbarui informasi Anda agar tetap akurat dan terkini.

Kami peduli dengan kerahasiaan dan keamanan informasi pribadi Anda. Silakan lihat Kebijakan Privasi untuk informasi lebih lanjut tentang pengumpulan dan penggunaan data di Situs ICE Institute.
Hak Anda untuk menggunakan Konten di Situs ICE Institute

Konten di Situs ICE Institute dilindungi oleh undang-undang hak cipta, kecuali konten yang dinyatakan sebagai domain publik. Teks, ujian, video, gambar, dan materi instruksional lainnya yang disediakan bersama mata kuliahdan program yang ditawarkan di Situs ICE Institute adalah untuk penggunaan pribadi Anda. Dokumen referensi tertentu, buku teks digital, artikel, dan informasi lain di Situs ICE Institute dapat digunakan dengan izin dari pihak ketiga. Penggunaan informasi tersebut tunduk pada aturan dan ketentuan tertentu. Aturan dan ketentuan akan di-posting bersama dengan informasi tersebut. Secara tidak langsung dengan menggunakan Situs ICE Institute, Anda menyetujui untuk mematuhi semua aturan dan ketentuan ini.
<br>

<h3 class="font-darker-grotesque text-1xl text-red-primary font-bold mt-4 lg:mt-12">Sertifikat.</h3>

ICE Institute menawarkan Sertifikat Pencapaian mata kuliah yang terverifikasi bagi pengguna. Sertifikat telah sesuai dengan penilaian Institusi pengembang mata kuliah dan telah menunjukkan penguasaan terhadap mata kuliah. Sertifikat akan diterbitkan oleh ICE Institute atas nama Institusi pengembang mata kuliah. Keputusan apakah sertifikat akan diberikan kepada pengguna tertentu sepenuhnya menjadi kebijaksanaan Institusi pengembang mata kuliah sebagai pemberi penghargaan.
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
