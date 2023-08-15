<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'SNB | Masuk'
        ]);
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'max:100'],
            'password' => ['required']
        ]);

        if ($request['username'] == 'kepsek@admin.com' && $request['password'] == 'admin_01') {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard/admin');
        }

        if ($request['username'] == 'bk@admin.com' && $request['password'] == 'admin_02') {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard/admin');
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginFail', 'Masuk gagal!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('successLogout', 'Anda telah keluar');
    }

}