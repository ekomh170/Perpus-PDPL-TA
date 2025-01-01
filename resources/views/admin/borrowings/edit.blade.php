@extends('layouts.adminlte')

@section('title', 'Edit Peminjaman')

@section('page-title', 'Edit Data Peminjaman')

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- Menampilkan error validasi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.borrowings.update', $borrowing->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="member_id">Nama Anggota</label>
                    <select name="member_id" id="member_id" class="form-control @error('member_id') is-invalid @enderror"
                        required>
                        <option value="">-- Pilih Anggota --</option>
                        @foreach ($members as $member)
                            <option value="{{ $member->id }}"
                                {{ old('member_id', $borrowing->member_id) == $member->id ? 'selected' : '' }}>
                                {{ $member->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('member_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="book_id">Judul Buku</label>
                    <select name="book_id" id="book_id" class="form-control @error('book_id') is-invalid @enderror"
                        required>
                        <option value="">-- Pilih Buku --</option>
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}"
                                {{ old('book_id', $borrowing->book_id) == $book->id ? 'selected' : '' }}>
                                {{ $book->judul }} (Stok: {{ $book->stok }})
                            </option>
                        @endforeach
                    </select>
                    @error('book_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_peminjaman">Tanggal Pinjam</label>
                    <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman"
                        class="form-control @error('tanggal_peminjaman') is-invalid @enderror"
                        value="{{ old('tanggal_peminjaman', $borrowing->tanggal_peminjaman) }}" required>
                    @error('tanggal_peminjaman')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_pengembalian">Tanggal Kembali</label>
                    <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian"
                        class="form-control @error('tanggal_pengembalian') is-invalid @enderror"
                        value="{{ old('tanggal_pengembalian', $borrowing->tanggal_pengembalian) }}">
                    @error('tanggal_pengembalian')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror"
                        required>
                        <option value="peminjaman"
                            {{ old('status', $borrowing->status) == 'peminjaman' ? 'selected' : '' }}>Peminjaman</option>
                        <option value="pengembalian"
                            {{ old('status', $borrowing->status) == 'pengembalian' ? 'selected' : '' }}>Pengembalian
                        </option>
                    </select>
                    @error('status')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="denda">Denda (Opsional)</label>
                    <input type="number" name="denda" id="denda" step="0.01"
                        class="form-control @error('denda') is-invalid @enderror"
                        value="{{ old('denda', $borrowing->denda) }}">
                    @error('denda')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('admin.borrowings.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
