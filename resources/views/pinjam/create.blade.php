@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <h1>Tambah Peminjaman</h1>
        <a href="{{ route('pinjam.index') }}" class="btn btn-primary">Kembali</a>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('pinjam.store') }}" method="POST">
            @csrf
            <label for="id_anggota" class="form-label">No anggota</label>
            <select name="id_anggota" id="id_anggota" class="form-control">
                <option value="">Pilih anggota</option>
                @foreach ($anggota as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
            <label for="no_buku" class="form-label">No buku</label>
            <select name="no_buku" id="no_buku" class="form-control">
                <option value="">Pilih buku</option>
                @foreach ($buku as $item)
                    <option value="{{ $item->no_buku }}">{{ $item->judul }}</option>
                @endforeach
            </select>
            <label for="tgl_pinjam" class="form-label">Tanggal pinjam</label>
            <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control">
            <label for="tgl_kembali" class="form-label">Tanggal kembali</label>
            <input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
