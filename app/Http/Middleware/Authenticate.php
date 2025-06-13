<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        // Mengecek apakah pengguna sudah login (terautentikasi)
        if (Auth::guest()) {
            // Jika tidak, redirect ke halaman login
            return redirect()->route('login');
        }

        return $next($request);
    }
}
