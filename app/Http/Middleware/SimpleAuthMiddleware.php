<?php

namespace App\Http\Middleware;

use Closure;

class SimpleAuthMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if ($request->session()->get('authenticated') === true) {
            return $next($request);
        }

        // If not authenticated, redirect to login page
        return redirect()->route('login')->with('error', 'Please log in');
    }
}

