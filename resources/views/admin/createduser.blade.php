@extends('admin.layouts')

@section('title', 'Create User')

@section('contents')
    <h1 class="mb-4">Tambah Pengguna</h1>
    <hr />

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        {{-- Judul --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama" value="{{ old('name') }}">
        </div>

       {{-- Email --}}
       <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" value="{{ old('email') }}">
    </div>

         {{-- Role --}}
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" id="role" class="form-control">
                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>


       {{-- Password --}}
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password">
        </div>

         {{-- Konfirmasi Password --}}
         <div class="mb-3">
            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Ulangi password">
        </div>

        {{-- Tombol Submit --}}
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
