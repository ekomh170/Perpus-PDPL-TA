<footer id="footer" class="padding-large">
    <div class="container">
        <div class="row">
            <div class="footer-top-area">
                <div class="row d-flex flex-wrap justify-content-between">
                    <!-- Logo dan Social Links -->
                    <div class="col-lg-3 col-sm-6 pb-3">
                        <div class="footer-menu">
                            <img src="{{ asset('landing/images/main-logo.png') }}" alt="logo" class="img-fluid mb-2">
                            <p>Nisi, purus vitae, ultrices nunc. Sit ac sit suscipit hendrerit. Gravida massa volutpat
                                aenean odio erat nullam fringilla.</p>
                            <div class="social-links">
                                <ul class="d-flex list-unstyled">
                                    <li><a href="#"><svg class="facebook">
                                                <use xlink:href="#facebook"></use>
                                            </svg></a></li>
                                    <li><a href="#"><svg class="instagram">
                                                <use xlink:href="#instagram"></use>
                                            </svg></a></li>
                                    <li><a href="#"><svg class="twitter">
                                                <use xlink:href="#twitter"></use>
                                            </svg></a></li>
                                    <li><a href="#"><svg class="linkedin">
                                                <use xlink:href="#linkedin"></use>
                                            </svg></a></li>
                                    <li><a href="#"><svg class="youtube">
                                                <use xlink:href="#youtube"></use>
                                            </svg></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Tautan Cepat -->
                    <div class="col-lg-2 col-sm-6 pb-3">
                        <div class="footer-menu">
                            <h5 class="widget-title pb-2">Quick Links</h5>
                            <ul class="menu-list list-unstyled">
                                {{-- <li class="menu-item"><a href="{{ route('landing.index') }}">Home</a></li>
                                <li class="menu-item"><a href="{{ route('landing.about') }}">About</a></li>
                                <li class="menu-item"><a href="{{ route('landing.shop') }}">Shop</a></li>
                                <li class="menu-item"><a href="{{ route('landing.blog') }}">Blogs</a></li>
                                <li class="menu-item"><a href="{{ route('landing.contact') }}">Contact</a></li> --}}
                            </ul>
                        </div>
                    </div>

                    <!-- Bantuan dan Informasi -->
                    <div class="col-lg-3 col-sm-6 pb-3">
                        <div class="footer-menu">
                            <h5 class="widget-title pb-2">Help & Info</h5>
                            <ul class="menu-list list-unstyled">
                                <li class="menu-item"><a href="#">Track Your Order</a></li>
                                <li class="menu-item"><a href="#">Returns Policies</a></li>
                                <li class="menu-item"><a href="#">Shipping + Delivery</a></li>
                                <li class="menu-item"><a href="#">Contact Us</a></li>
                                <li class="menu-item"><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Kontak -->
                    <div class="col-lg-3 col-sm-6 pb-3">
                        <div class="footer-menu">
                            <h5 class="widget-title pb-2">Contact Us</h5>
                            <p>Do you have any queries or suggestions? <a href="mailto:info@bookly.com"
                                    class="text-decoration-underline">info@bookly.com</a></p>
                            <p>If you need support? Just give us a call. <a href="tel:+551112223344"
                                    class="text-decoration-underline">+55 111 222 333 44</a></p>
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
                        <p class="mb-0">We ship with:</p>
                        <div class="card-wrap ps-2">
                            <img src="{{ asset('landing/images/dhl.png') }}" alt="DHL" class="img-fluid">
                            <img src="{{ asset('landing/images/shippingcard.png') }}" alt="Shipping Methods"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="payment-method d-flex align-items-center">
                        <p class="mb-0">Payment options:</p>
                        <div class="card-wrap ps-2">
                            <img src="{{ asset('landing/images/visa.jpg') }}" alt="Visa" class="img-fluid">
                            <img src="{{ asset('landing/images/mastercard.jpg') }}" alt="MasterCard" class="img-fluid">
                            <img src="{{ asset('landing/images/paypal.jpg') }}" alt="PayPal" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p>© Copyright 2024 Bookly. HTML Template by <a href="https://templatesjungle.com/"
                            target="_blank">TemplatesJungle</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
