<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth()->user() && Auth()->user()->role == 'admin') {
            return $next($request);
        }

        return response()->json(['message' => 'No tiene permisos para esta accion.'], 400);
    }
}
