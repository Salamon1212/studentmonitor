<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function index(){
        
    }

    function create(){
        return view('hod.file');
    }

    function store(Request $request){
        // $this->validate($request, [
        //     'profile' => 'required|file|mimes:pdf,doc,docx|max:2048', // Example validation rules
        // ]);

        $image = $request->file('profile');
        if($image){
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('profile'),$imageName);
                return back()->withimageName( $imageName);
        }else{
            return "file not uploaded";
        }
    }
}
