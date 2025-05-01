@extends('layout.main')
@section('title', 'Home')
@section('content')

   {{-- tentang kami --}}

   <div id="tetang" class="container mt-5 mb-4" data-aos="fade-left" data-aos-duration="1000">
    <h1 class="fw-bold text-success">Tentang Kami</h1>
    <hr class="border border-2 border-success w-25 mb-4">

    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <p class="me-2 fs-5 text-justify">
                Kami adalah tim yang berdedikasi untuk memberikan layanan terbaik kepada pelanggan. Dengan pengalaman
                dan komitmen tinggi, kami terus berinovasi untuk menghadirkan solusi yang berkualitas dan terpercaya.
                Kepuasan pelanggan adalah prioritas utama kami dalam setiap langkah yang kami ambil.
            </p>
        </div>

        <div class="col-md-6 text-center">
            <img src="https://ik.imagekit.io/tvlk/blog/2021/08/boracay-shutterstock_641355409.png" alt="Tim Kami"
                class="img-fluid rounded shadow">
        </div>
    </div>
</div>

@endsection