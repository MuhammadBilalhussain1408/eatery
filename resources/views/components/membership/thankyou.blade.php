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
                            <span style="color: #e1612e;font-weight: bold;">"Hi {{$name}}",</span><br>
                            Thank you for reaching out to us! We appreciate your interest and can’t wait to connect with you! Our team will follow up with you shortly to schedule your tour and discuss how we can help you thrive at the 80/20 CEO Workspace.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        @include('include.foot')


    </div>

@endsection
