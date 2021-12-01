<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    @include('includes.style')
    

    <link rel="icon" type="image/png" href="{{url('frontend/assets/LOGOWAKAMONO.svg')}}">
    <title>@yield('title')</title>
    <!-- Loading -->


    <!-- Penutup Loading -->
</head>

<body>
    {{-- <!-- <embed src="assets/Music/Jujutsu Kaisen  Opening FullKaikai Kitanby Eve.mp3" type="audio/mp3" autostart="loop" hidden="true">
    <audio id="player" autoplay controls><source src="{{url('assets/Music/Jujutsu Kaisen  Opening FullKaikai Kitanby Eve.mp3')}}" type="audio/mp3"></audio> --> --}}
        <!-- NAVBAR  -->
       
        @include('includes.navbar')

        @yield('content')
        <!-- <script src="{{url('frontend/assets/js/jquery.min.js')}}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{url('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    @yield('js')
    </div>
        @include('includes.footer')

        <!-- AKHIR FOOTER -->
    
</body>

</html>