<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response; 
use Illuminate\Support\Facades\Auth;


class AuthenticateGames
{
    public function handle($request, Closure $next)
    {
        // Define the restricted URLs
        $restrictedUrls = [
            'arena',
        ];

        // Check if the requested URL is in the restricted list
        if (in_array($request->path(), $restrictedUrls) && !Auth::check()) {
            // User is not authenticated and trying to access a restricted URL, redirect to the login page
            return redirect('/login');
        }

        // Check if the request path starts with '/games' and user is not authenticated
        if (strpos($request->path(), 'games') === 0 && !Auth::check()) {
                    // User is not authenticated and trying to access a URL under "/games", redirect to the login page
                    return redirect('/login');
                }

        // Allow access to other URLs
        // return $next($request);
    }
}
