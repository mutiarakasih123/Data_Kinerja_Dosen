<?php

namespace App\Http\Middleware;

use closure;

class AuthenticateDosen
{
    public function handle($request, Closure $next)
    {
        if (session('accessid') == 'Dosen') {
            return redirect('/dosen');
        }
        return $next($request);
    }
}
