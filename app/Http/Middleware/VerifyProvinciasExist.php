<?php

namespace App\Http\Middleware;

use App\Models\Provincia;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyProvinciasExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificar si existen provincias
        if (Provincia::count() === 0) {
            // Si no existen provincias, puedes redirigir al usuario o mostrar un mensaje
            return redirect()->route('provinces.create');
        }
        
        return $next($request);
    }
}
