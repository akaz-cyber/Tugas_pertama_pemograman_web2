@extends('admin.layouts')

@section('title', 'Create Product')

@section('contents')
    <h1 class="mb-4">Tambah Wisata</h1>
    <hr />
    <form action="{{ route('wisatas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Judul --}}
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan judul wisata">
        </div>

        {{-- Foto --}}
        <div class="mb-3">
            <label for="photo" class="form-label">Foto</label>
            <input type="file" name="photo" id="photo" class="form-control">
        </div>

        {{-- Deskripsi --}}
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" placeholder="Tulis deskripsi wisata..."></textarea>
        </div>

        {{-- Tombol Submit --}}
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
