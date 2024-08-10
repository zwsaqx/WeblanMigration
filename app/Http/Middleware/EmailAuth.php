<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class EmailAuth
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
        if (!Auth::check() || is_null(Auth::user()->email_verified_at)) {
            return redirect()->route('LandingPage');
        }
        // if(!Auth::check()){
        //     return redirect()->route('LandingPage');
        // }

        return $next($request);
    }
}

