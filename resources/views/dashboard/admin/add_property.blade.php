@extends('layouts.admin')
@section('admin_dasboard')
    <div class="main-content">
        <section class="section">

            <div class="row align-items-center">
                <div class="col-6">
                    <h3 class="text-black">Add Property</h3>
                </div>
                <div class="col-6 text-right">
                    <a class="text-black" href="{{ route('admin.properties') }}">all property</a>
                </div>
            </div>

            @if ($errors->any())
                <ul class="px-4 py-2 bg-red-100">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforeach
                </ul>
            @endif

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>Note all this field <span class="text-danger">*</span> are required</div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.properties.create') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <input type="text" value="{{ Auth::user()->id }}" hidden name="user_id">
                                    <div class="row g-3 mb-1">

                                        {{-- name --}}
                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                            <label class="col-form-label">Property Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" required
                                                value="{{ old('name') }}" placeholder="Property name">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        {{-- location --}}
                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                            <label class="col-form-label">Property Location<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="location" required
                                                value="{{ old('location') }}" placeholder="Property location">
                                            @error('location')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row g-3 mb-1">

                                        {{-- city --}}
                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                            <label class="col-form-label">State<span class="text-danger">*</span></label>
                                            <select class="form-control" name="city" required>
                                                <option disabled selected>select a state</option>
                                                @foreach ($states as $state)
                                                    <option value="{{ $state['name'] }}">{{ $state['name'] }}</option>
                                                @endforeach
                                            </select>
                                            @error('city')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        {{-- country --}}
                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                            <label class="col-form-label">Country<span class="text-danger">*</span></label>
                                            <select class="form-control" name="country" required>
                                                <option disabled selected>select a country</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                                                @endforeach
                                            </select>
                                            @error('country')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row g-3 mb-1">

                                        {{-- no_of_bedroom --}}
                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                            <label class="col-form-label">No of bedroom<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="number" name="no_of_bedroom" required
                                                value="{{ old('no_of_bedroom') }}" placeholder="no of bedroom">
                                            @error('no_of_bedroom')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        {{-- no_of_toilet --}}
                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                            <label class="col-form-label">No of toilet<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="number" name="no_of_toilet" required
                                                value="{{ old('no_of_toilet') }}" placeholder="no of toilet">
                                            @error('no_of_toilet')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row g-3 mb-1">

                                        {{-- property_type --}}
                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                            <label class="col-form-label">Property type<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control" name="property_type" required>
                                                <option disabled selected>Property type</option>
                                                <option value="self-contained">Self-contained</option>
                                                <option value="apartment">Apartment</option>
                                                <option value="detached_house">Detached House</option>
                                                <option value="semi_detached_house">Semi-Detached House</option>
                                                <option value="terraced_house">Terraced House</option>
                                                <option value="duplex">Duplex</option>
                                                <option value="bungalow">Bungalow</option>
                                                {{-- <option value="commercial">Commercial</option>
                                            <option value="land">Land</option> --}}
                                            </select>
                                            @error('property_type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        {{-- price --}}
                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                            <label class="col-form-label">Price<span class="text-danger">*</span></label>
                                            <input class="form-control" type="number" name="price" required
                                                value="{{ old('price') }}" placeholder="property price">
                                            @error('price')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row g-3 mb-1">

                                        {{-- size --}}
                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                            <label class="col-form-label">Property size<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="size" required
                                                value="{{ old('size') }}" placeholder="200 SQM">
                                            @error('size')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        {{-- status --}}
                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                            <label class="col-form-label">Status<span class="text-danger">*</span></label>
                                            <select class="form-control" name="status" required>
                                                <option disabled selected>select status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row g-3 mb-3">
                                        {{-- description --}}
                                        <div class="col-12">
                                            <label class="col-form-label">Description<span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" id="description" rows="5" style="resize: vertical !important;" required
                                                name="description" placeholder="property description">{{ old('description') }}</textarea>
                                        </div>

                                    </div>

                                    {{-- first image upload section --}}
                                    <div class="form-group row mb-4">
                                        {{-- image 1 --}}
                                        <div class="col-lg-3 col-md-3 col-6 upload-img-div">
                                            <img src="{{ asset('assets/dashboard/admin/img/image.png') }}" alt=""
                                                id="upload-preview1" class="upload-img">
                                            <label for="image-upload1" id="image-label"
                                                class="btn btn-success cursor-pointer">Choose image</label>
                                            <input type="file" name="image_1" id="image-upload1" hidden required />
                                            <script>
                                                {
                                                    let btn = document.getElementById('image-upload1');
                                                    let img = document.getElementById('upload-preview1');

                                                    btn.onchange = function() {
                                                        img.src = URL.createObjectURL(btn.files[0]);
                                                    }
                                                }
                                            </script>
                                        </div>

                                        {{-- image 2 --}}
                                        <div class="col-lg-3 col-md-3 col-6 upload-img-div">
                                            <img src="{{ asset('assets/dashboard/admin/img/image.png') }}" alt=""
                                                id="upload-preview2" class="upload-img">
                                            <label for="image-upload2" id="image-label"
                                                class="btn btn-success cursor-pointer">Choose image</label>
                                            <input type="file" name="image_2" id="image-upload2" hidden required />
                                            <script>
                                                {
                                                    let btn = document.getElementById('image-upload2');
                                                    let img = document.getElementById('upload-preview2');

                                                    btn.onchange = function() {
                                                        img.src = URL.createObjectURL(btn.files[0]);
                                                    }
                                                }
                                            </script>
                                        </div>

                                        {{-- image 3 --}}
                                        <div class="col-lg-3 col-md-3 col-6 upload-img-div">
                                            <img src="{{ asset('assets/dashboard/admin/img/image.png') }}" alt=""
                                                id="upload-preview3" class="upload-img">
                                            <label for="image-upload3" id="image-label"
                                                class="btn btn-success cursor-pointer">Choose image</label>
                                            <input type="file" name="image_3" id="image-upload3" hidden required />
                                            <script>
                                                {
                                                    let btn = document.getElementById('image-upload3');
                                                    let img = document.getElementById('upload-preview3');

                                                    btn.onchange = function() {
                                                        img.src = URL.createObjectURL(btn.files[0]);
                                                    }
                                                }
                                            </script>
                                        </div>

                                        {{-- image 4 --}}
                                        <div class="col-lg-3 col-md-3 col-6 upload-img-div">
                                            <img src="{{ asset('assets/dashboard/admin/img/image.png') }}" alt=""
                                                id="upload-preview4" class="upload-img">
                                            <label for="image-upload4" id="image-label"
                                                class="btn btn-success cursor-pointer">Choose image</label>
                                            <input type="file" name="image_4" id="image-upload4" hidden />
                                            <script>
                                                {
                                                    let btn = document.getElementById('image-upload4');
                                                    let img = document.getElementById('upload-preview4');

                                                    btn.onchange = function() {
                                                        img.src = URL.createObjectURL(btn.files[0]);
                                                    }
                                                }
                                            </script>
                                        </div>

                                    </div>

                                    {{-- second image upload section --}}
                                    <div class="form-group row mb-4">
                                        {{-- image 5 --}}
                                        <div class="col-lg-3 col-md-3 col-6 upload-img-div">
                                            <img src="{{ asset('assets/dashboard/admin/img/image.png') }}" alt=""
                                                id="upload-preview5" class="upload-img">
                                            <label for="image-upload5" id="image-label"
                                                class="btn btn-success cursor-pointer">Choose image</label>
                                            <input type="file" name="image_5" id="image-upload5" hidden />
                                            <script>
                                                {
                                                    let btn = document.getElementById('image-upload5');
                                                    let img = document.getElementById('upload-preview5');

                                                    btn.onchange = function() {
                                                        img.src = URL.createObjectURL(btn.files[0]);
                                                    }
                                                }
                                            </script>
                                        </div>

                                        {{-- image 6 --}}
                                        <div class="col-lg-3 col-md-3 col-6 upload-img-div">
                                            <img src="{{ asset('assets/dashboard/admin/img/image.png') }}" alt=""
                                                id="upload-preview6" class="upload-img">
                                            <label for="image-upload6" id="image-label"
                                                class="btn btn-success cursor-pointer">Choose image</label>
                                            <input type="file" name="image_6" id="image-upload6" hidden />
                                            <script>
                                                {
                                                    let btn = document.getElementById('image-upload6');
                                                    let img = document.getElementById('upload-preview6');

                                                    btn.onchange = function() {
                                                        img.src = URL.createObjectURL(btn.files[0]);
                                                    }
                                                }
                                            </script>
                                        </div>

                                        {{-- image 7 --}}
                                        <div class="col-lg-3 col-md-3 col-6 upload-img-div">
                                            <img src="{{ asset('assets/dashboard/admin/img/image.png') }}" alt=""
                                                id="upload-preview7" class="upload-img">
                                            <label for="image-upload7" id="image-label"
                                                class="btn btn-success cursor-pointer">Choose image</label>
                                            <input type="file" name="image_7" id="image-upload7" hidden />
                                            <script>
                                                {
                                                    let btn = document.getElementById('image-upload7');
                                                    let img = document.getElementById('upload-preview7');

                                                    btn.onchange = function() {
                                                        img.src = URL.createObjectURL(btn.files[0]);
                                                    }
                                                }
                                            </script>
                                        </div>

                                        {{-- image 8 --}}
                                        <div class="col-lg-3 col-md-3 col-6 upload-img-div">
                                            <img src="{{ asset('assets/dashboard/admin/img/image.png') }}" alt=""
                                                id="upload-preview8" class="upload-img">
                                            <label for="image-upload8" id="image-label"
                                                class="btn btn-success cursor-pointer">Choose image</label>
                                            <input type="file" name="image_8" id="image-upload8" hidden />
                                            <script>
                                                {
                                                    let btn = document.getElementById('image-upload8');
                                                    let img = document.getElementById('upload-preview8');

                                                    btn.onchange = function() {
                                                        img.src = URL.createObjectURL(btn.files[0]);
                                                    }
                                                }
                                            </script>
                                        </div>

                                    </div>

                                    {{-- submit button --}}
                                    <div class="form-group row mb-4">
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary">Upload property</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
