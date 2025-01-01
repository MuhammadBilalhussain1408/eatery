@extends('layouts.master')
@section('content')

    <style>

        span.pricing-ceo {
            font-size: 33px;
            color: #e2612e;
        }
        .case-details-content .requirement-list li {
            color: #ffffff;
            font-size: 21px;
            display: block;
        }
        .case-details-content .requirement-list li span {
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
            opacity: 1;
            font-size: 16px;
            text-transform: lowercase;
            font-weight: bold;
        }
        .snip1404 .plan-features {
            padding: 26px 0px 0px 0px;
            margin: 0;
            list-style: outside none none;
        }
        .snip1404 .plan-features li {
            padding: 8px 5%;
            font-weight: 500;
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
        .plan-select.btn-plan-1 {
            padding-top: 17rem !important;
        }
        .plan-select.btn-plan-2 {
            padding-top: 11.7rem !important;
        }
        .bullets{
            padding-left: 42px;
            padding-top: 4px;
            font-size: 22px;
        }


        @media only screen and (min-width: 360px) and (max-width: 740px), only screen and (min-width: 412px) and (max-width: 915px), only screen and (min-width: 767px) and (max-width: 991px) {

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
                margin-bottom: 3rem;
            }
            .snip1404.row {
                margin-left: 20px;
                margin-right: 20px;
            }
            .plan-select.btn-plan-1 {
                padding-top: 30px !important;
            }
            .plan-select.btn-plan-2 {
                padding-top: 30px !important;
            }
            .case-details-content h2 {
                font-size: 25px;
            }
            span.pricing-ceo {
                font-size: 26px;
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

        <!-- pricing plans content starts -->
        <section class="case-details-content pt-120 pb-110">

            <div class="container">

                <div class="snip1404 row pb-5">
                    <div class="plan col-md-3 col-sm-12">
                        <header>
                            <h4 class="plan-title">
                                Health is Wealth Membership
                            </h4>
                            <div class="plan-cost"><span class="plan-price">$30</span><span class="plan-type">/month</span></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="fa-solid fa-circle-check"></i> </i> 30 Free Sneaky Pops</li>
                            <li><i class="fa-solid fa-circle-check"> </i> 25% Off Select Restaurants</li>
                            <li><i class="fa-solid fa-circle-check"> </i> Relaxation Areas</li>
                            <li><i class="fa-solid fa-circle-check"> </i> Outdoor Lounging</li>
                        </ul>
                        <div class="plan-select btn-plan-1"><a href="">Select Plan</a></div>
                    </div>
                    <div class="plan col-md-3 col-sm-12">
                        <header>
                            <h4 class="plan-title">
                                The Essential CEO Membership
                            </h4>
                            <div class="plan-cost"><span class="plan-price">$50</span><span class="plan-type">/month</span></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="fa-solid fa-circle-check"></i> Unlimited Wi-Fi</li>
                            <li><i class="fa-solid fa-circle-check"></i> Podcast Room</li>
                            <li><i class="fa-solid fa-circle-check"></i> Multi-Purpose Room</li>
                            <li><i class="fa-solid fa-circle-check"></i> Conference Room</li>
                            <li><i class="fa-solid fa-circle-check"></i> Printing Discounts</li>
                            <li><i class="fa-solid fa-circle-check"></i> Networking Events</li>
                            <li><i class="fa-solid fa-circle-check"></i> Monthly Mixer</li>
                            <li><i class="fa-solid fa-circle-check"></i> VIP Lounge Access</li>
                            <li><i class="fa-solid fa-circle-check"></i> Outdoor Spaces</li>
                            <li><i class="fa-solid fa-circle-check"></i> Selfie Spots</li>
                        </ul>
                        <div class="plan-select"><a href="">Select Plan</a></div>
                    </div>
                    <div class="plan col-md-3 col-sm-12 featured">
                        <header>
                            <h4 class="plan-title">
                                The Executive Membership
                            </h4>
                            <div class="plan-cost"><span class="plan-price">$75</span><span class="plan-type">/month</span></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="fa-solid fa-circle-check"></i> Health is Wealth Membership perks</li>
                            <li><i class="fa-solid fa-circle-check"></i> Essential CEO Membership perks</li>
                            <li><i class="fa-solid fa-circle-check"></i> Printing Room</li>
                            <li><i class="fa-solid fa-circle-check"></i> VIP Lounges</li>
                            <li><i class="fa-solid fa-circle-check"></i> Fun Breaks</li>
                            <li><i class="fa-solid fa-circle-check"></i> Selfie Spots</li>
                        </ul>
                        <div class="plan-select btn-plan-2"><a href="">Select Plan</a></div>
                    </div>
                    <div class="plan col-md-3 col-sm-12">
                        <header>
                            <h4 class="plan-title">
                                The VIP CEO Membership
                            </h4>
                            <div class="plan-cost"><span class="plan-price">$150</span><span class="plan-type">/month</span></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="fa-solid fa-circle-check"></i> Health is Wealth Membership</li>
                            <li><i class="fa-solid fa-circle-check"></i> The Essential CEO Membership</li>
                            <li><i class="fa-solid fa-circle-check"></i> The Executive CEO Membership</li>
                            <li><i class="fa-solid fa-circle-check"></i> Secure Mailbox</li>
                            <li><i class="fa-solid fa-circle-check"></i> Hookah Savings</li>
                            <li><i class="fa-solid fa-circle-check"></i> VIP Events</li>
                        </ul>
                        <div class="plan-select btn-plan-2"><a href="">Select Plan</a></div>
                    </div>
                </div>

                <!-- Section Starts -->

                <div class="pt-5">
                    <h2>1- On My 80 Membership</h2>
                    <span class="pricing-ceo">$30/month</span>
                    <p class="pt-20 abr-para">
                        Fuel your day with health-boosting options and enjoy exclusive discounts on premium wellness food and
                        beverages from 80/20 Eatery and the 80/20 Juice Bar. This membership is ideal for professionals
                        who want to focus on staying healthy and energized while working in a dynamic space.
                    </p>

                    <ul class="requirement-list mt-20">
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> 30 Free Sneaky Pops:</h4>
                            <p class="bullets">Boost your energy and immunity with monthly complimentary wellness shots.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> 25% Off Select Restaurants:</h4>
                            <p class="bullets">Discounted smoothies, açaí bowls, and cold-pressed juices to fuel your day.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Relaxation Areas:</h4>
                            <p class="bullets">Indoor and outdoor spaces to work, unwind, or connect in style.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Outdoor Lounging:</h4>
                            <p class="bullets">Enjoy a refreshing change of scenery in our vibrant outdoor areas.</p>
                        </li>
                    </ul>



                </div>

                <!-- Section Ends -->


                <!-- Section Starts -->

                <div class="pt-5">
                    <h2>2- The Essential CEO Membership</h2>
                    <span class="pricing-ceo">$50/month</span>
                    <p class="pt-20 abr-para">
                        Unlock all the business tools and networking opportunities you need to grow and thrive. The Essential CEO Membership is packed with perks designed to boost productivity and make valuable connections in an inspiring work environment.
                    </p>

                    <ul class="requirement-list mt-20">
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Unlimited Wi-Fi:</h4>
                            <p class="bullets">Stay productive with fast internet.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Podcast Room:</h4>
                            <p class="bullets">2 hours monthly for recording or meetings.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Multi-Purpose Room:</h4>
                            <p class="bullets">2 hours monthly for versatile use.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Conference Room:</h4>
                            <p class="bullets">2 hours monthly for presentations or client meetings.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Printing Discounts:</h4>
                            <p class="bullets">Save on printing services.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Networking Events:</h4>
                            <p class="bullets">Weekly meetups with local entrepreneurs.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Monthly Mixer:</h4>
                            <p class="bullets">Build relationships in a casual, social setting.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> VIP Lounge Access:</h4>
                            <p class="bullets">Relax or work in style.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Outdoor Spaces:</h4>
                            <p class="bullets">Enjoy the lounge, pool table, and cornhole for breaks.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Selfie Spots:</h4>
                            <p class="bullets">Perfect for creating social media content and boosting your brand.</p>
                        </li>
                    </ul>



                </div>

                <!-- Section Ends -->


                <!-- Section Starts -->

                <div class="pt-5">
                    <h2>3- The Executive Membership</h2>
                    <span class="pricing-ceo">$75/month</span>
                    <p class="pt-20 abr-para">
                        Get the best of both worlds with the Executive Membership, blending wellness and workspace amenities. With priority access and a membership mailbox, this package ensures you have all the conveniences and resources to maintain your health and elevate your business.
                    </p>

                    <ul class="requirement-list mt-20">
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Health is Wealth Membership perks:</h4>
                            <p class="bullets">Wellness shots and food discounts.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Essential CEO Membership perks:</h4>
                            <p class="bullets">Wi-Fi, room access, and networking.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Printing Room:</h4>
                            <p class="bullets">Ready for all your document needs.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> VIP Lounges:</h4>
                            <p class="bullets">Indoor and outdoor spaces for work or relaxation.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Fun Breaks:</h4>
                            <p class="bullets">Cornhole and outdoor pool table activities.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Selfie Spots:</h4>
                            <p class="bullets">Perfect for promoting your business or personal brand.</p>
                        </li>
                    </ul>



                </div>

                <!-- Section Ends -->


                <!-- Section Starts -->

                <div class="pt-5">
                    <h2>4- The VIP CEO Membership</h2>
                    <span class="pricing-ceo">$150/month</span>
                    <p class="pt-20 abr-para">
                        Our most exclusive membership, the VIP CEO package, is designed for leaders and top-tier professionals who want access to every benefit the 80/20 CEO Workspace offers. With added luxuries and premium business exposure, this package lets you work, network, and play at the highest level
                    </p>

                    <ul class="requirement-list mt-20">
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Health is Wealth Membership:</h4>
                            <p class="bullets">Sneaky Pops and Restaurant discounts.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Essential CEO Membership perks:</h4>
                            <p class="bullets">Wi-Fi, room access, and networking.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> The Executive CEO Membership:</h4>
                            <p class="bullets">The both of best worlds! Health & Wealth.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Secure Mailbox:</h4>
                            <p class="bullets">Dedicated with a digital lock for mail and packages.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Drink Discounts:</h4>
                            <p class="bullets">15% off cocktails, wine, and spirits.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Hookah Savings:</h4>
                            <p class="bullets">25% off.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Digital Spotlight:</h4>
                            <p class="bullets">Featured in 80/20 CEO ads for business exposure.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> VIP Events:</h4>
                            <p class="bullets">Exclusive invites to network with leaders and investors.</p>
                        </li>
                    </ul>



                </div>

                <!-- Section Ends -->


                <!-- Section Starts -->

                <div class="pt-5">

                    <h2>Additional Perks Coming Soon (Included for All Memberships)</h2>

                    <ul class="requirement-list mt-20">
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Pool Access (2025):</h4>
                            <p class="bullets">Take a refreshing dip or relax by the pool after work.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> VIP Lounge:</h4>
                            <p class="bullets">Unwind in style or connect with fellow members.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Printing Room:</h4>
                            <p class="bullets">Use high-quality printers and supplies for your business needs.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Games:</h4>
                            <p class="bullets">Enjoy cornhole or an outdoor pool table for casual fun.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Outdoor Area:</h4>
                            <p class="bullets">Work, meet, or relax in a peaceful open-air space.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Hookah Lounge:</h4>
                            <p class="bullets">Relax with premium hookah after a productive day.</p>
                        </li>
                        <li>
                            <h4 class="fw-bold text-white pt-4"><span><i class="fa-solid fa-circle-check"></i></span> Selfie Spots:</h4>
                            <p class="bullets">Snap and share moments in our dedicated photo areas.</p>
                        </li>
                    </ul>

                    <p class="pt-50 abr-para">
                        These perks enhance your 80/20 CEO Workspace experience, blending productivity, relaxation, and networking.
                    </p>



                </div>

                <!-- Section Ends -->




            </div>


        </section>


        @include('include.foot')


    </div>

@endsection
