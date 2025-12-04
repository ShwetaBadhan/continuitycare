<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scrollCue.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tabler-icons.min.css') }}">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <title>@yield('title')</title>
</head>

<body>
    {{-- Navbar --}}
    @include("frontend.components.navbar")
   
    @include("frontend.components.mobile-navbar")

    {{-- ✅ MAIN PAGE CONTENT YIELD HERE --}}
    @yield('content')

    {{-- Footer --}}
    @include("frontend.components.footer")
    @include("frontend.components.copyright")
    {{-- back to top button --}}
    @include("frontend.components.back-to-top")
    {{-- dark switch --}}
    @include("frontend.components.switch-area")
    {{-- Keep offcanvas here, globally loaded --}}
 @include("frontend.components.sidebar")

    {{-- JS Files --}}
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollCue.min.js') }}"></script>
    <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/js/ukiyo.min.js') }}"></script>
    <script src="{{ asset('assets/js/lenis.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>