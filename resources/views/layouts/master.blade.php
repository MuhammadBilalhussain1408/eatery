<!DOCTYPE html>

<html lang="en">

<head>

    @include('include.header')
    <script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=3fc747b96b540' async='true'></script>

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
@include('include.footer')
{{--@include('include.subscription-popup')--}}

</body>

</html>
