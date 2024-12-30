@extends('layouts.landing')

@section('title', 'Fitur Kami')

@section('content')
    <section class="features-banner">
        <div class="container py-5 text-center">
            <h1>Fitur Unggulan</h1>
            <p class="text-muted">
                Temukan berbagai fitur yang memudahkan akses informasi dan layanan perpustakaan kampus kami.
            </p>
        </div>
    </section>

    <section class="features-details py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-item p-4 border rounded">
                        <img src="{{ asset('landing/images/fitur1.png') }}" alt="Pencarian Buku" class="img-fluid mb-3"
                            style="width: 80px;">
                        <h5>Pencarian Buku</h5>
                        <p>Cari koleksi buku yang Anda butuhkan dengan mudah melalui sistem pencarian kami.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-item p-4 border rounded">
                        <img src="{{ asset('landing/images/fitur2.png') }}" alt="Manajemen Peminjaman" class="img-fluid mb-3"
                            style="width: 80px;">
                        <h5>Manajemen Peminjaman</h5>
                        <p>Pinjam dan kelola buku yang Anda butuhkan langsung dari platform kami.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-item p-4 border rounded">
                        <img src="{{ asset('landing/images/fitur3.png') }}" alt="Riwayat Peminjaman" class="img-fluid mb-3"
                            style="width: 80px;">
                        <h5>Riwayat Peminjaman</h5>
                        <p>Cek riwayat peminjaman Anda dan pantau buku yang sedang dipinjam dengan mudah.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-item p-4 border rounded">
                        <img src="{{ asset('landing/images/fitur4.png') }}" alt="Autentikasi Aman" class="img-fluid mb-3"
                            style="width: 80px;">
                        <h5>Autentikasi Aman</h5>
                        <p>Akses sistem perpustakaan dengan keamanan yang terjamin untuk admin dan anggota.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-item p-4 border rounded">
                        <img src="{{ asset('landing/images/fitur6.png') }}" alt="Role Khusus" class="img-fluid mb-3"
                            style="width: 80px;">
                        <h5>Role Khusus</h5>
                        <p>Admin dan anggota memiliki akses yang sesuai dengan kebutuhan masing-masing.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-item p-4 border rounded">
                        <img src="{{ asset('landing/images/fitur7.png') }}" alt="Dukungan Teknologi"
                            class="img-fluid mb-3" style="width: 80px;">
                        <h5>Dukungan Teknologi</h5>
                        <p>Platform modern yang dirancang untuk mendukung proses belajar dan membaca Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section py-5 bg-light">
        <div class="container text-center">
            <h2>Manfaatkan Fitur Terbaik Kami</h2>
            <p class="">Tingkatkan pengalaman membaca dan belajar Anda dengan fitur-fitur unggulan dari perpustakaan kami.</p>
            <a href="{{ route('landing.index') }}" class="btn btn-primary">Pelajari Lebih Lanjut</a>
        </div>
    </section>
@endsection
