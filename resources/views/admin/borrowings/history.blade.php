@extends('layouts.adminlte')

@section('title', 'Riwayat Peminjaman')

@section('page-title', 'Riwayat Peminjaman')

@section('content')
<div class="card">
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
                </tr>
            </thead>
            <tbody>
                <!-- Loop Riwayat Data -->
                @foreach ($borrowings as $borrowing)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $borrowing->member->nama ?? '-' }}</td>
                    <td>{{ $borrowing->book->judul ?? '-' }}</td>
                    <td>{{ $borrowing->tanggal_peminjaman ?? '-' }}</td>
                    <td>{{ $borrowing->tanggal_pengembalian ?? '-' }}</td>
                    <td>{{ $borrowing->status ?? '-' }}</td>
                    <td>{{ $borrowing->denda ?? '-' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
