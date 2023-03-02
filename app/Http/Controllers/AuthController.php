<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    { 
        return view('layout.login');
    }
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('home');
        } else {
            return redirect('login')->withError('Login Details are Not Valid');
        }
    }

    public function register_view()
    {
        return view('layout.register');
    }
    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('home');
        } else {
            return redirect('register')->withError('Error');
        }
    }
    public function home()
    {
        return view('layout.home');
    }
    public function logout()
    {
        \Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
