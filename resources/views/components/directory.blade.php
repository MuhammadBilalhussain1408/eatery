@extends('layouts.master')
@section('content')

    <style>
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


        }
    </style>

    <div id="scrollsmoother-container">

        <!-- breadcrumb starts -->
        <section class="breadcrumb-section" style="background-image: url('assets/slider/slider3.webp')">
            <div class="container bread-container">
                <div class="row">
                    <div class="col-12">
                        <h1>Directory</h1>
                        <ul class="breadcrumb-meta">
                            <li><a href="/">home</a></li>
                            <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                            <li class="active">Directory</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- brand area starts -->
        <section class="brand-home-2 pt-120">
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
                        The 80/20 Eatery is a vibrant hub where every bite is a flavorful journey. With four diverse restaurants,
                        a refreshing juice bar, and irresistible dishes to satisfy every craving, we’re elevating your
                        dining experience. Combine delicious food with premium hookah, lively nightlife, and a strong
                        sense of community, and you’ll find more than just a place to eat—you’ll discover an
                        experience you’ll want to relive again and again!
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
                                    <a href="javascript:void(0);" class="primary-btn brand-btn">Visit Now</a>
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
