@extends('layouts.adminlte')

@section('title', 'Tambah Peminjaman')

@section('page-title', 'Tambah Peminjaman Baru')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.borrowings.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="member_id">Nama Anggota</label>
                <select name="member_id" id="member_id" class="form-control" required>
                    <option value="">-- Pilih Anggota --</option>
                    @foreach($members as $member)
                        <option value="{{ $member->id }}">{{ $member->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="book_id">Judul Buku</label>
                <select name="book_id" id="book_id" class="form-control" required>
                    <option value="">-- Pilih Buku --</option>
                    @foreach($books as $book)
                        <option value="{{ $book->id }}">{{ $book->judul }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_peminjaman">Tanggal Pinjam</label>
                <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_pengembalian">Tanggal Kembali</label>
                <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.borrowings.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
