@extends('admin.layouts')
@section('title', 'Detail Wisata')

@section('contents')
    <h1 class="mb-4">Detail Wisata</h1>
    <hr>

    <div class="row mb-3">
        <div class="col-12 text-center">
            <img src="{{ asset('storage/' . $wisata->photo) }}" alt="{{ $wisata->judul }}" class="img-fluid rounded" style="max-width: 400px;">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Judul</label>
            <input type="text" class="form-control" value="{{ $wisata->judul }}" readonly>
        </div>
        <div class="col-md-6">
            <label class="form-label">Tanggal Dibuat</label>
            <input type="text" class="form-control" value="{{ $wisata->created_at->format('d M Y, H:i') }}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Terakhir Diubah</label>
            <input type="text" class="form-control" value="{{ $wisata->updated_at->format('d M Y, H:i') }}" readonly>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea class="form-control" rows="5" readonly>{{ $wisata->deskripsi }}</textarea>
    </div>

    <a href="{{ route('wisatas') }}" class="btn btn-secondary">Kembali</a>
@endsection
