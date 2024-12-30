<section id="billboard" class="position-relative d-flex align-items-center py-5 bg-light-gray"
    style="background-image: url({{ asset('landing/images/banner-image-bg.jpg') }}); background-size: cover; background-repeat: no-repeat; background-position: center; height: 800px;">

    <!-- Navigation Buttons -->
    <div class="position-absolute end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next main-slider-button-next">
        <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80"
            height="80">
            <use xlink:href="#alt-arrow-right-outline"></use>
        </svg>
    </div>
    <div class="position-absolute start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev main-slider-button-prev">
        <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80"
            height="80">
            <use xlink:href="#alt-arrow-left-outline"></use>
        </svg>
    </div>

    <!-- Swiper Container -->
    <div class="swiper main-swiper">
        <div class="swiper-wrapper d-flex align-items-center">

            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <!-- Banner Content -->
                        <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                            <div class="banner-content">
                                <h2>Menyalakan Cahaya Pengetahuan</h2>
                                <p>Temukan koleksi buku terbaru dan literatur akademik yang akan membimbing Anda menuju pencerahan ilmu. Akses mudah, kapan saja.</p>
                                <a href="{{ route('landing.index') }}" class="btn mt-3">Jelajahi koleksi</a>
                            </div>
                        </div>
                        <!-- Banner Image -->
                        <div class="col-md-6 text-center">
                            <div class="image-holder">
                                <img src="{{ asset('landing/images/banner-image1.png') }}" class="img-fluid"
                                    alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <!-- Banner Content -->
                        <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                            <div class="banner-content">
                                <h2>Perpustakaan Digital, Jendela Masa Depan</h2>
                                <p>Buka pintu menuju dunia digital dengan akses jurnal, e-book, dan penelitian dari berbagai disiplin ilmu. Semua dalam genggaman Anda.</p>
                                <a href="{{ route('landing.index') }}" class="btn mt-3">Mulai Membaca!</a>
                            </div>
                        </div>
                        <!-- Banner Image -->
                        <div class="col-md-6 text-center">
                            <div class="image-holder">
                                <img src="{{ asset('landing/images/banner-image2.png') }}" class="img-fluid"
                                    alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <!-- Banner Content -->
                        <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                            <div class="banner-content">
                                <h2>Ruang Belajar, Inspirasi Tanpa Batas</h2>
                                <p>Nikmati suasana belajar yang nyaman dan tenang di perpustakaan kami. Bersama, kita tumbuh dan berkembang!</p>
                                <a href="{{ route('landing.index') }}" class="btn mt-3">Kunjungi Perpustakaan</a>
                            </div>
                        </div>
                        <!-- Banner Image -->
                        <div class="col-md-6 text-center">
                            <div class="image-holder">
                                <img src="{{ asset('landing/images/banner-image.png') }}" class="img-fluid"
                                    alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <!-- Banner Content -->
                        <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                            <div class="banner-content">
                                <h2>Kolaborasi dan Inovasi dalam Setiap Halaman</h2>
                                <p>Perpustakaan kami bukan hanya tempat membaca, tapi ruang untuk berkolaborasi, berdiskusi, dan menciptakan ide-ide besar. Mari bersama ciptakan masa depan yang gemilang.</p>
                                <a href="{{ route('landing.index') }}" class="btn mt-3">Temukan Inspiras</a>
                            </div>
                        </div>
                        <!-- Banner Image -->
                        <div class="col-md-6 text-center">
                            <div class="image-holder">
                                <img src="{{ asset('landing/images/banner-image3.png') }}" class="img-fluid"
                                    alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
