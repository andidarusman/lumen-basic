<?php

namespace App\Http\Middleware;

use Closure;

class UmurMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->umur <= 20) {
            return "anda tidak di ijinkan masuk, Karena umur anda belum mencukupi.";
        }
        return $next($request);
    }
}