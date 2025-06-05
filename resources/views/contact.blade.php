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
    <div class="hero page-inner overlay" style="background-image: url('{{ asset('assets/images/hero_bg_2.jpg') }}')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Contact Us</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                contact
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    {{-- hero section --}}

    {{-- contact section --}}
    <div class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
					<div class="contact-info">
						<div class="address mt-2">
							<i class="icon-room"></i>
							<h4 class="mb-2">Location:</h4>
							<p>
								43 Raymouth Rd. Baltemoer,<br />
								London 3910
							</p>
						</div>

						<div class="open-hours mt-4">
							<i class="icon-clock-o"></i>
							<h4 class="mb-2">Open Hours:</h4>
							<p>
								Sunday-Friday:<br />
								11:00 AM - 2300 PM
							</p>
						</div>

						<div class="email mt-4">
							<i class="icon-envelope"></i>
							<h4 class="mb-2">Email:</h4>
							<p>info@Untree.co</p>
						</div>

						<div class="phone mt-4">
							<i class="icon-phone"></i>
							<h4 class="mb-2">Call:</h4>
							<p>+1 1234 55488 55</p>
						</div>
					</div>
				</div>
				<div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
					<form action="#">
						<div class="row">
							<div class="col-6 mb-3">
								<input type="text" class="form-control" placeholder="Your Name" />
							</div>
							<div class="col-6 mb-3">
								<input type="email" class="form-control" placeholder="Your Email" />
							</div>
							<div class="col-12 mb-3">
								<input type="text" class="form-control" placeholder="Subject" />
							</div>
							<div class="col-12 mb-3">
								<textarea name="" id="" cols="30" rows="7" class="form-control"
									placeholder="Message"></textarea>
							</div>

							<div class="col-12">
								<input type="submit" value="Send Message" class="btn btn-primary" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    {{-- contact section --}}

@endsection
{{-- main page content --}}
