@extends('layouts.master')
@section('content')


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

        @include('include.foot')

    </div>

@endsection
