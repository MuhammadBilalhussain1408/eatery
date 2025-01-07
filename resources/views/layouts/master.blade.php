<!DOCTYPE html>

<html lang="en">

<head>

    @include('include.header')
    {{--    <script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=3fc747b96b540' async='true'></script> --}}

</head>

<body class="default">

    <!-- preloader starts -->
    <div id="preloader">
        <div id="loader"></div>
    </div>

    <div class="procus-cursor"></div>
    <div class="procus-cursor2"></div>

    <div class="theme-color-switch">
        <input type="checkbox" class="checkbox" id="checkbox">
        <label for="checkbox" class="checkbox-label">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <span class="ball"></span>
        </label>
    </div>

    <!-- back to top -->
    <div class="back-to-top">
        <span><i class="fa fa-angle-up"></i></span>
    </div>

    @include('include.nav')
    @yield('content')
    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
    @include('include.footer')
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha_v3.siteKey') }}"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ config('services.recaptcha_v3.siteKey') }}', {
                action: 'submit'
            }).then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;
                if(document.getElementById('g-recaptcha-token'))
                document.getElementById('g-recaptcha-token').value = token;
            });
        });
    </script>
</body>

</html>
