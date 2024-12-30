<header id="header" class="site-header">
    <nav id="header-nav" class="navbar navbar-expand-lg py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('landing.index') }}">
                <img src="{{ asset('landing/images/main-logo.png') }}" class="logo">
            </a>
            <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <svg class="navbar-icon">
                    <use xlink:href="#navbar-icon"></use>
                </svg>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
                <div class="offcanvas-header px-4 pb-0">
                    <a class="navbar-brand" href="{{ route('landing.index') }}">
                        <img src="{{ asset('landing/images/main-logo.png') }}" class="logo">
                    </a>
                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
                        aria-label="Close" data-bs-target="#bdNavbar"></button>
                </div>
                <div class="offcanvas-body">
                    <ul id="navbar"
                        class="navbar-nav text-uppercase justify-content-start justify-content-lg-center align-items-start align-items-lg-center flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link me-4 active" href="{{ route('landing.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="{{ route('landing.about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="{{ route('landing.contact') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="{{ route('landing.features') }}">Features</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link me-4 dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                role="button" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu animate slide border">
                                <li>
                                    <a href="{{ route('landing.index') }}" class="dropdown-item fw-light">About</a>
                                </li>
                                <li>
                                    <a href="{{ route('landing.index') }}" class="dropdown-item fw-light">Shop</a>
                                </li>
                                <li>
                                    <a href="{{ route('landing.index') }}" class="dropdown-item fw-light">Single
                                        Product</a>
                                </li>
                                <li>
                                    <a href="{{ route('landing.index') }}" class="dropdown-item fw-light">Cart</a>
                                </li>
                                <li>
                                    <a href="{{ route('landing.index') }}" class="dropdown-item fw-light">Checkout</a>
                                </li>
                                <li>
                                    <a href="{{ route('landing.index') }}" class="dropdown-item fw-light">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ route('landing.index') }}" class="dropdown-item fw-light">Single
                                        Post</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="user-items d-flex">
                        <ul class="d-flex justify-content-end list-unstyled mb-0">
                            <li class="search-item pe-3">
                                <a href="#" class="search-button">
                                    <svg class="search">
                                        <use xlink:href="#search"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="pe-3 d-flex align-items-center justify-content-end">
                                @if (Route::has('login'))
                                    <nav class="d-flex align-items-center justify-content-end">
                                        @auth
                                            <a href="{{ url('admin/dashboard') }}"
                                                class="btn btn-lg btn-primary px-4 py-2 me-2">
                                                Dashboard
                                            </a>
                                        @else
                                            <a href="{{ route('login') }}" class="btn btn-lg btn-primary px-4 py-2 me-2">
                                                Log in
                                            </a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}"
                                                    class="btn btn-lg btn-secondary px-4 py-2">
                                                    Register
                                                </a>
                                            @endif
                                        @endauth
                                    </nav>
                                @endif
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </nav>
</header>
