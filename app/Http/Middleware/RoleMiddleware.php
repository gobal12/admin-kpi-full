<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        // Pastikan pengguna terautentikasi
        if (!$user) {
            return redirect('/login');
        }

        // Memeriksa apakah peran pengguna ada dalam array peran yang diberikan
        if (!in_array($user->role, $roles)) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);  // Lanjutkan request jika peran sesuai
    }
}
