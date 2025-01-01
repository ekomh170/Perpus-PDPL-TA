@extends('layouts.adminlte')

@section('title', 'Cari Buku')

@section('page-title', 'Daftar Buku')

@section('content')
    <div class="card">
        <div class="card-header">
            <form method="GET" action="{{ route('member.books.index') }}">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Cari buku..."
                        value="{{ $keyword ?? '' }}">
                    <span class="input-group-append">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </span>
                </div>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $book->judul }}</td>
                            <td>{{ $book->penulis }}</td>
                            <td>
                                <a href="{{ route('member.books.show', $book->id) }}" class="btn btn-sm btn-info">Detail</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada buku ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
