<?php

namespace App\Http\Controllers;

use App\Models\hod;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\staff;
use App\Models\address;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class HodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = User::role('staff')
        ->orderBy('id','asc')->simplePaginate (5);
        return view('hod.list',compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("hod.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "first_name" =>"required|string",
            "last_name" =>"required|string",
            "gender" =>"required",
            "username" =>"required|string|unique:users",
            "age" =>"required",
            "dob" =>"required",
            "phone_number" =>"required|regex:/^\d{10,15}$/|unique:users",
            "email" =>"required|email|unique:users",
            "qualification" =>"required",
            "address" =>"required",
            "street" =>"required",
            "city" =>"required",
            "state" =>"required",
            "pincode" =>"required|numeric"
        ]);
        $password = "12345678";
        $staff_data = [
            "first_name" => $request->get('first_name'),
            "last_name" => $request->get('last_name'),
            "gender" => $request->get('gender'),
            "dob" => $request->get('dob'),
            "age" => $request->get('age'),
            "username" => $request->get('username'),
            "password" => encrypt($password),
            "phone_number" => $request->get('phone_number'),
            "email" => $request->get('email'),
            "qualification" => $request->get('qualification'),
            "qualification2" => $request->get('qualification2'),
            "role_id" => 2,
            "status" => $request->get('status'),
        ];
        $user = User::create($staff_data);
        $user->assignRole('staff');
        $staff_add = [
            "user_id" => $user->id,
            "address" => $request->get('address'),
            'street' => $request->get('street'),
            "city" => $request->get('city'),
            "state" => $request->get('state'),
            "pincode" => $request->get('pincode'),
        ];
        $address = address::create($staff_add);
        return redirect('hod-index')->with('Success','Successfully created new staff account');

    }

    /**
     * Display the specified resource.
     */
    public function show(hod $hod, $id)
    {
        // die($id);
        $data = User::where('id',$id)->with('myaddress')->first();
        $full_name = Str::ucfirst($data->first_name) ." ".Str::ucfirst($data->last_name);
        return view('hod.view',compact('data','full_name'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hod $hod ,$id)
    {
        //
        $data = User::role('staff')->with('myaddress')
        ->where('id',$id)->first();
        return view('hod.edit',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hod $hod)
    {
        //
        $id = $request->id;
        $request->validate([
            "first_name" =>"required|string",
            "last_name" =>"required|string",
            "gender" =>"required",
            "dob" =>"required",
            "username" =>"required|string|unique:users,username,$id",
            "age" =>"required",
            "phone_number" =>"required|regex:/^\d{10,15}$/|unique:users,phone_number,$id",
            "email" =>"required|email|unique:users,email,$id",
            "qualification" =>"required",
            "address" =>"required",
            "street" =>"required",
            "city" =>"required",
            "state" =>"required",
            "pincode" =>"required|numeric"
        ]);
        $staff_data = [
            "first_name" => $request->get('first_name'),
            "last_name" => $request->get('last_name'),
            "gender" => $request->get('gender'),
            "dob" => $request->get('dob'),
            "age" => $request->get('age'),
            "username" => $request->get('username'),
            "password" => Hash::make($request->get('password')),
            "phone_number" => $request->get('phone_number'),
            "email" => $request->get('email'),
            "qualification" => $request->get('qualification'),
            "qualification2" => $request->get('qualification2'),
            "role_id" => 2,
            "status" => $request->get('status'),
        ];
        $user = User::where('id',$id)->update($staff_data);
        $staff_add = [
            "user_id" => $id,
            "address" => $request->get('address'),
            'street' => $request->get('street'),
            "city" => $request->get('city'),
            "state" => $request->get('state'),
            "pincode" => $request->get('pincode'),
        ];
        $address = address::where('user_id',$id)->update($staff_add);
        return redirect('hod-index')->with('Success','Successfully updated the staff account');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hod $hod, $id)
    {
        $address = address::where('user_id',$id)->first()->delete();
        $data = User::where('id',$id)->first()->delete();
        return redirect('hod-index')->with('Successfully deleted the staff account');
    }
}
