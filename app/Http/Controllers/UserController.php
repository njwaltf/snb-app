<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard-user.profile.index', [
            'title' => 'SNB | Profile',
            'notifications' => Notification::where('user_id', auth()->user()->id)->get()
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
    public function edit()
    {
        return view('dashboard-user.profile.edit', [
            'u' => User::where('id', auth()->user()->id)->first(),
            'title' => 'SNB | Profile',
            'notifications' => Notification::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // return $request->file('prof_pic')->store('profile');
        // $validatedData = [
        //     'full_name' => $request->full_name,
        //     'email' => $request->email,
        //     'nis' => $request->nis,
        //     'username' => $request->username,
        //     'grade' => $request->grade,
        //     'prof_pic' => 'profile/' . $request->prof_pic,
        // ];
        $data = $request->validate([
            'full_name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'max:100'],
            'nisn' => ['required', 'min:10', 'max:10'],
            'username' => ['required', 'min:4', 'max:20'],
            'grade' => ['required'],
            'prof_pic' => ['file', 'image']
        ]);
        if ($request->file('prof_pic')) {
            $data['prof_pic'] = $request->file('prof_pic')->store('profile');
        }
        // if (! $request->prof_pic) {
        //     $validatedData['prof_pic'] = auth()->user()->prof_pic;
        // } else {
        //     $validatedData['prof_pic'] = 'profile/' . $request->prof_pic;
        // }

        $user = User::where('id', $request->id)
            ->update($data);

        return redirect()->route('user-profile')->with('successEdit', 'Profile kamu berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}