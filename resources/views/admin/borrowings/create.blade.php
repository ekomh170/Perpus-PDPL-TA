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
                        <option value="{{ $member->id }}">{{ $member->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="book_id">Judul Buku</label>
                <select name="book_id" id="book_id" class="form-control" required>
                    <option value="">-- Pilih Buku --</option>
                    @foreach($books as $book)
                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="borrow_date">Tanggal Pinjam</label>
                <input type="date" name="borrow_date" id="borrow_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="return_date">Tanggal Kembali</label>
                <input type="date" name="return_date" id="return_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.borrowings.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
