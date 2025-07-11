@extends('admin.layouts')
@section('title', 'Wisata dashbord')

@section('contents')

    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Wisata</h1>
        <div class="row">
                <a href="{{ route('wisatas.create') }}" class="btn btn-primary mx-3">Add wisata</a>
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
                <th>Images</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wisatas as $wisata)
                <tr>
                    <td>{{ $loop->iteration + ($wisatas->currentPage() - 1) * $wisatas->perPage() }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $wisata->photo) }}" alt="{{ $wisata->judul }}" width="100">
                    </td>
                    <td>{{ $wisata->judul }}</td>
                    <td>{{ $wisata->deskripsi }}</td>
                    <td>
                        <a href="{{ route('wisatas.show', $wisata->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('wisatas.edit', $wisata->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('wisatas.destroy', $wisata->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
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
        {{ $wisatas->links() }}
    </div>


@endsection
