@extends('layout.main')
@section('title', 'Home')
@section('content')

    {{-- Hero  carousel section --}}
    <div id="home">
        <div data-aos="fade-right" data-aos-duration="1000">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.pesonaindo.com/wp-content/uploads/2015/11/Foto-Tempat-Wisata-Alam-di-Jawa-Pesona-Indonesia-fototrip-3-1025x530.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/736x/0c/75/54/0c7554efc81935315bd9752ce3ef89c4.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/736x/dd/89/6e/dd896e656786cedead05169cad846874.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                </div>

                {{-- Info Cuaca  --}}
                <div class="weather-info">
                    <h4><i class="bi bi-cloud"></i> 17°C</h4>
                    <p><i class="bi bi-geo-alt"></i> Jawa barat</p>
                    <p>Sabtu, 19 April 2025</p>
                    <small>Sumber: BMKG</small>
                </div>

                {{-- Kolom Pencarian --}}
                <div class="carousel-caption-custom">
                    <form action="{{ route('informasi') }}" method="GET" class="search-box w-75 mx-auto">
                            <input type="text" name="search"
                            placeholder="Ketik untuk mencari destinasi wisata yang dituju..."
                            value="{{ request('search') }}">
                        <button type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>

            {{-- Informasi judul --}}

            <div class="bg-success py-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 d-flex align-items-center">
                            <h4 class="text-light m-0">Sistem Informasi Pariwisata</h4>
                        </div>
                        <div class="col-6 text-end  d-flex justify-content-end align-items-center gap-2">
                            <a href=""><i class="bi bi-house-door-fill text-light"></i></a>
                            <a href=""><i class="bi bi-twitter-x text-light"></i></a>
                            <a href=""><i class="bi bi-facebook text-light"></i></a>
                            <a href=""><i class="bi bi-instagram text-light"></i></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    {{-- end hero section --}}


    {{-- wisata populer --}}

    <div id="infowisata" data-aos="fade-top" data-aos-duration="1000">
        <div class="container mt-5 text-center mb-4">
            <h1 class="fw-bold text-success">Wisata Populer</h1>
            <hr class="border border-2 border-success w-25 mx-auto">
        </div>

        <!-- Card Carousel Section -->
        <div class="container mb-5">
            <div class="d-flex flex-row flex-nowrap overflow-auto gap-3 px-2 pb-2">

                @foreach ($wisatas as $wisata)
                    <div class="card shadow-sm border-0" style="min-width: 18rem;">
                        <img src="{{ asset('storage/' . $wisata->photo) }}" class="card-img-top" alt="{{ $wisata->judul }}"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">{{ $wisata->judul }}</h5>
                            <p class="card-text text-muted"
                                style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                {{ $wisata->deskripsi }}
                            </p>
                            <a href="{{ route('detail', ['id' => $wisata->id]) }}"
                                class="btn btn-success btn-sm rounded-pill px-4">Lihat</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>



@endsection
