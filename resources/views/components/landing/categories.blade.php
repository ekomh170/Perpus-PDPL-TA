<section id="categories" class="padding-large pt-0">
    <div class="container">
        <div class="section-title overflow-hidden mb-4">
            <h3 class="d-flex align-items-center">Categories</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 border-0 rounded-3 position-relative">
                    <a href="{{ route('landing.index') }}">
                        <img src="{{ asset('landing/images/category1.jpg') }}" class="img-fluid rounded-3"
                            alt="cart item">
                        <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a
                                href="{{ route('landing.index') }}" class="text-white">Romance</a></h6>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mb-4 border-0 rounded-3">
                    <a href="{{ route('landing.index') }}">
                        <img src="{{ asset('landing/images/category2.jpg') }}" class="img-fluid rounded-3"
                            alt="cart item">
                        <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a
                                href="{{ route('landing.index') }}" class="text-white">Lifestyle</a></h6>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mb-4 border-0 rounded-3">
                    <a href="{{ route('landing.index') }}">
                        <img src="{{ asset('landing/images/category3.jpg') }}" class="img-fluid rounded-3"
                            alt="cart item">
                        <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a
                                href="{{ route('landing.index') }}" class="text-white">Recipe</a></h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
