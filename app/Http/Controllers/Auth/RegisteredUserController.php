<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\DesignationMaster;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $designations = DesignationMaster::all();
        return view('auth.register', compact('designations'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'numeric'],
            'type' =>['required'],
            'designation_id' => ['required,exists:designations,id'],
            'profile_picture' => ['mimes:jpg,jpeg,png,bmp'],
        ]);


        $filename = '';
        if ($request->hasFile('profile_picture')){


            $file = $request->file('profile_picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'dist/img/profile/';

            $file->move($path, $filename);
            // $filename = 'dist/img/profile'.time().'.'.$request->profile_picture->extension();
            
            // $request->profile_picture->move(public_path('dist/img/profile'), $filename);
            // $extension = $filename->getClientOriginalExtension();

            // $filename = time().'.'.$extension;
            // $path = 'dist/img/profile/';

            // $file->move($path.$filename);

        }
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'type'=> $request->type,
            'designation_id' => $request->designation,
            'profile_picture'=> $path.$filename,
        ]);

        event(new Registered($user));

        // Auth::login($user);

        return redirect(route('login'));
    }
}
