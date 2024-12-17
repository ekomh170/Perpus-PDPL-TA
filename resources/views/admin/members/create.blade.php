@extends('layouts.adminlte')

@section('title', 'Tambah Anggota')

@section('page-title', 'Tambah Anggota Baru')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.members.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama anggota">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email anggota">
            </div>
            <div class="form-group">
                <label for="phone_number">No Telepon</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Masukkan nomor telepon anggota">
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea name="address" id="address" class="form-control" placeholder="Masukkan alamat anggota"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
