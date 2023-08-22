<script src="{{asset('site/js/jquery.js')}}"></script>
<script src="{{asset('site/js/waypoints.js')}}"></script>
<script src="{{asset('site/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('site/js/gsap.min.js')}}"></script>
<script src="{{asset('site/js/ScrollSmoother.min.js')}}"></script>
<script src="{{asset('site/js/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('site/js/split-text.min.js')}}"></script>
<script src="{{asset('site/js/slick.min.js')}}"></script>
<script src="{{asset('site/js/magnific-popup.js')}}"></script>
<script src="{{asset('site/js/counterup.js')}}"></script>
<script src="{{asset('site/js/wow.js')}}"></script>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.full.js"></script>
<script src="{{asset('site/js/swiper-bundle.js')}}"></script>
<script src="{{asset('site/js/meanmenu.js')}}"></script>
<script src="{{asset('site/js/tilt.jquery.js')}}"></script>
<script src="{{asset('site/js/isotope-pkgd.js')}}"></script>
<script src="{{asset('site/js/imagesloaded-pkgd.js')}}"></script>
<script src="{{asset('site/js/ajax-form.js')}}"></script>
<script src="{{asset('site/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/easyzoom@2.5.2/dist/easyzoom.js"></script>
<script src="{{asset('site/js/main.js')}}"></script>
<script>
    // product Gallery and Zoom

    // activation carousel plugin
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 5,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            0: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,
            },
        }
    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs
        },
    });
    // change carousel item height
    // gallery-top
    let productCarouselTopWidth = $('.gallery-top').outerWidth();
    $('.gallery-top').css('height', productCarouselTopWidth);

    // gallery-thumbs
    let productCarouselThumbsItemWith = $('.gallery-thumbs .swiper-slide').outerWidth();
    $('.gallery-thumbs').css('height', productCarouselThumbsItemWith);

    // activation zoom plugin
    var $easyzoom = $('.easyzoom').easyZoom();
</script>
<script>
    //select2
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

@yield('footerscript')
