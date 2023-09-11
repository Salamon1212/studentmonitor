<?php

namespace App\Http\Controllers;

use App\Models\search;
use App\Models\User;
use App\Models\address;
use Illuminate\Http\Request;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $search = $request->get('search');
        $data = User::role('staff')->with('myAddress')
        ->where('first_name','LIKE','%'.$search.'%')
        ->orWhere('last_name','LIKE','%'.$search.'%')
        // ->orWhere('city','LIKE','%'.$search.'%')
        // ->orWhere('state','LIKE','%'.$search.'%')
        ->orWhere('phone_number','LIKE','%'.$search.'%')
        ->orWhere('email','LIKE','%'.$search.'%')->first();
        if(empty($data)){
            echo "No Records is Available";
        }
        echo $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(search $search)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, search $search)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(search $search)
    {
        //
    }
}
