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
            display: inline-flex
        }
        .case-details-content .requirement-list li span {
            color: #ffff00;
            margin: 0;
            padding-right: 13px;
        }

        @media only screen and (min-width: 360px) and (max-width: 740px),
        only screen and (min-width: 412px) and (max-width: 915px),
        only screen and (min-width: 767px) and (max-width: 991px) {

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

        <!-- case detials content starts -->
        <section class="case-details-content pt-120 pb-110">
            <div class="container">

                <!-- Section Starts -->

                <div>
                    <h2>1- On My 80 Membership</h2>
                    <span class="pricing-ceo">Price: $30/month</span>
                    <p class="pt-20 abr-para">
                        Fuel your day with health-boosting options and enjoy exclusive discounts on premium wellness food and
                        beverages from 80/20 Eatery and the 80/20 Juice Bar. This membership is ideal for professionals who
                        want to focus on staying healthy and energized while working in a dynamic space.
                    </p>
                </div>
                <div class="row mt-50">
                    <div class="col-lg-6">
                        <div class="single-box">
                            <h3>What you get:</h3>
                            <ul class="requirement-list mt-20">
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    30 complimentary wellness shots per month—designed to boost your immune system and energy levels.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    25% discount on smoothies, yogurt bowls, and cold-pressed juices—perfect for fueling up during work hours.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    Access to lounging areas—where you can relax, work in a tranquil setting, or network in style.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    Enjoy the outdoor ambiance with access to the outdoor lounging area for a change of scenery.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box">
                            <h3>Why it’s great:</h3>
                            <ul class="requirement-list mt-20">
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    Maintain peak energy levels while having access to beautiful outdoor and indoor spaces to unwind and recharge throughout the day.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Section Ends -->


                <!-- Section Starts -->

                <div class="pt-40">
                    <h2>2- The Essential CEO Membership</h2>
                    <span class="pricing-ceo">Price: $50/month</span>
                    <p class="pt-20 abr-para">
                        Unlock all the business tools and networking opportunities you need to grow and thrive. The Essential CEO
                        Membership is packed with perks designed to boost productivity and make valuable connections in an inspiring
                        work environment.
                    </p>
                </div>
                <div class="row mt-50">
                    <div class="col-lg-6">
                        <div class="single-box">
                            <h3>What you get:</h3>
                            <ul class="requirement-list mt-20">
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    Unlimited high-speed Wi-Fi for seamless productivity.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    2 hours of private access to the Podcast Room each month, ideal for recording or hosting professional meetings.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    2 hours of access to the Conference Room for presentations or client meetings.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    Exclusive weekly networking events with local entrepreneurs and business owners.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    Invitations to our Monthly Membership Mixer for casual socializing and building professional relationships.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    VIP lounging area access, offering a relaxed space to work or unwind in style.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    Use of the outdoor lounging area and outdoor pool table for breaks and casual meetings.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    Access to cornhole, adding a fun, competitive element to your breaks or after-work downtime.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    Selfie picture areas throughout the workspace for social media content, helping you build your brand and engage with your audience.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box">
                            <h3>Why it’s great:</h3>
                            <ul class="requirement-list mt-20">
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    Not only does this package provide all the essentials for productivity, but it also offers exclusive networking opportunities and fun, relaxing spaces to refresh your mind.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Section Ends -->


                <!-- Section Starts -->

                <div class="pt-40">
                    <h2>3- The Executive Membership</h2>
                    <span class="pricing-ceo">Price: $80/month</span>
                    <p class="pt-20 abr-para">
                        Get the best of both worlds with the Executive Membership, blending wellness and workspace amenities.
                        With priority access and a membership mailbox, this package ensures you have all the conveniences and
                        resources to maintain your health and elevate your business.
                    </p>
                </div>
                <div class="row mt-50">
                    <div class="col-lg-6">
                        <div class="single-box">
                            <h3>What you get:</h3>
                            <ul class="requirement-list mt-20">
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    All benefits from the On My 80 Membership- wellness shots and discounted food options.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    All benefits from the Essential CEO Membership—Wi-Fi, Podcast and Conference Room access, networking events, and more.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    Dedicated membership mailbox with a secure digital lock—receive business mail and packages in a professional manner.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    Priority booking for Podcast and Conference Rooms, ensuring you never miss a meeting or recording.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    Access to the Printing Room for all your document needs, making sure you're always prepared for important meetings or presentations.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    VIP lounging area and outdoor lounging area to work or relax in comfort
                                    Cornhole and outdoor pool table for casual breaks or team-building activities.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    Selfie picture areas to capture moments, promote your business, or enhance your personal brand.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box">
                            <h3>Why it’s great:</h3>
                            <ul class="requirement-list mt-20">
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    This package is perfect for busy professionals who want to combine wellness with the full range of business and leisure amenities in the 80/20 CEO Workspace.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Section Ends -->



                <!-- Section Starts -->

                <div class="pt-40">
                    <h2>4- The VIP CEO Membership</h2>
                    <span class="pricing-ceo">Price: $150/month</span>
                    <p class="pt-20 abr-para">
                        Our most exclusive membership, the VIP CEO package, is designed for leaders and top-tier professionals who want
                        access to every benefit the 80/20 CEO Workspace offers. With added luxuries and premium business exposure,
                        this package lets you work, network, and play at the highest level.
                    </p>
                </div>
                <div class="row mt-50">
                    <div class="col-lg-6">
                        <div class="single-box">
                            <h3>What you get:</h3>
                            <ul class="requirement-list mt-20">
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    All-inclusive access to the Wellness Foodie, Essential CEO, and Executive Membership perks—covering your health, business, and networking needs.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    15% discount on premium cocktails, wine, and spirits at the 80/20 Eatery—perfect for hosting clients or celebrating your latest business success.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    15% discount on hookah**—enjoy in our luxurious VIP lounge with your team or clients.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    Featured space in the 80/20 CEO Magazine—gain exposure for your business, whether through a promotional feature, a business spotlight, or a personal interview.
                                </li>
                                <li><span><i class="fa-solid fa-circle-check"></i> </span>
                                    VIP invitations to special events and partner showcases—connect with top industry leaders, investors, and influencers in exclusive settings.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box">
                            <h3>Why it’s great:</h3>
                            <ul class="requirement-list mt-20">
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    The VIP CEO Membership gives you unparalleled access to the full 80/20 CEO experience. Whether you’re working, entertaining, or promoting your brand, this package has everything you need to thrive in style.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Section Ends -->



                <!-- Section Starts -->

                <div class="pt-40">
                    <h2>Additional Perks Coming Soon <br>(Included for All Memberships)</h2>
                </div>
                <div class="row mt-50">
                    <div class="col-lg-12">
                        <div class="single-box" style="max-width: 100%;">
                            <ul class="requirement-list mt-20">
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    Pool Access (Opening in 2025): <br>
                                    Enjoy a refreshing dip during your breaks or relax by the pool after a productive day.
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    VIP Lounging Area: <br>
                                    A comfortable and stylish spot for unwinding, informal meetings, or catching up with fellow members.
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    Printing Room: <br>
                                    Access to high-quality printers and office supplies for all your business needs.
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    Cornhole & Outdoor Pool Table: <br>
                                    Engage in a bit of fun between meetings or network with colleagues over a casual game.
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    Outdoor Lounging Area: <br>
                                    Enjoy fresh air, work outside, or hold informal gatherings in a serene, well-designed outdoor setting.
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    Hookah Lounge: <br>
                                    Unwind after hours with our premium hookah experience, available in our luxurious lounge.
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    Selfie Picture Areas: <br>
                                    Capture the moment and share your 80/20 CEO Workspace experience on social media with dedicated selfie spots throughout the space.
                                </li>
                            </ul>
                            <p class="abr-para pt-20">
                                These additional perks elevate the entire 80/20 CEO Workspace experience, providing members with not only business tools but also premium relaxation, networking, and lifestyle features to create the perfect balance of work and play
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Section Ends -->



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
