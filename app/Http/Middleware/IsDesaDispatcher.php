<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsDesaDispatcher
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
        if(Auth::check() && Auth::user()->role === "desa dispatcher") {
            return $next($request);
        }

        Auth::logout();

        return redirect()->route("login")->with(["status" => "You are now authenticated to access this url"]);
    }
}
