<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginprocess(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            Alert::success('Selamat!', 'Anda berhasil login');
            return redirect('/dashboard');
        }
        Alert::error('Maaf!', 'Harap periksa kembali email atau password Anda');
        return redirect('login');
    }

    public function register(){
        return view('register');
    }

    public function registeradmin(Request $request){
        User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password'  => bcrypt($request->password),
            'remember_token'    => Str::random(60)
        ]);
        Alert::success('Selamat!', 'Akun anda telah terdaftar, silahkan login kembali');
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        // Alert::warning('Logout Berhasil!', 'Anda telah keluar dari akun Anda');
        Alert::toast('Logout Berhasil! Anda telah keluar dari akun Anda', 'warning');
        return redirect('/');
    }
}