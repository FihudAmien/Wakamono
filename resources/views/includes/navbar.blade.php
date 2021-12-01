<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{url('frontend/assets/LOGOWAKAMONO.svg')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mb-2" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Beranda </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kategori
              </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{url('/list')}}">Berita</a>
                        <a class="dropdown-item" href="{{url('/listquotes')}}">Quotes</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/tentang')}}">Tentang</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sosial Media
              </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://www.instagram.com/betteryouthfoundation/"><i class="fab fa-instagram"></i> BetterYouthFoundation</a>
                        <a class="dropdown-item" href="https://www.instagram.com/main.kemasjid/"><i class="fab fa-instagram"></i> MainKeMasjid</a>
                        <a class="dropdown-item" href="https://www.instagram.com/wakamono.club/"><i class="fab fa-instagram"></i> Wakamono.Club</a>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/search')}}">Search</a>
                </li>
                <a type="button" class="btn btn-warning" href="http://betteryouth.id/donasi/">Donasi</a>
            </ul>
        </div>
    </div>
</nav>
