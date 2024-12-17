@extends('layouts.adminlte')

@section('title', 'Riwayat Peminjaman')

@section('page-title', 'Laporan Peminjaman Buku')

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
                </tr>
            </thead>
            <tbody>
                <!-- Loop Data Laporan Backend -->
            </tbody>
        </table>
    </div>
</div>
@endsection
