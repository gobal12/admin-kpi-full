<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        // Mengecek apakah pengguna sudah terautentikasi
        if (Auth::check()) {
            // Jika terautentikasi, redirect ke halaman dashboard atau halaman yang sesuai
            return redirect()->route('home'); // Ganti 'home' dengan rute tujuan yang diinginkan
        }

        return $next($request);
    }
}
