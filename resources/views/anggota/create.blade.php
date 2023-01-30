@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <h1>Tambah Anggota</h1>
        <a href="{{ route('anggota.index') }}" class="btn btn-primary">Kembali</a>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('anggota.store') }}" method="POST">
            @csrf
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" name="kota" id="kota" class="form-control">
            <label for="no_telp" class="form-label">Telepon</label>
            <input type="text" name="no_telp" id="no_telp" class="form-control">
            <label for="tgl_lahir" class="form-label">Tanggal lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
