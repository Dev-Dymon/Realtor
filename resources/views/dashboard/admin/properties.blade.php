@extends('layouts.admin')
@section('admin_dasboard')
    <div class="main-content">
        <section class="section">

            <div class="row align-items-center">
                <div class="col-6">
                    <h3 class="text-black">All Properties</h3>
                </div>
                <div class="col-6 text-right">
                    <a class="text-black" href="{{ route('admin.properties.add') }}">add property</a>
                </div>
            </div>


            <div class="row align-items-stretch">
                @foreach ($properties as $property)
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="article article-style-c rounded-md" style="overflow: hidden;">
                            <div class="article-header">
                                <div class="article-image"
                                    data-background="{{ asset('uploads/properties/'. $property->image_1) }}">
                                </div>
                            </div>
                            <div class="article-details">
                                <div class="article-category">{{ $property->property_type }}</div>
                                <div class="article-title">
                                    <h2><a href="{{ route('all_property.details', $property->slug) }}" target="_blank">{{ $property->name }}</a></h2>
                                </div>
                                <p class="text-truncate">{{ $property->location }}, {{ $property->city }}, {{ $property->country }}</p>
                                <p class="">₦{{ number_format( $property->price, 2) }}</p>
                                <div class="article-user">
                                    <img alt="image" src="{{ asset('uploads/users/'. $property->agent->image) }}">
                                    <div class="article-user-details">
                                        <div class="user-detail-name">
                                            <a href="#">{{ $property->agent->name }}</a>
                                        </div>
                                        <div class="text-job">{{ $property->agent->profession }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </section>
    </div>
@endsection
