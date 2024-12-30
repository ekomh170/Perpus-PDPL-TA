<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        // Pastikan pengguna sudah login
        if (auth()->check()) {
            // Jika peran yang diminta adalah admin dan pengguna memiliki peran admin
            if ($role === 'admin' && auth()->user()->role === 'admin') {
                return $next($request); // Lanjutkan request jika role admin
            }

            // Jika peran yang diminta adalah member dan pengguna memiliki peran member
            if ($role === 'member' && auth()->user()->role === 'member') {
                return $next($request); // Lanjutkan request jika role member
            }
        }

        // Jika pengguna mencoba mengakses halaman yang tidak sesuai dengan peran
        if (auth()->check() && auth()->user()->role === 'member' && $role === 'admin') {
            // Member mencoba mengakses halaman admin, arahkan ke member dashboard
            return redirect()->route('member.dashboard');
        }

        if (auth()->check() && auth()->user()->role === 'admin' && $role === 'member') {
            // Admin mencoba mengakses halaman member, arahkan ke admin dashboard
            return redirect()->route('admin.dashboard');
        }

        // Jika pengguna tidak memiliki akses, arahkan ke halaman login
        return redirect()->route('login')->with('alert', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}
