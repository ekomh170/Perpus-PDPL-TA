<footer id="footer" class="padding-large">
    <div class="container">
        <div class="row">
            <div class="footer-top-area">
                <div class="row d-flex flex-wrap justify-content-between">
                    <!-- Logo dan Sosial Media -->
                    <div class="col-lg-3 col-sm-6 pb-3">
                        <div class="footer-menu">
                            <img src="{{ asset('landing/images/main-logo.png') }}" alt="logo" class="img-fluid" style="max-height: 100px;">
                            <p>Membangun budaya literasi untuk masa depan yang lebih baik. Temukan beragam koleksi buku terbaik di perpustakaan kami.</p>
                            <div class="social-links">
                                <ul class="d-flex list-unstyled">
                                    <li><a href="#"><svg class="facebook"><use xlink:href="#facebook"></use></svg></a></li>
                                    <li><a href="#"><svg class="instagram"><use xlink:href="#instagram"></use></svg></a></li>
                                    <li><a href="#"><svg class="twitter"><use xlink:href="#twitter"></use></svg></a></li>
                                    <li><a href="#"><svg class="youtube"><use xlink:href="#youtube"></use></svg></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Tautan Cepat -->
                    <div class="col-lg-2 col-sm-6 pb-3">
                        <div class="footer-menu">
                            <h5 class="widget-title pb-2">Navigasi</h5>
                            {{-- <ul class="menu-list list-unstyled">
                                <li class="menu-item"><a href="{{ route('landing.index') }}">Beranda</a></li>
                                <li class="menu-item"><a href="{{ route('landing.catalog') }}">Katalog Buku</a></li>
                                <li class="menu-item"><a href="{{ route('landing.about') }}">Tentang Kami</a></li>
                                <li class="menu-item"><a href="{{ route('landing.contact') }}">Kontak</a></li>
                            </ul> --}}
                        </div>
                    </div>

                    <!-- Bantuan dan Layanan -->
                    <div class="col-lg-3 col-sm-6 pb-3">
                        <div class="footer-menu">
                            <h5 class="widget-title pb-2">Layanan</h5>
                            <ul class="menu-list list-unstyled">
                                <li class="menu-item"><a href="#">Pinjam Buku</a></li>
                                <li class="menu-item"><a href="#">Perpanjangan Buku</a></li>
                                <li class="menu-item"><a href="#">Kegiatan Literasi</a></li>
                                <li class="menu-item"><a href="#">Bantuan & FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Kontak -->
                    <div class="col-lg-3 col-sm-6 pb-3">
                        <div class="footer-menu">
                            <h5 class="widget-title pb-2">Kontak Kami</h5>
                            <p>Alamat: Jl. Lenteng Agung No. 10, Jakarta Selatan</p>
                            <p>Email: <a href="mailto:info@perpuskita.com" class="text-decoration-underline">siperpus@nurulfikri.ac.id</a></p>
                            <p>Telepon: <a href="tel:+62219998877" class="text-decoration-underline">+62 21 999 8877</a></p>
                            <p>Jam Operasional: Senin - Jumat (08:00 - 17:00)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div id="footer-bottom" class="mt-4">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="ship-and-payment d-flex gap-md-5 flex-wrap">
                    <div class="shipping d-flex align-items-center">
                        <p class="mb-0">Layanan Kami:</p>
                        <div class="card-wrap ps-2">
                            <p class="mb-0">- Peminjaman Buku</p>
                            <p class="mb-0">- E-Book & Katalog Digital</p>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p>© 2024 SIPERPUS. Website ini dikembangkan oleh <a href="https://templatesjungle.com/" target="_blank">Kelompok 6 - PDPL SE02</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
