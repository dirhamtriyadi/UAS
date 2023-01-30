@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <h1>Edit Buku</h1>
        <a href="{{ route('buku.index') }}" class="btn btn-primary">Kembali</a>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('buku.update', $buku->no_buku) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" value="{{ $buku->judul }}" class="form-control">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="text" name="pengarang" id="pengarang" value="{{ $buku->pengarang }}" class="form-control">
            <label for="tahun_terbit" class="form-label">Tahun terbit</label>
            <input type="date" name="tahun_terbit" id="tahun_terbit" value="{{ $buku->tahun_terbit }}"
                class="form-control">
            <label for="jenis_buku" class="form-label">Jenis buku</label>
            <input type="text" name="jenis_buku" id="jenis_buku" value="{{ $buku->jenis_buku }}" class="form-control">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" id="status" value="{{ $buku->status }}" class="form-control">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
