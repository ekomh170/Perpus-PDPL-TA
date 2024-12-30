@extends('layouts.adminlte')

@section('title', 'Manajemen Buku')

@section('page-title', 'Daftar Buku')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.books.create') }}" class="btn btn-primary float-right">Tambah Buku</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($books as $book)
                        <!-- Looping Data Buku -->
                        <tr>
                            <td>{{ $loop->iteration }}</td> <!-- Nomor Urut -->
                            <td>{{ $book->judul }}</td> <!-- Judul Buku -->
                            <td>{{ $book->penulis }}</td> <!-- Penulis Buku -->
                            <td>{{ $book->kategori }}</td> <!-- Kategori Buku -->
                            <td>{{ $book->stok }}</td> <!-- Jumlah Stok -->
                            <td>
                                <a href="{{ route('admin.books.show', $book->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <!-- Tombol Detail -->
                                <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <!-- Tombol Edit -->
                                <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</button>
                                    <!-- Tombol Hapus -->
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data buku.</td> <!-- Pesan jika data kosong -->
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
