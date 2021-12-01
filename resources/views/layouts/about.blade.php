<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('includes.aboutstyle')
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

    <!-- FOOTER -->
    </div>
        @include('includes.footer')

        <!-- AKHIR FOOTER -->
    
</body>

</html>