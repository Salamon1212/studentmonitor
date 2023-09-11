@extends('layout.index')

@section('content')
    <div class="content-title">
        <span><h4>Staff</h3></span>
    </div>
    <div class="main-section">
        <div class="sub-title">
                <h5><span>View</span></h5>
        </div>

            <section style="background-color: #eee;">
        <div class="container py-5">
            
            <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-3">{{ $full_name }}</h5>
                    <p class="text-muted mb-1">Full Stack Developer</p>
                    <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                    <div class="d-flex justify-content-center mb-2">
                    <!-- <button type="button" class="btn btn-primary">Follow</button> -->
                    <!-- <button type="button" class="btn btn-outline-primary ms-1">Message</button> -->
                    </div>
                </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fas fa-globe fa-lg text-warning"></i>
                        <p class="mb-0">https://mdbootstrap.com</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                        <p class="mb-0">mdbootstrap</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                        <p class="mb-0">@mdbootstrap</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                        <p class="mb-0">mdbootstrap</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                        <p class="mb-0">mdbootstrap</p>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $full_name }}</p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Gender</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $data->gender}}</p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $data->phone_number }}</p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $data->email }}</p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Qualification</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $data->qualification}} ,{{ $data->qualification2 }}</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4 mb-md-0">
                    <div class="card-body address">
                    <p class="mb-4"> Address Details</p>
                        <div class="address-detail">
                            <div>
                            <p class="mb-1" style="font-size: .80rem;">Address</p>
                            </div>
                            <div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">
                                {{ $data->myaddress['address']}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="address-detail">
                            <div>
                            <p class="mb-1" style="font-size: .80rem;">Street</p>
                            </div>
                            <div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">
                                {{ $data->myaddress['street']}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="address-detail">
                            <div>
                            <p class="mb-1" style="font-size: .80rem;">City</p>
                            </div>
                            <div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">
                                {{ $data->myaddress['city']}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="address-detail">
                            <div>
                            <p class="mb-1" style="font-size: .80rem;">State</p>
                            </div>
                            <div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">
                                {{ $data->myaddress['state']}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="address-detail">
                            <div>
                            <p class="mb-1" style="font-size: .80rem;">Pincode</p>
                            </div>
                            <div class="div">
                                <p class="mt-4 mb-1" style="font-size: .77rem;">
                                {{ $data->myaddress['pincode']}}
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        <p class="mb-4">Education
                        </p>
                        <div class="address-detail">
                            <div>
                            <p class="mb-1" style="font-size: .80rem;">UG</p>
                            </div>
                            <div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">BE</p>        
                            </div>
                        </div>
                        <hr>
                        <div class="address-detail">
                            <div>
                            <p class="mb-1" style="font-size: .80rem;">PG</p>
                            </div>
                            <div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">ME</p>        
                            </div>
                        </div>
                        <hr>
                        <div class="address-detail">
                            <div>
                                <p class="mb-1" style="font-size: .80rem;">College Name</p>
                            </div>
                            <div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">SRM</p>
                            </div>
                        </div>
                        <hr>
                        <div class="address-detail">
                            <div>
                                <p class="mb-1" style="font-size: .80rem;">CGPA</p>
                            </div>
                            <div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">7.2</p>
                            </div>
                        </div>
                        <hr>
                        <div class="address-detail">
                            <div>
                                <p class="mb-1" style="font-size: .80rem;">Batch</p>
                            </div>
                            <div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">2022</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-12" id="view-back">
            <a href="{{ route('dashboard') }}" class="btn btn-info">Back</a>
        </div>
        </section>
    </div>
@endsection