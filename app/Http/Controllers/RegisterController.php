<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'SNB | Daftar'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email', 'max:100', 'unique:users'],
            'username' => ['required', 'unique:users', 'max:20', 'min:4'],
            'full_name' => ['required', 'max:100'],
            'nis' => ['required', 'unique:users', 'max:10', 'min:10'],
            'password' => ['required', 'min:8'],
            'prof_pic' => ['required'],
            'grade' => ['required']
        ]);
        // password hash
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        // succes
        return redirect('/login')->with('success', '<strong>Akun berhasil dibuat!</strong> Silahkan masuk terlebih dahulu');
    }
}