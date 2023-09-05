<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // check if an user is logged in
        if (!$request->user()) {
            return redirect()->route('login');
        }

        // check if the user has the role of admin
        if ($request->user()->role_id !== 2) {
            abort(403, 'You are not authorized to access this page.');
        }

        return $next($request);
    }
}