<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //dd('hello');
        if (Auth::user() &&  Auth::user()->role == '1') {
            //dd('hello');
            return $next($request);
        }
        else {
            //return redirect()->intended('/');
            Auth::logout();
        }
        //dd('hello after if');
        return $next($request);
    }
}
