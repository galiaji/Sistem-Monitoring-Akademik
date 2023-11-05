<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (auth()->user()->role == $role) {
            return $next($request);
        }

        // If the user is not authorized to access this role's dashboard, redirect to their own dashboard
        switch (auth()->user()->role) {
            case 'operator':
                return redirect('admin/operator');
            case 'mahasiswa':
                return redirect('admin/mahasiswa');
            case 'dosen':
                return redirect('admin/dosen');
            case 'departemen':
                return redirect('admin/departemen');
            // Add cases for other roles as needed

            // If none of the cases match, you can redirect to a default route, such as 'admin' or 'home'
            default:
                return redirect('admin');
        }
    }
}