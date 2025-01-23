<!-- javascript files -->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>
<script src="assets/js/SplitText.min.js"></script>
<script src="assets/js/gsapAnimation.js"></script>

<script src="assets/js/font-awesome.js"></script>
<script src="assets/js/counterup.min.js"></script>
<script src="assets/js/magnific-popup.js"></script>
<script src="assets/js/mousemove.js"></script>
<script src="assets/js/meanmenu.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/easing.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
    // Fancybox Configuration
    $('[data-fancybox="gallery"]').fancybox({
        buttons: [
            "slideShow",
            "thumbs",
            "zoom",
            "fullScreen",
            "share",
            "close"
        ],
        loop: false,
        protect: true
    });

</script>
<script>
    // swiper
    var mySwiper = new Swiper('.swiper-container', {
        effect: '',
        speed: 1000,
        slidesPerView: 1,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: 'true'
        },
        loop:true,
        // autoplay: {
        //     delay: 2000,
        // },
    });
</script>
@include('include.subscription-popup')
