<?php

namespace App\Http\Controllers\AdminPanel;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\DesignationMaster;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $designations = DesignationMaster::all();
        return view("admin.users.index", compact("users","designations"));
    }

    public function archiveUsers(Request $request){
        
        $users= User::all();
        
        return view('admin.users.archive_user',compact('users'));
    }

    public function removeUser($id){
        
        User::find($id)->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
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
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find( $id );
        $designations = DesignationMaster::all();
        return view("admin.users.edit", compact("user","designations"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string',
            'type' => 'required|string|in:Admin,Employee',
            'designation_id' => 'required',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max file size: 2MB
        ]);

        $user = User::find( $id );

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->type = $request->type;
        $user->designation_id = $request->designation_id;
        
        $user->save();

        // request()->user()->update([
        //     'name'=> $request->name,
        //     'phone'=> $request->phone,
        //     'email'=>$request->email,
        //     'type'=> $request->type,
        //     'designation_id'=> $request->designation_id,
        // ]);
        return back()->with('status', 'user-updated');

        
        // $user = User::findOrFail($id);

        // Update user attributes
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->phone = $request->input('phone');
        // $user->type = $request->input('type');
        // $user->designation_id = $request->input('designation_id');

        //     if ($request->hasFile('profile_picture')) {
        //         // Delete old profile picture if exists
        //         if ($user->profile_picture) {
        //             Storage::delete($user->profile_picture);
        //         }

        //         // Store new profile picture
        //         $profilePicturePath = $request->file('profile_picture')->store('profile_pictures');
        //         $user->profile_picture = $profilePicturePath;
        //     }
        // $user->save();

    
        // return redirect()->route('admin.users.index')->with('success', 'User details updated successfully.');

    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // if($user->profile_picture){
        //     Storage::delete($user->profile_picture);
        // }
        $user->update(['status'=> 0]);

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
