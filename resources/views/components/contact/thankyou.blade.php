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
                            <span>"Hi {{$name}}",</span><br>
                            Thanks for contacting us! Your message has been received, and we’ll be in touch soon. We’re excited to assist you!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        @include('include.foot')


    </div>

@endsection
