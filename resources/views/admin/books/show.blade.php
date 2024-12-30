@extends('layouts.adminlte')

@section('title', 'Detail Buku')

@section('page-title', 'Detail Buku')

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Menampilkan Judul Buku -->
            <h4><strong>Judul Buku:</strong> {{ $book->judul ?? 'N/A' }}</h4>

            <!-- Menampilkan Penulis Buku -->
            <p><strong>Penulis:</strong> {{ $book->penulis ?? 'N/A' }}</p>

            <!-- Menampilkan Kategori Buku -->
            <p><strong>Kategori:</strong> {{ $book->kategori ?? 'N/A' }}</p>

            <!-- Menampilkan Jumlah Buku -->
            <p><strong>Jumlah:</strong> {{ $book->stok ?? 'N/A' }}</p>

            <!-- Menambahkan Tombol Kembali -->
            <a href="{{ route('admin.books.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection
