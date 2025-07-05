@extends('admin.layouts')
@section('title', 'User dashbord')

@section('contents')

<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List User</h1>
    <div class="row">
            <a href="{{ route('users.create') }}" class="btn btn-primary mx-3">Add user</a>
    </div>
</div>

<hr />
@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
<table id="tabelPaket" class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>name</th>
            <th>email</th>
            <th>role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{ $users->links() }}
</div>

@endsection