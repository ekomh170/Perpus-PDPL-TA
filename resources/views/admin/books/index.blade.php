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
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop Data Buku Backend -->
            </tbody>
        </table>
    </div>
</div>
@endsection
