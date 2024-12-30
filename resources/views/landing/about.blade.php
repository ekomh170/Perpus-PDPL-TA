@extends('layouts.landing')

@section('title', 'About Us')

@section('content')
    <section class="about-banner">
        <div class="container py-5">
            <h1 class="text-center">Tentang Kami</h1>
            <p class="text-center">
                Selamat datang di Perpustakaan Kampus Sekolah Tinggi Terpadu Nurul Fikri. Tempat terbaik untuk mendukung perjalanan akademik Anda.
            </p>
        </div>
    </section>

    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('landing/images/perpusnf.jpg') }}" alt="Tentang Kami" class="img-fluid rounded-3">
                </div>
                <div class="col-md-6">
                    <h2>Perjalanan Kami</h2>
                    <p>
                        Perpustakaan Sekolah Tinggi Terpadu Nurul Fikri terletak di Jalan Lenteng Agung, Jakarta Selatan, dan telah menjadi tempat favorit mahasiswa untuk membaca, meminjam buku, serta mencari referensi tugas akhir alumni. Sebagai bagian dari komitmen kami untuk mendukung pembelajaran, kini perpustakaan hadir dalam platform digital yang memudahkan mahasiswa dalam peminjaman dan pencarian koleksi buku secara terintegrasi.
                    </p>
                    <h3>Misi Kami</h3>
                    <p>
                        Kami berkomitmen untuk menyediakan akses literatur terbaik, membantu mahasiswa menyelesaikan studi dengan sumber daya yang relevan, dan mendukung perkembangan pengetahuan di lingkungan kampus. Dengan hadirnya website perpustakaan, kami ingin menjadikan pengalaman belajar lebih efisien dan modern.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Tim Perpustakaan Kami</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('landing/images/man1.png') }}" alt="Eko Haryono" class="img-fluid rounded-circle mb-3"
                        style="width: 150px;">
                    <h5>Eko Haryono</h5>
                    <p class="">Kepala Perpustakaan</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('landing/images/man2.png') }}" alt="Raehan" class="img-fluid rounded-circle mb-3"
                        style="width: 150px;">
                    <h5>Rehan Nurmishuari</h5>
                    <p class="">Staf Administrasi</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('landing/images/man3.png') }}" alt="Ilyas" class="img-fluid rounded-circle mb-3"
                        style="width: 150px;">
                    <h5>Ilyas Abdul Aziz</h5>
                    <p class="">Staf Layanan</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('landing/images/man4.png') }}" alt="Afif" class="img-fluid rounded-circle mb-3"
                        style="width: 150px;">
                    <h5>Afif Naufal</h5>
                    <p class="">Staf Layanan</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('landing/images/man5.png') }}" alt="Deden" class="img-fluid rounded-circle mb-3"
                        style="width: 150px;">
                    <h5>Deden Rafi Akbar</h5>
                    <p class="">Staf Copywriting</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('landing/images/man6.png') }}" alt="Fajar" class="img-fluid rounded-circle mb-3"
                        style="width: 150px;">
                    <h5>Fajar Nurzaman</h5>
                    <p class="">Staf Copywriting</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Hubungi Kami</h2>
            <p class="text-center">
                Ada pertanyaan atau butuh bantuan? Tim kami siap membantu Anda.
            </p>
            <div class="text-center">
                {{-- <a href="{{ route('contact') }}" class="btn btn-primary">Hubungi Kami</a> --}}
            </div>
        </div>
    </section>
@endsection
