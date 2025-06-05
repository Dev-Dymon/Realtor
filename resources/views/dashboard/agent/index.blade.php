@extends('layouts.admin')
@section('admin_dasboard')
    <div class="main-content">
        <section class="section">

            {{-- Charts section --}}
            {{-- Charts section --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Uploaded Properties</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th class="text-center">S/N</th>
                                        <th>Property Name</th>
                                        <th>Purpose</th>
                                        <th>Price</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">1</td>
                                        <td>Create a mobile app</td>
                                        <td class="align-middle">Rent</td>
                                        <td>₦180,000</td>
                                        <td>Calabar</td>
                                        <td>
                                            <div class="badge badge-success">active</div>
                                        </td>
                                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">2</td>
                                        <td>Redesign homepage</td>
                                        <td class="align-middle">Sell</td>
                                        <td>₦10,000,000</td>
                                        <td>Delta</td>
                                        <td>
                                            <div class="badge badge-success">active</div>
                                        </td>
                                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">3</td>
                                        <td>Backup database</td>
                                        <td class="align-middle">Rent</td>
                                        <td>₦600,000</td>
                                        <td>Lagos</td>
                                        <td>
                                            <div class="badge badge-warning">inactive</div>
                                        </td>
                                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">4</td>
                                        <td>Android App</td>
                                        <td class="align-middle">Rent</td>
                                        <td>₦250,000</td>
                                        <td>Akwa Ibom</td>
                                        <td>
                                            <div class="badge badge-success">active</div>
                                        </td>
                                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">5</td>
                                        <td>Logo Design</td>
                                        <td class="align-middle">Sell</td>
                                        <td>₦3,000,000</td>
                                        <td>Taraba</td>
                                        <td>
                                            <div class="badge badge-warning">inactive</div>
                                        </td>
                                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">6</td>
                                        <td>Ecommerce website</td>
                                        <td class="align-middle">Rent</td>
                                        <td>₦300,000</td>
                                        <td>Abuja</td>
                                        <td>
                                            <div class="badge badge-warning">inactive</div>
                                        </td>
                                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

    </div>
@endsection
