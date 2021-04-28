<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
       

        if (Auth::guard('pelamar')->check()) {

            return redirect('/index');

        } else if (Auth::guard('perusahaan')->check()) {

            return redirect('/lawang');
            
          }

        return $next($request);
    }
}
