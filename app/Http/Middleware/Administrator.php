<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class Administrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \Closure $next
     * @return mixedpp
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->role == '1'){
            return $next($request);
        }else if(Auth::check() && Auth::user()->role == '2'){
            return $next($request);
        }else
            return redirect('/login');  
    }
}
