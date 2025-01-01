@extends('layouts.adminlte')

@section('title', 'Dashboard Member')

@section('page-title', 'Dashboard Member')

@section('content')
    <div class="row">
        <!-- Total Buku -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalBooks }}</h3> <!-- Data total buku -->
                    <p>Total Buku</p>
                </div>
                <div class="icon">
                    <i class="fas fa-book"></i>
                </div>
            </div>
        </div>

        <!-- Peminjaman Aktif -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $activeBorrowings }}</h3> <!-- Data peminjaman aktif -->
                    <p>Peminjaman Aktif</p>
                </div>
                <div class="icon">
                    <i class="fas fa-book-reader"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
