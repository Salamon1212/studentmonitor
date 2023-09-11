@extends('layout.index')

@section('content')
<div class="content-title">
    <h4><span>Staff</span></h4>
</div>
<div class="main-section">
            <div class="sub-title">
                <h5><span>Create</span></h5>
            </div>

            <div class="box">
            <form action="{{route('hod.store')}}" method="post">
                        @csrf
                        <div class="row">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" name="first_name" class="form-control" value="{!! old('first_name') !!}">
                            @if($errors ->any())
                                <span style="color:red">
                                    {{$errors->first('first_name')}}
                                </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" value="{!! old('last_name') !!}">
                        @if($errors->any('last_name'))
                            <span style="color:red">
                                {{ $errors->first('last_name') }}
                            </span>
                        @endif
                        </div>
                        <div class="col-md-6">
                        <label for="gender" class="form-label">Gender</label>
                            <input type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : ''}}>
                            <label for="gender">Male</label>
                            <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : ''}}>
                            <label for="gender">Female</label>
                            @if($errors->any('gender'))
                                <span style="color:red">{{ $errors->first("gender")}}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="dob" class="form-label">DOB</label>
                            <input type="date" name="dob" class="form-control" value="{!! old('dob') !!}">
                            @if($errors->any('dob'))
                            <span style="color:red">
                                {{ $errors->first("dob")}}
                            </span>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="age" class="form-label">Age</label>
                            <input type="text" name="age" placeholder="age" class="form-control" maxlength="3" value="{!! old('age') !!}">
                            @if($errors->any('age'))
                                <span style="color:red">
                                    {{ $errors->first("age")}}
                                </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                        <label for="phone" class="form-label">Phone no</label>
                        <input type="tel" name="phone_number" class="form-control" maxlength="12" value="{!! old('phone_number') !!}">
                        @if($errors->any('phone_number'))
                            <span style="color:red">
                                {{ $errors->first("phone_number")}}
                            </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" class="form-control" value="{!! old('email') !!}">
                        @if($errors->any('email'))
                            <span style="color:red">
                                {{ $errors->first("email")}}
                            </span>
                        @endif
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="username" class="form-label">User_name</label>
                            <input type="text" name="username" placeholder="username" class="form-control" minlength="6" value="{!! old('username') !!}">
                            @if($errors->any('username'))
                                <span style="color:red">
                                    {{ $errors->first("username")}}
                                </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                        <label for="qualification" class="form-label">Qualification</label>
                        <select name="qualification" id="qualification" class="form-select">
                                        <option value="" {{ old('qualification') == '' ? 'selected' : ''}}>select</option>
                                        <option value="BA" {{ old('qualification') == 'BA' ? 'selected' : ''}}>BA</option>
                                        <option value="BSC" {{ old('qualification') == 'BSC' ? 'selected' : ''}}>BSC</option>
                                        <option value="BE" {{ old('qualification') == 'BE' ? 'selected' : ''}}>BE</option>
                                        <option value="OTHERS" {{ old('qualification') == 'OTHERS' ? 'selected' : ''}}>others</option>
                                    </select>
                                    @if($errors->any('qualification'))
                                        <span style="color:red">
                                            {{ $errors->first("qualification")}}
                                        </span>
                                    @endif
                        </div>
                        <div class="col-md-6" id="span-qual"style="display:none">
                                <label for="qualification" class="form-label">Qualification</label>
                                    <input type="text" name="qualification2" placeholder="qualification" class="form-control">
                                </div>
                        <div class="col-md-6" style="display:none">
                        <label for="status" class="form-label">Status</label>
                            <input type="number" name="status" value="1" class="form-control">
                        </div>
                        <div class="col-md-6 form-group" style="display:none">
                        <label for="role_id" class="form-label">Role_id</label>
                            <input type="number" name="role_id" value="2" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="address" class="form-label">Address</label>
                            <textarea name="address" id="address" class="form-control"></textarea>
                            @if($errors->any('address'))
                                        <span style="color:red">
                                            {{ $errors->first("address")}}
                                        </span>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="street" class="form-label">Street</label>
                            <input type="text" name="street" placeholder="street" class="form-control" value="{!! old('street') !!}">
                            @if($errors->any('street'))
                                        <span style="color:red">
                                            {{ $errors->first("street")}}
                                        </span>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="city" class="form-label">City</label>
                            <input type="text" name="city" placeholder="city" class="form-control" value="{!! old('city') !!}">
                            @if($errors->any('city'))
                                        <span style="color:red">
                                            {{ $errors->first("city")}}
                                        </span>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="state" class="form-label">State</label>
                            <select name="state" id="state" class="form-select">
                                <option value="" {{ old('state') == '' ? 'selected' : ''}}>Select</option>
                                <option value="tamilnadu" {{ old('state') == 'tamilnadu' ? 'selected' : ''}}>Tamil Nadu</option>
                                <option value="karnataka" {{ old('state') == 'karnataka' ? 'selected' : ''}}>Karnataka</option>
                                <option value="kerala" {{ old('state') == 'kerala' ? 'selected' : ''}}>Kerala</option>
                            </select>    
                            @if($errors->any('state'))
                                <span style="color:red">
                                    {{ $errors->first("state")}}
                                </span>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="pincode" class="form-label">Pincode</label>
                            <input type="text" name="pincode" placeholder="pincode" class="form-control" maxlength="6" value="{!! old('pincode') !!}">
                            @if($errors->any('pincode'))
                                <span style="color:red">
                                    {{ $errors->first("pincode")}}
                                </span>
                            @endif
                        </div> 
                        <div class="col-md-12" id="btn-control" align="right" style="margin-top:5px;">
                            <a href="{{ route('dashboard') }}" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-success">submit</button>
                        </div>
                        </div>
                        </form>
            </div>
        </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('qualification').addEventListener('change',qualadd)
        function qualadd(){
            let qual = document.getElementById('qualification').value
            if(qual == 'OTHERS'){
                let showinput = document.getElementById('span-qual')
                    showinput.style.display='block'

            }
            else{
                let showinput = document.getElementById('span-qual')
                    showinput.style.display='none'
            }         
        }
        
    </script>
@endpush