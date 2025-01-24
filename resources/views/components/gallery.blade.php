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
        <section class="breadcrumb-section" style="background-image: url('assets/workspace/w3.jpg')">
            <div class="container bread-container">
                <div class="row">
                    <div class="col-12">
                        <h1>Gallery</h1>
                        <ul class="breadcrumb-meta">
                            <li><a href="/">home</a></li>
                            <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                            <li class="active">Gallery</li>
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
                            <p class="abr-para pt-2">
                                Explore the vibrant energy of the 80/20 community through our gallery. From lively
                                events and creative workspace moments to delicious meals and unforgettable experiences,
                                get a glimpse of what makes 80/20 more than just a place—it’s a lifestyle. Let these highlights
                                inspire your next visit!
                            </p>
                        </div>
                    </div>
                </div>
                <main class="main pt-50">
                    <div class="container">
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset('assets/gallery/g1.jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
                                    <img src="{{ asset('assets/gallery/g1.jpg') }}" alt="Image Gallery">
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset('assets/gallery/g2.jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
                                    <img src="{{ asset('assets/gallery/g2.jpg') }}" alt="Image Gallery">
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset('assets/gallery/g3.jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
                                    <img src="{{ asset('assets/gallery/g3.jpg') }}" alt="Image Gallery">
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset('assets/gallery/g4.jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
                                    <img src="{{ asset('assets/gallery/g4.jpg') }}" alt="Image Gallery">
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset('assets/gallery/g5.jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
                                    <img src="{{ asset('assets/gallery/g5.jpg') }}" alt="Image Gallery">
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset('assets/gallery/g6.jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
                                    <img src="{{ asset('assets/gallery/g6.jpg') }}" alt="Image Gallery">
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset('assets/gallery/g7.jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
                                    <img src="{{ asset('assets/gallery/g7.jpg') }}" alt="Image Gallery">
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset('assets/gallery/g8.jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
                                    <img src="{{ asset('assets/gallery/g8.jpg') }}" alt="Image Gallery">
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset('assets/gallery/g9.jpg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
                                    <img src="{{ asset('assets/gallery/g9.jpg') }}" alt="Image Gallery">
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </section>


        @include('include.foot')

    </div>
@endsection
