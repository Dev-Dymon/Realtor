@extends('layouts.admin')
@section('admin_dasboard')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card author-box">
                            <div class="card-body">
                                <div class="author-box-center">
                                    <img alt="image" src="{{ asset('uploads/users/'. Auth::user()->image) }}"
                                        class="rounded-circle author-box-picture">
                                    <div class="clearfix"></div>
                                    <div class="author-box-name">
                                        <a href="#">{{ Auth::user()->name }}</a>
                                    </div>
                                    <div class="author-box-job">{{ Auth::user()->usertype }}</div>
                                </div>
                                <div class="text-center mt-5">
                                    <h4>Personal Details</h4>
                                </div>
                                <div class="">
                                    <div class="py-4">
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Phone
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ Auth::user()->phone }}
                                            </span>
                                        </p>
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Mail
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ Auth::user()->email }}
                                            </span>
                                        </p>
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Whatsapp
                                            </span>
                                            <span class="float-right text-muted">
                                                <a href="{{ Auth::user()->whatsapp_link }}" target="_blank">link</a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="card">
                            <div class="padding-20">
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about"
                                            role="tab" aria-selected="true">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings"
                                            role="tab" aria-selected="false">Setting</a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-bordered" id="myTab3Content">
                                    <div class="tab-pane fade show active" id="about" role="tabpanel"
                                        aria-labelledby="home-tab2">
                                        <div class="row">
                                            <div class="col-md-4 col-6 b-r">
                                                <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">{{ Auth::user()->name }}</p>
                                            </div>
                                            <div class="col-md-4 col-6 b-r">
                                                <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">{{ Auth::user()->phone }}</p>
                                            </div>
                                            <div class="col-md-4 col-6 b-r">
                                                <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="section-title">Bio</div>
                                        <p class="m-t-30">{{ Auth::user()->bio }}</p>
                                    </div>


                                    {{-- edit setting tab --}}
                                    <div class="tab-pane fade" id="settings" role="tabpanel"
                                        aria-labelledby="profile-tab2">
                                        <form method="POST" class="needs-validation" action="{{ route('admin.profile.update', Auth::user()->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-header">
                                                <h4>Edit Profile</h4>
                                            </div>

                                            <div class="d-flex justify-content-center align-items-center flex-column">
                                                <img alt="image" width="100px" height="100px" id="img-auth-img"
                                                    src="{{ asset('uploads/users/'. Auth::user()->image) }}"
                                                    class="rounded-circle author-box-picture">

                                                <label for="auth-img" class="btn btn-primary mt-2"
                                                    id="auth-btn">Upload</label>
                                                <input type="file" name="image" id="auth-img" hidden>
                                                <script>
                                                    let img = document.getElementById('img-auth-img');
                                                    let btn = document.getElementById('auth-img');

                                                    btn.onchange = function() {
                                                        img.src = URL.createObjectURL(btn.files[0]);
                                                    }
                                                </script>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">

                                                    {{-- fullname --}}
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>Full Name</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ Auth::user()->name ?? old('name') }}"
                                                            name="name">
                                                        @error('name')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    {{-- email address --}}
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>Email address</label>
                                                        <input type="email" class="form-control"
                                                            value="{{ Auth::user()->email ?? old('email') }}"
                                                            name="email">
                                                        @error('email')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    {{-- phone number --}}
                                                    <div class="col-12">
                                                        <label>Phone number</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ Auth::user()->phone ?? old('phone') }}"
                                                            name="phone">
                                                        @error('phone')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12">
                                                        <label>Bio</label>
                                                        <textarea class="form-control" name="bio">{{ Auth::user()->bio ?? old('bio') }}</textarea>
                                                        @error('bio')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                            </div>
                                        </form>
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
