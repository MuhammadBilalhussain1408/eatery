@extends('layouts.master')
@section('content')
    <style>
        .brand-home-3 .brand-logo img {
            margin: auto;
            width: 100%;
        }

        .brand-area {
            border-top: 1px solid #ffff00;
            border-bottom: 1px solid #ffff00;
        }

        .ceo-logo {
            width: 78% !important;
            padding-top: 89px;
        }

        .brand-area .brand-logo:hover {
            border: 1px solid #e1612e;
        }
        .service-img1{
            width: 34%;
            /*position: relative;*/
            /*display: inline-block;*/
            /*margin: auto;*/
            /*left: 23%;*/
        }
        .service-img2{
            width: 60%;
        }
        .service-img3{
            width: 60%;
        }
        .section-top-2 h2 {
            color: white;
        }
        .brand-items .brand-single-2 {
            margin: 30px 28px 30px 0;
            float: left;
            overflow: hidden;
        }
        .brand-items .brand-logo {
            border: 1px solid #ffffff;
        }
        .brand-items .brand-logo {
            border: 8px solid #e2612e;
            background-color: white;
        }
        .brand-items .brand-logo img.v1 {
            width: 182px;
            padding-top: 5.5rem;
        }
        .brand-items .brand-logo img.v2 {
            width: 182px;
            padding-top: 5.5rem;
        }
        .brand-items .brand-logo img.v3 {
            width: 182px;
            padding-top: 1.5rem;
        }
        .brand-items .brand-logo img.v4 {
            width: 182px;
            padding-top: 1.3rem;
        }
        .brand-items .brand-logo img.v5 {
            width: 182px;
            padding-top: 1.5rem;
        }
        .brand-items .brand-logo img.v6 {
            width: 182px;
            padding-top: 1.5rem;
        }
        .brand-items .brand-logo img.v7 {
            width: 153px;
            padding-top: 2.4rem;
        }
        .brand-items .brand-logo img.v8 {
            width: 153px;
            padding-top: 2.4rem;
        }

        .brand-items .brand-logo img{
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }
        .middle {
            transition: .5s ease;
            opacity: 0;
            position: relative;
            bottom: 34%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }
        .brand-logo:hover img {
            opacity: 0.3;
        }

        .brand-logo:hover .middle {
            opacity: 1;
        }
        .brand-items .brand-logo:hover {
            background-color: #ffffffb0;
        }
        a.primary-btn.brand-btn{
            border-radius: 9px;
        }
        a.primary-btn.brand-btn:hover {
            background-position: left bottom;
            color: #ffffff;
            background-color: black;
            border-radius: 9px;
            border: 1px solid black;
        }
        .middle.btn1 {
            bottom: 19px;
        }
        .middle.btn2 {
            bottom: 30px;
        }
        .middle.btn3 {
            bottom: 93px;
        }
        .middle.btn4 {
            bottom: 93px;
        }
        .middle.btn5 {
            bottom: 93px;
        }
        .middle.btn6 {
            bottom: 93px;
        }
        .middle.btn8 {
            bottom: 80px;
        }

        /* Custom animation for the modal */
        .modal.fade .modal-dialog {
            transform: perspective(600px) rotateX(-90deg);
            opacity: 0;
            transition: all 0.2s ease-in-out;
        }

        .modal.show .modal-dialog {
            transform: perspective(600px) rotateX(0);
            opacity: 1;
        }


        .hero-btn-group-2 {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            gap: 20px;
        }

        .slider {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out, background-position-y 1s ease-in-out;
            position: relative;
        }

        .text-content {
            color: white;
            text-align: center;
            text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.7);
            padding-bottom: 2rem;
            padding-top: 2rem;
            background: rgba(0, 0, 0, 0.5);
            margin-top: 5rem;
        }

        /* Control Buttons */
        .controls {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }
        .slider-para{
            font-size: 25px;
        }



        /*For Mobiles*/

        @media only screen and (min-width: 360px) and (max-width: 740px),
        only screen and (min-width: 412px) and (max-width: 915px),
        only screen and (min-width: 767px) and (max-width: 991px) {

            .brand-items {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            .brand-items .brand-single-2 {
                margin: 0px 14px 30px 14px;
                float: left;
                overflow: hidden;
            }
            .brand-items .brand-logo img.v1 {
                width: 120px;
                padding-top: 3.8rem;
            }
            .brand-items .brand-logo img.v2 {
                width: 120px;
                padding-top: 3.5rem;
            }
            .brand-items .brand-logo img.v3 {
                width: 100px;
                padding-top: 1.1rem;
            }
            .brand-items .brand-logo img.v4 {
                width: 100px;
                padding-top: 1.1rem;
            }
            .brand-items .brand-logo img.v5 {
                width: 100px;
                padding-top: 1.1rem;
            }
            .brand-items .brand-logo img.v6 {
                width: 100px;
                padding-top: 1.1rem;
            }
            .brand-items .brand-logo img.v7 {
                width: 100px;
                padding-top: 1.1rem;
            }
            .brand-items .brand-logo img.v8 {
                width: 100px;
                padding-top: 1.1rem;
            }
            .middle.btn1 {
                bottom: 16px;
            }
            .middle.btn2 {
                bottom: 25px;
            }
            .middle.btn3 {
                bottom: 48px;
            }
            .middle.btn4 {
                bottom: 55px;
            }
            .middle.btn5 {
                bottom: 53px;
            }
            .middle.btn6 {
                bottom: 52px;
            }
            .middle.btn8 {
                bottom: 51px;
            }

            .hero-home-2 {
                background-position: bottom;
            }

            .ceo-logo {
                padding-top: 61px !important;
            }
            .slider-heading{
                font-size: 40px;
            }
            .slider-para {
                font-size: 18px;
                padding: 1rem;
            }
            .slider {
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background-size: cover;
                background-position: center;
                transition: background-image 1s ease-in-out, background-position-y 1s ease-in-out !important;
                position: relative;
                will-change: background-image, background-position-y; /* Optimize for performance */
                background-color: #000; /* Fallback background color */
            }


        }


    </style>

    <div id="scrollsmoother-container">
        <div class="slider">
            <div class="text-content">
                <h1 class="slider-heading">BOLD FLAVORS, <span style="color: #f05b2a;">SOCIALS EVENTS,</span> GROUP ECONOMICS</h1>
                <p class="slider-para">
                    At 80/20 Eatery, it’s more than just business—it’s a lifestyle. Let’s eat, connect, and build something epic.
                </p>
                <h4 class="pb-5">
                    5725 NORTHAMPTON BLVD, VIRGINIA BEACH VA 23455
                </h4>
                <div class="hero-btn-group-2">
                    <a href="/directory" class="primary-btn" style="border-radius: 10px;width: 123px;">Directory</a>
                    <a href="javascript:void(0);" class="primary-btn" style="border-radius: 10px;width: 123px;">Events</a>
                </div>
            </div>
        </div>



        <section class="brand-home-2 pt-120" style="border-bottom: 4px solid #e1612e;border-top: 4px solid #e1612e;">
            <span class="big-title">Vendors</span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="section-top-2">
                            <span class="title-tag">Brand Collaboration</span>
                            <h2 class="title_one">We worked with 100+ Companies</h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-90">
                    <p class="abr-para">
                        Combine delicious food with premium hookah, lively nightlife, and a strong sense of community, and
                        you’ll find more than just a place to eat—you’ll discover an experience you’ll want to relive
                        again and again! Welcome to the 80/20 Eatery!
                    </p>
                    <div class="brand-items pt-3 pb-5">
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img class="v7" src="assets/images/logo.png" alt="brand-logo">
                                <div class="middle btn7">
                                    <a href="https://www.instagram.com/8020eatery/" class="primary-btn brand-btn">Visit Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img class="v1" src="assets/brand/v1.png" alt="brand-logo">
                                <div class="middle btn1">
                                    <a href="/ceo-workspace" class="primary-btn brand-btn">Visit Now</a>
                                </div>
                            </div>

                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img class="v2" src="assets/brand/v2.png" alt="brand-logo">
                                <div class="middle btn2">
                                    <a href="https://www.instagram.com/sneakyjuicebrand/" class="primary-btn brand-btn">Visit Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img class="v3" src="assets/brand/b1.png" alt="brand-logo">
                                <div class="middle btn3">
                                    <a href="https://www.instagram.com/teamlamb_inc/" class="primary-btn brand-btn">Visit Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img class="v4" src="assets/brand/b2.png" alt="brand-logo">
                                <div class="middle btn4">
                                    <a href="https://www.instagram.com/issasempanadas/" class="primary-btn brand-btn">Visit Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img class="v5" src="assets/brand/b3.png" alt="brand-logo">
                                <div class="middle btn5">
                                    <a href="https://www.instagram.com/tnthookah100/" class="primary-btn brand-btn">Visit Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img class="v6" src="assets/brand/b4.png" alt="brand-logo">
                                <div class="middle btn6">
                                    <a href="https://www.instagram.com/theoriginalsoulfoodcafe/" class="primary-btn brand-btn">Visit Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img class="v8" src="assets/brand/b5.png" alt="brand-logo">
                                <div class="middle btn8">
                                    <a href="https://www.instagram.com/mindprintgraphics/" class="primary-btn brand-btn">Visit Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- service area starts -->
        <section class="service-home-2 py-120">
            <span class="big-title">services</span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="section-top-2">
{{--                            <span class="title-tag">What we offer</span>--}}
                            <h2 class="title_one">
                                <span>
                                    Experience the Perfect Blend of Taste, Relaxation, and Innovation
                                </span>
                            </h2>
                        </div>
                    </div>
                    {{--                <div class="col-lg-6"> --}}
                    {{--                    <div class="section-top-btn"> --}}
                    {{--                        <a href="services.html" class="primary-btn">View all <span><i class="ri-arrow-right-up-line"></i></span></a> --}}
                    {{--                    </div> --}}
                    {{--                </div> --}}
                </div>
            </div>

            <div class="container-fluid px-0">
                <div class="service-items mt-60">
                    <div class="single-service-2">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="service-title">
                                    <div class="pb-3">
                                        <img class="service-img1" src="assets/images/templatelogo.png" alt="choose-image">
                                    </div>
                                    <h2 class="text-uppercase"><a href="javascript:void(0);">80/20 Eatery</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="service-image">
                                    <img src="assets/home/home2.png" alt="service-image">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="service-content">
                                    <p>
                                        The 80/20 Eatery is a flavor-packed destination where every bite tells a story.
                                        Featuring four unique
                                        restaurants, a juice bar, and mouthwatering dishes made to satisfy every craving,
                                        we’re redefining
                                        the way you enjoy food. Pair incredible meals with hookah, vibrant nightlife, and a
                                        community-driven
                                        vibe, and you’ve got more than an eatery—you’ve got an experience you’ll keep coming
                                        back for.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-service-2">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="service-title">
                                    <div class="pb-3">
                                        <img class="service-img2" src="assets/brand/ceo1.png" alt="choose-image">
                                    </div>
                                    <h2 class="text-uppercase"><a href="javascript:void(0);">80/20 CEO</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="service-image">
                                    <img src="assets/home/home5.png" alt="service-image">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="service-content">
                                    <p>
                                        The 80/20 CEO Workspace is where ambition meets creativity. Perfect for
                                        entrepreneurs and
                                        innovators, it’s more than just a workspace—it’s a vibrant hub for success,
                                        collaboration,
                                        and inspiration. Build, connect, and thrive in a space designed to fuel greatness.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-service-2">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="service-title">
                                    <div class="pb-3">
                                        <img class="service-img3" src="assets/brand/v2.png" alt="choose-image">
                                    </div>
                                    <h2 class="text-uppercase"><a href="javascript:void(0);">80/20 Juice Bar</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="service-image">
                                    <img src="assets/home/home6.png" alt="service-image">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="service-content">
                                    <p>
                                        The 80/20 Juice Bar is your destination for vibrant health and refreshing energy.
                                        From nutrient-packed cold-pressed juices to wholesome smoothie bowls and powerful
                                        wellness shots,
                                        every sip and bite is designed to nourish your body and fuel your day. Discover a
                                        deliciously
                                        healthy way to feel your best.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- marquee area starts -->
        <div class="custom-marquee marquee-style-2">
            <div class="marquee-container">
                <div class="marquee">
                    <div class="marquee-content marquee-row-1">
                        <span>Community</span><span>Collaboration</span><span>Creativity</span><span>Connection</span><span>Flavor</span><span>Growth</span><span>Support</span><span>Inspiration</span><span>Relaxation</span>
                        <span>Community</span><span>Collaboration</span><span>Creativity</span><span>Connection</span><span>Flavor</span><span>Growth</span><span>Support</span><span>Inspiration</span><span>Relaxation</span>
                        <span>Community</span><span>Collaboration</span><span>Creativity</span><span>Connection</span><span>Flavor</span><span>Growth</span><span>Support</span><span>Inspiration</span><span>Relaxation</span>
                    </div>
                    <div class="marquee-content marquee-row-2">
                        <span>Networking</span><span>Innovation</span><span>Local</span><span>Togetherness</span><span>Empowerment</span><span>Vibes</span><span>Energy</span><span>Passion</span><span>Flavorful</span>
                        <span>Networking</span><span>Innovation</span><span>Local</span><span>Togetherness</span><span>Empowerment</span><span>Vibes</span><span>Energy</span><span>Passion</span><span>Flavorful</span>
                        <span>Networking</span><span>Innovation</span><span>Local</span><span>Togetherness</span><span>Empowerment</span><span>Vibes</span><span>Energy</span><span>Passion</span><span>Flavorful</span>
                    </div>
                </div>
            </div>
        </div>


        @include('include.foot')

        <script>
            // Wait for 5 seconds and then show the modal
            window.addEventListener('load', () => {
                setTimeout(() => {
                    const myModal = new bootstrap.Modal(document.getElementById('autoModal'));
                    myModal.show();
                }, 3000);

                // console.log(document.getElementById('subscriptionForm'));

                document.getElementById('subscriptionForm').addEventListener('submit', function(e) {
                    e.preventDefault();
                    let subscribe_name = $('#name').val();
                    let subscribe_email = $('#email').val();
                    let subscribe_phone = $('#phone').val();
                    if (!subscribe_email.trim()) {
                        alert('Email is Required');
                        return;
                    }
                    $.ajax({
                        url: "{{ url('subscribe-user') }}",
                        method: 'POST',
                        data: {
                            '_token': "{{ csrf_token() }}",
                            'name': subscribe_name,
                            'email': subscribe_email,
                            'phone': subscribe_phone,
                            'g-recaptcha-token': $('#g-recaptcha-response').val()
                        },
                        success: function(result) {
                            if (result.message) {
                                $('#SubscribeModalBody').html(
                                    `<h3  class="text-white pt-50" style="padding-top: 9rem;">${result.message}</h3>`
                                );
                                // window.addEventListener('load', () => {
                                setTimeout(() => {
                                    $('#subscribeModalCloseBtn').click();
                                }, 3000);
                                // });
                            } else {
                                let subscriptionForm = document.getElementById('subscriptionForm');

                                for (let i in result.errors) {
                                    console.log(i);

                                    if(i=='email'){
                                        $('#emailPopupError').removeClass('d-none')
                                        $('#emailPopupError').text(result.errors[i]);
                                    }
                                    // alert();
                                }
                                subscriptionForm.abrform.disabled = false;
                                subscriptionForm.abrform.value = "Subscribe Now";
                            }
                        }
                    });
                })
            });
        </script>

    </div>
@endsection
