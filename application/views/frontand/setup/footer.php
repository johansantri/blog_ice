
        <div class="bg-gray-50 lg:rounded-t-[10rem] rounded-t-[4rem] pt-10">
<div class="container px-5 lg:px-20 mx-auto flex flex-col lg:flex-row mt-12 lg:mt-24">
    <div class="w-full lg:w-5/6">
        <h4 class="inline text-red-primary font-darker-grotesque -mt-2 font-bold text-2xl">ICE Institute</h4>
        <ul class="mt-1">
            <li class="-mt-1 font-darker-grotesque">Universitas Terbuka</li>
            <li class="-mt-1 font-darker-grotesque">Gedung LPPMP Lantai 2
            </li>
            <li class="-mt-1 font-darker-grotesque">Jl. Cabe Raya Pondok Cabe, Pamulang,
Tangerang Selatan </li>
            <li class="-mt-1 font-darker-grotesque">Banten - 15437</li>
        </ul>

        <ul class="mt-3">
            <li class="-mt-1 font-darker-grotesque"><i class="mr-2 zmdi zmdi-phone"></i> 0812 5050 4200</li>
            <li class="-mt-1 underline font-darker-grotesque"><a href="mailto:sekretariat@icei.ac.id"><i class="mr-2 zmdi zmdi-email"></i>sekretariat@icei.ac.id</a></li>
            <li class="-mt-1 font-darker-grotesque"><a href="https://www.icei.ac.id" target="_blank"><i class="mr-2 zmdi zmdi-globe-alt"></i> www.icei.ac.id</a></li>
        </ul>
    </div>
    <div class="w-5/6 mx-auto lg:mx-0 lg:w-1/6 flex mt-10 lg:mt-0 flex-col">
        <h4 class="font-bold text-center font-darker-grotesque">Join Us</h4>
        <ul class="flex justify-between mt-3">
            <li><a href="https://www.facebook.com/ice.institut"><i class="text-red-primary text-3xl zmdi zmdi-facebook"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UC2tFtypIqAUXk3FK6V4a5cg"><i class="text-red-primary text-3xl zmdi zmdi-youtube-play"></i></a></li>
            <li><a href="https://www.instagram.com/accounts/login/?next=/ice.institute/"><i class="text-red-primary text-3xl fa-brands fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/ice_institute_"><i class="text-red-primary text-3xl zmdi zmdi-twitter"></i></a></li>
            <li><a href="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/linkedin_circle_color-128.png"><i class="text-red-primary text-3xl zmdi zmdi-linkedin"></i></a></li>
        </ul>
    </div>
</div>
<div class="container mt-12 lg:mt-24 pb-8 px-5 lg:px-20 mx-auto relative">
    <p class="text-center font-darker-grotesque">2022 &copy; ICE Institute. All rights reserved.</p>
    <p class="lg:absolute flex justify-center mt-1 lg:mt-0 lg:justify-end items-center top-0 right-0">
        <a class="font-darker-grotesque" href="<?php echo base_url()?>terms">Terms of use</a>
        <span class="mx-1">|</span>
        <a class="font-darker-grotesque" href="<?php echo base_url()?>privacy">Privacy policy</a>
        <span class="mx-1">|</span>
        <a class="font-darker-grotesque" href="<?php echo base_url()?>sitemap.xml">Sitemap</a>
        
    </p>
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
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-3.6.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/flickity.pkgd.min.js"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



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
    <script>
            function fade(element) {
            var op = 1; // initial opacity
            var timer = setInterval(function() {
            if (op <= 0.1) {
            clearInterval(timer);

            element.style.display = 'none';
            }
            element.style.opacity = op;
            element.style.filter = 'alpha(opacity=' + op * 100 + ")";
            op -= op * 0.1;
            }, 50);
            }

            setTimeout(function() {
            //Display splash
            setTimeout(function() {
            fade(document.getElementById('splash'));
            }, 1000);
            
            }, 0);
    </script>
    
    <script>
    // cache dom
var $shareBtn = $('.share-btn');
var $shareUrl = $('.share-url');
var $shareContainer = $('.share-container');
var $notificationButton = $('.notification-button');

// set data
const element = document.getElementById("apa");

var $url = element.innerHTML;
var $shared = false;

/**
 *
 */
function shareLink(e){

    // set active class
    $shareBtn.toggleClass('active');
    $shareUrl.toggleClass('active');
    $shareContainer.toggleClass('active');

    if ($shared === false) {

        // trigger notification alert
        $notificationButton.toggleClass('active');
        $shared = true;
        $shareBtn.text('Unshare');
        $shareUrl.text($url);

        var range = document.createRange();
        range.selectNode($(this).next()[0]);
        window.getSelection().addRange(range);

        try {
            // Now that we've selected the anchor text, execute the copy command
            var successful = document.execCommand('copy');
            var msg = successful ? 'successful' : 'unsuccessful';
            console.log('Copy  command was ' + msg);

        } catch(err) {

            console.log('Oops, unable to copy');

        }

        // Remove the selections - NOTE: Should use
        // removeRange(range) when it is supported
        window.getSelection().removeAllRanges();


    } else {
        $shared = false;
        $shareBtn.text('Share');
    }
}

/**
 * removes the active class after a set period of time
 */
function fadeOutNotification(){
    setTimeout(function(){
        $notificationButton.removeClass('active');
    }, 2000);
}

// bind events
$shareBtn.on('click', shareLink);
$notificationButton.on('transitionend', fadeOutNotification);
</script>
    <script>
      $(function () {

        $('#form-id').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: '/berita/addcom',
            data: $('form').serialize(),
            success: function () {
                
             
                  
             alert('thanks, your comment audit');
              $('[name="nama_comment"]').val("");
              
              $('[name="email_comment"]').val("");
              $('[name="description_comment"]').val("");
              $('#ok').hide();

            }
          });

        });

      });
    </script>

</body>

</html>