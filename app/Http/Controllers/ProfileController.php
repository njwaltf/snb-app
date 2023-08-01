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
        return view('dashboard-user.profile.index', [
            'title' => 'SNB | Profile'
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard-user.profile.edit', [
            'title' => 'SNB | Profile',
            'u' => User::where('id', auth()->user()->id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'full_name' => ['required', 'max:200'],
            'nis' => ['min:10', 'max:10'],
            'grade' => ['min:1', 'max:1'],
            // 'prof_pic' => 'image|mimes:jpeg,jpg,png|max:2048',
        ];
        if ($request->email != auth()->user()->email) {
            $rules['email'] = ['email', 'unique:users', 'max:50'];
        }
        if ($request->username != auth()->user()->username) {
            $rules['username'] = ['min:4', 'unique:users', 'max:50'];
        }

        $validatedData = $request->validate($rules);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}