<nav class="w-full fixed bg-white z-20 shadow">
        <div class="flex container mx-auto px-5 lg:px-20 py-1 justify-center lg:justify-between">
            <div class="logo flex-initial w-full lg:w-2/6 flex justify-center lg:justify-start items-center ">
                <img src="./assets/images/logo.png" class="w-12 lg:w-16" alt="">
                <h4 class="text-red-600 text-sm font-medium ml-2">ABCDEFG</h4>
            </div>
            <ul id="navbar-mobile" class="flex-initial nav-hidden w-full lg:w-4/6 fixed lg:relative bg-white left-0 top-14 lg:top-0 shadow-md lg:shadow-none lg:flex justify-between items-center nav-links py-4 lg:py-0">
                <li>
                    <a href="./index.php" class="px-4 py-2 w-full block lg:py-0 lg:px-0 font-darker-grotesque text-lg text-black">Beranda</a>
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
                            <li class=""><a class="rounded-t bg-white hover:bg-gray-200 py-2 font-darker-grotesque text-lg px-4 block whitespace-no-wrap" href="#">One</a></li>
                            <li class=""><a class="bg-white hover:bg-gray-200 py-2 font-darker-grotesque text-lg px-4 block whitespace-no-wrap" href="#">Two</a></li>
                            <li class=""><a class="rounded-b bg-white hover:bg-gray-200 py-2 font-darker-grotesque text-lg px-4 block whitespace-no-wrap" href="#">Three is the magic number</a></li>
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
                            <li class=""><a class="rounded-t bg-white hover:bg-gray-200 py-2 font-darker-grotesque text-lg px-4 block whitespace-no-wrap" href="#">One</a></li>
                            <li class=""><a class="bg-white hover:bg-gray-200 py-2 font-darker-grotesque text-lg px-4 block whitespace-no-wrap" href="#">Two</a></li>
                            <li class=""><a class="rounded-b bg-white hover:bg-gray-200 py-2 font-darker-grotesque text-lg px-4 block whitespace-no-wrap" href="#">Three is the magic number</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="./berita.php" class="px-4 py-2 w-full block lg:py-0 lg:px-0 font-darker-grotesque text-lg text-black">Berita</a>
                </li>
                <li>
                    <a href="" class="px-4 py-2 w-full block lg:py-0 lg:px-0 font-darker-grotesque text-lg text-black">Unduh</a>
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
                            <li class=""><a class="rounded-t bg-white hover:bg-gray-200 py-2 font-darker-grotesque text-lg px-4 block whitespace-no-wrap" href="#">One</a></li>
                            <li class=""><a class="bg-white hover:bg-gray-200 py-2 font-darker-grotesque text-lg px-4 block whitespace-no-wrap" href="#">Two</a></li>
                            <li class=""><a class="rounded-b bg-white hover:bg-gray-200 py-2 font-darker-grotesque text-lg px-4 block whitespace-no-wrap" href="#">Three is the magic number</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="" class="px-4 py-2 w-full block lg:py-0 lg:px-0 font-darker-grotesque text-lg text-black">Panduan</a>
                </li>
                <li>
                    <a href="" class="px-4 py-2 w-full block lg:py-0 lg:px-0 font-darker-grotesque text-lg text-black">Fakta Integritas</a>
                </li>
            </ul>

            <!-- Hamburger -->
            <div onclick="toggleNavbar()" id="hamburger" class="fixed flex flex-col items-end gap-y-1 top-4 cursor-pointer nav-hidden right-4 z-30 w-9 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </div>
            <!-- End of Hamburger -->
        </div>
    </nav>