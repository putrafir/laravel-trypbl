<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('profile.index', [
            'title' => 'Profile',
            'user' => User::all()->first()

        ]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('profile.edit', [
            'title' => 'Edit',
            'user' => User::all()->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = User::all()->first();

        $rules = [
            'namaLengkap' => 'required|max:255',
            'jabatan' => 'nullable',
            'alamat' => 'nullable',
            'nomorTelepon' => 'nullable',
            'profileImage' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',

        ];


        if ($request->username != $user->username) {
            $rules['username'] = 'required|min:3|max:255|unique:users,username';
        } else {
            $rules['username'] = 'required';
        }

        if ($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users,email';
        } else {
            $rules['email'] = 'required|email:dns';
        }

        $validated = $request->validate($rules);

        if ($request->file('profileImage')) {
            if ($request->oldProfileImage) {
                Storage::delete($request->oldProfileImage);
            }
            $validated['profileImage'] = $request->file('profileImage')->store('profileAdmin');
        }

        User::where('id', $user->id)->update($validated);


        return redirect()->route('profile.index')->with('pop_up', 'Data diri anda berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $users)
    {
        //
    }
}
