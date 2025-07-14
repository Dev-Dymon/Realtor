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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Newly Listed Properties</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th class="text-center">
                                            <h6>S/N</h6>
                                        </th>
                                        <th>
                                            <h6>Property Name</h6>
                                        </th>
                                        <th>
                                            <h6>Agent</h6>
                                        </th>
                                        <th>
                                            <h6>Type</h6>
                                        </th>
                                        <th>
                                            <h6>Price</h6>
                                        </th>
                                        <th>
                                            <h6>Location</h6>
                                        </th>
                                        <th>
                                            <h6>Status</h6>
                                        </th>
                                        <th>
                                            <h6>Action</h6>
                                        </th>
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
                                                                src="{{ asset('uploads/users/' . $property->agent->image) }}"
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
                                            <td>
                                                <div class="dropdown d-inline mr-2">
                                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu py-3 pl-2">
                                                        <a target="_blank"
                                                            href="{{ route('all_property.details', $property->slug) }}"
                                                            class="btn dropdown-item text-black fs-4">Detail</a>
                                                        <a href="{{ route('admin.properties.edit', $property->id) }}"
                                                            class="btn dropdown-item text-black fs-4">Edit</a>
                                                    </div>
                                                </div>


                                                @if ($property->banned == 1)
                                                    <a href="{{ route('all_property.details', $property->slug) }}"
                                                        class="btn btn-outline-success">Unban</a>
                                                @else
                                                    <a href="{{ route('all_property.details', $property->slug) }}"
                                                        class="btn btn-outline-danger">Ban</a>
                                                @endif
                                            </td>
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

                <div class="align-items-center d-flex justify-content-center w-100">
                    {{ $properties->links('pagination::bootstrap-5') }}
                </div>

            </div>

        </section>
    </div>
@endsection
