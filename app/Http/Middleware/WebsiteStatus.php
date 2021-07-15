<?php

namespace App\Http\Middleware;

use Closure;

class WebsiteStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (settings()->website_status == 1) {
            return $next($request);
        }else{
            return redirect()->route('maintenance');
        }

    }
}
