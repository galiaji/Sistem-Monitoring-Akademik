<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsFirstLogin
{
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        if ($user->level == "mahasiswa" && !$user->mahasiswa->isDataPribadiUpdated()) {
            return redirect("/firstLogin");
        }

        return $next($request);
    }
}
