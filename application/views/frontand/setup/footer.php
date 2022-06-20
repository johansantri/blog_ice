
        <div class="bg-gray-50 lg:rounded-t-[10rem] rounded-t-[4rem] pt-10">
<div class="container px-5 lg:px-20 mx-auto flex flex-col lg:flex-row mt-12 lg:mt-24">
    <div class="w-full lg:w-5/6">
        <h4 class="font-bold font-darker-grotesque">ICE Institute</h4>
        <ul class="mt-1">
            <li class="-mt-1 font-darker-grotesque">Universitas Terbuka</li>
            <li class="-mt-1 font-darker-grotesque">Gedung Serba Guna 1st Floor
            </li>
            <li class="-mt-1 font-darker-grotesque">Jl. Cabe Raya Pondok Cabe, Pamulang,
Tangerang Selatan </li>
            <li class="-mt-1 font-darker-grotesque">Banten - 15437</li>
        </ul>

        <ul class="mt-3">
            <li class="-mt-1 font-darker-grotesque"><i class="mr-2 zmdi zmdi-phone"></i> 0812 5050 4200</li>
            <li class="-mt-1 underline font-darker-grotesque"><a href=""><i class="mr-2 zmdi zmdi-email"></i>sekretariat@icei.ac.id</a></li>
            <li class="-mt-1 font-darker-grotesque"><a href=""><i class="mr-2 zmdi zmdi-globe-alt"></i> www.icei.ac.id</a></li>
        </ul>
    </div>
    <div class="w-5/6 mx-auto lg:mx-0 lg:w-1/6 flex mt-10 lg:mt-0 flex-col">
        <h4 class="font-bold text-center font-darker-grotesque">Join Us</h4>
        <ul class="flex justify-between mt-3">
            <li><a href=""><i class="text-red-primary text-3xl zmdi zmdi-facebook"></i></a></li>
            <li><a href=""><i class="text-red-primary text-3xl zmdi zmdi-youtube-play"></i></a></li>
            <li><a href=""><i class="text-red-primary text-3xl fa-brands fa-instagram"></i></a></li>
            <li><a href=""><i class="text-red-primary text-3xl zmdi zmdi-twitter"></i></a></li>
            <li><a href=""><i class="text-red-primary text-3xl zmdi zmdi-linkedin"></i></a></li>
        </ul>
    </div>
</div>
<div class="container mt-12 lg:mt-24 pb-8 px-5 lg:px-20 mx-auto relative">
    <p class="text-center font-darker-grotesque">&copy; ABCDEFG. All rights reserved.</p>
    <p class="lg:absolute flex justify-center mt-1 lg:mt-0 lg:justify-end items-center top-0 right-0">
        <a class="font-darker-grotesque" href="">Terms of use</a>
        <span class="mx-1">|</span>
        <a class="font-darker-grotesque" href="">Privacy policy</a>
        <span class="mx-1">|</span>
        <a class="font-darker-grotesque" href="">Cookie policy</a>
    </p>
</div>
</div>
    </div>

    <script>
    tailwind.config = {
        theme: {
            fontFamily: {
                'darker-grotesque': ['Darker Grotesque', 'sans-serif']
            },
            extend: {
                backgroundColor: {
                    'red-primary': "#EE1C25"
                },
                colors: {
                    'red-primary': "#EE1C25"
                }
            }

        }
    }
</script>
<script src="<?php echo base_url()?>assets/new/js/script.js?ver=1.1"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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