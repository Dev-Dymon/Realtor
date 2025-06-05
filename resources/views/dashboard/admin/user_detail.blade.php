@extends('layouts.admin')
@section('admin_dasboard')
    <div class="main-content">
        <section class="section">

            <div class="row">
                <div class="col-12">
                    <h3 class="text-black">Users Details</h3>
                </div>
            </div>

            <div class="row mt-sm-4">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="card author-box">
                                <div class="card-body">
                                    <div class="author-box-center">
                                        <img alt="image" src="{{ asset('assets/dashboard/admin/img/users/user-6.png') }}"
                                            class="rounded-circle author-box-picture">
                                        <div class="clearfix"></div>
                                        <div class="author-box-name">
                                            <p>{{ $user->name }}</p>
                                        </div>
                                        <div class="author-box-job">Web Developer</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="author-box-description">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur
                                                voluptatum alias molestias
                                                minus quod dignissimos.
                                            </p>
                                        </div>
                                        <div class="mb-2 mt-3">
                                            <div class="text-small font-weight-bold">Follow Hasan On</div>
                                        </div>
                                        <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon mr-1 btn-github">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <div class="w-100 d-sm-none"></div>
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
                                                Birthday
                                            </span>
                                            <span class="float-right text-muted">
                                                30-05-1998
                                            </span>
                                        </p>
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Phone
                                            </span>
                                            <span class="float-right text-muted">
                                                (0123)123456789
                                            </span>
                                        </p>
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Mail
                                            </span>
                                            <span class="float-right text-muted">
                                                test@example.com
                                            </span>
                                        </p>
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Facebook
                                            </span>
                                            <span class="float-right text-muted">
                                                <a href="#">John Deo</a>
                                            </span>
                                        </p>
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Twitter
                                            </span>
                                            <span class="float-right text-muted">
                                                <a href="#">@johndeo</a>
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
