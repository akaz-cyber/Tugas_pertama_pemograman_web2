@extends('admin.layouts')
@section('title', 'Edit User')

@section('contents')

<h1 class="mb-0">Edit User</h1>

<hr />

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Terjadi kesalahan!</strong>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Role</label>
        <select name="role" class="form-control">
            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Password Baru (kosongkan jika tidak ingin mengubah)</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Konfirmasi Password Baru</label>
        <input type="password" name="password_confirmation" class="form-control">
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-warning">Update</button>
    </div>
</form>

@endsection
