<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginproses(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|exists:users,email',
            'password' => 'required|min:6',

        ], [
            'email.required' => 'email harus di isi',
            'email.exists' => 'email yang anda masukan belum terdaftar',
            'password.required' => 'password harus di isi',
            'password.min' => 'password minimal 6 karakter',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return back();
        }
        return redirect('/');
    }

    public function register()
    {
        return view('register');
    }

    public function registeruser(Request $request)
    {

            $this->validate($request, [
                'email' => 'required|unique:users',
                'password' => 'required|min:6',
            ],[
                'email'
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'remember_token' => Str::random(60),
            ]);
            return redirect('/login')->with('success', 'Registrasi Berhasil silahkan Login');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
