<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\PositionMaster;
use App\Models\RequirementManagement;
use App\Models\TaskManagement;
use Illuminate\Http\Request;

class RequirementManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = PositionMaster::all();
        $requirements = RequirementManagement::all();
        return view('admin.requirements.index',compact('requirements','positions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $positions = PositionMaster::all();
        $requirements = RequirementManagement::all();
        return view('admin.requirements.create',compact('requirements','positions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        RequirementManagement::create([
            'requirement_name' => $request->requirement_name,
            'requirement_description' => $request->requirement_description,
            'client_name'=> $request->client_name,
            'position_id' => $request->position_id,
            'requirement_status' => $request->requirement_status,
            'requirement_priority' => $request->requirement_priority,
            'attachment' => $request->attachment, 
        ]);
       
        // Redirect the user after storing the requirement
        return redirect()->route('requirements.index')->with('success', 'Requirement added successfully.');
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
        //
    }
}
