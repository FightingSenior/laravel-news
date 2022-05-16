<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        $setting = Setting::first();

        return view('authentication.login', compact('setting'));
    }

    public function authenticate(Request $request)
    {
        $email    = $request->email;
        $password = $request->password;
        $remember = $request->remember_token;

        if (Auth::attempt(['email' => $email, 'password' => $password, 'status' => 1], $remember)) {

            return redirect()->intended('dashboard');
        }

        return redirect()->route('login')->with('errorcredentials', 'Thông tin đăng nhập không khớp hoặc Tài khoản không hoạt động!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
