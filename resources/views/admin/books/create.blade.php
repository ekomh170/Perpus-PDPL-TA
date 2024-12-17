@extends('layouts.adminlte')

@section('title', 'Tambah Buku')

@section('page-title', 'Tambah Buku Baru')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Judul Buku</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan judul buku">
            </div>
            <div class="form-group">
                <label for="author">Penulis</label>
                <input type="text" name="author" id="author" class="form-control" placeholder="Masukkan nama penulis">
            </div>
            <div class="form-group">
                <label for="quantity">Jumlah</label>
                <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Masukkan jumlah buku">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.books.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
