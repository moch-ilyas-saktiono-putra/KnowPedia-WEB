<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Unique;
use Session;
use Hash;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function auth(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            return redirect('login')->with('error_message', 'Wrong email or password');
        }
    }

    public function logout(Request $request){
        Session::flush();
        Auth::logout();

        return redirect('/');
    }

    public function register_form(){
        return view('signup');
    }

    public function register(Request $request){
        $request->validate([
            'name'      =>'required',
            'email'     =>'required|unique:users|email',
            'password'  =>'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect('/login');
    }
}
