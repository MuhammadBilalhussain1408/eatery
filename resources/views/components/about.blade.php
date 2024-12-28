@extends('layouts.master')
@section('content')

    <div id="scrollsmoother-container">

        <!-- breadcrumb starts -->
        <section class="breadcrumb-section" style="background-image: url(assets/images/breadcrumb-bg.png)">
            <div class="container">
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

        <!-- welcome section starts -->
        <section class="welcome-section-about pt-110 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-top">
                            <p class="abr-para">
                                At 80/20 we believe in group economics, people come together have great food, wealth building network and social gatherings all under one roof
                                When your on your 80 you are eating well investing money, spending quality time and giving back, When your on your 20 you indulge in whatever makes you feel alive, After all you can’t be 100% all the time.
                            </p>
                            <p class="abr-para pt-4">
                                80/20 Eatery is a hub for entrepreneurs, become an <a href="/ceo-workspace">8020 CEO</a> and we will invest with you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- video area starts -->
        <div class="video-home-3 video-about-page pt-5 pb-5">
            <div class="container">
                <div class="video-bg" style="background-image: url(assets/images/video-bg-about-page.png)">
                    <div class="row">
                        <div class="col-12">
{{--                            <div class="video-wrapper">--}}
{{--                                <a class="hero-play-btn popup-youtube" href="https://www.youtube.com/watch?v=ZG6tNrxXh1k"><span class="video-btn item-pulse"><i class="fas fa-play"></i></span></a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
