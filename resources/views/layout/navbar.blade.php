
    <nav class="navbar bg-white navbar-expand-lg navbar-light sticky-top ">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand" href="">
                <img src="{{asset('images/Logo/Logo.png')}}" alt="Logo" style="height: 100px;">
            </a>

            <!-- Toggler Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <!-- Menu Kiri -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tetang" class="nav-link">Tentang kami</a>
                    </li>
                    <li class="nav-item">
                        <a href="#infowisata" class="nav-link">Informasi wisata</a>
                    </li>
                    <li class="nav-item">
                        <a href="#hubungi" class="nav-link">Alamat dan informasi kontak</a>
                    </li>
                </ul>
                @auth
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('logout') }}" method="GET">
                                    <button type="submit" class="dropdown-item text-danger">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            @else
                <a class="btn btn-outline-success mx-4 btn-lg" href="{{ url('login') }}">
                    LOGIN <i class="bi bi-arrow-bar-right"></i>
                </a>
            @endauth
            </div>
        </div>
    </nav>


