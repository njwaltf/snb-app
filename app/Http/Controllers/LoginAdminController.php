<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class LoginAdminController extends Controller
{
    public $title = 'SNB | Admin';
    public function index()
    {
        return view('admin.login', [
            'title' => $this->title
        ]);
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'max:100'],
            'password' => ['required']
        ]);
        $username = $credentials['username'];
        $password = $credentials['password'];

        $query = DB::select("select * from admins where username = '$username' and password = '$password'");
        // $result = mysqli_num_rows($query);
        // dd($result);
        // if ($result > 0) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboard/admin');
        // } else {
        //     return back()->with('loginFail', 'Masuk gagal!');
        // }

    }
}