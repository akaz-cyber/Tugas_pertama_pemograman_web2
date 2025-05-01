@extends('layout.main')
@section('title', $wisata->title)
@section('content')

<div class="container mt-5" style="max-width: 800px; margin: auto; font-family: Arial, sans-serif;">

    {{-- Judul --}}
    <h1 style="font-weight: 700; font-size: 28px;">
        {{ $wisata->judul }}
    </h1>

    {{-- Info Tanggal --}}
    <div style="display: flex; align-items: center; gap: 10px; margin-top: 10px; margin-bottom: 20px;">
        <div style="font-size: 14px;">
            {{ \Carbon\Carbon::parse($wisata->created_at)->translatedFormat('d F Y') }} PUKUL {{ \Carbon\Carbon::parse($wisata->created_at)->format('H.i') }} WIB
        </div>
    </div>

    {{-- Gambar --}}
    @if ($wisata->photo)
    <div style="margin-bottom: 10px;">
        <img src="{{ asset('storage/' . $wisata->photo) }}" alt="Gambar Wisata" style="width: 100%; border-radius: 8px;">
        @if ($wisata->judul)
        <small style="display: block; text-align: center; color: gray; font-size: 13px; margin-top: 5px;">
            {{ $wisata->judul }}
        </small>
        @endif
    </div>
    @endif

    {{-- Deskripsi --}}
    <div style="margin-top: 20px; font-size: 16px; color: #333; line-height: 1.6;">
        {!! nl2br(e($wisata->deskripsi)) !!}
    </div>

</div>

@endsection
