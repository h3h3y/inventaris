<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function proses_registrasi(Request $res){
        User::create([
            'name' => $res->username,
            'level' =>$res->level,
            'email' => $res->email,
            'password' =>bcrypt($res->password),
        ]);
        return redirect('login');
    }

    public function proses_login(Request $res){
        // dd($res->all());
        if (Auth::attempt($res->only('name', 'email', 'password', 'level'))){
            return redirect('home');
        }
        return redirect('login');
    }

    public function proses_logout(Request $res){
        Auth::logout();
            return view('user.login');
    }
}
