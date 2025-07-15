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
                <div class="col-lg-6">
                    <div class="img-property-slide-wrap">
                        <div class="img-property-slide">

                            {{-- image 1 --}}
                            @if ($property->image_1 !== null)
                                <img src="{{ asset('uploads/properties/' . $property->image_1) }}" alt="Image"
                                    class="img-fluid object-fit-cover" />
                            @else
                            @endif

                            {{-- image 2 --}}
                            @if ($property->image_2 !== null)
                                <img src="{{ asset('uploads/properties/' . $property->image_2) }}" alt="Image"
                                    class="img-fluid object-fit-cover" />
                            @else
                            @endif

                            {{-- image 3 --}}
                            @if ($property->image_3 !== null)
                                <img src="{{ asset('uploads/properties/' . $property->image_3) }}" alt="Image"
                                    class="img-fluid object-fit-cover" />
                            @else
                            @endif

                            {{-- image 4 --}}
                            @if ($property->image_4 !== null)
                                <img src="{{ asset('uploads/properties/' . $property->image_4) }}" alt="Image"
                                    class="img-fluid object-fit-cover" />
                            @else
                            @endif

                            {{-- image 5 --}}
                            @if ($property->image_5 !== null)
                                <img src="{{ asset('uploads/properties/' . $property->image_5) }}" alt="Image"
                                    class="img-fluid object-fit-cover" />
                            @else
                            @endif

                            {{-- image 6 --}}
                            @if ($property->image_6 !== null)
                                <img src="{{ asset('uploads/properties/' . $property->image_6) }}" alt="Image"
                                    class="img-fluid object-fit-cover" />
                            @else
                            @endif

                            {{-- image 7 --}}
                            @if ($property->image_7 !== null)
                                <img src="{{ asset('uploads/properties/' . $property->image_7) }}" alt="Image"
                                    class="img-fluid object-fit-cover" />
                            @else
                            @endif

                            {{-- image 8 --}}
                            @if ($property->image_8 !== null)
                                <img src="{{ asset('uploads/properties/' . $property->image_8) }}" alt="Image"
                                    class="img-fluid object-fit-cover" />
                            @else
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="heading text-primary">{{ $property->name }}</h2>
                    <p class="meta">{{ $property->location }}, {{ $property->city }}, {{ $property->country }}</p>
                    <p class="text-black-50">
                        {{ $property->description }}
                    </p>
                    <div class="price mb-2 fs-3 text-success"><b><span>₦{{ number_format($property->price, 2) }}</span></b></div>

                    <div class="d-block agent-box p-5">
                        <div class="img mb-4">
                            <img src="{{ asset('uploads/users/' . $property->agent->image) }}" alt="Image"
                                class="img-fluid" />
                        </div>
                        <div class="text">
                            <h3 class="mb-0">{{ $property->agent->name }}</h3>
                            <div class="meta mb-3">{{ $property->agent->profession }}</div>
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


    {{-- similar property --}}
    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-12">
                    <h2 class="font-weight-bold text-primary heading">
                        Similar Properties
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider">
                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('assets/images/img_1.jpg') }}" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('assets/images/img_2.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('assets/images/img_3.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('assets/images/img_4.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('assets/images/img_5.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('assets/images/img_6.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('assets/images/img_7.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('assets/images/img_8.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('assets/images/img_1.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->
                        </div>

                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property"
                                tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property"
                                tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- similar property --}}
@endsection
{{-- main page content --}}
