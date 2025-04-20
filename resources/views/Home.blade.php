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
                        <img src="https://kemenparekraf.go.id/_next/image?url=https%3A%2F%2Fapi2.kemenparekraf.go.id%2Fstorage%2Fapp%2Fuploads%2Fpublic%2F620%2Fb45%2F1d6%2F620b451d668b3373065297.jpg&w=3840&q=75"
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
                <div class="carousel-caption-custom ">
                    <div class="search-box w-75  mx-auto">
                        <input type="text" placeholder="Ketik untuk mencari destinasi wisata yang dituju...">
                        <button><i class="bi bi-search"></i></button>
                    </div>
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


    {{-- wisata populer --}}

    <div id="infowisata" data-aos="fade-top" data-aos-duration="1000">
        <div class="container mt-5 text-center mb-4">
            <h1 class="fw-bold text-success">Wisata Populer</h1>
            <hr class="border border-2 border-success w-25 mx-auto">
        </div>

        <!-- Card Carousel Section -->
        <div class="container mb-5">
            <div class="d-flex flex-row flex-nowrap overflow-auto gap-3 px-2 pb-2">

                @foreach($judul as $index => $nama)
                <div class="card shadow-sm border-0" style="min-width: 18rem;">
                    <img src="https://asset.kompas.com/crops/qs7lqo0UsFE7TXqwfxF7RAaYYA0=/1x0:1024x682/1200x800/data/photo/2020/05/11/5eb950a1c8fb3.jpeg"
                        class="card-img-top" alt="{{ $nama }}">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">{{ $nama }}</h5>
                        <p class="card-text text-muted">{{ $deskripsi[$index] }}</p>
                        <a href="#" class="btn btn-success btn-sm rounded-pill px-4">Lihat</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div id="hubungi" class="container mt-5 mb-5 " data-aos="fade-right" data-aos-duration="1000">
        <h1 class="fw-bold text-success">Hubungi Kami</h1>
        <hr class="border border-2 border-success w-25 mb-4">
        <div class="row">
            <div class="col-md-7 mb-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.915123456789!2d106.82715331531092!3d-6.175110395519095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e1c1b1c1b1%3A0x1b1b1b1b1b1b1b1b!2sJl.%20Contoh%20No.%20123%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1610000000000!5m2!1sen!2sid"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="col-md-5">
                <h5 class="fw-bold">Informasi Kontak</h5>
                <p><i class="bi bi-geo-alt-fill me-2"></i>Jl. Contoh No. 123, Jakarta</p>
                <p><i class="bi bi-telephone-fill me-2"></i>(021) 123-4567</p>
                <p><i class="bi bi-envelope-fill me-2"></i>kontak@domainanda.com</p>
                <p><i class="bi bi-clock-fill me-2"></i>Senin - Jumat: 08.00 - 17.00</p>
            </div>
        </div>
    </div>


@endsection
