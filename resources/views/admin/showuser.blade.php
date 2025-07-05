@extends('admin.layouts')
@section('title', 'Detail User')
@section('contents')
    <h1 class="mb-4">Detail User</h1>
    <hr>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" value="{{ $user->name }}" readonly>
        </div>
        <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" value="{{ $user->email }}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Role</label>
            <input type="text" class="form-control" value="{{ $user->role }}" readonly>
        </div>
        <div class="col-md-6">
            <label class="form-label">Tanggal Dibuat</label>
            <input type="text" class="form-control" value="{{ $user->created_at->format('d M Y, H:i') }}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Terakhir Diubah</label>
            <input type="text" class="form-control" value="{{ $user->updated_at->format('d M Y, H:i') }}" readonly>
        </div>

    </div>

    <a href="{{ route('users') }}" class="btn btn-secondary">Kembali</a>
@endsection
