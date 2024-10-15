<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{
    public function tampilregistrasi(){
        return view('registrasi');
    }
    public function submitregistrasi(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->Password = bcrypt($request->Password);
        $user->save();
        //dd($user);
        return redirect()->route('login');
    }

    public function tampillogin(){
        return view('login');
    }

    public function submitlogin(request $request){
        $data = $request->only('email', 'password');

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('siswa.tampil');
        } else{
            return redirect()->back()->with('gagal', 'Email atau Password yang anda masukan salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
