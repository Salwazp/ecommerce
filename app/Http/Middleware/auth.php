<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->userType == 'A') {
            return $next($request);
        }
        elseif(auth()->user()->userType == 'S'){
            return $next($request);
        }
        return response()->json(['you dont have permission']);
    }
}
