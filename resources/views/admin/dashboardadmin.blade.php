@extends('admin.layouts')
@section('title', 'dashboard')

{{-- @extends('title', 'dashboard Pariwisata') --}}

@section('contents')

<div class="row">
    <div class="col-md-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data komentar pengunjung</h6>
            </div>
            <div class="card-body">
                <h4 class="font-weight-bold">{{ $jumlahUserKomentar }}</h4>
                <p class="mb-0">
                    <a href="{{ route('export.komentar') }}" class="btn btn btn-success shadow-sm">
                        Export PDF Komentar
                    </a>  </p>
            </div>
        </div>
    </div>
</div>

@endsection