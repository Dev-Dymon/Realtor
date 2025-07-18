@extends('layouts.admin')
@section('admin_dasboard')
    <div class="main-content">
        <section class="section">

            <div class="row align-items-center">
                <div class="col-6">
                    <h3 class="text-black">Agent Details</h3>
                </div>
                <div class="col-6 text-right">
                    <a class="text-black" href="{{ route('admin.agents') }}">all agents</a>
                </div>
            </div>

            <div class="row mt-sm-4">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="card author-box">
                                <div class="card-body">
                                    <div class="author-box-center">
                                        @if ( $agent->image !== null)
                                            <img alt="image" src="{{ asset('uploads/users/' . $user->image) }}"
                                                class="rounded-circle author-box-picture">
                                        @else
                                            <img alt="image"
                                                src="{{ asset('assets/dashboard/admin/img/users/user-4.png') }}"
                                                class="rounded-circle author-box-picture">
                                        @endif
                                        <div class="clearfix"></div>
                                        <div class="author-box-name">
                                            <p>{{ $agent->name }}</p>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <b style="font-size: 20px !important;">Bio</b>
                                        <div class="author-box-description">
                                            <p>{{ $agent->bio }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Personal Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="py-4">
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Usertype
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ $agent->usertype }}
                                            </span>
                                        </p>
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Phone
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ $agent->phone }}
                                            </span>
                                        </p>
                                        <p class="clearfix">
                                            <span class="float-left">
                                                E-mail
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ $agent->email }}
                                            </span>
                                        </p>
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Profession
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ $agent->profession }}
                                            </span>
                                        </p>
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Whatsapp
                                            </span>
                                            <span class="float-right text-muted">
                                                <a href="{{ $agent->whatsapp_link }}">Link</a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
