@extends('layouts.landing')

@section('title', 'Features')

@section('content')
    <section class="features-banner">
        <div class="container py-5 text-center">
            <h1>Our Features</h1>
            <p class="text-muted">
                Discover the amazing features that make Bookly your go-to platform for all things books.
            </p>
        </div>
    </section>

    <section class="features-details py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-item p-4 border rounded">
                        <img src="{{ asset('images/feature-delivery.png') }}" alt="Fast Delivery" class="img-fluid mb-3"
                            style="width: 80px;">
                        <h5>Fast Delivery</h5>
                        <p>Get your books delivered quickly and reliably right to your doorstep.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-item p-4 border rounded">
                        <img src="{{ asset('images/feature-quality.png') }}" alt="High Quality" class="img-fluid mb-3"
                            style="width: 80px;">
                        <h5>High Quality</h5>
                        <p>We ensure the best quality books to enhance your reading experience.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-item p-4 border rounded">
                        <img src="{{ asset('images/feature-variety.png') }}" alt="Wide Variety" class="img-fluid mb-3"
                            style="width: 80px;">
                        <h5>Wide Variety</h5>
                        <p>Explore a vast collection of books across multiple genres and categories.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-item p-4 border rounded">
                        <img src="{{ asset('images/feature-secure.png') }}" alt="Secure Payment" class="img-fluid mb-3"
                            style="width: 80px;">
                        <h5>Secure Payment</h5>
                        <p>Enjoy safe and secure payment options for a worry-free shopping experience.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-item p-4 border rounded">
                        <img src="{{ asset('images/feature-support.png') }}" alt="24/7 Support" class="img-fluid mb-3"
                            style="width: 80px;">
                        <h5>24/7 Support</h5>
                        <p>Our team is available around the clock to assist you with any queries.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-item p-4 border rounded">
                        <img src="{{ asset('images/feature-community.png') }}" alt="Reading Community"
                            class="img-fluid mb-3" style="width: 80px;">
                        <h5>Reading Community</h5>
                        <p>Join a vibrant community of readers and share your love for books.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section py-5 bg-light">
        <div class="container text-center">
            <h2>Experience the Best Features with Bookly</h2>
            <p class="text-muted">Start your journey today and explore the endless possibilities with Bookly.</p>
            <a href="{{ route('landing.index') }}" class="btn btn-primary">Learn More</a>
        </div>
    </section>
@endsection
