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
                        <h1>Contact Us</h1>
                        <ul class="breadcrumb-meta">
                            <li><a href="/">home</a></li>
                            <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                            <li class="active">contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- contact info area starts -->
        <section class="contact-info-area pt-110 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-top text-center">
                            <h2 class="title_one text-capitalize text-white"><span>Contact us</span> for a personal experience</h2>
                            <p class="pt-20 abr-para">
                                Have questions or need more info? Reach out to us—we’re here to help!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row mt-60">
                            <div class="col-md-4 col-sm-6">
                                <div class="single-info">
                                    <span class="info-icon"><i class="fa-solid fa-phone-volume"></i></span>
                                    <h4>Phone</h4>
                                    <span>(+1) 757-271-4001</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="single-info active">
                                    <span class="info-icon"><i class="fa-regular fa-envelope"></i></span>
                                    <h4>email</h4>
                                    <span>info@8020eatery.com</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="single-info">
                                    <span class="info-icon"><i class="fa-solid fa-location-dot"></i></span>
                                    <h4>location</h4>
                                    <span>5725 Northampton Blvd, Virginia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- cta area starts -->
        <div class="cta-area py-120">
            <div class="cta-bg dark-version" style="background-image: url('assets/images/cta-bg.png')"></div>
            <div class="cta-bg light-version" style="background-image: url(assets/images/cta-light-bg.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cta-box" style="background-image: url(assets/images/cta-box-bg.png)">
                            <h2 class="title_one">We’d Love to Hear From You – Let’s Build Connections Together!</h2>
{{--                            <a href="contact.html" class="primary-btn mt-40">learn more <span><i class="ri-arrow-right-up-line"></i></span></a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact form area starts -->
        <section class="contact-form-area pt-110 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-top mb-50">
                            <h2 class="title_one text-white">
                                let us know how we can <span>help</span>
                            </h2>
                        </div>
                        <img src="assets/images/contact-form-image.png" alt="contact-image">
                    </div>

                    <div class="col-xl-6 offset-xl-1 col-lg-7">
                        <div class="contact-form-3">
                            <form onsubmit="return checkForm(this);" method="post" action="{{ route('contact') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Hi! My name is</label>
                                    <input type="text" id="name" name="name" placeholder="What's your name?*" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">My email is</label>
                                    <input type="email" id="email" name="email" placeholder="What's your email?*" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">My phone number is</label>
                                    <input type="tel" id="phone" name="phone" placeholder="What's your phone number?*" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">I’d like to share more details:</label>
                                    <textarea id="message" name="message" placeholder="Tell something about your project" rows="5" required></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="privacy-policy" name="privacy-policy" required>
                                    <label class="privacy-policy" for="privacy-policy">I agree with the <a href="privacy.html">privacy policy</a></label>
                                </div>
                                <input name="abrform" class="primary-btn" type="submit" value="Submit Now">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- marquee area starts -->
        <div class="custom-marquee marquee-style-2">
            <div class="marquee-container">
                <div class="marquee">
                    <div class="marquee-content marquee-row-1">
                        <span>Community</span><span>Collaboration</span><span>Creativity</span><span>Connection</span><span>Flavor</span><span>Growth</span><span>Support</span><span>Inspiration</span><span>Relaxation</span>
                        <span>Community</span><span>Collaboration</span><span>Creativity</span><span>Connection</span><span>Flavor</span><span>Growth</span><span>Support</span><span>Inspiration</span><span>Relaxation</span>
                        <span>Community</span><span>Collaboration</span><span>Creativity</span><span>Connection</span><span>Flavor</span><span>Growth</span><span>Support</span><span>Inspiration</span><span>Relaxation</span>
                    </div>
                    <div class="marquee-content marquee-row-2">
                        <span>Networking</span><span>Innovation</span><span>Local</span><span>Togetherness</span><span>Empowerment</span><span>Vibes</span><span>Energy</span><span>Passion</span><span>Flavorful</span>
                        <span>Networking</span><span>Innovation</span><span>Local</span><span>Togetherness</span><span>Empowerment</span><span>Vibes</span><span>Energy</span><span>Passion</span><span>Flavorful</span>
                        <span>Networking</span><span>Innovation</span><span>Local</span><span>Togetherness</span><span>Empowerment</span><span>Vibes</span><span>Energy</span><span>Passion</span><span>Flavorful</span>
                    </div>
                </div>
            </div>
        </div>

        @include('include.foot')

        <script>
            var checkForm = function(form) { /* Submit button was clicked */

                //
                // check form input values
                //

                form.abrform.disabled = true;
                form.abrform.value = "Please wait...";
                return true;
            };
        </script>


    </div>

@endsection
