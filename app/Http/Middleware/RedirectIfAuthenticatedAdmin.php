<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfAuthenticatedAdmin
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (auth()->guard('admin')->check()) {
            return redirect('/admin');
        }

        return $next($request);
    }
}
