@extends('layout.index')

@section('content')
    <div class="content-title">
        <h3><span>Dashboard</span></h3>
    </div>
    
    <div class="main-section">
        <div class="dashboard-content">
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{ route('dashboard')}}" style="text-decoration:none; color:black">
                        <div class="card">
                            <div class="card-body" style="height: 166px;">
                                <h5 class="card-title">Staffs</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="#" style="text-decoration:none; color:black">
                    <div class="card">
                    <div class="card-body" style="height:166px;">
                        <h5 class="card-title">Students</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    </div>      
                    </a>
                </div>
                <div class="col-sm-12 notifi">
                <a href="#" style="text-decoration:none; color:black">
                    <div class="card" style="width:500px ;text-align:center; margin-left:210px">
                        <div class="card-body"  style="height:200px;">
                            <h5 class="card-title">Notification</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection