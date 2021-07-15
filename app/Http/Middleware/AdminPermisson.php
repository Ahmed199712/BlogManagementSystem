<?php

namespace App\Http\Middleware;

use Closure;

class AdminPermisson
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        if( @adminurl()->group->$role == 'disable' ){

            session()->flash('warning' , 'You do not have permission !');
            return redirect()->back();
        }
        return $next($request);
    }
}
