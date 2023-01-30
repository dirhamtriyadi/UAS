@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <h1>Data Buku</h1>
        <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Data</a>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Tahun terbit</th>
                    <th>Jenis buku</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->pengarang }}</td>
                        <td>{{ $item->tahun_terbit }}</td>
                        <td>{{ $item->jenis_buku }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="{{ route('buku.edit', $item->no_buku) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('buku.destroy', $item->no_buku) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
@endsection
