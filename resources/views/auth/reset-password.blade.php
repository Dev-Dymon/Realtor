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

    {{-- reset section --}}
    <div class="section mt-5">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="auth-form">
                        <form action="{{ route('password.store') }}" method="POST">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="row">
                                <div class="col-12 mb-3">
                                    <p class="text-center fs-3"><b>Reset Password</b></p>
                                </div>

                                <div class="col-12 mb-3">
                                    <input type="email" name="email" value="{{ old('email') ?? $request->email }}" required
                                        class="form-control" placeholder="Your Email" />
                                    @error('email')
                                        <p class="text-danger" style="font-size: 15px;">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-12 mb-3">
                                    <input type="password" name="password" value="{{ old('password') }}" required
                                        class="form-control" placeholder="Password" />
                                    @error('password')
                                        <p class="text-danger" style="font-size: 15px;">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-12 mb-3">
                                    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" required
                                        class="form-control" placeholder="Confirm Password" />
                                    @error('password_confirmation')
                                        <p class="text-danger" style="font-size: 15px;">{{ $message }}</p>
                                    @enderror
                                </div>

                                @if (Session::has('status'))
                                    <p class="text-success text-center" style="font-size: 15px;">{{ Session('status') }}</p>
                                @endif

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- reset section --}}

@endsection
{{-- main page content --}}