@extends('admin.layouts')
@section('title', 'Edit Wisata')

@section('contents')

<h1 class="mb-0">Edit Wisata</h1>

<hr />
<form action="{{ route('wisatas.update', $wisata->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" name="judul" class="form-control" value="{{ old('judul', $wisata->judul) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Photo (upload baru jika ingin mengganti)</label>
        <input type="file" name="photo" class="form-control">
        @if ($wisata->photo)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $wisata->photo) . '?' . $wisata->updated_at->timestamp }}" alt="Foto Wisata" width="150">
            </div>
        @endif
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="4">{{ old('deskripsi', $wisata->deskripsi) }}</textarea>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-warning">Update</button>
    </div>
</form>

@endsection
