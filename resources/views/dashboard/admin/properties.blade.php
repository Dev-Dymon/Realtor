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


            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <article class="article article-style-c rounded-md" style="overflow: hidden;">
                        <div class="article-header">
                            <div class="article-image" data-background="{{ asset('assets/dashboard/admin/img/blog/img13.png') }}">
                            </div>
                        </div>
                        <div class="article-details">
                            <div class="article-category">News</div>
                            <div class="article-title">
                                <h2><a href="#">The oddest place you will find photo studios</a></h2>
                            </div>
                            <p>A don't spirit gathered two under, lights said. May Multiply seasons you'll spirit tree
                                morning
                                hath first signs.</p>
                            <div class="article-user">
                                <img alt="image" src="{{ asset('assets/dashboard/admin/img/users/user-1.png') }}">
                                <div class="article-user-details">
                                    <div class="user-detail-name">
                                        <a href="#">Sarah Smith</a>
                                    </div>
                                    <div class="text-job">Java Developer</div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <article class="article article-style-c rounded-md" style="overflow: hidden;">
                        <div class="article-header">
                            <div class="article-image" data-background="{{ asset('assets/dashboard/admin/img/blog/img14.png') }}">
                            </div>
                        </div>
                        <div class="article-details">
                            <div class="article-category">News</div>
                            <div class="article-title">
                                <h2><a href="#">The oddest place you will find photo studios</a></h2>
                            </div>
                            <p>A don't spirit gathered two under, lights said. May Multiply seasons you'll spirit tree
                                morning
                                hath first signs.</p>
                            <div class="article-user">
                                <img alt="image" src="{{ asset('assets/dashboard/admin/img/users/user-3.png') }}">
                                <div class="article-user-details">
                                    <div class="user-detail-name">
                                        <a href="#">Airi Satou</a>
                                    </div>
                                    <div class="text-job">HR Manager</div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <article class="article article-style-c rounded-md" style="overflow: hidden;">
                        <div class="article-header">
                            <div class="article-image" data-background="{{ asset('assets/dashboard/admin/img/blog/img01.png') }}">
                            </div>
                        </div>
                        <div class="article-details">
                            <div class="article-category">News</div>
                            <div class="article-title">
                                <h2><a href="#">The oddest place you will find photo studios</a></h2>
                            </div>
                            <p>A don't spirit gathered two under, lights said. May Multiply seasons you'll spirit tree
                                morning
                                hath first signs.</p>
                            <div class="article-user">
                                <img alt="image" src="{{ asset('assets/dashboard/admin/img/users/user-2.png') }}">
                                <div class="article-user-details">
                                    <div class="user-detail-name">
                                        <a href="#">Angelica Ramos</a>
                                    </div>
                                    <div class="text-job">Web Designer</div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

        </section>
    </div>
@endsection
