@extends('layouts.admin')
@section('admin_dasboard')
    <div class="main-content">
        <section class="section">

            <div class="row">
                <div class="col-12">
                    <h3 class="text-black">All users</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <h4>Basic DataTables</h4> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="myTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                S/N
                                            </th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $id = 1;
                                        @endphp
                                        @foreach ($all_users as $user)
                                            <tr>
                                                <td>
                                                    {{ $id }}
                                                </td>
                                                <td>{{ $user->name }}</td>
                                                <td class="align-middle">
                                                    {{ $user->email }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $user->phone }}
                                                </td>
                                                <td>
                                                    @if ( $user->image !== null )
                                                        <img class="rounded-circle" alt="image"
                                                        src="{{ asset('assets/dashboard/admin/img/users/user-3.png') }}"
                                                        width="35">
                                                    @else
                                                       <img class="rounded-circle" alt="image"
                                                        src="{{ asset('assets/dashboard/admin/img/users/user-4.png') }}"
                                                        width="35"> 
                                                    @endif
                                                    
                                                </td>
                                                <td class="align-middle">
                                                    @if ($user->is_banned === 1)
                                                        <div class="badge badge-danger badge-shadow">banned
                                                        </div>
                                                    @else
                                                        <div class="badge badge-success badge-shadow">active
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="dropdown d-inline mr-2">
                                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu py-3 pl-2">
                                                            <a href="{{ route('admin.user.details', $user->id ) }}" class="dropdown-item">View user</a>
                                                            @if ($user->is_banned === 1)
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <a href="#" class="dropdown-item text-success">Unban
                                                                        user</a>
                                                                </form>
                                                            @else
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <a href="#" class="dropdown-item text-danger">Ban
                                                                        user</a>
                                                                </form>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>

                                            @php
                                                $id++;
                                            @endphp
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $all_users->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
