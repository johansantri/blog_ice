<!doctype html>
<html>

<?php require_once './components/Head.php' ?>

<body class="overflow-x-hidden">
    <?php require_once './components/navbar.php' ?>

    <div class="pt-12 lg:pt-16">
        <?php require_once './components/Hero.php' ?>

        <div class="container relative flex flex-col-reverse bg-white lg:flex-row items-center px-5 lg:px-20 mx-auto mt-10 lg:mt-12 lg:mt-16">
            <div class="w-full w-full lg:w-5/12 mt-8 -mb-3 lg:mb-0 lg:mt-0 z-10 self-start">
                <h4 class="text-red-primary font-darker-grotesque text-xl">Info</h4>
                <h3 class="text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl">Berita</h3>
            </div>
            <div class="w-full lg:w-7/12 grid grid-cols-1 mt-4 lg:mt-0 lg:grid-cols-3 gap-x-4 flex-col">
                <?php for ($i = 0; $i < 3; $i++) { ?>
                    <div class="w-6/6 mb-6 lg:mb-0">
                        <div class="gap-x-4 flex items-center">
                            <div class="flex items-center">
                                <img src="./assets/images/user-icon.jpg" class="h-4 mr-3" alt="user-icon">
                                <h3 class="text-red-primary font-darker-grotesque font-bold text-4xl">20K</h3>
                            </div>
                        </div>
                        <p class="font-darker-grotesque mt-1 lg:mt-3 leading-5">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                <?php } ?>
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
                    <div class="grid gap-3 grid-cols-1 lg:grid-cols-3">
                        <?php
                        $news_obj = [
                            'title' => 'Pengaruh Pendekatan Pembelajaran Deduktif',
                            'image' => 'news3.png',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.'
                        ]
                        ?>
                        <?php for ($i = 0; $i < 6; $i++) { ?>
                            <?php include './components/CardBerita.php' ?>
                        <?php } ?>
                    </div>

                    <div class="flex justify-center gap-x-8 mt-8 items-center">
                        <span class="border-b-2 border-gray-600 font-semibold pb-1 font-darker-grotesque">01</span>
                        <span class="border-gray-600 font-semibold pb-1 font-darker-grotesque">03</span>
                        <span class="border-gray-600 font-semibold pb-1 font-darker-grotesque">02</span>
                        <span class="w-20 h-0.5 bg-black"></span>
                        <span><img class="w-4" src="./assets/images/code-icon.png" alt=""></span>
                    </div>
                </div>
                <div class="w-full lg:w-3/12">
                    <div>
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
            <div class="lg:w-4/6 mx-auto mt-8 lg:mt-20">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:w-5/12 self-start">
                        <h4 class="text-red-primary font-darker-grotesque text-xl">Kegiatan</h4>
                        <h3 class="text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl">ABCDEFG</h3>
                    </div>
                    <div class="w-full lg:w-7/12">
                        <p class="font-darker-grotesque mt-3 lg:mt-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
                <?php for ($i = 0; $i < 7; $i++) { ?>
                    <div class="px-3 mb-4">
                        <div class="w-full flex flex-col">
                            <div class="flex flex-col-reverse lg:flex-row rounded-[2rem]" style="box-shadow: 0px, 4px, 4px rgba(0, 0, 0, .25)">
                                <div class="w-full lg:w-7 lg:self-stretch h-8 lg:h-[unset] bg-[#C4C4C4] rounded-bl-[2rem] rounded-br-[2rem] lg:rounded-br-none lg:rounded-tl-[2rem]"></div>
                                <div class="w-full lg:w-fit flex flex-col-reverse lg:flex-row bg-red-primary rounded-tr-[2rem] rounded-tl-[2rem] lg:rounded-tl-none lg:rounded-br-[2rem]">
                                    <div class="w-full lg:w-8/12 flex py-8 px-4 items-start">
                                        <span class="w-4/12 text-white font-darker-grotesque">Lorem Ipsum</span>
                                        <span class="w-1/12 text-white font-darker-grotesque">|</span>
                                        <p class="w-6/12 text-lg text-white font-bold font-darker-grotesque leading-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="w-full lg:w-4/12 flex items-center justify-end">
                                        <img src="./assets/images/gray-college-100.png" class="rounded-[2rem] object-cover object-center" style="width: 100%; height: 100%;" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between items-center px-2 mt-2 lg:mt-2">
                                <span class="font-darker-grotesque">April 02, 2022</span>
                                <span class="font-darker-grotesque">ABCDEFG Building</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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

        <?php require_once './components/Footer.php' ?>
    </div>
    <?php require_once './components/script.php' ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            new Flickity('.hero-wrapper', {
                wrapAround: true,
                pageDots: false,
                prevNextButtons: false,
                autoPlay: 1500
            });

            $('.news-wrap').slick({
                rows: 2,
                wrapAround: false,
                slidesToShow: 2,
                autoplay: true,
                autoplaySpeed: 1500,
                responsive: [{
                    breakpoint: 1023,
                    settings: {
                        rows: 1,
                        slidesToShow: 1,
                    }
                }]
            });
        })
    </script>

</body>

</html>