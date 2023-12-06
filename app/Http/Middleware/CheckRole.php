<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CheckRole {
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        if(!Auth::check()) {
            // Jika belum login, redirect ke halaman login
            return redirect('/login');
        }

        $allowedRoles = func_get_args();

        $roles = User::get('role');
        $userRoles = Auth::user()->role;

        if(in_array(Auth::user()->role, $allowedRoles)) {
            return $next($request);
        }

        // foreach($roles as $role) {
        //     if($userRoles == $role) {
        //         return $next($request);
        //     }
        // }

        // Jika role tidak sesuai, redirect ke halaman yang sesuai
        // if($userRoles == 'user') {
        //     return redirect('/');
        // } elseif($userRoles == 'admin') {
        //     return redirect('/dashboard');
        // }

        if(Auth::user()->role == 'user') {
            return redirect('/');
        } elseif(Auth::user()->role == 'admin' && in_array('admin', $allowedRoles)) {
            return redirect('/dashboard');
        }

        // Jika role tidak dikenali, redirect ke halaman login
        return redirect('/login');
    }
}
