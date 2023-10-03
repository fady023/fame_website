<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class FrontLogin_middleware
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
        //dd(Session::get('frontSession'));
        if(empty(Session::has('frontSession'))){
            //return redirect()->route('login');
            return redirect('/login_page');
        }
        //Session::put('frontSession',Auth::user()->email);

        return $next($request);
    }
}