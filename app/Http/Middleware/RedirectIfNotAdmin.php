<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Adjust this condition to match your User model's role system
        if (auth()->check() && auth()->user()->role !== 'admin') {
            // Redirect students or others to their own dashboard
            return redirect('/student/dashboard');
        }

        return $next($request);
    }
}
