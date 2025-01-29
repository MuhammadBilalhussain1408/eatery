@extends('layouts.master')
@section('content')

    <div id="scrollsmoother-container">

        <!-- breadcrumb starts -->
        <section class="breadcrumb-section" style="background-image: url('assets/gallery/g4.webp');background-position-y: 29%;">
            <div class="container bread-container">
                <div class="row">
                    <div class="col-12">
                        <h1>About Us</h1>
                        <ul class="breadcrumb-meta">
                            <li><a href="/">home</a></li>
                            <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- about section starts -->
        <section class="welcome-section-about pt-110 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-top">
                            <p class="abr-para">
                                At 80/20, we’re all about making moves, building wealth, and enjoying life—together. We believe in group economics, where communities come together to create something bigger than themselves. Picture this: amazing food, high-energy networking, and unforgettable social vibes all under one roof. That’s the 80/20 way.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                Living the 80/20 Life:
                            </h2>

                            <p class="abr-para pt-2">
                                When you’re on your 80, you’re in grind mode—eating clean, stacking your money, spending time with the people who matter, and giving back to the community. But your 20? That’s all about living it up—indulging in the things that make you feel alive. After all, life’s about balance, and no one can be all business 100% of the time.
                            </p>

                            <h2 class="pt-5 text-white pb-2">
                                What’s 80/20 Eatery?
                            </h2>

                            <p class="abr-para pt-2">
                                It’s not just a spot; it’s a vibe—a hub for entrepreneurs, creators, and go-getters. Here, we’re mixing good eats with big ideas, and if you’re ready to level up, becoming an 80/20 CEO is your next move. We’re not just a space—we’re partners in your hustle. Join us, and we’ll invest in your vision because we believe in building success together.
                            </p>

                            <p class="abr-para pt-5">
                                At 80/20 Eatery, it’s more than just business—it’s a lifestyle. Let’s eat, connect, and build something epic.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- marquee area starts -->
        <div class="custom-marquee marquee-style-2 pb-40">
            <div class="marquee-container">
                <div class="marquee">
                    <div class="marquee-content marquee-row-1">
                        <span>let's talk</span><span>let's talk</span><span>let's talk</span><span>let's talk</span><span>let's talk</span><span>let's talk</span><span>let's talk</span><span>let's talk</span><span>let's talk</span>
                        <span>let's talk</span><span>let's talk</span><span>let's talk</span><span>let's talk</span><span>let's talk</span><span>let's talk</span><span>let's talk</span><span>let's talk</span><span>let's talk</span>
                    </div>
                </div>
            </div>
        </div>

        @include('include.foot')

    </div>

@endsection
