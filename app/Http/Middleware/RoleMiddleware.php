<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Verifica si el usuario está autenticado y si tiene el rol correcto
        if (Auth::check() && Auth::user()->role->name === $role) {
            return $next($request);
        }

        // Si no tiene el rol, redirige al usuario a una página específica
        return redirect('/');
    }
}
