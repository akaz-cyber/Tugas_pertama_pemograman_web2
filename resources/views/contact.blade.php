@extends('layout.main')
@section('title', 'Home')
@section('content')

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
            <p><i class="bi bi-geo-alt-fill me-2"></i>Jl. Soekarnohata No. 123, Jakarta</p>
            <p><i class="bi bi-telephone-fill me-2"></i>(021) 123-4567</p>
            <p><i class="bi bi-envelope-fill me-2"></i>email@gmail.com</p>
        </div>
    </div>
</div>


@endsection