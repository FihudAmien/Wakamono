<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{url('frontend/assets/LOGOWAKAMONO.svg')}}">
    <title>@yield('title')</title>
    @include('includes.style-list')
    
</head>

<body>
    @yield('content')
    <!-- <script src="{{url('frontend/assets/js/jquery.min.js')}}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{url('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    @yield('js')
</body>

</html>