<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LogRegController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'judul' => 'SIGN IN'
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Gagal!');
    }

    public function register()
    {
        return view('login.register', [
            'judul' => 'SIGN UP'
        ]);
    }

    public function simpanuser(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:8'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        user::create($validatedData);

        // $request->session()->flash('status', 'Task was successful!');

        return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan Login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
