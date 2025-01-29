@extends('layouts.master')
@section('content')

    <style>
        h2 span {
            color: #e1602d;
        }
        .contact-info-area .single-info span {
            display: block;
            margin: 5px 0;
            font-size: 21px;
        }
    </style>

    <div id="scrollsmoother-container">
        <!-- breadcrumb starts -->
        <section class="breadcrumb-section" style="background-image: url(assets/images/breadcrumb-bg.png)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="text-white" style="text-align: center;font-size: 25px;">
                            <span style="color: #e1612e;font-weight: bold;"> Welcome to the 80/20 CEO Family</span><br>
                            Please complete our quick questionnaire to finalize your membership.
                        </p>
                        <a href="/membership-subscription" class="primary-btn brand-btn">Visit Membership Now <span><i class="ri-arrow-right-up-line"></i></span></a>
                    </div>
                </div>
            </div>
        </section>

        @include('include.foot')


    </div>

@endsection
