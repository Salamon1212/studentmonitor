@extends('layout.index')

@section('content')
    <div class="content-title">
        <h3><span>Dashboard</span></h3>
    </div>
    <div class="main-section">
            <div class="content">
                <div class="content-feature">
                    <div class="searchbar">
                        <form action="{{ route('search') }}" method="get">
                            <input type="search" name="search" placeholder="search here"> <button type="submit">search</button>
                        </form>
                    </div>
                    <div class="add-btn">
                        <a href="{{ route('hod.create')}}" id="add-stuff" class="btn btn-outline-info">add</a>
                    </div>
                </div>
                    <div class="content-part">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th style="width:80px;"><strong>#</strong></th>
                                <th><strong>ID</strong></th>
                                <th><strong>Name</strong></th>
                                <th><strong>Email</strong></th>
                                <th><strong>Mobile</strong></th>
                                <th><strong>Status</strong></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($data) > 0)
                                @foreach($data as $row)
                                <tr>
                                    <td><strong>{{ $loop->iteration }}</strong></td>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->first_name }}</td>
                                    <td>{{ $row->email ?? '-' }}</td>
                                    <td>{{ $row->phone_number ?? '-' }}</td>
                                    <td>@if($row->status)
                                        <h6 style="color:#285b0c"><i class="bi bi-person-check" style="font-size:1.5rem"></i></h6>
                                        @else 
                                        <h6 style="color:red"><i class="bi bi-person-fill-x" style="font-size:1.5rem"></i></h6>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="action-hyper">
                                            <a href="{{ route('hod.edit', $row->id) }}"> <i class="bi bi-vector-pen"></i> </a>
                                            <a href="#" id="delete-link" onclick="return notification({{$row->id}})"> <i class="bi bi-trash3-fill"></i> </a>
                                            <a href="{{ route('hod.show',$row->id)}}"> <i class="bi bi-eye-fill"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7" class="text-center">
                                        No records found...
                                    </td>
                                </tr>
                            @endif
                            
                        </tbody>
                    </table>
                    </div> 
                    <div class="pagination-btn "align="right"> 
                        {{ $data->links()}}
                    </div>
                
            </div>        
    </div> 
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        // console.log($("#alert-message"))
        setTimeout(() => {
            document.getElementById("alert-message").remove()
        }, 3000);
    })
    function notification(id){
        var user_id = id
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"hod-delete/"+user_id,
                    type:'get',
                    success:function(res){
                        if(res){
                            window.location.reload();
                            Swal.fire(    
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        }    
                    }
                });           
            }
    })
    }
</script>
@endpush