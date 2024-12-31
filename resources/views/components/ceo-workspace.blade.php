@extends('layouts.master')
@section('content')

    <style>

        .requirement-list li span {
            color: #ffff00;
            margin: 0;
            padding-right: 13px;
        }
        /*@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);*/
        /*@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600);*/

        .snip1404 img {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            z-index: -1;
        }
        .snip1404 .plan {
            margin: 0;
            border: 2px solid #ffffff;
            box-shadow: 0 0 5px rgb(255 255 255 / 94%);
            background-color: #211f23;
            background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHJhZGlhbEdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgY3g9IjUwJSIgY3k9IjAlIiByPSI3MCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiM1MzQ1NWIiLz48c3RvcCBvZmZzZXQ9IjcwJSIgc3RvcC1jb2xvcj0iIzIwMWUyMiIvPjwvcmFkaWFsR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==);
            background-size: 100%;
            background-image: -moz-radial-gradient(top, circle, #53455b 0%, #201e22 70%);
            background-image: -webkit-radial-gradient(top, circle, #53455b 0%, #201e22 70%);
            background-image: radial-gradient(circle at top, #53455b 0%, #201e22 70%);
            padding: 0;
        }
        .snip1404 .plan:hover i,
        .snip1404 .plan.hover i {
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        .snip1404 .plan:first-of-type {
            border-radius: 8px 0 0 8px;
        }
        .snip1404 .plan:last-of-type {
            border-radius: 0 8px 8px 0;
        }
        .snip1404 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.25s ease-out;
            transition: all 0.25s ease-out;
        }
        .snip1404 header {
            background-color: #5f3047;
            color: #ffffff;
        }
        .snip1404 .plan-title {
            background-color: rgba(0, 0, 0, 0.5);
            position: relative;
            margin: 0;
            padding: 20px 20px 0;
            text-transform: uppercase;
            letter-spacing: 4px;
        }
        .snip1404 .plan-title:after {
            position: absolute;
            content: '';
            top: 100%;
            left: 0;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 40px 300px 0 0;
            border-color: rgba(0, 0, 0, 0.5) transparent transparent;
        }
        .snip1404 .plan-cost {
            padding: 40px 20px 10px;
            text-align: right;
        }
        .snip1404 .plan-price {
            font-weight: 600;
            font-size: 3em;
        }
        .snip1404 .plan-type {
            opacity: 0.8;
            font-size: 0.7em;
            text-transform: uppercase;
        }
        .snip1404 .plan-features {
            padding: 0 0 20px;
            margin: 0;
            list-style: outside none none;
        }
        .snip1404 .plan-features li {
            padding: 8px 5%;
        }
        .snip1404 .plan-features i {
            margin-right: 8px;
            color: rgba(0, 0, 0, 0.5);
        }
        .snip1404 .plan-select {
            border-top: 1px solid rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
        }
        .snip1404 .plan-select a {
            background-color: #ffffff;
            color: #000000;
            text-decoration: none;
            padding: 12px 20px;
            font-size: 0.75em;
            font-weight: 600;
            border-radius: 5px;
            text-transform: uppercase;
            letter-spacing: 4px;
            display: inline-block;
        }
        .snip1404 .plan-select a:hover {
            background-color: #e1612e;
            color: white;
        }
        .snip1404 .plan:hover {
            margin-top: -10px;
            border-color: #e1612e;
            box-shadow: 0 0 25px rgb(255 255 255 / 25%);
            z-index: 1;
            border-radius: 8px;cursor:pointer;
        }
        .snip1404 .plan .plan-select {
            padding: 30px 20px;
        }


        @media only screen and (min-width: 360px) and (max-width: 740px), only screen and (min-width: 412px) and (max-width: 915px), only screen and (min-width: 767px) and (max-width: 991px) {

            .snip1404 .plan {
                width: 50%;
            }
            .snip1404 .plan-title,
            .snip1404 .plan-select a {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            .snip1404 .plan-select,
            .snip1404 .featured .plan-select {
                padding: 20px;
            }
            .snip1404 .featured {
                margin-top: 0;
            }
            .snip1404 .plan {
                width: 100%;
            }
            .snip1404.row {
                margin-left: 20px;
                margin-right: 20px;
            }

        }

    </style>

    <div id="scrollsmoother-container">
        <!-- breadcrumb starts -->
        <section class="breadcrumb-section" style="background-image: url(assets/images/breadcrumb-bg.png)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>80/20 CEO Membership</h1>
                        <ul class="breadcrumb-meta">
                            <li><a href="/">home</a></li>
                            <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                            <li class="active">80/20 CEO Membership</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- case detials content starts -->
        <section class="case-details-content pt-120 pb-110">

            <div class="container">
                <div class="snip1404 row">
                    <div class="plan col-md-3 col-sm-12">
                        <header>
                            <h4 class="plan-title">
                                Starter
                            </h4>
                            <div class="plan-cost"><span class="plan-price">$19</span><span class="plan-type">/month</span></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="fa-solid fa-circle-check"></i> </i>5GB Linux Web Space</li>
                            <li><i class="fa-solid fa-circle-check"> </i>5 MySQL Databases</li>
                            <li><i class="fa-solid fa-circle-check"> </i>Unlimited Email</li>
                            <li><i class="fa-solid fa-circle-check"> </i>250Gb mo Transfer</li>
                            <li><i class="fa-solid fa-circle-check"> </i>24/7 Tech Support</li>
                            <li><i class="fa-solid fa-circle-check"> </i>Daily Backups</li>
                        </ul>
                        <div class="plan-select"><a href="">Select Plan</a></div>
                    </div>
                    <div class="plan col-md-3 col-sm-12">
                        <header>
                            <h4 class="plan-title">

                                Basic
                            </h4>
                            <div class="plan-cost"><span class="plan-price">$29</span><span class="plan-type">/month</span></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="ion-checkmark"> </i>10GB Linux Web Space</li>
                            <li><i class="ion-checkmark"> </i>10 MySQL Databases</li>
                            <li><i class="ion-checkmark"> </i>Unlimited Email</li>
                            <li><i class="ion-checkmark"> </i>500Gb mo Transfer</li>
                            <li><i class="ion-checkmark"> </i>24/7 Tech Support</li>
                            <li><i class="ion-checkmark"> </i>Daily Backups</li>
                        </ul>
                        <div class="plan-select"><a href="">Select Plan</a></div>
                    </div>
                    <div class="plan col-md-3 col-sm-12 featured">
                        <header>
                            <h4 class="plan-title">

                                Professional
                            </h4>
                            <div class="plan-cost"><span class="plan-price">$49</span><span class="plan-type">/month</span></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="ion-checkmark"> </i>25GB Linux Web Space</li>
                            <li><i class="ion-checkmark"> </i>25 MySQL Databases</li>
                            <li><i class="ion-checkmark"> </i>Unlimited Email</li>
                            <li><i class="ion-checkmark"> </i>2000Gb mo Transfer</li>
                            <li><i class="ion-checkmark"> </i>24/7 Tech Support</li>
                            <li><i class="ion-checkmark"> </i>Daily Backups</li>
                        </ul>
                        <div class="plan-select"><a href="">Select Plan</a></div>
                    </div>
                    <div class="plan col-md-3 col-sm-12">
                        <header>
                            <h4 class="plan-title">

                                Ultra
                            </h4>
                            <div class="plan-cost"><span class="plan-price">$99</span><span class="plan-type">/month</span></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="ion-checkmark"> </i>100GB Linux Web Space</li>
                            <li><i class="ion-checkmark"> </i>Unlimited MySQL Databases</li>
                            <li><i class="ion-checkmark"> </i>Unlimited Email</li>
                            <li><i class="ion-checkmark"> </i>10000Gb mo Transfer</li>
                            <li><i class="ion-checkmark"> </i>24/7 Tech Support</li>
                            <li><i class="ion-checkmark"> </i>Daily Backups</li>
                        </ul>
                        <div class="plan-select"><a href="">Select Plan</a></div>
                    </div>
                </div>
            </div>


        </section>


        @include('include.foot')


    </div>

@endsection
