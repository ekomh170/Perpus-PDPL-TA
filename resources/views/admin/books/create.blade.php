@extends('layouts.adminlte')

@section('title', 'Tambah Buku')

@section('page-title', 'Tambah Buku Baru')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.books.store') }}" method="POST">
                @csrf
                <!-- Form Input Judul Buku -->
                <div class="form-group">
                    <label for="judul">Judul Buku</label>
                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan judul buku"
                        value="{{ old('judul') }}">
                    @error('judul')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Form Input Penulis -->
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" name="penulis" id="penulis" class="form-control"
                        placeholder="Masukkan nama penulis" value="{{ old('penulis') }}">
                    @error('penulis')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Form Input Kategori -->
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" name="kategori" id="kategori" class="form-control"
                        placeholder="Masukkan kategori buku" value="{{ old('kategori') }}">
                    @error('kategori')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Form Input Jumlah Buku -->
                <div class="form-group">
                    <label for="stok">Jumlah</label>
                    <input type="number" name="stok" id="stok" class="form-control"
                        placeholder="Masukkan jumlah buku" value="{{ old('stok') }}">
                    @error('stok')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('admin.books.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
