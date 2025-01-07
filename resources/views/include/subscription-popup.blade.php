<style>
    #autoModal{
        opacity: 1;
        position: fixed;
        inset: 0px;
        z-index: 999999 !important;
        transition: opacity 0.15s linear;
        background-color: rgba(0, 0, 0, 0.737);
    }
    .modal-content{
        height: 500px;
        max-height: 500px;
        z-index: 2;
        background: url('assets/images/sub1.jpg');
        border-width: 5px;
        border-style: dashed;
        border-color: rgb(255, 255, 255);
        border-radius: 19px;
        min-height: 500px;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 24px 0px;
        border-image: initial !important;
        top: 0px;
        left: 0px;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .modal-header {
        display: flex;
        flex-shrink: 0;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 1rem;
        border-bottom: 0px;
    }
    .modal-dialog{
        top: 10%;
    }
    .btn-close {
        box-sizing: content-box;
        width: 1em;
        height: 1em;
        padding: .25em .25em !important;
        color: #000;
        border: 0;
        border-radius: .25rem;
        opacity: 1;
        background-color: white;
    }
    .subscription-input-fields{
        width: 77%;
        padding: 13px;
        margin-top: 1rem;
        font-weight: 500;
        font-size: 17px;
    }
    input::placeholder {
        font-size: 18px;
        font-weight: bold;
        color: black;
    }
</style>
<div class="modal fade" id="autoModal" tabindex="-1" aria-labelledby="autoModalLabel" aria-hidden="true" style="z-index: 9998;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" id="subscribeModalCloseBtn" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center" id="SubscribeModalBody">
                <h2 class="text-white text-center">
                    SUBSCRIBE NOW
                </h2>
                <h4 class="fw-bold pt-2">
                    Subscribe today and get a free Wellness Pop
                </h4>
                <form onsubmit="checkForm(this);" id="subscriptionForm">
                    <div class="form-group">

                            <input class="subscription-input-fields"
                                   type="text"
                                   id="name"
                                   name="name"
                                   required
                                   placeholder="Full Name*">

                            <input class="subscription-input-fields"
                                   type="email"
                                   id="email"
                                   name="email"
                                   required
                                   placeholder="Your Email*">

                            <input class="subscription-input-fields"
                                   type="tel"
                                   id="phone"
                                   name="phone"
                                   required
                                   placeholder="Your Phone Number*">

                    </div>
                    <div class="pt-3">
                        <input style="width: 62%;border-radius: 7px;" name="abrform" id="abrform" class="primary-btn" type="submit" value="Subscribe Now">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
</script>
