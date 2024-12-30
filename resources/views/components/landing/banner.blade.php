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
                                <h2>The Fine Print Book Collection</h2>
                                <p>Best Offer Save 30%. Grab it now!</p>
                                <a href="{{ route('landing.index') }}" class="btn mt-3">Shop Collection</a>
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

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <!-- Banner Content -->
                        <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                            <div class="banner-content">
                                <h2>How Innovation Works</h2>
                                <p>Discount available. Grab it now!</p>
                                <a href="{{ route('landing.index') }}" class="btn mt-3">Shop Product</a>
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

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <!-- Banner Content -->
                        <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                            <div class="banner-content">
                                <h2>Your Heart is the Sea</h2>
                                <p>Limited stocks available. Grab it now!</p>
                                <a href="{{ route('landing.index') }}" class="btn mt-3">Shop Collection</a>
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
                                <h2>Explore the Unknown</h2>
                                <p>Discover our new arrivals with 20% off!</p>
                                <a href="{{ route('landing.index') }}" class="btn mt-3">Explore Now</a>
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

            <!-- Slide 5 -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <!-- Banner Content -->
                        <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                            <div class="banner-content">
                                <h2>Summer Sale is Here</h2>
                                <p>Grab your favorites at 50% off before it’s too late!</p>
                                <a href="{{ route('landing.index') }}" class="btn mt-3">Shop Now</a>
                            </div>
                        </div>
                        <!-- Banner Image -->
                        <div class="col-md-6 text-center">
                            <div class="image-holder">
                                <img src="{{ asset('landing/images/banner-image4.png') }}" class="img-fluid"
                                    alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
