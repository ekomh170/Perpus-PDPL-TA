@extends('layouts.adminlte')

@section('title', 'Peminjaman Buku')

@section('page-title', 'Daftar Peminjaman Buku')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('admin.borrowings.create') }}" class="btn btn-primary float-right">Tambah Peminjaman</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Anggota</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Denda</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop Data Peminjaman Backend -->
                @forelse ($borrowings as $borrowing)
                <tr>
                    <td>{{ $loop->iteration }}</td> <!-- Nomor Urut -->
                    <td>{{ $borrowing->member->nama }}</td> <!-- Nama Anggota -->
                    <td>{{ $borrowing->book->judul }}</td> <!-- Judul Buku -->
                    <td>{{ $borrowing->tanggal_peminjaman }}</td> <!-- Tanggal Pinjam -->
                    <td>{{ $borrowing->tanggal_pengembalian }}</td> <!-- Tanggal Kembali -->
                    <td>{{ $borrowing->status }}</td> <!-- Status -->
                    <td>{{ $borrowing->denda }}</td> <!-- Denda -->
                    <td>
                        <a href="{{ route('admin.borrowings.show', $borrowing->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <!-- Tombol Detail -->
                        <a href="{{ route('admin.borrowings.edit', $borrowing->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <!-- Tombol Edit -->
                        <form action="{{ route('admin.borrowings.destroy', $borrowing->id) }}" method="POST"
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
                    <td colspan="6" class="text-center">Tidak ada data peminjaman buku.</td> <!-- Pesan jika data kosong -->
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
