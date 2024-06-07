<?php

namespace App\Http\Controllers;

use App\Models\RequirementManagement;
use App\Models\TaskManagement;
use App\Models\User;
use Illuminate\Http\Request;

class TaskManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::orderBy('id')->get();
        $employees = User::where('type', 'Employee')->orderBy('id')->get();
        $tasks = TaskManagement::all();
        $requirements = RequirementManagement::all();
        return view('admin.task.index',compact('tasks','employees','requirements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = User::where('type', 'Employee')->orderBy('id')->get();
        return view('admin.task.create',compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        TaskManagement::create([
            'task_name' => $request->task_name,
            'task_description' => $request->task_description,
            'task_type' => $request->task_type,
            'attachment' => $request->attachment,
            'requirement_id' => $request->requirement_id,
            'task_assignment' => $request->task_assignment,
            'task_start_date' => $request->task_start_date,
            'task_end_date' => $request->task_end_date,
            'task_current_stage' => $request->task_current_stage,
            'task_status' => $request->task_status,
            'teamleader_comments' => $request->teamleader_comments,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Requirement added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskManagement $taskManagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskManagement $taskManagement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaskManagement $taskManagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, TaskManagement $taskManagement)
    {

        TaskManagement::find($id)->update(['status' => 0]);
        // $taskManagement->update(['status'=> 0]);

        return redirect()->route('tasks.index')->with('success', 'User deleted successfully.');
    }
}
