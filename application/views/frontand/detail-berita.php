<!doctype html>
<html>

<?php require_once './components/Head.php' ?>

<body class="overflow-x-hidden">
    <?php require_once './components/navbar.php' ?>

    <div class="pt-12">
        <div class="container px-5 lg:px-20 mx-auto mt-10 lg:mt-12 lg:mt-16">
            <div class="w-full w-full self-start">
                <h4 class="text-red-primary font-darker-grotesque text-xl">Info</h4>
                <h3 class="text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl">Berita</h3>
            </div>
            <div class=" w-full">
                <div class="mb-5 lg:mb-8 my-8 hero-wrapper">
                    <div class="hero-slide w-full h-40 lg:h-[65vh] rounded-[17px] lg:rounded-[25px] bg-cover" style="background-image: url('./assets/images/college-student.png')"></div>
                </div>
            </div>
            <hr>
        </div>

        <div class="container px-5 mx-auto lg:px-20 mt-6 lg:mt-12">
            <div class="flex flex-col lg:flex-row gap-x-20">
                <div class="w-full lg:w-fit">
                    <div class="relative">
                        <div class="flex justify-between">
                            <span class="font-darker-grotesque">April, 02 2002</span>
                            <span class="font-darker-grotesque">oleh <span class="font-bold">admin</span></span>
                        </div>
                        <h1 class="font-darker-grotesque text-4xl text-red-primary font-bold mt-4 lg:mt-12">Lorem Ipsum Dolor Sit Amet</h1>

                        <div class="flex items-center justify-between mt-8 lg:mt-24">
                            <ul class="flex items-center gap-x-4 lg:gap-x-5 mt-3">
                                <li><a href=""><i class="text-red-primary text-xl lg:text-2xl zmdi zmdi-facebook"></i></a></li>
                                <li><a href=""><i class="text-red-primary text-xl lg:text-2xl zmdi zmdi-youtube-play"></i></a></li>
                                <li><a href=""><i class="text-red-primary text-xl lg:text-2xl fa-brands fa-instagram"></i></a></li>
                                <li><a href=""><i class="text-red-primary text-xl lg:text-2xl zmdi zmdi-twitter"></i></a></li>
                                <li><a href=""><i class="text-red-primary text-xl lg:text-2xl zmdi zmdi-linkedin"></i></a></li>
                            </ul>
                            <ul class="flex items-center gap-x-4">
                                <li><img class="h-4" src="./assets/images/bookmart-icon.png" alt=""></li>
                                <li><img class="h-4" src="./assets/images/flag-icon.png" alt=""></li>
                            </ul>
                        </div>
                        <div class="-mt-3 font-darker-grotesque">
                            <p class="mt-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque velit neque, ullamcorper at iaculis et, elementum eu nulla. Proin hendrerit orci sapien, sed dignissim velit viverra at. Pellentesque lacus mi, bibendum sed euismod eget, maximus in mauris. Pellentesque luctus lectus eu urna varius, sed tristique justo vestibulum. Fusce ac est rutrum, rutrum sem at, eleifend tortor. Sed finibus augue ut magna maximus malesuada. In in arcu placerat, ultrices est non, scelerisque nisi. Aenean sagittis euismod lobortis. Suspendisse euismod rhoncus tortor, in semper odio. Donec fermentum, nisl id accumsan sollicitudin, quam purus tempor diam, vitae cursus mi est eu nisi. Morbi dictum, felis ac convallis aliquam, arcu justo iaculis metus, nec porttitor nulla metus sit amet neque. Suspendisse ut ex nec ante vestibulum convallis varius in dui. Cras fringilla, velit sit amet dignissim semper, nulla risus finibus sapien, in laoreet massa magna nec tellus. Sed sagittis eu eros iaculis vehicula. Ut venenatis suscipit sagittis. Pellentesque aliquam pretium faucibus.</p>
                            <p class="mt-8">Donec tempus felis in quam tristique, non semper metus consequat. In faucibus efficitur dui, sed porta velit fringilla a. Aliquam id posuere augue. Mauris suscipit eu sem vel viverra. Nam consectetur dapibus libero id mattis. Sed aliquam ipsum in dapibus tristique. Vivamus non vehicula tortor.</p>
                            <p class="mt-8">Morbi vitae nisi rutrum dui semper blandit. Nulla a ex scelerisque, iaculis sapien vestibulum, placerat nibh. Nullam iaculis dolor id turpis mollis, sed euismod ligula iaculis. Nam vitae massa quam. Morbi gravida ultrices nibh vel aliquet. Aenean efficitur dictum euismod. Fusce vulputate iaculis enim a elementum. Aenean sed tincidunt leo, vel mollis nibh. Nunc iaculis eu neque non aliquet. Integer maximus venenatis nunc, eu viverra ipsum iaculis eu. Proin consectetur nibh ut euismod placerat.</p>
                            <p class="mt-8">Morbi cursus sagittis turpis at sollicitudin. Nunc rhoncus, orci et tempus vestibulum, lectus elit dapibus odio, egestas aliquet velit enim sit amet ligula. Nunc porttitor, tellus eu egestas ornare, justo lectus aliquet neque, at rutrum augue lectus sed nunc. Morbi ornare pretium pharetra. Duis eu ante egestas, auctor leo accumsan, pellentesque libero. Etiam erat enim, pharetra vel rutrum et, mollis id ex. Aliquam dapibus ultrices ipsum. Suspendisse potenti. Duis sit amet sollicitudin sapien. Aliquam bibendum dignissim pretium. Etiam metus lorem, semper eu elit et, condimentum tincidunt diam. Nulla vitae tincidunt massa. Quisque malesuada dui sit amet risus iaculis facilisis. Integer laoreet pretium nulla, id dignissim neque aliquet accumsan.</p>
                            <hr class="mt-12 lg:mt-24">

                            <div class="bg-gray-50 rounded-2xl mt-10 py-4 px-4 lg:px-12">
                                <h4 class="font-bold text-red-primary text-xl font-darker-grotesque">Beri Komentar</h4>
                                <textarea name="" id="" style="box-shadow: inset 0px 1px 2px rgba(0, 0, 0, .25);" class="h-36 mt-4 w-full p-3 focus:outline-none font-darker-grotesque placeholder:font-darker-grotesque rounded-xl" placeholder="Tulis tanggapan anda..." cols="30" rows="10"></textarea>
                                <div class="flex justify-end">
                                    <button style="box-shadow: 0px 4px 4px rgba(0, 0, 0, .25);" class="mt-4 rounded-xl bg-red-primary text-white font-bold px-10 py-2">Kirim</button>
                                </div>
                            </div>

                            <div class="mt-10">
                                <div class="flex items-center justify-between">
                                    <div class="flex gap-x-6">
                                        <div class="flex items-center gap-x-2">
                                            <svg width="16" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.34997 5.70001C9.76419 5.70001 10.1 6.0358 10.1 6.45001V8.45003H12.1C12.5142 8.45003 12.85 8.78582 12.85 9.20004C12.85 9.61425 12.5142 9.95004 12.1 9.95004H10.1V11.95C10.1 12.3642 9.76419 12.7 9.34997 12.7C8.93576 12.7 8.59997 12.3642 8.59997 11.95V9.95004H6.59995C6.18574 9.95004 5.84995 9.61425 5.84995 9.20004C5.84995 8.78582 6.18574 8.45004 6.59995 8.45004H8.59997V6.45001C8.59997 6.0358 8.93576 5.70001 9.34997 5.70001Z" fill="#2A2E2E" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.59182 12.3042C-0.656044 6.78675 3.40306 0.75 9.36088 0.75H9.6823C14.1379 0.75 17.7499 4.36201 17.7499 8.81765C17.7499 13.7785 13.7284 17.8 8.76759 17.8H0.947308C0.62905 17.8 0.345448 17.5991 0.23982 17.2989C0.134192 16.9987 0.229543 16.6645 0.477686 16.4652L2.44918 14.8819C2.53538 14.8127 2.56587 14.6951 2.52416 14.5927L1.59182 12.3042ZM9.36088 2.25C4.46834 2.25 1.13502 7.20735 2.98096 11.7383L3.9133 14.0268C4.2053 14.7435 3.99184 15.5669 3.38842 16.0515L3.07897 16.3H8.76759C12.9 16.3 16.2499 12.95 16.2499 8.81765C16.2499 5.19044 13.3095 2.25 9.6823 2.25H9.36088Z" fill="#2A2E2E" />
                                            </svg>
                                            <span class="font-darker-grotesque">100 Komentar</span>
                                        </div>
                                        <div class="flex items-center gap-x-2">
                                            <svg width="16" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.95726 2.19236C1.54566 3.52645 1.54566 4.97349 1.95726 6.30758C6.64158 6.75904 11.3585 6.75904 16.0428 6.30758C16.4544 4.97349 16.4544 3.52645 16.0428 2.19236C11.3585 1.74089 6.64158 1.74089 1.95726 2.19236ZM1.70877 0.709432C6.55804 0.235202 11.442 0.235202 16.2913 0.709432C16.8258 0.761708 17.2751 1.128 17.4393 1.63377C17.9889 3.32686 17.9889 5.17307 17.4393 6.86617C17.2751 7.37194 16.8258 7.73823 16.2913 7.7905C11.442 8.26473 6.55804 8.26473 1.70877 7.7905C1.17422 7.73823 0.724954 7.37194 0.560769 6.86617C0.0111563 5.17307 0.0111564 3.32686 0.560769 1.63377C0.724954 1.128 1.17422 0.761708 1.70877 0.709432Z" fill="#2A2E2E" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.95726 11.6924C1.54566 13.0265 1.54566 14.4735 1.95726 15.8076C6.64158 16.259 11.3585 16.259 16.0428 15.8076C16.4544 14.4735 16.4544 13.0265 16.0428 11.6924C11.3585 11.2409 6.64158 11.2409 1.95726 11.6924ZM1.70877 10.2094C6.55804 9.7352 11.442 9.7352 16.2913 10.2094C16.8258 10.2617 17.2751 10.628 17.4393 11.1338C17.9889 12.8269 17.9889 14.6731 17.4393 16.3662C17.2751 16.8719 16.8258 17.2382 16.2913 17.2905C11.442 17.7647 6.55804 17.7647 1.70877 17.2905C1.17422 17.2382 0.724954 16.8719 0.560769 16.3662C0.0111563 14.6731 0.0111564 12.8269 0.560769 11.1338C0.724954 10.628 1.17422 10.2617 1.70877 10.2094Z" fill="#2A2E2E" />
                                            </svg>
                                            <span class="font-darker-grotesque">Sortir dengan</span>
                                            <i class="zmdi zmdi-chevron-down"></i>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <svg width="14" height="16" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 4.5C3.75 2.15279 5.65279 0.25 8 0.25C10.3472 0.25 12.25 2.15279 12.25 4.5C12.25 6.84721 10.3472 8.75 8 8.75C5.65279 8.75 3.75 6.84721 3.75 4.5ZM8 1.75C6.48122 1.75 5.25 2.98122 5.25 4.5C5.25 6.01878 6.48122 7.25 8 7.25C9.51878 7.25 10.75 6.01878 10.75 4.5C10.75 2.98122 9.51878 1.75 8 1.75Z" fill="#2A2E2E" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 11.75C2.75736 11.75 1.75 12.7574 1.75 14V15.1883C1.75 15.2064 1.76311 15.2218 1.78097 15.2247C5.89972 15.8972 10.1003 15.8972 14.219 15.2247C14.2369 15.2218 14.25 15.2064 14.25 15.1883V14C14.25 12.7574 13.2426 11.75 12 11.75H11.6591C11.6328 11.75 11.6066 11.7542 11.5815 11.7623L10.716 12.045C8.95119 12.6212 7.04881 12.6212 5.28398 12.045L4.41847 11.7623C4.39342 11.7542 4.36722 11.75 4.34087 11.75H4ZM0.25 14C0.25 11.9289 1.92893 10.25 4 10.25H4.34087C4.52536 10.25 4.70869 10.2792 4.88407 10.3364L5.74959 10.6191C7.21187 11.0965 8.78813 11.0965 10.2504 10.6191L11.1159 10.3364C11.2913 10.2792 11.4746 10.25 11.6591 10.25H12C14.0711 10.25 15.75 11.9289 15.75 14V15.1883C15.75 15.9415 15.2041 16.5837 14.4607 16.7051C10.1819 17.4037 5.8181 17.4037 1.53927 16.7051C0.795884 16.5837 0.25 15.9415 0.25 15.1883V14Z" fill="#2A2E2E" />
                                        </svg>
                                        <span><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                </div>
                                <div>
                                    <?php for ($i = 0; $i < 2; $i++) { ?>
                                        <div class="flex items-start gap-x-3 mt-12">
                                            <div class="w-10/12 flex gap-x-5 items-start">
                                                <img src="./assets/images/photo-profile.png" class="h-12 w-12 object-cover object-center rounded-full" alt="">
                                                <div>
                                                    <h4 class="font-darker-grotesque">ABCDE</h4>
                                                    <p class="font-darker-grotesque">Bacaan yang sangat bagus</p>
                                                    <div class="flex items-center gap-x-4 mt-2">
                                                        <span class="flex items-center gap-x-1">
                                                            <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.25 5.0298C0.25 2.3293 2.61914 0.25 5.4 0.25C6.83347 0.25 8.09484 0.922139 9 1.79183C9.90516 0.922139 11.1665 0.25 12.6 0.25C15.3809 0.25 17.75 2.3293 17.75 5.0298C17.75 6.87967 16.9611 8.50644 15.8682 9.88154C14.7771 11.2543 13.35 12.4193 11.9835 13.366C11.4615 13.7276 10.9335 14.0611 10.4503 14.3072C9.99651 14.5383 9.47474 14.75 9 14.75C8.52526 14.75 8.00349 14.5383 7.54973 14.3072C7.06648 14.0611 6.53846 13.7276 6.01653 13.366C4.65005 12.4193 3.22287 11.2543 2.13182 9.88154C1.03888 8.50644 0.25 6.87967 0.25 5.0298ZM5.4 1.75C3.32075 1.75 1.75 3.2791 1.75 5.0298C1.75 6.43329 2.34579 7.74 3.30609 8.94822C4.26828 10.1588 5.56292 11.2269 6.87074 12.133C7.36562 12.4758 7.83174 12.7675 8.23045 12.9706C8.65865 13.1886 8.90666 13.25 9 13.25C9.09334 13.25 9.34135 13.1886 9.76955 12.9706C10.1683 12.7675 10.6344 12.4758 11.1293 12.133C12.4371 11.2269 13.7317 10.1588 14.6939 8.94822C15.6542 7.74 16.25 6.43329 16.25 5.0298C16.25 3.2791 14.6792 1.75 12.6 1.75C11.4058 1.75 10.2908 2.46342 9.59457 3.36892C9.4526 3.55356 9.23291 3.66176 9 3.66176C8.76709 3.66176 8.5474 3.55356 8.40544 3.36892C7.7092 2.46342 6.59415 1.75 5.4 1.75Z" fill="#A02460" />
                                                            </svg>
                                                            <p class="text-sm font-darker-grotesque">18</p>
                                                        </span>
                                                        <span class="flex items-center gap-x-1">
                                                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.460145 11.8191C0.238562 11.5893 0.186703 11.2444 0.330908 10.9596L1.03241 9.57426C2.69268 6.29544 6.05563 4.2288 9.73084 4.2288H10.0757C10.1009 3.68242 10.1334 3.1363 10.1731 2.59057L10.241 1.65993C10.2961 0.90311 11.14 0.480043 11.7795 0.888625C13.8771 2.22899 15.7007 3.95608 17.153 5.97783L17.6091 6.61277C17.797 6.87425 17.797 7.22643 17.6091 7.4879L17.153 8.12284C15.7007 10.1446 13.8771 11.8717 11.7795 13.212C11.14 13.6206 10.2961 13.1976 10.241 12.4407L10.1731 11.5101C10.1256 10.8584 10.0886 10.2061 10.0619 9.55348C7.91207 9.49142 5.76486 9.92534 3.7915 10.8361L1.31431 11.9794C1.02447 12.1132 0.681728 12.0488 0.460145 11.8191ZM2.67839 9.6978L3.16291 9.47417C5.57405 8.36135 8.21958 7.89154 10.8447 8.09316C11.227 8.12252 11.5256 8.43553 11.5369 8.81879C11.5624 9.68016 11.6065 10.5411 11.6692 11.401L11.6746 11.4755C13.3181 10.3138 14.7583 8.88546 15.9348 7.24771L16.0766 7.05034L15.9348 6.85296C14.7583 5.21522 13.3181 3.78683 11.6746 2.62517L11.6692 2.69962C11.6132 3.46723 11.5721 4.23565 11.5458 5.00445C11.532 5.40844 11.2005 5.7288 10.7962 5.7288L9.73084 5.7288C6.83352 5.7288 4.16555 7.2467 2.67839 9.6978Z" fill="black" />
                                                            </svg>
                                                            <p class="text-sm font-darker-grotesque">Balas</p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-2/12">
                                                <span class="font-darker-grotesque text-sm">8 Jam lalu</span>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end bg-red-primary h-20 w-10 absolute top-0 rounded-3xl -left-16 translate-y-0" style="z-index: 1">
                            <span class="w-6/12 h-full bg-white"></span>
                        </div>
                        <div class="bg-red-primary h-32 w-24 absolute rounded-full -left-44 translate-y-20 top-0"></div>
                    </div>
                </div>
                <div class="w-full lg:w-[42%]">
                    <div class="mt-20 lg:mt-0">
                        <?php $SearchInputButton = false ?>
                        <?php include './components/SearchInput.php' ?>
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
                                    <h5 class="text-center -mt-1 font-bold font-darker-grotesque">ttttttttttttt</h5>
                                </div>
                                <p class="text-center font-darker-grotesque mt-3 leading-5">Satu orang yang beruntung akan mendapatkan kesempatan untuk memenangkan xxx ini</p>
                                <div class="flex items-center justify-center my-3">
                                    <img src="./assets/images/book.png" class="w-full" alt="book">
                                </div>
                                <p class="font-darker-grotesque text-center">Masuk dan ikuti giveaway ini</p>
                                <button class="py-3 px-8 flex mx-auto my-2 items-center justify-center font-bold font-darker-grotesque text-white bg-red-primary text-white rounded-[1rem]" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, .25); color: #FFF">Gunakan Emailmu</button>
                                <p class="font-darker-grotesque text-center text-gray-600 mt-1">Aturan dan ketentuan giveaway</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12">
                        <h4 class="font-darker-grotesque text-red-primary font-semibold text-2xl">Populer Now</h4>
                        <div class="mt-5">
                            <?php for ($i = 0; $i < 4; $i++) { ?>
                                <div class="flex gap-x-4 mb-7">
                                    <div class="w-5/12 relative">
                                        <img class="rounded-lg w-full h-16 object-center object-cover" src="./assets/images/image-gray-college.png" alt="">
                                        <span class="bg-red-primary w-5 rounded-full h-5 top-0 left-0 absolute"></span>
                                    </div>
                                    <div class="w-7/12">
                                        <a href="" class="font-darker-grotesque text-red-primary leading-5 block">Lorem ipsum dolor sit amet consectetur </a>
                                        <span class="font-darker-grotesque block mt-1 text-sm">April 02, 2002</span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once './components/Footer.php' ?>
    </div>
    <?php require_once './components/script.php' ?>
</body>

</html>