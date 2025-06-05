@extends('layouts.webapp')
{{-- Page description --}}
@section('description')
    Find your dream home on Realtor — Nigeria’s trusted property listing platform. Buy, sell, or rent apartments, lands, and houses with ease. Verified listings, secure deals.
@endsection
{{-- Page description --}}

{{-- Page keywords --}}
@section('keywords')
    property listings in Nigeria, houses for sale in Nigeria, rent apartments in Lagos, real estate Nigeria, buy land in Abuja, Nigerian property website, Naija real estate, homes for sale Nigeria, verified property listings, real estate agents Nigeria
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
    <div class="hero page-inner overlay" style="background-image: url('{{ asset("assets/images/hero_bg_3.jpg") }}')">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">Properties Details</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">
								Properties
							</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
    {{-- hero section --}}

    {{-- property details --}}
    <div class="section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7">
					<div class="img-property-slide-wrap">
						<div class="img-property-slide">
							<img src="{{ asset('assets/images/img_1.jpg') }}" alt="Image" class="img-fluid" />
							<img src="{{ asset('assets/images/img_2.jpg') }}" alt="Image" class="img-fluid" />
							<img src="{{ asset('assets/images/img_3.jpg') }}" alt="Image" class="img-fluid" />
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<h2 class="heading text-primary">5232 California Ave. 21BC</h2>
					<p class="meta">California, United States</p>
					<p class="text-black-50">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione
						laborum quo quos omnis sed magnam id, ducimus saepe, debitis error
						earum, iste dicta odio est sint dolorem magni animi tenetur.
					</p>
					<p class="text-black-50">
						Perferendis eligendi reprehenderit, assumenda molestias nisi eius
						iste reiciendis porro tenetur in, repudiandae amet libero.
						Doloremque, reprehenderit cupiditate error laudantium qui, esse
						quam debitis, eum cumque perferendis, illum harum expedita.
					</p>

					<div class="d-block agent-box p-5">
						<div class="img mb-4">
							<img src="{{ asset('assets/images/person_2-min.jpg') }}" alt="Image" class="img-fluid" />
						</div>
						<div class="text">
							<h3 class="mb-0">Alicia Huston</h3>
							<div class="meta mb-3">Real Estate</div>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit.
								Ratione laborum quo quos omnis sed magnam id ducimus saepe
							</p>
							<ul class="list-unstyled social dark-hover d-flex">
								<li class="me-1">
									<a href="#"><span class="icon-instagram"></span></a>
								</li>
								<li class="me-1">
									<a href="#"><span class="icon-twitter"></span></a>
								</li>
								<li class="me-1">
									<a href="#"><span class="icon-facebook"></span></a>
								</li>
								<li class="me-1">
									<a href="#"><span class="icon-linkedin"></span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    {{-- property details --}}

@endsection
{{-- main page content --}}