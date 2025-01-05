@extends('layouts.master')
@section('content')

    <style>
        .requirement-list li {
            color: #ffffff;
            font-size: 21px;
            display: flex;
        }
        .requirement-list li span {
            color: #ffff00;
            margin: 0;
            padding-right: 13px;
        }

        @media only screen and (min-width: 360px) and (max-width: 740px),
        only screen and (min-width: 412px) and (max-width: 915px),
        only screen and (min-width: 767px) and (max-width: 991px) {

            .cta-box {
                background-position: left;
            }

        }

    </style>

    <div id="scrollsmoother-container">

        <!-- breadcrumb starts -->
        <section class="breadcrumb-section" style="background-image: url(assets/images/breadcrumb-bg.png)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Privacy Policy</h1>
                        <ul class="breadcrumb-meta">
                            <li><a href="/">home</a></li>
                            <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                            <li class="active">Privacy Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- private section starts -->
        <section class="welcome-section-about pt-110 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-top">
                            <h4 class="pb-4" style="color: #ffff00;">Last Updated: <span class="text-white">03-January-2025</span></h4>
                            <p class="abr-para pt-5">
                                At 80/20 Eatery, your privacy is our top priority. This Privacy Policy outlines how we collect, use, and protect your personal information when you interact with our website.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                1. Information We Collect:
                            </h2>

                            <h4 class="text-orange pt-4">Personal Information:</h4>
                            <p class="abr-para pt-2">
                                Name, email address, phone number, and any other details you provide via forms or communication.
                            </p>

                            <h4 class="text-orange pt-4">Usage Data:</h4>
                            <p class="abr-para pt-2">
                                Information on how you navigate and interact with our website.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                2. How We Use Your Information:
                            </h2>

                            <div class="single-box">
                                <ul class="requirement-list mt-20">
                                    <li>
                                        <span><i class="fa-solid fa-circle-check"></i> </span>
                                        To provide and improve our services.
                                    </li>
                                    <li>
                                        <span><i class="fa-solid fa-circle-check"></i> </span>
                                        To respond to inquiries and requests.
                                    </li>
                                    <li>
                                        <span><i class="fa-solid fa-circle-check"></i> </span>
                                        To send updates about our services or promotional materials (with your consent).
                                    </li>
                                </ul>
                            </div>

                            <h2 class="pt-5 text-white pb-2">
                                3. Sharing of Information:
                            </h2>
                            <p class="abr-para pt-2">
                                We do not sell, rent, or share your personal information with third parties, except as necessary
                                to provide our services or comply with legal obligations.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                4. Data Security:
                            </h2>
                            <p class="abr-para pt-2">
                                We implement industry-standard security measures to protect your data. However, no method of
                                transmission over the internet or electronic storage is 100% secure.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                5. Cookies:
                            </h2>
                            <p class="abr-para pt-2">
                                Our website uses cookies to enhance user experience and analyze site traffic. You can adjust your browser settings to refuse cookies, but some features of our website may not function properly.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                6. Your Rights:
                            </h2>
                            <p class="abr-para pt-2">
                                You have the right to access, update, or delete your personal information. Contact us at <span class="text-orange fw-bolder">info@8020eatery.com</span> for any requests.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                7. Updates to this Policy:
                            </h2>
                            <p class="abr-para pt-2">
                                We may update this Privacy Policy from time to time. Changes will be posted on this page with an updated revision date.
                            </p>

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
