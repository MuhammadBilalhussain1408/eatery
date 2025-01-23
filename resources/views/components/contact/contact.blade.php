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

        @media only screen and (min-width: 360px) and (max-width: 740px),
        only screen and (min-width: 412px) and (max-width: 915px),
        only screen and (min-width: 767px) and (max-width: 991px) {


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

        <!-- contact form area starts -->
        <section class="contact-form-area pt-110 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-top mb-50">
                            <h2 class="title_one text-white text-capitalize">
                                let us know how we can <span>help!</span>
                            </h2>
                        </div>
                        <img class="contact-img" src="{{ asset('assets/images/contact1.jpg') }}" alt="contact-image">
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
