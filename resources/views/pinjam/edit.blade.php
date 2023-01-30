@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <h1>Edit Pinjam</h1>
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
        <form action="{{ route('pinjam.update', $pinjam->no_pinjam) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="id_anggota" class="form-label">Nama peminjam</label>
            <select name="id_anggota" id="id_anggota" class="form-control">
                @foreach ($anggota as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $pinjam->anggota_id ? 'selected' : '' }}>
                        {{ $item->nama }}</option>
                @endforeach
            </select>
            <label for="no_buku" class="form-label">Judul buku</label>
            <select name="no_buku" id="no_buku" class="form-control">
                @foreach ($buku as $item)
                    <option value="{{ $item->no_buku }}" {{ $item->no_buku == $pinjam->no_buku ? 'selected' : '' }}>
                        {{ $item->judul }}</option>
                @endforeach
            </select>
            <label for="tgl_pinjam" class="form-label">Tanggal pinjam</label>
            <input type="date" name="tgl_pinjam" id="tgl_pinjam" value="{{ $pinjam->tgl_pinjam }}" class="form-control">
            <label for="tgl_kembali" class="form-label">Tanggal kembali</label>
            <input type="date" name="tgl_kembali" id="tgl_kembali" value="{{ $pinjam->tgl_kembali }}"
                class="form-control">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
