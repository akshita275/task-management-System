<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Clients::orderBy('id')->get();
        return view('admin.clients.index',compact('clients'));
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
        // dd($request->all());

        Clients::create([
            'client_name'=> $request->client_name,
            'address'=> $request->address,
            'city'=> $request->city,
            'district'=> $request->district,
            'state'=> $request->state,
            'phone'=> $request->phone,
            'email_address'=> $request->email_address,
            'website'=> $request->website,
            'logo'=> $request->logo,
        ]);

        return redirect()->route('clients.index');
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
        Clients::find($id)->update(['status'=>0]);

        return redirect()->route('clients.index');
    }
}
