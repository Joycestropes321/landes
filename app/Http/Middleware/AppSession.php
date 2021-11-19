<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AppSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('isAuth')){
            return $next($request);
        }
        else{
            return response()->view('auth.login');
        } 
    }
}
