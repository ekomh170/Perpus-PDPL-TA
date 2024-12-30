@extends('layouts.landing')

@section('title', 'Welcome to Bookly')

@section('content')
    @include('components.landing.banner') <!-- Banner Utama -->
    @include('components.landing.services') <!-- Bagian layanan yang mungkin hilang -->
    @include('components.landing.best-selling-items') <!-- Produk best-selling -->
    @include('components.landing.categories') <!-- Kategori Produk -->
    @include('components.landing.customer-reviews') <!-- Ulasan Pelanggan -->
    @include('components.landing.latest-posts') <!-- Postingan Blog -->
    @include('components.landing.instagram') <!-- Galeri Instagram -->
    @include('components.landing.limited-offer') <!-- Penawaran Terbatas -->
@endsection
