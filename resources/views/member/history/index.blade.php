@extends('layouts.adminlte')

@section('title', 'Riwayat Peminjaman')

@section('page-title', 'Riwayat Peminjaman')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Riwayat Peminjaman</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop Data Peminjaman -->
                    @forelse ($borrowings as $borrowing)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $borrowing->book->judul ?? 'Data buku tidak ditemukan' }}</td>
                            <td>{{ $borrowing->tanggal_peminjaman ?? '-' }}</td>
                            <td>{{ $borrowing->tanggal_pengembalian ?? '-' }}</td>
                            <td>
                                @if ($borrowing->status == 'pengembalian')
                                    <span class="badge badge-success">Dikembalikan</span>
                                @elseif ($borrowing->status == 'peminjaman')
                                    <span class="badge badge-warning">Dipinjam</span>
                                @else
                                    <span class="badge badge-secondary">Tidak Diketahui</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada riwayat peminjaman.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
