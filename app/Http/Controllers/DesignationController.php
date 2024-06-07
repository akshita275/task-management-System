<?php

namespace App\Http\Controllers;

use App\Models\DesignationMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $designations = DesignationMaster::all();
        if(Auth::user()->type === 'Admin'){
            return view('designation.index',compact('designations')); 
        }
        if(Auth::user()->type === 'Employee'){
            return view('designation.userindex',compact('designations')); 
        }
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        DesignationMaster::create([
            'designation_name' => $request->designation_name,
            'description' => $request->description,
        ]);

        return redirect()->route('designations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        
        DesignationMaster::find($id)->update(['status'=>0]);

        return redirect()->route('designations.index');
    }
}
