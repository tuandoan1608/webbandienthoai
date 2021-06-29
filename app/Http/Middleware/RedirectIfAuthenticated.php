<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      
        if ($guard == "custommer" && Auth::guard($guard)->check()) {
            return $next($request);
        }
        // if ($guard == "blogger" && Auth::guard($guard)->check()) {
        //     return redirect('/blogger');
        // }
        if (Auth::guard($guard)->check()) {
            return $next($request);
        }

        return $next($request);
    

       
    }
}
