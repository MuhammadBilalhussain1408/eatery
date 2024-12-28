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

        .budget-options.form-group {
            border-bottom: 1px solid #cccccc;
            padding-bottom: 2rem;
        }

        .contact-form-3 .budget-option input:checked+span {
            background-color: #e1612e;
            color: #ffffff;
            border: 1px solid #ffffff;
        }

        h2.form-heading {
            font-size: 34px;
        }

        .contact-form-3 label {
            font-size: 28px;
        }

        /*For Mobiles*/

        @media only screen and (min-width: 360px) and (max-width: 740px),
        only screen and (min-width: 412px) and (max-width: 915px),
        only screen and (min-width: 767px) and (max-width: 991px) {

            h2.form-heading {
                font-size: 25px;
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


        <!-- contact form area starts -->
        <div class="cta-area py-120">
            <div class="cta-bg dark-version" style="background-image: url('assets/images/cta-bg.png')"></div>
            <div class="cta-bg light-version" style="background-image: url('assets/images/cta-light-bg.png')"></div>
            <div class="container">
                <div class="row">
                    <div class="section-top pb-50">
                        <h2 class="title_one form-heading text-white">
                            Thank you for your interest in the <span> 80/20 CEO Membership!</span> We’re excited to get to
                            know you and help you achieve your goals. Please take a moment to fill out this form.
                        </h2>
                    </div>
                    <div class="col-lg-12 pt-4" style="box-shadow: 0px 0px 30px 0px rgb(255 255 255 / 20%);padding: 3rem;">
                        <div class="contact-form-3">
                            <form onsubmit="return checkForm(this);" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="name" name="name"
                                                placeholder="What's your full name?*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" name="email"
                                                placeholder="What's your email?*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="tel" id="phone" name="phone"
                                                placeholder="What's your phone number?*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3">Why are you interested in becoming an 80/20 CEO
                                                member?</label>
                                            <label class="budget-option">
                                                <input type="radio" name="a1" onclick="toggleRadioByName('a1')"
                                                    value="Investment opportunities">
                                                <span>Investment opportunities</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="a2" onclick="toggleRadioByName('a2')"
                                                    value="Selling product & services">
                                                <span>Selling product & services</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="a3" onclick="toggleRadioByName('a3')"
                                                    value="Health benefits">
                                                <span>Health benefits</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="a4" onclick="toggleRadioByName('a4')"
                                                    value="Brand promotion">
                                                <span>Brand promotion</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="a5" onclick="toggleRadioByName('a5')"
                                                    value="Partnerships / Collaborations">
                                                <span>Partnerships / Collaborations</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3">What type of Membership are you looking for?</label>
                                            <label class="budget-option">
                                                <input type="radio" name="b1" class="membership-option" value="Restaurant discounts">
                                                <span>Restaurant discounts</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="b2" class="membership-option" value="Private Office">
                                                <span>Private Office</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="b3" class="membership-option" value="Shared Workspace">
                                                <span>Shared Workspace</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="b4" class="membership-option" value="Event Space">
                                                <span>Event Space</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name=""  id="not-sure" value="Not sure yet">
                                                <span>Not sure yet</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3">Are you interested in using the 80/20 Eatery as your
                                                business address? <br> <span> (Mailbox +$25 monthly)</span></label>
                                            <label class="budget-option">
                                                <input type="radio" name="c1" value="Yes">
                                                <span>Yes</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="c1" value="No">
                                                <span>No</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3">Do you need assistance with any of the following?</label>
                                            <label class="budget-option">
                                                <input type="radio" name="d1" class="assistance-option"
                                                    value="Website Creation or Redesign">
                                                <span>Website Creation or Redesign</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="d2" class="assistance-option" value="Branding or Marketing">
                                                <span>Branding or Marketing</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="d3" class="assistance-option" value="Business Coaching">
                                                <span>Business Coaching</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="" id="other-checkbox" value="Other (please specify)">
                                                <span>Other (please specify)</span>
                                            </label>
                                            <div>
                                                <input type="text" id="other-input" placeholder="Please specify..." style="display: none; margin-top: 10px;">
                                                {{-- <input type="text" name="" id=""> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3">What services or amenities are most important to
                                                you?</label>
                                            <label class="budget-option">
                                                <input type="radio" name="e1" class="services-option" value="Networking Opportunities">
                                                <span>Networking Opportunities</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="e2" class="services-option" value="Educational Workshops">
                                                <span>Educational Workshops</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="e3" class="services-option" value="Podcast Studio">
                                                <span>Podcast Studio</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="e4" class="services-option" value="Content Creation Rooms">
                                                <span>Content Creation Rooms</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="e4" class="services-option" value="Conference/Meeting Rooms">
                                                <span>Conference/Meeting Rooms</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="e5"
                                                    class="services-option" value="Relaxation Spaces (hookah lounge, juice bar, etc.)">
                                                <span>Relaxation Spaces (hookah lounge, juice bar, etc.)</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="" id="serviceOtherBtn" value="Other (please specify)">
                                                <span>Other (please specify)</span>
                                            </label>
                                            <div>
                                                <input type="text" id="other-service-input" placeholder="Please specify..." style="display: none; margin-top: 10px;">
                                                {{-- <input type="text" name="" id=""> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3">What are your goals for joining the 80/20 CEO
                                                Membership?</label>
                                            <label class="budget-option">
                                                <input type="radio" name="f1" class="goal-option" value="Grow my business">
                                                <span>Grow my business</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="f2" class="goal-option"
                                                    value="Meet and collaborate with -other entrepreneurs">
                                                <span>Meet and collaborate with -other entrepreneurs</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="f3" class="goal-option"
                                                    value="Access creative and -professional resources">
                                                <span>Access creative and -professional resources</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="f4" class="goal-option" value="Attend events or workshops">
                                                <span>Attend events or workshops</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="" id="goalOtherBtn" value="Other (please specify)">
                                                <span>Other (please specify)</span>
                                            </label>
                                            <div>
                                                <input type="text" id="other-goal-input" placeholder="Please specify..." style="display: none; margin-top: 10px;">
                                                {{-- <input type="text" name="" id=""> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3">Are you currently working on a specific project or
                                                initiative?</label>
                                            <label class="budget-option">
                                                <input type="radio" name="g1" value="No">
                                                <span>No</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="g1"
                                                    value="If yes, please briefly describe it">
                                                <span>If yes, please briefly describe it</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tour">Is there anything specific you’d like to learn or see
                                                during your tour?</label>
                                            <textarea id="tour" name="tour" placeholder="Tell something..." rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="about">Anything else you’d like us to know about you?</label>
                                            <textarea id="about" name="about" placeholder="Tell something..." rows="3" required></textarea>
                                        </div>
                                    </div>
                                    {{--                                    <div class="col-md-6"> --}}
                                    {{--                                        <div class="form-group"> --}}
                                    {{--                                            <input type="checkbox" id="privacy-policy" name="privacy-policy" required> --}}
                                    {{--                                            <label class="privacy-policy" for="privacy-policy">I agree with the <a href="privacy.html">privacy policy</a></label> --}}
                                    {{--                                        </div> --}}
                                    {{--                                    </div> --}}
                                    <div class="col-md-12 pt-3">
                                        <input name="abrform" class="primary-btn" type="submit" value="Submit Now">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


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
            var checkForm = function(form) {
                /* Submit button was clicked */

                //
                // check form input values
                //

                form.abrform.disabled = true;
                form.abrform.value = "Please wait...";
                return true;
            };
            document.addEventListener("DOMContentLoaded", function() {
                const options = document.querySelectorAll(".membership-option");
                const notSureOption = document.getElementById("not-sure");

                notSureOption.addEventListener("change", function() {
                    if (notSureOption.checked) {
                        options.forEach(option => option.checked = false);
                    }
                });

                options.forEach(option => {
                    option.addEventListener("change", function() {
                        if (this.checked) {
                            notSureOption.checked = false;
                        }
                    });
                });

                const otherCheckbox = document.getElementById("other-checkbox");
                const otherInput = document.getElementById("other-input");
                const Assistance_options = document.querySelectorAll(".assistance-option");

                // Handle "Other" checkbox behavior
                otherCheckbox.addEventListener("change", function () {
                    if (this.checked) {
                        // Uncheck all other options
                        Assistance_options.forEach(option => option.checked = false);
                        // Show the input box
                        otherInput.style.display = "block";
                        otherInput.focus();
                    } else {
                        // Hide the input box and clear its value
                        otherInput.style.display = "none";
                        otherInput.value = "";
                    }
                });

                // Handle other checkboxes behavior
                Assistance_options.forEach(option => {
                    option.addEventListener("change", function () {
                        if (this.checked) {
                            // Uncheck the "Other" checkbox and hide the input box
                            otherCheckbox.checked = false;
                            otherInput.style.display = "none";
                            otherInput.value = "";
                        }
                    });
                });
                const serviceOtherBtn = document.getElementById("serviceOtherBtn");
                const otherServiceInput = document.getElementById("other-service-input");
                const Serivce_options = document.querySelectorAll(".services-option");

                // Handle "Other" checkbox behavior
                serviceOtherBtn.addEventListener("change", function () {
                    if (this.checked) {
                        // Uncheck all other options
                        Serivce_options.forEach(option => option.checked = false);
                        // Show the input box
                        otherServiceInput.style.display = "block";
                        otherServiceInput.focus();
                    } else {
                        // Hide the input box and clear its value
                        otherServiceInput.style.display = "none";
                        otherServiceInput.value = "";
                    }
                });

                // Handle other checkboxes behavior
                Serivce_options.forEach(option => {
                    option.addEventListener("change", function () {
                        if (this.checked) {
                            // Uncheck the "Other" checkbox and hide the input box
                            serviceOtherBtn.checked = false;
                            otherServiceInput.style.display = "none";
                            otherServiceInput.value = "";
                        }
                    });
                });

                const goalOtherBtn = document.getElementById("goalOtherBtn");
                const otherGoalInput = document.getElementById("other-goal-input");
                const goal_options = document.querySelectorAll(".goal-option");

                // Handle "Other" checkbox behavior
                goalOtherBtn.addEventListener("change", function () {
                    if (this.checked) {
                        // Uncheck all other options
                        goal_options.forEach(option => option.checked = false);
                        // Show the input box
                        otherGoalInput.style.display = "block";
                        otherGoalInput.focus();
                    } else {
                        // Hide the input box and clear its value
                        otherGoalInput.style.display = "none";
                        otherGoalInput.value = "";
                    }
                });

                // Handle other checkboxes behavior
                goal_options.forEach(option => {
                    option.addEventListener("change", function () {
                        if (this.checked) {
                            // Uncheck the "Other" checkbox and hide the input box
                            goalOtherBtn.checked = false;
                            otherGoalInput.style.display = "none";
                            otherGoalInput.value = "";
                        }
                    });
                });
            });
        </script>


    </div>
@endsection
