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
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop Data Peminjaman Backend -->
            </tbody>
        </table>
    </div>
</div>
@endsection
