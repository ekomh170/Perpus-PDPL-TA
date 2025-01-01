@extends('layouts.adminlte')

@section('title', 'Laporan Peminjaman Buku')

@section('page-title', 'Laporan Peminjaman Buku')

@section('content')
    <div class="card">
        <div class="card-header">
            <form method="GET" action="{{ route('admin.reports') }}">
                <div class="form-row">
                    <div class="col-md-4">
                        <input type="date" name="start_date" class="form-control" placeholder="Tanggal Mulai"
                            value="{{ request('start_date') }}">
                    </div>
                    <div class="col-md-4">
                        <input type="date" name="end_date" class="form-control" placeholder="Tanggal Akhir"
                            value="{{ request('end_date') }}">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </form>
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
                    </tr>
                </thead>
                <tbody>
                    @forelse ($borrowings as $borrowing)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $borrowing->member->nama }}</td>
                            <td>{{ $borrowing->book->judul }}</td>
                            <td>{{ $borrowing->tanggal_peminjaman }}</td>
                            <td>{{ $borrowing->tanggal_pengembalian ?? '-' }}</td>
                            <td>
                                <span
                                    class="badge {{ $borrowing->status === 'pengembalian' ? 'badge-success' : 'badge-warning' }}">
                                    {{ ucfirst($borrowing->status) }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data peminjaman.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
