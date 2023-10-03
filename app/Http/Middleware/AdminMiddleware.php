<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user() &&  Auth::user()->role_id == 1 || Auth::user()->role_id == 2 || Auth::user()->role_id == 3) {
            return $next($request);
        }

            return redirect('home')->with('error','You have not admin access');
        }


    //}
}
