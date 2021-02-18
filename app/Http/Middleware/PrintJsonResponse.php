<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PrintJsonResponse
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Laravel will think like that: Probably this client accepting only json data.
        $request->headers->set('Accept', 'application/json');
        return $next($request);
    }
}