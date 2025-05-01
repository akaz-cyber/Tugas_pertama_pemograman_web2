@extends('layout.main')
@section('title', 'Home')
@section('content')


    <!-- Search Section -->
    <div class="py-5 text-white text-center"
        style="background: url('https://cdn.pixabay.com/photo/2013/10/09/02/26/lake-192979_1280.jpg') center center/cover no-repeat;">
        <div class="container">
            <div class="input-group input-group-lg mx-auto" style="max-width: 700px;">
                <form action="{{ route('informasi') }}" method="GET" class="search-box w-75 mx-auto">
                    <input type="text" name="search"
                    placeholder="Ketik untuk mencari destinasi wisata yang dituju..."
                    value="{{ request('search') }}">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
            </div>
        </div>
    </div>


    <!-- Title and Subtitle -->
    <div class="container py-4 text-center">
        <h1 class="fw-bold text-success">Berbagai Destinasi pariwisata</h1>
        <hr class="border border-2 border-success w-25 mb-4 mx-auto">

        <!-- Destination Cards Grid -->
        <div class="container mb-5">
            <div class="row row-cols-1 row-cols-md-3 g-3">
                @if (request('search'))
                    <div class="col-12 text-center mb-3">
                        <p>Hasil pencarian untuk: <strong>{{ request('search') }}</strong></p>
                    </div>
                @endif

                @if ($wisatas->isEmpty())
                    <div class="col-12 text-center mt-3">
                        <p>Tidak ada hasil ditemukan untuk pencarian <strong>{{ request('search') }}</strong>.</p>
                    </div>
                @endif
                <!-- Tambahkan lagi col di bawah ini -->
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
                <div class="d-flex justify-content-center mt-4">
                    {{ $wisatas->links() }}
                </div>

                <!-- dst -->
            </div>
        </div>

    </div>
@endsection
