@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="card text-bg-primary">
                <div class="card-header">
                    <h2>Pinjam</h2>
                </div>
                <div class="card-body">
                    <p class="card-title">{{ $pinjam }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('pinjam.index') }}" class="text-white">Lihat selengkapnya</a>
                </div>
            </div>
            <div class="card text-bg-primary">
                <div class="card-header">
                    <h2>Buku</h2>
                </div>
                <div class="card-body">
                    <p class="card-title">{{ $buku }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('buku.index') }}" class="text-white">Lihat selengkapnya</a>
                </div>
            </div>
            <div class="card text-bg-primary">
                <div class="card-header">
                    <h2>Anggota</h2>
                </div>
                <div class="card-body">
                    <p class="card-title">{{ $anggota }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('anggota.index') }}" class="text-white">Lihat selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
@endsection
