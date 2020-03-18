<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLogedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if(Auth::user()->level==2)
            {
             return redirect()->intended('admin/home');
            }
            else if (Auth::user()->level==3) {
                return redirect()->intended('home');
            }
        }
        return $next($request);
    }
}
