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
    var swiperMobile = new Swiper('.swiper-container.swiper-full-mobile', {
        slidesPerView: 4,
        spaceBetween: 0,
        slideToClickedSlide:true,
        centeredSlides:true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,

        },
        effect: "coverflow",
        grabCursor: true,

        coverflowEffect: {
            rotate: -10,
            stretch: 10,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },

        loop:true,
        autoplay: {
            delay: 2000,
        },


        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },


        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },


        breakpoints: {

            640: {
                freemode:true,
                slidesPerView: 1,
                spaceBetween: 20,
            },
            320: {
                freemode:true,
                slidesPerView: 1,
                spaceBetween: 20,
            }
        }

    });

</script>
<script>

    // Array of background images
    const images = [
        'assets/slider/slider1.webp',
        'assets/slider/slider2.webp',
        'assets/slider/slider3.webp',
        'assets/slider/slider4.webp',
        'assets/slider/slider5.webp',
        'assets/slider/slider6.webp',
        'assets/slider/slider7.webp',
    ];

    // Select the slider element
    const slider = document.querySelector('.slider');

    // Variables for autoplay
    let currentIndex = 0;
    const delaySpeed = 3000; // Delay speed in milliseconds (e.g., 5000ms = 5 seconds)
    let interval; // Store interval ID for autoplay

    // Preload images
    function preloadImages(imageArray) {
        imageArray.forEach((src) => {
            const img = new Image();
            img.src = src;
        });
    }

    // Preload all images before starting
    preloadImages(images);

    // Function to change the background image
    function changeBackground() {
        slider.style.backgroundImage = `url(${images[currentIndex]})`;

        // Apply specific styles for certain images
        if (images[currentIndex] === 'assets/slider/slider2.webp') {
            slider.style.backgroundPositionY = '25%'; // For slider2.jpg
        } else if (images[currentIndex] === 'assets/slider/slider5.webp') {
            slider.style.backgroundPositionY = '0%'; // For slider5.jpg
        } else {
            slider.style.backgroundPositionY = 'center'; // Default for other images
        }

        currentIndex = (currentIndex + 1) % images.length; // Loop back to the first image
    }

    // Function to start autoplay
    function startAutoplay() {
        changeBackground(); // Set initial background
        interval = setInterval(changeBackground, delaySpeed); // Automatically change background
    }

    // Function to pause autoplay
    function pauseAutoplay() {
        clearInterval(interval); // Stop changing the background
    }

    // Start autoplay on page load
    startAutoplay();

    // Add event listeners for play/pause buttons
    document.getElementById('play-btn').addEventListener('click', startAutoplay);
    document.getElementById('pause-btn').addEventListener('click', pauseAutoplay);
</script>
@include('include.subscription-popup')
