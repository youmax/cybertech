<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Str;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if ($request->expectsJson()) {
            return;
        }
        if (Str::contains($request->route()->getName(), 'admin')) {
            return route('admin.login');
        } elseif (Str::contains($request->route()->getName(), 'user')) {
            return route('user.login');
        }
    }
}
