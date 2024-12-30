@extends('layouts.adminlte')

@section('title', 'Tambah Anggota')

@section('page-title', 'Tambah Anggota Baru')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.members.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama anggota">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email anggota">
            </div>
            <div class="form-group">
                <label for="telepon">No Telepon</label>
                <input type="number" name="telepon" id="telepon" class="form-control" placeholder="Masukkan nomor telepon anggota">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat anggota"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
