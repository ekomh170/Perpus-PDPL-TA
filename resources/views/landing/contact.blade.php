@extends('layouts.landing')

@section('title', 'Hubungi Kami')

@section('content')
    <section class="contact-banner">
        <div class="container py-5 text-center">
            <h1>Hubungi Kami</h1>
            <p class="">
                Kami siap membantu Anda! Sampaikan pertanyaan, komentar, atau masukan Anda kepada kami.
            </p>
        </div>
    </section>

    <section class="contact-details py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Kontak Kami</h3>
                    <p>Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi kami melalui :</p>
                    <ul class="list-unstyled">
                        <li><strong>Email:</strong> <a href="mailto:perpustakaan@nurulfikri.ac.id">perpustakaan@nurulfikri.ac.id</a></li>
                        <li><strong>Telepon:</strong> +62 (21) 123-4567</li>
                        <li><strong>Alamat:</strong> Jalan Lenteng Agung, Jakarta Selatan</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3>Kirim Pesan</h3>
                    <form action="
                    {{-- {{ route('contact.submit') }}"  --}}
                     method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Pesan Anda" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section py-5">
        <div class="container">
            <h3 class="text-center mb-4">Lokasi Kami</h3>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3175207721238!2d106.83004867362418!3d-6.352924493636968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sen!2sid!4v1735577733763!5m2!1sen!2sid"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection
