@extends('layouts.webapp')
{{-- Page description --}}
@section('description')
    Find your dream home on Realtor — Nigeria’s trusted property listing platform. Buy, sell, or rent apartments, lands, and
    houses with ease. Verified listings, secure deals.
@endsection
{{-- Page description --}}

{{-- Page keywords --}}
@section('keywords')
    property listings in Nigeria, houses for sale in Nigeria, rent apartments in Lagos, real estate Nigeria, buy land in
    Abuja, Nigerian property website, Naija real estate, homes for sale Nigeria, verified property listings, real estate
    agents Nigeria
@endsection
{{-- Page keywords --}}

{{-- Page Title --}}
@section('title')
    Realtor - Buy, Sell & Rent Properties in Nigeria
@endsection
{{-- Page Title --}}

{{-- Page favicon --}}
@section('favicon')
    {{ asset('assets/images/favicon.png') }}
@endsection
{{-- Page favicon --}}

{{-- main page content --}}
@section('content')
    {{-- hero section --}}
    <div class="hero page-inner overlay" style="background-image: url('{{ asset('assets/images/hero_bg_3.jpg') }}')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Forgot Password</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                forgot password
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    {{-- hero section --}}

    {{-- forgot section --}}
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="auth-form">
                        <form action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <p class="text-center fs-5">Forgot your password? No problem. Just let us know your
                                        email address and we will email you a password reset link that will allow you to
                                        choose a new one.</p>
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="email" name="email" value="{{ old('email') }}" required
                                        class="form-control" placeholder="Your Email" />
                                    @error('email')
                                        <p class="text-danger" style="font-size: 15px;">{{ $message }}</p>
                                    @enderror
                                </div>

                                @if (Session::has('status'))
                                    <p class="text-success text-center" style="font-size: 15px;">{{ Session('status') }}</p>
                                @endif

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Password Reset Link</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- forgot section --}}
@endsection
{{-- main page content --}}
