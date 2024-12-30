@extends('layouts.landing')

@section('title', 'About Us')

@section('content')
    <section class="about-banner">
        <div class="container py-5">
            <h1 class="text-center">About Us</h1>
            <p class="text-center text-muted">
                Discover our journey, mission, and the values that drive us forward.
            </p>
        </div>
    </section>

    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/about-us.jpg') }}" alt="About Us" class="img-fluid rounded-3">
                </div>
                <div class="col-md-6">
                    <h2>Our Journey</h2>
                    <p>
                        Bookly started with a passion for books and the desire to create a space where every reader could
                        find their next favorite read. Over the years, we've grown from a small local bookstore into a
                        global platform serving book enthusiasts everywhere.
                    </p>
                    <h3>Our Mission</h3>
                    <p>
                        We aim to inspire, educate, and connect people through the power of books. By making literature
                        accessible and fostering a love for reading, we hope to build a community that values knowledge and
                        creativity.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Meet Our Team</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/team-member1.jpg') }}" alt="John Doe" class="img-fluid rounded-circle mb-3"
                        style="width: 150px;">
                    <h5>John Doe</h5>
                    <p class="text-muted">Founder & CEO</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/team-member2.jpg') }}" alt="Jane Smith" class="img-fluid rounded-circle mb-3"
                        style="width: 150px;">
                    <h5>Jane Smith</h5>
                    <p class="text-muted">Head of Marketing</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/team-member3.jpg') }}" alt="Emily Johnson"
                        class="img-fluid rounded-circle mb-3" style="width: 150px;">
                    <h5>Emily Johnson</h5>
                    <p class="text-muted">Lead Developer</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Get in Touch</h2>
            <p class="text-center">
                Have questions or want to learn more? We're here to help.
            </p>
            <div class="text-center">
                {{-- <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a> --}}
            </div>
        </div>
    </section>
@endsection
