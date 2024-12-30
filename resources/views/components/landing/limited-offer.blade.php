<section id="limited-offer" class="padding-large" 
    style="background-image: url({{ asset('landing/images/banner-image-bg-1.jpg') }}); background-size: cover; background-repeat: no-repeat; background-position: center; height: 800px;">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-6 text-center">
                <div class="image-holder">
                    <img src="{{ asset('landing/images/banner-image3.png') }}" class="img-fluid" alt="banner">
                </div>
            </div>
            <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                <h2>"Malam Literasi" di Perpustakaan Kampus NF</h2>
                <p class="mt-3">Jangan lewatkan kesempatan untuk bergabung di acara spesial kami! Malam Literasi menghadirkan diskusi buku, workshop kreatif, dan bincang santai bersama penulis terkenal. Acara ini GRATIS dan terbuka untuk semua mahasiswa!</p>
                <p><strong>Catat tanggalnya:</strong> <br> 25 Januari 2024, pukul 18.00 - selesai.</p>
                <div id="countdown-clock" class="text-dark d-flex align-items-center my-3">
                    <div class="time d-grid pe-3">
                        <span class="days fs-1 fw-normal"></span>
                        <small>Hari</small>
                    </div>
                    <span class="fs-1 text-primary">:</span>
                    <div class="time d-grid pe-3 ps-3">
                        <span class="hours fs-1 fw-normal"></span>
                        <small>Jam</small>
                    </div>
                    <span class="fs-1 text-primary">:</span>
                    <div class="time d-grid pe-3 ps-3">
                        <span class="minutes fs-1 fw-normal"></span>
                        <small>Menit</small>
                    </div>
                    <span class="fs-1 text-primary">:</span>
                    <div class="time d-grid ps-3">
                        <span class="seconds fs-1 fw-normal"></span>
                        <small>Detik</small>
                    </div>
                </div>
                <a href="{{ route('landing.index') }}" class="btn mt-3">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</section>
