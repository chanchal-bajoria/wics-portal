<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class LoggedIn
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
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        elseif(empty(Auth::user()->name) && Route::currentRouteName() != 'nameassign' && Route::currentRouteName() != 'assignchosenname')
        {
            return redirect()->route('nameassign');
        }
        return $next($request);
    }
}
