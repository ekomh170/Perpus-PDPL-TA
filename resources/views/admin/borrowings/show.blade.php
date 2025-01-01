@extends('layouts.adminlte')

@section('title', 'Detail Peminjaman')

@section('page-title', 'Detail Peminjaman Buku')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.borrowings.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama Anggota</th>
                    <td>{{ $borrowing->member->nama }}</td>
                </tr>
                <tr>
                    <th>Email Anggota</th>
                    <td>{{ $borrowing->member->email }}</td>
                </tr>
                <tr>
                    <th>Judul Buku</th>
                    <td>{{ $borrowing->book->judul }}</td>
                </tr>
                <tr>
                    <th>Penulis Buku</th>
                    <td>{{ $borrowing->book->penulis }}</td>
                </tr>
                <tr>
                    <th>Tanggal Pinjam</th>
                    <td>{{ $borrowing->tanggal_peminjaman }}</td>
                </tr>
                <tr>
                    <th>Tanggal Kembali</th>
                    <td>{{ $borrowing->tanggal_pengembalian ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        @if ($borrowing->status === 'peminjaman')
                            <span class="badge badge-warning">Dipinjam</span>
                        @else
                            <span class="badge badge-success">Dikembalikan</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Denda</th>
                    <td>{{ $borrowing->denda ? 'Rp ' . number_format($borrowing->denda, 2, ',', '.') : 'Tidak Ada' }}</td>
                </tr>
            </table>

            @if ($borrowing->status === 'peminjaman')
                <form action="{{ route('admin.borrowings.return', $borrowing->id) }}" method="POST" class="mt-3">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success"
                        onclick="return confirm('Yakin ingin mengonfirmasi pengembalian buku ini?')">Konfirmasi
                        Pengembalian</button>
                </form>
            @endif
        </div>
    </div>
@endsection
