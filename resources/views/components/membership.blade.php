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

        .contact-form-3 input,
        .contact-form-3 textarea {
            width: 100%;
            padding: 10px;
            background-color: transparent;
            border-bottom: none;
            color: #ffffff;
            font-size: 16px;
            outline: none;
            margin-bottom: 10px;
            border: 1px solid white;
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
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <h2 class="title_one form-heading text-white">
                            Thank you for your interest in the <span> 80/20 CEO Membership!</span> We’re excited to get to
                            know you and help you achieve your goals. Please take a moment to fill out this form.
                        </h2>
                    </div>
                    <div class="col-lg-12 pt-4" style="box-shadow: 0px 0px 30px 0px rgb(255 255 255 / 20%);padding: 3rem;">
                        <div class="contact-form-3">
                            <form action="{{ url('save-membership') }}" method="post"
                                id="membershipForm">
                                @csrf
                                <input type="hidden" name="g-recaptcha-token" id="g-recaptcha-token" />
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="name" name="name"
                                                placeholder="What's your full name?*" value="{{old('name')}}">
                                            <p class="text-danger" id="nameError"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" name="email"
                                                placeholder="What's your email?*" value="{{old('email')}}">
                                            <p class="text-danger" id="emailError">
                                                @error('email')
                                                    {{$errors->first('email')}}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="tel" id="phone" name="phone"
                                                placeholder="What's your phone number?*" value="{{old('phone')}}">
                                            <p class="text-danger" id="phoneError"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3"><span style="color: #ffff00;">1-</span> Why are you interested in becoming an 80/20 CEO
                                                member?</label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="is_becoming_member1"
                                                    value="Investment opportunities"  {{old('is_becoming_member1')=='Investment opportunities' ? 'checked' :'' }}>
                                                <span>Investment opportunities</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="is_becoming_member2"
                                                    value="Selling product & services" {{old('is_becoming_member1')=='Selling product & services' ? 'checked' :'' }}>
                                                <span>Selling product & services</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="is_becoming_member3" value="Health benefits" {{old('is_becoming_member1')=='Health benefits' ? 'checked' :'' }}>
                                                <span>Health benefits</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="is_becoming_member4" value="Brand promotion" {{old('is_becoming_member1')=='Brand promotion' ? 'checked' :'' }}>
                                                <span>Brand promotion</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="is_becoming_member5"
                                                    value="Partnerships / Collaborations" {{old('is_becoming_member1')=='Partnerships / Collaborations' ? 'checked' :'' }}>
                                                <span>Partnerships / Collaborations</span>
                                            </label>
                                            <p class="text-danger" id="is_becomingError"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3"><span style="color: #ffff00;">2-</span> What type of Membership are you looking for?</label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="membership1" class="membership-option"
                                                    value="Restaurant discounts"  {{old('membership1')=='Restaurant discounts' ? 'checked' :'' }}>
                                                <span>Restaurant discounts</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="membership2" class="membership-option"
                                                    value="Private Office"  {{old('membership2')=='Private Office' ? 'checked' :'' }}>
                                                <span>Private Office</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="membership3" class="membership-option"
                                                    value="Shared Workspace"  {{old('membership3')=='Shared Workspace' ? 'checked' :'' }}>
                                                <span>Shared Workspace</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="membership4" class="membership-option"
                                                    value="Event Space"  {{old('membership4')=='Event Space' ? 'checked' :'' }}>
                                                <span>Event Space</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="membership5" id="not-sure"
                                                    value="Not sure yet"  {{old('membership5')=='Not sure yet' ? 'checked' :'' }}>
                                                <span>Not sure yet</span>
                                            </label>
                                            <p class="text-danger" id="membershipError"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3"><span style="color: #ffff00;">3-</span> Are you interested in using the 80/20 Eatery as your
                                                business address? <br> <span> (Mailbox +$25 monthly)</span></label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="interested_in_use"
                                                    id="interested_in_use_yes" value="Yes"  {{old('interested_in_use')=='Yes' ? 'checked' :'' }}>
                                                <span>Yes</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="interested_in_use" id="interested_in_use_no"
                                                    value="No"  {{old('interested_in_use')=='No' ? 'checked' :'' }}>
                                                <span>No</span>
                                            </label>
                                            <p class="text-danger" id="interested_inError"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3"><span style="color: #ffff00;">4-</span> Do you need assistance with any of the following?</label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="assistance1" class="assistance-option"
                                                    value="Website Creation or Redesign" {{old('assistance1')=='Website Creation or Redesign' ? 'checked' :'' }}>
                                                <span>Website Creation or Redesign</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="assistance2" class="assistance-option"
                                                    value="Branding or Marketing" {{old('assistance2')=='Branding or Marketing' ? 'checked' :'' }}>
                                                <span>Branding or Marketing</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="assistance3" class="assistance-option"
                                                    value="Business Coaching" {{old('assistance3')=='Business Coaching' ? 'checked' :'' }}>
                                                <span>Business Coaching</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="assistanceOther" id="other-checkbox"
                                                    value="Other (please specify)" {{old('assistanceOther')=='Other (please specify)' ? 'checked' :'' }}>
                                                <span>Other (please specify)</span>
                                            </label>
                                            <div>
                                                <input type="text" id="other-input" name="assistanceOtherVal"
                                                    placeholder="Please specify..."
                                                    style="display: none; margin-top: 10px;" value="{{old('assistanceOtherVal')}}">
                                                {{-- <input type="text" name="" id=""> --}}
                                            </div>
                                            <p class="text-danger" id="assistanceError"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3"><span style="color: #ffff00;">5-</span> What services or amenities are most important to
                                                you?</label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="services1" class="services-option"
                                                    value="Networking Opportunities" {{old('services1')=='Networking Opportunities' ? 'checked' :'' }}>
                                                <span>Networking Opportunities</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="services2" class="services-option"
                                                    value="Educational Workshops" {{old('services2')=='Educational Workshops' ? 'checked' :'' }}>
                                                <span>Educational Workshops</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="services3" class="services-option"
                                                    value="Podcast Studio" {{old('services3')=='Podcast Studio' ? 'checked' :'' }}>
                                                <span>Podcast Studio</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="services4" class="services-option"
                                                    value="Content Creation Rooms" {{old('services4')=='Content Creation Rooms' ? 'checked' :'' }}>
                                                <span>Content Creation Rooms</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="services5" class="services-option"
                                                    value="Conference/Meeting Rooms" {{old('services5')=='Conference/Meeting Rooms' ? 'checked' :'' }}>
                                                <span>Conference/Meeting Rooms</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="services6" class="services-option"
                                                    value="Relaxation Spaces (hookah lounge, juice bar, etc.)"
                                                    {{old('services6')=='Relaxation Spaces (hookah lounge, juice bar, etc.)' ? 'checked' :'' }}
                                                    >
                                                <span>Relaxation Spaces (hookah lounge, juice bar, etc.)</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="servicesOther" id="serviceOtherBtn"
                                                    value="Other (please specify)" {{old('servicesOther')=='Other (please specify)' ? 'checked' :'' }}>
                                                <span>Other (please specify)</span>
                                            </label>
                                            <div>
                                                <input type="text" name="servicesOtherVal" id="other-service-input"
                                                    placeholder="Please specify..." value="{{old('servicesOtherVal')}}"
                                                    style="display: none; margin-top: 10px;">
                                                {{-- <input type="text" name="" id=""> --}}
                                            </div>
                                            <p class="text-danger" id="servicesError"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3"><span style="color: #ffff00;">6-</span> What are your goals for joining the 80/20 CEO
                                                Membership?</label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="goal1" class="goal-option"
                                                    value="Grow my business" {{old('goal1')=='Grow my business' ? 'checked' :'' }}>
                                                <span>Grow my business</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="goal2" class="goal-option"
                                                    value="Meet and collaborate with -other entrepreneurs" {{old('goal2')=='Meet and collaborate with -other entrepreneurs' ? 'checked' :'' }}>
                                                <span>Meet and collaborate with -other entrepreneurs</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="goal3" class="goal-option"
                                                    value="Access creative and -professional resources" {{old('goal3')=='Access creative and -professional resources' ? 'checked' :'' }}>
                                                <span>Access creative and -professional resources</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="goal4" class="goal-option"
                                                    value="Attend events or workshops" {{old('goal4')=='Attend events or workshops' ? 'checked' :'' }}>
                                                <span>Attend events or workshops</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="goalOther" id="goalOtherBtn"
                                                    value="Other (please specify)" {{old('goalOther')=='Other (please specify)' ? 'checked' :'' }}>
                                                <span>Other (please specify)</span>
                                            </label>
                                            <div>
                                                <input type="text" name="goalOtherVal" id="other-goal-input"
                                                    placeholder="Please specify..." value="{{old('goalOtherVal')}}"
                                                    style="display: none; margin-top: 10px;">
                                                {{-- <input type="text" name="" id=""> --}}
                                            </div>
                                            <p class="text-danger" id="goalError"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3"><span style="color: #ffff00;">7-</span> Are you currently working on a specific project or
                                                initiative?</label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="current_project" id="current_project_no"
                                                    class="specific-project" value="No" {{old('current_project')=='No' ? 'checked' :'' }}>
                                                <span>No</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="checkbox" name="current_project" id="current_project_yes"
                                                    value="If yes, please briefly describe it" {{old('current_project')=='If yes, please briefly describe it' ? 'checked' :'' }}>
                                                <span>If yes, please briefly describe it</span>
                                            </label>
                                            <div>
                                                <input type="text" name="current_projectVal" id="current_projectVal"
                                                    placeholder="Please specify..." value="{{old('current_projectVal')}}"
                                                    style="display: none; margin-top: 10px;">
                                            </div>
                                            <span class="text-danger" id="current_projectError"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="budget-options form-group">
                                            <label class="pb-3"><span style="color: #ffff00;">8-</span>
                                                Does your business need a dedicated space for product creation
                                                <br> <span> (e.g., oils, herbal teas, sewing, art, body butters, etc.)?
                                                </span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="req_dedicated_space"
                                                       id="need_a_dedicated_space_yes" value="Yes" {{old('req_dedicated_space')=='Yes' ? 'checked' :'' }}>
                                                <span>Yes</span>
                                            </label>
                                            <label class="budget-option">
                                                <input type="radio" name="req_dedicated_space"
                                                id="need_a_dedicated_space_no"
                                                       value="No" {{old('req_dedicated_space')=='No' ? 'checked' :'' }}>
                                                <span>No</span>
                                            </label>
                                            <span class="text-danger" id="need_a_dedicated_spaceErr"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="been_in_business"><span style="color: #ffff00;">9-</span> How long have you been in business?</label>
                                            <input type="text" id="been_in_business" name="how_long_in_business"
                                                   placeholder="Tell something..." value="{{old('how_long_in_business')}}">
                                                   <p class="text-danger" id="howLongBusinessError"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="LLC"><span style="color: #ffff00;">10-</span> Do you have your LLC, or do you need assistance in getting one for your business?</label>
                                            <input type="text" id="LLC" name="have_llc"
                                                   placeholder="Tell something..." value="{{old('have_llc')}}">
                                            <p class="text-danger" id="LLCError"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tour">Is there anything specific you’d like to learn or see
                                                during your tour?</label>
                                            <textarea id="tour" name="tour" placeholder="Tell something..." rows="5">{{old('tour')}}</textarea>
                                            <p class="text-danger" id="tourError"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="about">Anything else you’d like us to know about you?</label>
                                            <textarea id="about" name="about" placeholder="Tell something..." rows="5">{{old('about')}}</textarea>
                                            <p class="text-danger" id="aboutError"></p>
                                        </div>
                                    </div>
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

                // form.abrform.disabled = true;
                // form.abrform.value = "Please wait...";
                // return true;
            };
            document.getElementById('membershipForm').addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent form submission
                let name = document.getElementById('name');
                let email = document.getElementById('email');
                let phone = document.getElementById('phone');
                let interested_in_use_yesElem = document.getElementById('interested_in_use_yes');
                let interested_in_use_noElem = document.getElementById('interested_in_use_no');

                let is_becoming_member1 = document.querySelector('[name="is_becoming_member1"]');
                let is_becoming_member2 = document.querySelector('[name="is_becoming_member2"]');
                let is_becoming_member3 = document.querySelector('[name="is_becoming_member3"]');
                let is_becoming_member4 = document.querySelector('[name="is_becoming_member4"]');
                let is_becoming_member5 = document.querySelector('[name="is_becoming_member5"]');

                let membership1 = document.querySelector('[name="membership1"]');
                let membership2 = document.querySelector('[name="membership2"]');
                let membership3 = document.querySelector('[name="membership3"]');
                let membership4 = document.querySelector('[name="membership4"]');
                let membership5 = document.querySelector('[name="membership5"]');

                let assistance1 = document.querySelector('[name="assistance1"]');
                let assistance2 = document.querySelector('[name="assistance2"]');
                let assistance3 = document.querySelector('[name="assistance3"]');
                let assistanceOther = document.querySelector('[name="assistanceOther"]');
                let assistanceOtherVal = document.querySelector('[name="assistanceOtherVal"]');

                let services1 = document.querySelector('[name="services1"]');
                let services2 = document.querySelector('[name="services2"]');
                let services3 = document.querySelector('[name="services3"]');
                let services4 = document.querySelector('[name="services4"]');
                let services5 = document.querySelector('[name="services5"]');
                let services6 = document.querySelector('[name="services6"]');
                let servicesOther = document.querySelector('[name="servicesOther"]');
                let servicesOtherVal = document.querySelector('[name="servicesOtherVal"]');

                let goal1 = document.querySelector('[name="goal1"]');
                let goal2 = document.querySelector('[name="goal2"]');
                let goal3 = document.querySelector('[name="goal3"]');
                let goal4 = document.querySelector('[name="goal4"]');
                let goalOther = document.querySelector('[name="goalOther"]');
                let goalOtherVal = document.querySelector('[name="goalOtherVal"]');

                let current_project_no = document.getElementById('current_project_no');
                let current_project_yes = document.getElementById('current_project_yes');
                let current_projectVal = document.getElementById('current_projectVal');
                let need_a_dedicated_space_yes = document.getElementById('need_a_dedicated_space_yes');
                let need_a_dedicated_space_no = document.getElementById('need_a_dedicated_space_no');
                let been_in_business = document.getElementById('been_in_business');
                let LLC = document.getElementById('LLC');
                let tour = document.getElementById('tour');
                let about = document.getElementById('about');

                // Clear previous error messages
                let nameError = document.getElementById('nameError');
                let emailError = document.getElementById('emailError');
                let phoneError = document.getElementById('phoneError');
                let is_becomingError = document.getElementById('is_becomingError');
                let membershipError = document.getElementById('membershipError');
                let interested_inError = document.getElementById('interested_inError');
                let assistanceError = document.getElementById('assistanceError');
                let servicesError = document.getElementById('servicesError');
                let goalError = document.getElementById('goalError');
                let current_projectError = document.getElementById('current_projectError');
                let spaceErr = document.getElementById('need_a_dedicated_spaceErr');
                let howLongBusinessError = document.getElementById('howLongBusinessError');
                let LLCError = document.getElementById('LLCError');
                let tourError = document.getElementById('tourError');
                let aboutError = document.getElementById('aboutError');
                //Make old errors empty
                nameError.textContent = '';
                emailError.textContent = '';
                phoneError.textContent = '';
                is_becomingError.textContent = '';
                membershipError.textContent = '';
                interested_inError.textContent = '';
                assistanceError.textContent = '';
                servicesError.textContent = '';
                goalError.textContent = '';
                current_projectError.textContent = '';
                spaceErr.textContent = '';
                tourError.textContent = '';
                aboutError.textContent = '';
                let isValid = true;
                if (!name.value.trim()) {
                    nameError.textContent = 'Name is required';
                    scrollToReqEle(name);
                    isValid = false;
                }
                if (!email.value.trim()) {
                    emailError.textContent = 'Email is required';
                    scrollToReqEle(email);
                    isValid = false;
                }
                if (!phone.value.trim()) {
                    phoneError.textContent = 'Phone is required';
                    scrollToReqEle(phone);
                    isValid = false;
                }
                if (!is_becoming_member1.checked &&
                    !is_becoming_member2.checked &&
                    !is_becoming_member3.checked &&
                    !is_becoming_member4.checked &&
                    !is_becoming_member5.checked) {
                    is_becomingError.textContent = 'Please Select Atleast One option';
                    scrollToReqEle(is_becomingError);
                    isValid = false;
                }
                if (!membership1.checked &&
                    !membership2.checked &&
                    !membership3.checked &&
                    !membership4.checked &&
                    !membership5.checked) {
                    membershipError.textContent = 'Please Select Atleast One option';
                    scrollToReqEle(membershipError);
                    isValid = false;
                }
                if (!interested_in_use_yesElem.checked &&
                    !interested_in_use_noElem.checked) {
                    interested_inError.textContent = 'Please Select Atleast One option';
                    scrollToReqEle(interested_inError);
                    isValid = false;
                }
                if (!assistance1.checked &&
                    !assistance2.checked &&
                    !assistance3.checked &&
                    !assistanceOther.checked) {
                    assistanceError.textContent = 'Please Select Atleast One option';
                    scrollToReqEle(assistanceError);
                    isValid = false;
                }
                if (assistanceOther.checked && !assistanceOtherVal.value.trim()) {
                    assistanceError.textContent = 'Enter Some value';
                    scrollToReqEle(assistanceError);
                    isValid = false;
                }
                if (!services1.checked &&
                    !services2.checked &&
                    !services3.checked &&
                    !services4.checked &&
                    !services5.checked &&
                    !services6.checked &&
                    !servicesOther.checked) {
                    servicesError.textContent = 'Please Select Atleast One option';
                    scrollToReqEle(servicesError);
                    isValid = false;
                }
                if (servicesOther.checked && !servicesOtherVal.value.trim()) {
                    servicesError.textContent = 'Enter Some value';
                    scrollToReqEle(servicesError);
                    isValid = false;
                }
                if (!goal1.checked &&
                    !goal2.checked &&
                    !goal3.checked &&
                    !goal4.checked &&
                    !goalOther.checked) {
                    goalError.textContent = 'Please Select Atleast One option';
                    scrollToReqEle(goalError);
                    isValid = false;
                }
                if (goalOther.checked && !goalOtherVal.value.trim()) {
                    goalError.textContent = 'Enter Some value';
                    scrollToReqEle(goalError);
                    isValid = false;
                }
                if (!current_project_no.checked &&
                    !current_project_yes.checked) {
                    current_projectError.textContent = 'Please Select Atleast One option';
                    scrollToReqEle(current_projectError);
                    isValid = false;
                }
                if (!need_a_dedicated_space_yes.checked &&
                    !need_a_dedicated_space_no.checked) {
                    spaceErr.textContent = 'Please Select Atleast One option';
                    scrollToReqEle(spaceErr);
                    isValid = false;
                }
                if (current_project_yes.checked && !current_projectVal.value.trim()) {
                    current_projectError.textContent = 'Enter Some value';
                    scrollToReqEle(current_projectError);
                    isValid = false;
                }
                if (!been_in_business.value.trim()) {
                    howLongBusinessError.textContent = 'Please Enter Some Details';
                    scrollToReqEle(howLongBusinessError);
                    isValid = false;
                }
                if (!LLC.value.trim()) {
                    LLCError.textContent = 'Please Enter Some Details';
                    scrollToReqEle(LLCError);
                    isValid = false;
                }
                if (!tour.value.trim()) {
                    tourError.textContent = 'Please Enter Some Details';
                    scrollToReqEle(tourError);
                    isValid = false;
                }
                if (!about.value.trim()) {
                    aboutError.textContent = 'Please Enter Some Details';
                    scrollToReqEle(aboutError);
                    isValid = false;
                }
                // If the form is valid, submit it
                if (isValid) {
                    let abrform = document.querySelector('[name="abrform"]');
                    abrform.disabled = true;
                    abrform.value = "Please wait...";
                    this.submit();
                }
            });

            function scrollToReqEle(ele) {
                let rect = ele.getBoundingClientRect();
                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                window.scrollTo({
                    top: rect.top + scrollTop - (window.innerHeight / 2), // Adjust to center
                    behavior: 'smooth'
                });
            }
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
                otherCheckbox.addEventListener("change", function() {
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
                    option.addEventListener("change", function() {
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
                serviceOtherBtn.addEventListener("change", function() {
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
                    option.addEventListener("change", function() {
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
                goalOtherBtn.addEventListener("change", function() {
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
                    option.addEventListener("change", function() {
                        if (this.checked) {
                            // Uncheck the "Other" checkbox and hide the input box
                            goalOtherBtn.checked = false;
                            otherGoalInput.style.display = "none";
                            otherGoalInput.value = "";
                        }
                    });
                });
                // Get the checkboxes
                const checkboxYes = document.getElementById('interested_in_use_yes');
                const checkboxNo = document.getElementById('interested_in_use_no');

                // Add event listeners to ensure only one is checked at a time
                checkboxYes.addEventListener('change', function() {
                    if (checkboxYes.checked) {
                        checkboxNo.checked = false;
                    }
                });

                checkboxNo.addEventListener('change', function() {
                    if (checkboxNo.checked) {
                        checkboxYes.checked = false;
                    }
                });
                // Get the checkboxes
                const current_projectNo = document.getElementById('current_project_no');
                const current_projectYes = document.getElementById('current_project_yes');
                let current_projectVal = document.getElementById('current_projectVal');

                // Add event listeners to ensure only one is checked at a time
                current_projectNo.addEventListener('change', function() {
                    if (current_projectNo.checked) {
                        current_projectYes.checked = false;
                        current_projectVal.style.display = "none";
                        current_projectVal.value = "";
                    }
                });
                current_projectYes.addEventListener('change', function() {
                    if (current_projectYes.checked) {
                        current_projectNo.checked = false;
                        current_projectVal.style.display = "block";
                        current_projectVal.focus();
                    } else {
                        current_projectVal.style.display = "none";
                        current_projectVal.value = "";
                    }
                });
            });
        </script>
        <script>
            @if ($errors->any())
            let abrform = document.querySelector('[name="abrform"]');
                    abrform.disabled = false;
                    abrform.value = "Submit Now";
            @endif
        </script>


    </div>
@endsection
