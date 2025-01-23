@extends('layouts.master')
@section('content')

    <style>

        span.pricing-ceo {
            font-size: 33px;
            color: #e2612e;
        }
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
        .main .container {
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 3rem;
        }

        /*Gallery CSS*/

        .main .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 3rem;
            justify-content: center;
            align-items: center;
            padding: 0;
        }
        .main .card {
            color: #252a32;
            border-radius: 2px;
            background: #ffffff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.24);
        }
        .main .card-image {
            position: relative;
            display: block;
            width: 100%;
            padding-top: 70%;
            background: #ffffff;
        }
        .main .card-image img {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: 3px solid white;
        }

        @media only screen and (min-width: 360px) and (max-width: 740px),
        only screen and (min-width: 412px) and (max-width: 915px),
        only screen and (min-width: 767px) and (max-width: 991px) {

            span.pricing-ceo {
                font-size: 26px;
            }
            .cta-box {
                background-position: left;
            }
            .main .container {
                display: grid;
                grid-template-columns: 1fr;
                grid-gap: 3rem;
            }

        }

    </style>

    <div id="scrollsmoother-container">

        <!-- breadcrumb starts -->
        <section class="breadcrumb-section" style="background-image: url(assets/images/breadcrumb-bg.png)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Private Events</h1>
                        <ul class="breadcrumb-meta">
                            <li><a href="/">home</a></li>
                            <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                            <li class="active">Private Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Images section starts -->
        <section class="welcome-section-about pt-110 pb-80">
            <main class="main pt-50">
                <div class="container">
                    <div class="card">
                        <div class="card-image">
                            <a href="{{ asset('assets/events/p1.jpg') }}" data-fancybox="events" data-caption="Caption Images 211">
                                <img src="{{ asset('assets/events/p1.jpg') }}" alt="Image Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <a href="{{ asset('assets/events/p2.jpg') }}" data-fancybox="events" data-caption="Caption Images 1">
                                <img src="{{ asset('assets/events/p2.jpg') }}" alt="Image Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <a href="{{ asset('assets/events/p3.jpg') }}" data-fancybox="events" data-caption="Caption Images 1">
                                <img src="{{ asset('assets/events/p3.jpg') }}" alt="Image Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <a href="{{ asset('assets/events/p5.jpg') }}" data-fancybox="events" data-caption="Caption Images 1">
                                <img src="{{ asset('assets/events/p5.jpg') }}" alt="Image Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <a href="{{ asset('assets/events/p6.jpg') }}" data-fancybox="events" data-caption="Caption Images 1">
                                <img src="{{ asset('assets/events/p6.jpg') }}" alt="Image Gallery">
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </section>

        <!-- private section starts -->
        <section class="welcome-section-about pt-110 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-top">

                            <h2 class="pt-5 text-white pb-2">
                                Host Your Next Event at 80/20 Eatery
                            </h2>

                            <p class="abr-para pt-2">
                                Looking for the ultimate spot to host your private event? 80/20 Eatery has you covered. Whether it’s a corporate mixer, birthday bash, networking event, or a night to vibe with your people, our dynamic space sets the stage for unforgettable experiences.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                Why Choose 80/20 Eatery?
                            </h2>

                            <h4 class="text-orange pt-4">Lively Atmosphere:</h4>
                            <p class="abr-para pt-2">
                                Looking for the ultimate spot to host your private event? 80/20 Eatery has you covered. Whether it’s a corporate mixer, birthday bash, networking event, or a night to vibe with your people, our dynamic space sets the stage for unforgettable experiences.
                            </p>

                            <h4 class="text-orange pt-4">Amazing Food & Drinks:</h4>
                            <p class="abr-para pt-2">
                                Access to four unique restaurants, a full-service juice bar, and customizable catering options.
                            </p>

                            <h4 class="text-orange pt-4">Flexible Spaces:</h4>
                            <p class="abr-para pt-2">
                                Accommodations for small gatherings or larger parties.
                            </p>

                            <h4 class="text-orange pt-4">Entertainment Extras:</h4>
                            <p class="abr-para pt-2">
                                Hookah, music, and the option to incorporate content creation or podcast rooms for a unique twist.
                            </p>

                            <h4 class="text-orange pt-4">Expert Support:</h4>
                            <p class="abr-para pt-2">
                                A dedicated team to help you plan and execute your event without a hitch.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                Exclusive Perk for 80/20 CEO Members
                            </h2>

                            <p class="abr-para pt-2">
                                Are you an 80/20 CEO Member? Enjoy 50% off your private event space rental as part of your membership benefits. It’s our way of helping you celebrate, connect, and build community while staying on top of your game.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                What’s Included:
                            </h2>

                            <div class="single-box">
                                <ul class="requirement-list mt-20">
                                    <li>
                                        <span><i class="fa-solid fa-circle-check"></i> </span>
                                        Access to our private event space.
                                    </li>
                                    <li>
                                        <span><i class="fa-solid fa-circle-check"></i> </span>
                                        Catering options tailored to your event.
                                    </li>
                                    <li>
                                        <span><i class="fa-solid fa-circle-check"></i> </span>
                                        Flexible setups for networking, dining, or entertainment.
                                    </li>
                                    <li>
                                        <span><i class="fa-solid fa-circle-check"></i> </span>
                                        On-site staff to ensure your event runs smoothly from start to finish.
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- cta area starts -->
        <div class="cta-area py-120">
            <div class="cta-bg dark-version" style="background-image: url('assets/images/cta-bg.png')"></div>
            <div class="cta-bg light-version" style="background-image: url('assets/images/cta-light-bg.png')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cta-box" style="border: 3px solid #ffffff;">
                            <h2 class="title_one">Book Your Event Today</h2>
                            <p class="abr-para pt-3 pb-3">
                                Let’s make your event one to remember. Contact us now to check availability, explore catering options, and secure your date. Your perfect celebration starts here!
                            </p>
                            <a href="/contact" class="primary-btn">Book Now <span><i class="ri-arrow-right-up-line"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('include.foot')

    </div>

@endsection
