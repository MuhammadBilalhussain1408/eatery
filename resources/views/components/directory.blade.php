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

        }
    </style>

    <div id="scrollsmoother-container">

        <!-- breadcrumb starts -->
        <section class="breadcrumb-section" style="background-image: url(assets/images/breadcrumb-bg.png)">
            <div class="container">
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
                <div class="row mt-60">
                    <div class="brand-items">
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img src="assets/brand/v1.png" style="width: 78%;" alt="brand-logo">
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img src="assets/brand/v2.png" style="width: 78%;" alt="brand-logo">
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img src="assets/images/spotify-logo.png" alt="brand-logo">
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img src="assets/images/square-logo.png" alt="brand-logo">
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img src="assets/images/upwork-logo.png" alt="brand-logo">
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img src="assets/images/loom-logo.png" alt="brand-logo">
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img src="assets/images/slack-logo.png" alt="brand-logo">
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img src="assets/images/spotify-logo.png" alt="brand-logo">
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img src="assets/images/loom-logo.png" alt="brand-logo">
                            </div>
                        </div>
                        <div class="brand-single-2">
                            <div class="brand-logo dark-version">
                                <img src="assets/images/zoom-logo.png" alt="brand-logo">
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
