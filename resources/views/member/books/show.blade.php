@extends('layouts.adminlte')

@section('title', 'Detail Buku')

@section('page-title', 'Detail Buku')

@section('content')
<div class="card">
    <div class="card-body">
        <h4><strong>Judul Buku:</strong> {{ $book->judul ?? 'N/A' }}</h4>
        <p><strong>Penulis:</strong> {{ $book->penulis ?? 'N/A' }}</p>
        <p><strong>Jumlah Tersedia:</strong> {{ $book->stok ?? 'N/A' }}</p>
        <p><strong>Deskripsi:</strong> {{ $book->description ?? 'N/A' }}</p>
        <a href="{{ route('member.books.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
