<section id="best-selling-items" class="position-relative padding-large ">
    <div class="container">
        <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
            <h3 class="d-flex align-items-center">Best selling items</h3>
            <a href="{{ route('landing.index') }}" class="btn">View All</a>
        </div>
        <div class="position-absolute top-50 end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next product-slider-button-next">
            <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80"
                height="80">
                <use xlink:href="#alt-arrow-right-outline"></use>
            </svg>
        </div>
        <div
            class="position-absolute top-50 start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev product-slider-button-prev">
            <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80"
                height="80">
                <use xlink:href="#alt-arrow-left-outline"></use>
            </svg>
        </div>
        <div class="swiper product-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card position-relative p-4 border rounded-3">
                        <div class="position-absolute">
                            <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">10% off</p>
                        </div>
                        <img src="{{ asset('landing/images/product-item1.png') }}" class="img-fluid shadow-sm"
                            alt="product item">
                        <h6 class="mt-4 mb-0 fw-bold"><a href="{{ route('landing.index') }}">House of Sky
                                Breath</a></h6>
                        <div class="review-content d-flex">
                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                            <div class="rating text-warning d-flex align-items-center">
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                            </div>
                        </div>
                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                        <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                            <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Tooltip on top">
                                <svg class="cart">
                                    <use xlink:href="#cart"></use>
                                </svg>
                            </button>
                            <a href="#" class="btn btn-dark">
                                <span>
                                    <svg class="wishlist">
                                        <use xlink:href="#heart"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card position-relative p-4 border rounded-3">
                        <img src="{{ asset('landing/images/product-item2.png') }}" class="img-fluid shadow-sm"
                            alt="product item">
                        <h6 class="mt-4 mb-0 fw-bold"><a href="{{ route('landing.index') }}">Heartland Stars</a>
                        </h6>
                        <div class="review-content d-flex">
                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                            <div class="rating text-warning d-flex align-items-center">
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                            </div>
                        </div>

                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                        <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                            <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Tooltip on top">
                                <svg class="cart">
                                    <use xlink:href="#cart"></use>
                                </svg>
                            </button>
                            <a href="#" class="btn btn-dark">
                                <span>
                                    <svg class="wishlist">
                                        <use xlink:href="#heart"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card position-relative p-4 border rounded-3">
                        <img src="{{ asset('landing/images/product-item3.png') }}" class="img-fluid shadow-sm"
                            alt="product item">
                        <h6 class="mt-4 mb-0 fw-bold"><a href="{{ route('landing.index') }}">Heavenly Bodies</a>
                        </h6>
                        <div class="review-content d-flex">
                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                            <div class="rating text-warning d-flex align-items-center">
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                            </div>
                        </div>

                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                        <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                            <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Tooltip on top">
                                <svg class="cart">
                                    <use xlink:href="#cart"></use>
                                </svg>
                            </button>
                            <a href="#" class="btn btn-dark">
                                <span>
                                    <svg class="wishlist">
                                        <use xlink:href="#heart"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card position-relative p-4 border rounded-3">
                        <div class="position-absolute">
                            <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">10% off</p>
                        </div>
                        <img src="{{ asset('landing/images/product-item4.png') }}" class="img-fluid shadow-sm"
                            alt="product item">
                        <h6 class="mt-4 mb-0 fw-bold"><a href="{{ route('landing.index') }}">His Saving
                                Grace</a></h6>
                        <div class="review-content d-flex">
                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                            <div class="rating text-warning d-flex align-items-center">
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                            </div>
                        </div>

                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                        <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                            <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Tooltip on top">
                                <svg class="cart">
                                    <use xlink:href="#cart"></use>
                                </svg>
                            </button>
                            <a href="#" class="btn btn-dark">
                                <span>
                                    <svg class="wishlist">
                                        <use xlink:href="#heart"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card position-relative p-4 border rounded-3">
                        <img src="{{ asset('landing/images/product-item5.png') }}" class="img-fluid shadow-sm"
                            alt="product item">
                        <h6 class="mt-4 mb-0 fw-bold"><a href="{{ route('landing.index') }}">My Dearest
                                Darkest</a></h6>
                        <div class="review-content d-flex">
                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                            <div class="rating text-warning d-flex align-items-center d-flex align-items-center">
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                            </div>
                        </div>

                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                        <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                            <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Tooltip on top">
                                <svg class="cart">
                                    <use xlink:href="#cart"></use>
                                </svg>
                            </button>
                            <a href="#" class="btn btn-dark">
                                <span>
                                    <svg class="wishlist">
                                        <use xlink:href="#heart"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card position-relative p-4 border rounded-3">
                        <img src="{{ asset('landing/images/product-item6.png') }}" class="img-fluid shadow-sm"
                            alt="product item">
                        <h6 class="mt-4 mb-0 fw-bold"><a href="{{ route('landing.index') }}">The Story of
                                Success</a></h6>
                        <div class="review-content d-flex">
                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                            <div class="rating text-warning d-flex align-items-center">
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                                <svg class="star star-fill">
                                    <use xlink:href="#star-fill"></use>
                                </svg>
                            </div>
                        </div>

                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                        <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                            <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Tooltip on top">
                                <svg class="cart">
                                    <use xlink:href="#cart"></use>
                                </svg>
                            </button>
                            <a href="#" class="btn btn-dark">
                                <span>
                                    <svg class="wishlist">
                                        <use xlink:href="#heart"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
