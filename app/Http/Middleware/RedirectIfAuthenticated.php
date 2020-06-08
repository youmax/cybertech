<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Str;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $name = $request->route()->getName();

            if (Str::contains($name, 'admin') && Auth::user()->hasRole('admin')) {
                return redirect()->route('admin.home');
            } elseif (Str::contains($name, 'user') && Auth::user()->hasRole('user')) {
                return redirect()->route('user.home');
            }
        }

        return $next($request);
    }
}
