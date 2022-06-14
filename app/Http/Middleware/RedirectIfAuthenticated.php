<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closur $next
     * @param string\null ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        $guards = empty($guards) ? [null] : $guards;

        if (Auth::guard($guard)->check() && Auth::user()->role == '1'){
            return redirect('/admin/index');
        }else if (Auth::guard($guard)->check() && Auth::user()->role == '2'){
            return redirect('/admin/guru');
        }
        return $next($request);
    }
}
