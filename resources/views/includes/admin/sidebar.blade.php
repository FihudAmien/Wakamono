<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-text mx-3">Wakamono.Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading mt-3">
      Penambahan
  </div>

    <li class="nav-item">
        <a class="nav-link" href="{{route('berita-packages.index')}}">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Berita</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('quotes-packages.index')}}">
            <i class="fas fa-fw fa-book"></i>
            <span>Quotes</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <div class="sidebar-heading mt-3">
      Setting
  </div>

    <!-- About -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('tentang-packages.index')}}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Tentang</span></a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Tentang</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Setting Tentang Kami</h6>
          <a class="collapse-item" href="{{route('Empat')}}">Isi</a>
          <a class="collapse-item" href="{{route('Empat')}}">Ubah Gambar</a>
        </div>
      </div>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <div class="mb-3"></div>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->