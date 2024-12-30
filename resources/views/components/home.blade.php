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
        .ceo-logo{
            width: 78% !important;
            padding-top: 89px;
        }
        .brand-area .brand-logo:hover {
            border: 1px solid #e1612e;
        }


        /*For Mobiles*/

        @media only screen and (min-width: 360px) and (max-width: 740px),
        only screen and (min-width: 412px) and (max-width: 915px),
        only screen and (min-width: 767px) and (max-width: 991px) {

            .hero-home-2 {
                background-position: bottom;
            }
            .ceo-logo{
                padding-top: 61px !important;
            }

        }



    </style>

    <div id="scrollsmoother-container">

        <!-- hero area starts -->
        <section class="hero-area hero-home-2" style="background-image: url(assets/images/hero-bg-home-2.png)">
            {{--        <img src="assets/images/hero-3d-home-2.png" alt="hero-3d" class="hero-3d-home-2 item-moveOne">--}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-content-box-2">
                            {{--                        <div class="title-tag">--}}
                            {{--                            <h4>Get To Know Us</h4>--}}
                            {{--                        </div>--}}
                            <h1 class="title_one hero-heading text-capitalize">
                                BOLD FLAVORS, <span> SOCIALS  EVENTS, </span> GROUP ECONOMICS
                            </h1>
                            <p class="">
                                At 80/20 Eatery, it’s more than just business—it’s a lifestyle. Let’s eat, connect, and build something epic.
                            </p>
                            <h4 class="pb-5">
                                5725 NORTHAMPTON BLVD, VIRGINIA BEACH VA 23455
                            </h4>
                            <div class="hero-btn-group-2">
                                <a href="javascript:void(0);" class="primary-btn">Directory</a>
                                <a href="javascript:void(0);" class="primary-btn">Events</a>
                                {{--                            <div class="hero-video-wrapper">--}}
                                {{--                                <a class="hero-play-btn popup-youtube" href="https://www.youtube.com/watch?v=ZG6tNrxXh1k"><span class="video-btn item-pulse"><i class="fas fa-play"></i></span> play video</a>--}}
                                {{--                            </div>--}}
                            </div>
                            {{--                        <div>--}}
                            {{--                            <ul class="hero-social-2">--}}
                            {{--                                <li><a href="https://www.facebook.com/p/8020-Eatery-100092521598083/"><i class="fa-brands fa-facebook"></i> facebook</a></li>--}}
                            {{--                                <li><a href="https://www.instagram.com/8020eatery/"><i class="fa-brands fa-instagram"></i> instagram</a></li>--}}
                            {{--                            </ul>--}}
                            {{--                        </div>--}}
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- brand area starts -->
    {{--    <section class="brand-area pt-50 pb-50">--}}
    {{--        <div class="container-fluid">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12">--}}
    {{--                    <div class="brand-slider">--}}
    {{--                        <div class="brand-single">--}}
    {{--                            <div class="brand-logo">--}}
    {{--                                <img class="dark-version ceo-logo" src="assets/brand/ceo.png" alt="brand-logo">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="brand-single">--}}
    {{--                            <div class="brand-logo">--}}
    {{--                                <img class="dark-version ceo-logo" src="assets/brand/juicebar.png" alt="brand-logo">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="brand-single">--}}
    {{--                            <div class="brand-logo">--}}
    {{--                                <img class="dark-version ceo-logo" src="assets/brand/ceo.png" alt="brand-logo">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="brand-single">--}}
    {{--                            <div class="brand-logo">--}}
    {{--                                <img class="dark-version ceo-logo" src="assets/brand/juicebar.png" alt="brand-logo">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="brand-single">--}}
    {{--                            <div class="brand-logo">--}}
    {{--                                <img class="dark-version ceo-logo" src="assets/brand/ceo.png" alt="brand-logo">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="brand-single">--}}
    {{--                            <div class="brand-logo">--}}
    {{--                                <img class="dark-version ceo-logo" src="assets/brand/juicebar.png" alt="brand-logo">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="brand-single">--}}
    {{--                            <div class="brand-logo">--}}
    {{--                                <img class="dark-version ceo-logo" src="assets/brand/juicebar.png" alt="brand-logo">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}


    <!-- about area starts -->
        <section class="about-home-2 pt-110 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1">
                        <img src="assets/images/choose1.png" alt="about-image">
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="about-content">
                            <div class="section-top-2">
                            <span class="title-tag">
                                Taste, Create, and Thrive
                            </span>
                                <h2 class="title_one">
                                <span>
                                    A Home For Entrepreneurs & Dreamers
                                </span>
                                </h2>
                            </div>
                            <p class="pt-20 abr-para">
                                At 80/20 Eatery, we’re more than a dining destination—we’re a community space where food, creativity,
                                and collaboration come together. With a mix of unique dining options, a relaxing hookah lounge, and a
                                supportive environment for local businesses, we’re committed to fostering connection and growth.
                            </p>
                            {{--                        <a href="javascript:void(0);" class="primary-btn mt-40">Read more <span><i class="ri-arrow-right-up-line"></i></span></a>--}}
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
                            <span class="title-tag">What we offer</span>
                            <h2 class="title_one">
                            <span>
                                Experience the Perfect Blend of Taste, Relaxation, and Innovation
                            </span>
                            </h2>
                        </div>
                    </div>
                    {{--                <div class="col-lg-6">--}}
                    {{--                    <div class="section-top-btn">--}}
                    {{--                        <a href="services.html" class="primary-btn">View all <span><i class="ri-arrow-right-up-line"></i></span></a>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
            </div>

            <div class="container-fluid px-0">
                <div class="service-items mt-60">
                    <div class="single-service-2">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="service-title">
                                    <h2 class="text-uppercase"><a href="javascript:void(0);">80/20 CEO</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="service-image">
                                    <img src="assets/shapes/shape1.png" alt="service-image">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="service-content">
                                    <p>
                                        The 80/20 CEO Workspace is where ambition meets creativity. Perfect for entrepreneurs and
                                        innovators, it’s more than just a workspace—it’s a vibrant hub for success, collaboration,
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
                                    <h2 class="text-uppercase"><a href="javascript:void(0);">80/20 Juice Bar</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="service-image">
                                    <img src="assets/shapes/shape2.png" alt="service-image">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="service-content">
                                    <p>
                                        The 80/20 Juice Bar is your destination for vibrant health and refreshing energy.
                                        From nutrient-packed cold-pressed juices to wholesome smoothie bowls and powerful wellness shots,
                                        every sip and bite is designed to nourish your body and fuel your day. Discover a deliciously
                                        healthy way to feel your best.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-service-2">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="service-title">
                                    <h2 class="text-uppercase"><a href="javascript:void(0);">80/20 Eatery</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="service-image">
                                    <img src="assets/shapes/shape3.png" alt="service-image">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="service-content">
                                    <p>
                                        The 80/20 Eatery is a flavor-packed destination where every bite tells a story. Featuring four unique
                                        restaurants, a juice bar, and mouthwatering dishes made to satisfy every craving, we’re redefining
                                        the way you enjoy food. Pair incredible meals with hookah, vibrant nightlife, and a community-driven
                                        vibe, and you’ve got more than an eatery—you’ve got an experience you’ll keep coming back for.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- choose area starts -->
        <section class="choose-home-2 py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1">
                        <img src="assets/images/about1.png" alt="choose-image">
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="choose-content">
                            <div class="section-top-2">
                                <span class="title-tag">Why Choose Us</span>
                                <h2 class="title_one">
                                    <span>What Makes Us Your Perfect Choice</span>
                                </h2>
                            </div>
                            <p class="pt-20 abr-para">
                                80/20 Eatery isn’t just another place to grab a bite—it’s a destination where flavor, community, and
                                opportunity collide. With mouthwatering food from diverse restaurants, a relaxed yet vibrant atmosphere,
                                and spaces designed for networking and creativity, we offer a one-of-a-kind experience that fuels your
                                body, mind, and business. Whether you’re here to savor bold flavors, connect with like-minded individuals,
                                or unwind after a long day, 80/20 Eatery is the perfect spot to do it all.
                            </p>
                            {{--                        <ul class="about-list pt-3">--}}
                            {{--                            <li>A space where connection, collaboration, and local growth thrive.</li>--}}
                            {{--                            <li>Fresh juices, hookahs, and a creative workspace—all in one place.</li>--}}
                            {{--                        </ul>--}}
                            {{--                        <a href="about.html" class="primary-btn mt-40">see more <span><i class="ri-arrow-right-up-line"></i></span></a>--}}
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



    </div>

@endsection

