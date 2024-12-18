@extends('layouts.adminlte')

@section('title', 'Manajemen Anggota')

@section('page-title', 'Daftar Anggota')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('admin.members.create') }}" class="btn btn-primary float-right">Tambah Anggota</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop Data Anggota Backend -->
            </tbody>
        </table>
    </div>
</div>
@endsection
