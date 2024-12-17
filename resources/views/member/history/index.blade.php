@extends('layouts.adminlte')

@section('title', 'Riwayat Peminjaman')

@section('page-title', 'Riwayat Peminjaman')

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop Data Peminjaman -->
                @foreach ($borrowings ?? [] as $borrowing)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $borrowing->book->title ?? '-' }}</td>
                    <td>{{ $borrowing->borrow_date ?? '-' }}</td>
                    <td>{{ $borrowing->return_date ?? '-' }}</td>
                    <td>
                        @if ($borrowing->status == 'returned')
                            <span class="badge badge-success">Dikembalikan</span>
                        @else
                            <span class="badge badge-warning">Dipinjam</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
