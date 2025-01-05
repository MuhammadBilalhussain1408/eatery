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


        }

    </style>

    <div id="scrollsmoother-container">

        <!-- breadcrumb starts -->
        <section class="breadcrumb-section" style="background-image: url(assets/images/breadcrumb-bg.png)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Terms & Conditions</h1>
                        <ul class="breadcrumb-meta">
                            <li><a href="/">home</a></li>
                            <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                            <li class="active">Terms & Conditions</li>
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
                                By using our website, you agree to the following terms and conditions. Please read them carefully.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                1. Acceptance of Terms:
                            </h2>

                            <p class="abr-para pt-2">
                                Your use of our website constitutes acceptance of these Terms and Conditions. If you do not agree, please discontinue use immediately.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                2. Use of Website:
                            </h2>

                            <div class="single-box">
                                <ul class="requirement-list mt-20">
                                    <li>
                                        <span><i class="fa-solid fa-circle-check"></i> </span>
                                        You agree to use the website for lawful purposes only.
                                    </li>
                                    <li>
                                        <span><i class="fa-solid fa-circle-check"></i> </span>
                                        You shall not engage in activities that disrupt or damage the website or its services.
                                    </li>
                                </ul>
                            </div>

                            <h2 class="pt-5 text-white pb-2">
                                3. Intellectual Property:
                            </h2>

                            <p class="abr-para pt-2">
                                All content on this website, including text, images, and design, is owned by <span class="text-orange fw-bolder"> 8020 Eatery </span> and is protected by copyright laws. You may not reproduce or distribute any content without explicit permission.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                4. Limitation of Liability:
                            </h2>
                            <p class="abr-para pt-2">
                                We are not responsible for any damages resulting from the use or inability to use our website. This includes but is not limited to errors, interruptions, or loss of data.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                5. External Links:
                            </h2>
                            <p class="abr-para pt-2">
                                Our website may include links to external websites. We are not responsible for the content or practices of these third-party sites.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                6. Termination:
                            </h2>
                            <p class="abr-para pt-2">
                                We reserve the right to terminate or suspend access to our website for any user who violates these terms.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                7. Governing Law:
                            </h2>
                            <p class="abr-para pt-2">
                                These terms are governed by the laws of USA. Any disputes shall be resolved in the courts of USA.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                8. Updates to Terms:
                            </h2>
                            <p class="abr-para pt-2">
                                We may revise these Terms and Conditions at any time. Continued use of the website signifies your acceptance of the updated terms.
                            </p>

                            <p class="abr-para pt-5 fw-bolder">
                                For any questions or concerns regarding this Privacy Policy or Terms and Conditions, please contact us at:
                            </p>
                            <h4 class="pt-5 fw-light" style="color: #ffff00;">[ 8020 Eatery ]</h4>
                            <h4 class="pt-2 fw-light" style="color: #ffff00;">
                                [ 5725 Northampton Blvd, Virginia Beach, VA 23455, United States ]
                            </h4>
                            <h4 class="pt-2 fw-light" style="color: #ffff00;">
                                [ info@8020eatery.com ]
                            </h4>
                            <h4 class="pt-2 fw-light" style="color: #ffff00;">
                                [ (+1) 757-271-4001 ]
                            </h4>

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
