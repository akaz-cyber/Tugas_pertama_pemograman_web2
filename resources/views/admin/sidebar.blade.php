<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('beranda')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
            </div>
        <div class="sidebar-brand-text mx-3">Pariwisata Admin</div>
        </a>
    <!-- Divider -->

    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('wisatas')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Wisata</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('users')}}">
                <i class="fas fa-fw fa-user-alt"></i>
                <span>User</span></a>
            </li>
    <!-- Divider -->

    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
