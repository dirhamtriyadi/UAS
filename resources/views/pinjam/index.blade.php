@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <h1>Daftar Pinjam</h1>
        <a href="{{ route('pinjam.create') }}" class="btn btn-primary">Tambah Pinjam</a>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama peminjam</th>
                    <th>No telepon peminjam</th>
                    <th>Judul buku</th>
                    <th>Tanggal pinjam</th>
                    <th>Tanggal kembali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pinjam as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->anggota->nama }}</td>
                        <td>{{ $item->anggota->no_telp }}</td>
                        <td>{{ $item->buku->judul }}</td>
                        <td>{{ $item->tgl_pinjam }}</td>
                        <td>{{ $item->tgl_kembali }}</td>
                        <td>
                            <a href="{{ route('pinjam.edit', $item->no_pinjam) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pinjam.destroy', $item->no_pinjam) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
