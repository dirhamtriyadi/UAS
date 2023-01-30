@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <h1>Daftar Anggota</h1>
        <a href="{{ route('anggota.create') }}" class="btn btn-primary">Tambah Anggota</a>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Telepon</th>
                    <th>Tanggal lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggota as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->kota }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>{{ $item->tgl_lahir }}</td>
                        <td>
                            <a href="{{ route('anggota.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('anggota.destroy', $item->id) }}" method="POST">
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
