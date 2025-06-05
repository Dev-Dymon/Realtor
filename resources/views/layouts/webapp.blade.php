<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- meta description, keywords, title, and favicon --}}
    <meta name="description" content=" @yield('description') " />
    <meta name="keywords" content=" @yield('keywords') " />
    <title> @yield('title') </title>
    <link rel="shortcut icon" href=" @yield('favicon') " type="image/x-icon">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}?v={{ time() }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}?v={{ time() }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}?v={{ time() }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}?v={{ time() }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{ time() }}" />

</head>

<body>


    {{-- mobile menu --}}
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    {{-- mobile menu --}}

    {{-- Navbar section --}}
    <nav class="site-nav">
        <div class="container-fluid">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <a href="{{ route('home') }}" class="logo m-0 float-start">Realtor</a>

                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                        <li class=""><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('all_property') }}">Properties</a></li>
                        {{-- <li class="has-children">
                            <a href="properties.html">Properties</a>
                            <ul class="dropdown">
                                <li><a href="#">Buy Property</a></li>
                                <li><a href="#">Sell Property</a></li>
                                <li class="has-children">
                                    <a href="#">Dropdown</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Sub Menu One</a></li>
                                        <li><a href="#">Sub Menu Two</a></li>
                                        <li><a href="#">Sub Menu Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endguest
                        @auth
                            @if (Auth::user()->usertype == 'admin' || Auth::user()->usertype == 'agent')
                                <li><a
                                        href="{{ Auth::user()->usertype == 'admin' ? route('admin.index') : route('agent.index') }}">Dashboard</a>
                                </li>
                            @elseif (Auth::user()->usertype == 'user')
                                <li><a
                                        href="{{ route('user.index') }}">Dashboard</a>
                                </li>
                            @endif
                        @endauth

                        <a href="#"
                            class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                            data-toggle="collapse" data-target="#main-navbar">
                            <span></span>
                        </a>
                </div>
            </div>
        </div>
    </nav>
    {{-- Navbar section --}}


    {{-- page content --}}
    @yield('content')
    {{-- page content --}}


    {{-- Footer section --}}
    <div class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                        <ul class="list-unstyled links">
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li>
                                <a href="mailto:info@mydomain.com">info@mydomain.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Sources</h3>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Vision</a></li>
                            <li><a href="#">Mission</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Creative</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Links</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Our Vision</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>

                        <ul class="list-unstyled social">
                            <li>
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-pinterest"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-dribbble"></span></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- Footer section --}}

    {{-- Preloader --}}
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    {{-- Preloader --}}

    {{-- Script files --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/navbar.js') }}"></script>
    <script src="{{ asset('assets/js/counter.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
