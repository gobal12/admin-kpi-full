<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi kredensial login
        $credentials = $request->only('email', 'password');

        // Cek apakah kredensial valid
        if (Auth::attempt($credentials)) {
            // Regenerasi session untuk menghindari session fixation
            $request->session()->regenerate();

            // Mengarahkan pengguna ke halaman yang mereka coba akses sebelumnya
            // Jika tidak ada, arahkan ke dashboard
            return redirect()->intended(route('dashboard')); 
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Proses logout
    public function logout(Request $request)
    {
        // Melakukan logout pengguna
        Auth::logout();

        // Menghancurkan sesi pengguna dan regenerasi token CSRF
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect pengguna ke halaman login setelah logout
        return redirect()->route('login');
    }
}
