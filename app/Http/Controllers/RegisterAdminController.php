<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterAdminController extends Controller
{
    public $title = 'SNB | Admin';
    public function index()
    {
        return view('admin.register', [
            'title' => $this->title
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email', 'max:100', 'unique:admins'],
            'username' => ['required', 'unique:admins', 'max:20', 'min:4'],
            'name' => ['required', 'max:100'],
            'password' => ['required', 'min:8'],
            'prof_pic' => ['required'],
            'role' => ['required']
        ]);
        // password hash
        $validatedData['password'] = Hash::make($validatedData['password']);
        Admin::create($validatedData);

        // succes
        return redirect()->route('admin-login')->with('success', '<strong>Akun berhasil dibuat!</strong> Silahkan masuk terlebih dahulu');
    }
}