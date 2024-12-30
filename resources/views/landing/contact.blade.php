@extends('layouts.landing')

@section('title', 'Contact Us')

@section('content')
    <section class="contact-banner">
        <div class="container py-5 text-center">
            <h1>Contact Us</h1>
            <p class="text-muted">
                We'd love to hear from you! Reach out to us with any questions, comments, or feedback.
            </p>
        </div>
    </section>

    <section class="contact-details py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Get in Touch</h3>
                    <p>If you have any questions, feel free to reach out to us using the contact details below:</p>
                    <ul class="list-unstyled">
                        <li><strong>Email:</strong> <a href="mailto:support@bookly.com">support@bookly.com</a></li>
                        <li><strong>Phone:</strong> +1 (555) 123-4567</li>
                        <li><strong>Address:</strong> 123 Bookly Lane, Reading City, RC 12345</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3>Send Us a Message</h3>
                    <form action="
                    {{-- {{ route('contact.submit') }}"  --}}
                     method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section py-5">
        <div class="container">
            <h3 class="text-center mb-4">Our Location</h3>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354345094554!2d-122.41941538468165!3d37.77492927975952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085815345c65bbf%3A0x7fbf29c0d4b7af8c!2s123%20Bookly%20Lane%2C%20Reading%20City%2C%20RC%2012345!5e0!3m2!1sen!2sus!4v1677705209854!5m2!1sen!2sus"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection
