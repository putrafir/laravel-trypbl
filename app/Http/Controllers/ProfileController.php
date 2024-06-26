<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
    public function update(Request $request, User $user)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $users)
    {
        //
    }
}
