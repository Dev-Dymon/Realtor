@extends('layouts.admin')
@section('admin_dasboard')
    <div class="main-content">
        <section class="section">

            <div class="row">
                <div class="col-12">
                    <h3 class="text-black">Welcome Admin</h3>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-5">
                                        <div class="card-content text-center">
                                            <h5 class="font-15">Users</h5>
                                            <h2 class="font-18">{{ $user }}</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('assets/dashboard/admin/img/banner/1.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-5">
                                        <div class="card-content text-center">
                                            <h5 class="font-15">Properties</h5>
                                            <h2 class="font-18">{{ $property }}</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('assets/dashboard/admin/img/banner/2.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-5">
                                        <div class="card-content text-center">
                                            <h5 class="font-15">Agents</h5>
                                            <h2 class="font-18">{{ $agent }}</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('assets/dashboard/admin/img/banner/3.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-5">
                                        <div class="card-content text-center">
                                            <h5 class="font-15">Subscriptions</h5>
                                            <h2 class="font-18">100</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('assets/dashboard/admin/img/banner/4.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Charts section --}}
            {{-- Charts section --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Newly Listed Properties</h4>

                            <a href="{{ route('admin.properties') }}" class="btn btn-primary ms-auto">View all</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th class="text-center">S/N</th>
                                        <th>Property Name</th>
                                        <th>Agent</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @php
                                        $id = 1;
                                    @endphp
                                    @foreach ($properties as $property)
                                        <tr>
                                            <td class="p-0 text-center">{{ $id }}</td>
                                            <td>{{ $property->name }}</td>
                                            <td class="text-truncate">
                                                @if ($property->agent->image !== null)
                                                    <ul class="list-unstyled order-list m-b-0 m-b-0">
                                                        <li class="team-member team-member-sm">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('uploads/users/'. $property->agent->image) }}"
                                                                alt="user" data-toggle="tooltip" title=""
                                                                data-original-title="{{ $property->agent->name }}">
                                                        </li>
                                                    </ul>
                                                @else
                                                    <ul class="list-unstyled order-list m-b-0 m-b-0">
                                                        <li class="team-member team-member-sm">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('assets/dashboard/admin/img/users/user-8.png') }}"
                                                                alt="user" data-toggle="tooltip" title=""
                                                                data-original-title="{{ $property->agent->name }}">
                                                        </li>
                                                    </ul>
                                                @endif
                                            </td>
                                            <td class="align-middle">{{ $property->property_type }}</td>
                                            <td>₦{{ number_format($property->price, 2) }}</td>
                                            <td>{{ $property->location }}</td>
                                            <td>
                                                @if ($property->status === 1)
                                                    <div class="badge badge-success">active</div>
                                                @else
                                                    <div class="badge badge-danger">inactive</div>
                                                @endif
                                            </td>
                                            <td><a href="{{ route('all_property.details', $property->slug) }}" class="btn btn-outline-primary">Detail</a></td>
                                        </tr>

                                        @php
                                            $id++;
                                        @endphp
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6 col-lg-12 col-xl-6">
                    <!-- Support tickets -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Support Ticket</h4>
                            <form class="card-header-form">
                                <input type="text" name="search" class="form-control" placeholder="Search">
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="support-ticket media pb-1 mb-3">
                                <img src="{{ asset('assets/dashboard/admin/img/users/user-1.png') }}"
                                    class="user-img mr-2" alt="">
                                <div class="media-body ml-3">
                                    <div class="badge badge-pill badge-success mb-1 float-right">Feature</div>
                                    <span class="font-weight-bold">#89754</span>
                                    <a href="javascript:void(0)">Please add advance table</a>
                                    <p class="my-1">Hi, can you please add new table for advan...</p>
                                    <small class="text-muted">Created by <span class="font-weight-bold font-13">John
                                            Deo</span>
                                        &nbsp;&nbsp; - 1 day ago</small>
                                </div>
                            </div>
                            <div class="support-ticket media pb-1 mb-3">
                                <img src="{{ asset('assets/dashboard/admin/img/users/user-2.png') }}"
                                    class="user-img mr-2" alt="">
                                <div class="media-body ml-3">
                                    <div class="badge badge-pill badge-warning mb-1 float-right">Bug</div>
                                    <span class="font-weight-bold">#57854</span>
                                    <a href="javascript:void(0)">Select item not working</a>
                                    <p class="my-1">please check select item in advance form not work...</p>
                                    <small class="text-muted">Created by <span class="font-weight-bold font-13">Sarah
                                            Smith</span>
                                        &nbsp;&nbsp; - 2 day ago</small>
                                </div>
                            </div>
                            <div class="support-ticket media pb-1 mb-3">
                                <img src="{{ asset('assets/dashboard/admin/img/users/user-3.png') }}"
                                    class="user-img mr-2" alt="">
                                <div class="media-body ml-3">
                                    <div class="badge badge-pill badge-primary mb-1 float-right">Query</div>
                                    <span class="font-weight-bold">#85784</span>
                                    <a href="javascript:void(0)">Are you provide template in Angular?</a>
                                    <p class="my-1">can you provide template in latest angular 8.</p>
                                    <small class="text-muted">Created by <span class="font-weight-bold font-13">Ashton
                                            Cox</span>
                                        &nbsp;&nbsp; -2 day ago</small>
                                </div>
                            </div>
                            <div class="support-ticket media pb-1 mb-3">
                                <img src="{{ asset('assets/dashboard/admin/img/users/user-6.png') }}"
                                    class="user-img mr-2" alt="">
                                <div class="media-body ml-3">
                                    <div class="badge badge-pill badge-info mb-1 float-right">Enhancement</div>
                                    <span class="font-weight-bold">#25874</span>
                                    <a href="javascript:void(0)">About template page load speed</a>
                                    <p class="my-1">Hi, John, can you work on increase page speed of template...
                                    </p>
                                    <small class="text-muted">Created by <span class="font-weight-bold font-13">Hasan
                                            Basri</span>
                                        &nbsp;&nbsp; -3 day ago</small>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="card-footer card-link text-center small ">View
                            All</a>
                    </div>
                    <!-- Support tickets -->
                </div>
                <div class="col-md-6 col-lg-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Projects Payments</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Client Name</th>
                                            <th>Date</th>
                                            <th>Payment Method</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe </td>
                                            <td>11-08-2018</td>
                                            <td>NEFT</td>
                                            <td>$258</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Cara Stevens
                                            </td>
                                            <td>15-07-2018</td>
                                            <td>PayPal</td>
                                            <td>$125</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                Airi Satou
                                            </td>
                                            <td>25-08-2018</td>
                                            <td>RTGS</td>
                                            <td>$287</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                Angelica Ramos
                                            </td>
                                            <td>01-05-2018</td>
                                            <td>CASH</td>
                                            <td>$170</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                Ashton Cox
                                            </td>
                                            <td>18-04-2018</td>
                                            <td>NEFT</td>
                                            <td>$970</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>
                                                John Deo
                                            </td>
                                            <td>22-11-2018</td>
                                            <td>PayPal</td>
                                            <td>$854</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>
                                                Hasan Basri
                                            </td>
                                            <td>07-09-2018</td>
                                            <td>Cash</td>
                                            <td>$128</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
