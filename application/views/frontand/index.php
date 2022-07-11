<!doctype html>
<html>

<?php require_once './components/Head.php' ?>

<body class="overflow-x-hidden">
    <?php require_once './components/navbar.php' ?>

    <div class="pt-12 lg:pt-16">
        <?php require_once './components/Hero.php' ?>

        <div class="container px-5 lg:px-20 mx-auto lg:mt-3">
            <div class="w-6/6 lg:w-3/6">

                <?php $SearchInputButton = true ?>
                <?php include './components/SearchInput.php' ?>
                <div class="flex mt-8">
                    <div class="flex flex-col lg:flex-row items-center w-2/6">
                        <span class="rounded-full p-2 bg-red-primary"><img class="w-5 h-5" src="./assets/images/book-icon.png" alt="book"></span>
                        <span class="font-darker-grotesque mt-1 lg:mt-0 lg:ml-2 text-gray-600">Berpengalaman</span>
                    </div>
                    <div class="flex flex-col lg:flex-row items-center w-2/6">
                        <span class="rounded-full p-2 bg-red-primary"><img class="w-5 h-5" src="./assets/images/hand-icon.png" alt="hand"></span>
                        <span class="font-darker-grotesque mt-1 lg:mt-0 lg:ml-2 text-gray-600">Berpengalaman</span>
                    </div>
                    <div class="flex flex-col lg:flex-row items-center w-2/6">
                        <span class="rounded-full p-2 bg-red-primary"><img class="w-5 h-5" src="./assets/images/check-icon.png" alt="check"></span>
                        <span class="font-darker-grotesque mt-1 lg:mt-0 lg:ml-2 text-gray-600">Berpengalaman</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-8 mx-auto px-5 lg:px-20">
            <div class="w-full lg:w-4/6 flex flex-col lg:flex-row items-center">
                <div class="w-full lg:w-3/12">
                    <h4 class="text-red-primary font-darker-grotesque text-xl">Tentang</h4>
                    <h3 class="text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl">ABCDEFG</h3>
                </div>
                <div class="w-full lg:w-9/12">
                    <p class="mt-1 lg:mt-0 font-darker-grotesque text-lg leading-5 lg:leading-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
            </div>
            <div class="flex items-center justify-center mt-10 lg:my-20">
                <button class="py-2 px-8 flex items-center justify-center font-bold font-darker-grotesque text-white bg-red-primary text-white rounded-[.8rem]" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, .25); color: #FFF">Baca Selengkapnya</button>
            </div>
        </div>

        <div class="mb-24 mt-12 lg:mt-20 mx-auto px-5 lg:px-20 container">
            <div class="w-full lg:w-7/12 mx-auto">
                <p class="text-center font-darker-grotesque text-xl">Loved by teams and companies you know</p>
                <div class="mt-6 px-3 lg:px-0" id="companies-loved-wrapper">
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <div class="bg-gray-200 w-3/12 mx-2 lg:mx-5 rounded-[.7rem] h-11">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="bg-gray-100 pb-16 lg:pt-0 -mt-8 lg:mt-0 rounded-b-[8.5rem]">
            <div class="w-full flex flex-col lg:flex-row mx-auto px-5 lg:px-20 container">
                <div class="w-full pt-6 lg:pt-0 lg:w-3/6">
                    <div class="flex items-center justify-center">
                        <img class="h-48 lg:-mt-12" src="./assets/images/visi-illustration.png" alt="visi">
                    </div>
                    <h2 class="text-center text-red-primary font-bold font-darker-grotesque text-4xl mt-8">Visi</h2>
                    <p class="font-darker-grotesque text-lg leading-6 mt-5 w-full lg:w-9/12 mx-auto text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque velit neque, ullamcorper at iaculis et, elementum eu nulla. Proin hendrerit orci sapien, sed dignissim velit viverra at.</p>
                </div>
                <div class="w-full pt-12 lg:pt-0 lg:w-3/6">
                    <div class="flex items-center justify-center">
                        <img class="h-48 lg:-mt-12" src="./assets/images/misi-illustration.png" alt="misi">
                    </div>
                    <h2 class="text-center text-red-primary font-bold font-darker-grotesque text-4xl mt-8">Misi</h2>
                    <p class="font-darker-grotesque text-lg leading-6 mt-5 w-full lg:w-9/12 mx-auto text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque velit neque, ullamcorper at iaculis et, elementum eu nulla. Proin hendrerit orci sapien, sed dignissim velit viverra at.</p>
                </div>
            </div>
        </div>

        <div class="container px-5 lg:px-20 mx-auto mt-12 lg:mt-16">
            <div class="w-full flex flex-col lg:flex-row">
                <div class="w-6/6 mb-6 lg:mb-0 lg:w-2/6">
                    <div class="gap-x-4 flex items-center">
                        <div class="w-1/12 flex items-center">
                            <img src="./assets/images/user-icon.jpg" class="h-6" alt="user-icon">
                        </div>
                        <div class="w-11/12 flex items-center">
                            <div class="w-2/6">
                                <h3 class="text-red-primary font-darker-grotesque font-bold text-4xl">20K</h3>
                            </div>
                            <div class="w-4/6">
                                <span class="font-darker-grotesque text-2xl font-medium text-gray-700">Lorem</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-x-4">
                        <div class="w-1/12">
                        </div>
                        <div class="w-11/12">
                            <p class="font-darker-grotesque mt-3 leading-5">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="w-6/6 mb-6 lg:mb-0 lg:w-2/6">
                    <div class="gap-x-4 flex items-center">
                        <div class="w-1/12 flex items-center">
                            <img src="./assets/images/book-1k.png" class="h-6" alt="book-1k">
                        </div>
                        <div class="w-11/12 flex items-center">
                            <div class="w-2/6">
                                <h3 class="text-red-primary font-darker-grotesque font-bold text-4xl">1K+</h3>
                            </div>
                            <div class="w-4/6">
                                <span class="font-darker-grotesque text-2xl font-medium text-gray-700">Ipsum</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-x-4">
                        <div class="w-1/12">
                        </div>
                        <div class="w-11/12">
                            <p class="font-darker-grotesque mt-3 leading-5">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="w-6/6 mb-6 lg:mb-0 lg:w-2/6">
                    <div class="gap-x-4 flex items-center">
                        <div class="w-1/12 flex items-center">
                            <img src="./assets/images/lecture-computer.png" class="h-6" alt="lecture-computer">
                        </div>
                        <div class="w-11/12 flex items-center">
                            <div class="w-2/6">
                                <h3 class="text-red-primary font-darker-grotesque font-bold text-4xl">600+</h3>
                            </div>
                            <div class="w-4/6">
                                <span class="font-darker-grotesque text-2xl font-medium text-gray-700">Dolor</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-x-4">
                        <div class="w-1/12">
                        </div>
                        <div class="w-11/12">
                            <p class="font-darker-grotesque mt-3 leading-5">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 lg:mt-24 mx-auto px-5 lg:px-40">
            <div class="w-6/6 flex flex-col lg:flex-row items-center">
                <div class="w-full lg:w-4/12">
                    <h4 class="text-red-primary font-darker-grotesque text-xl">MataKuliah</h4>
                    <h3 class="text-red-primary font-darker-grotesque -mt-2 font-bold text-4xl">ABCDEFG</h3>
                </div>
                <div class="w-100 lg:w-8/12">
                    <p class="mt-1 lg:mt-0 font-darker-grotesque text-lg leading-5 lg:leading-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
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
                <?php
                $materials = [
                    [
                        'name' => 'Data Science',
                        'image' => 'data-science-icon.png'
                    ],
                    [
                        'name' => 'Business',
                        'image' => 'handshake.png'
                    ],
                    [
                        'name' => 'Art & Humanities',
                        'image' => 'humanities-icon.png'
                    ],
                    [
                        'name' => 'Social Science',
                        'image' => 'social-science.png'
                    ],
                    [
                        'name' => 'Information Technology',
                        'image' => 'it.png'
                    ],
                    [
                        'name' => 'Maths & Logics',
                        'image' => 'math.png'
                    ],
                    [
                        'name' => 'Language Learning',
                        'image' => 'lang-learn.png'
                    ],
                    [
                        'name' => 'Computer Science',
                        'image' => 'cs.png'
                    ],
                    [
                        'name' => 'Biology',
                        'image' => 'biology.png'
                    ]
                ]
                ?>

                <?php foreach ($materials as $material) { ?>
                    <div class="rounded-lg flex items-center p-4 bg-gradient-to-r from-red-primary to-red-100">
                        <div class="w-1/6">
                            <img src="./assets/images/<?= $material['image'] ?>" class="h-10" alt="data-science">
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-darker-grotesque text-white font-bold text-xl"><?= $material['name'] ?></h4>
                            <p class="font-darker-grotesque text-white">000 lorem ipsum</p>
                        </div>
                    </div>
                <?php } ?>
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

                        <?php
                        $news = [
                            [
                                'title' => 'Peningkatan Belajar Daring Menggunakan Google Classroom',
                                'image' => 'college_students_news.png',
                                'desc' => 'Adanya pandemi covid-19 di Indonesia terdampak pada beberapa sektor khususnya
                                    pendidikan.'
                            ],
                            [
                                'title' => 'Penawaran Program Bantuan Inovasi Pembelajaran dan Teknologi',
                                'image' => 'news2.png',
                                'desc' => 'Sehubungan dengan hal tersebut ,Direktorat Pembelajaran dan Kemahasiswaan membuka kesempatan kepada perguruan tinggi '
                            ],
                            [
                                'title' => 'Pengaruh Pendekatan Pembelajaran Deduktif',
                                'image' => 'news3.png',
                                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.'
                            ]
                        ];
                        ?>

                        <?php foreach ($news as $news_obj) { ?>
                            <?php include './components/CardBerita.php' ?>
                        <?php } ?>
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
            <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="pt-10 mx-2 lg:mx-5">
                    <div class="py-5 pt-8 px-5 lg:px-7 bg-gray-200 relative rounded-[1.5rem] lg:rounded-[1.8rem]">
                        <div class="absolute -top-6 left-8 lg:left-14 bg-gray-100 p-4 rounded-full flex items-center justify-center">
                            <img src="./assets/images/user-icon-white.png" class="w-5" alt="">
                        </div>
                        <div class="relative mt-2">
                            <h4 class="font-semibold text-xl font-darker-grotesque text-red-primary">xxxxxxx</h4>
                            <p class="mt-1 leading-5 font-darker-grotesque">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque velit neque, ullamcorper at iaculis et, elementum eu nulla. Proin hendrerit orci sapien, sed dignissim velit viverra at.</p>
                            <h3 class="font-darker-grotesque font-bold mt-7 text-gray-500">Kepala ABCDEFG</h3>

                            <img src="./assets/images/kutip.png" class="absolute top-0 right-0 w-6" alt="">
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <?php require_once './components/Footer.php' ?>

    </div>

    <?php require_once './components/script.php' ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            new Flickity('.hero-wrapper', {
                wrapAround: true,
                pageDots: false,
                prevNextButtons: false,
                autoPlay: 1500
            });

            $('#companies-loved-wrapper').slick({
                slidesToShow: 4,
                autoplay: true,
                autoplaySpeed: 1500,
                responsive: [{
                    breakpoint: 1023,
                    settings: {
                        slidesToShow: 2,
                    }
                }]
            });

            $('#testimonial-wrap').slick({
                slidesToShow: 2,
                autoplay: true,
                autoplaySpeed: 1500,
                responsive: [{
                    breakpoint: 1023,
                    settings: {
                        slidesToShow: 1,
                    }
                }]
            });
        });
    </script>
</body>

</html>