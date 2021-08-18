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
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                if(auth()->user()->role === "desa driver" || auth()->user()->role === "desa loader") {

                    return redirect()->route("desa.loader.profile");

                }else if(auth()->user()->role === "desa dispatcher"){

                    return redirect()->route("desa.dispatcher.profile");

                }
                // return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
