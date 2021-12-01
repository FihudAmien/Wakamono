<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{url('frontend/assets/LOGOWAKAMONO.svg')}}">
    <title>@yield('title')</title>
    @include('includes.style-partner')
</head>

<body>
    <!-- NAVBAR  -->
    @include('includes.navbar')

    @yield('content')
    <script src="{{url('frontend/Byf_about/assets/js/jquery.min.js')}}"></script>
    <script src="{{url('frontend/Byf_about/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/Byf_about/assets/js/Animated-Typing-With-Blinking.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="{{url('frontend/Byf_about/assets/js/Simple-Slider.js')}}"></script>
</body>

</html>