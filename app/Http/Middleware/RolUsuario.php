<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RolUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // ? Necesito registrarlo primero en Kernel.php
        // ? puedo traerme el rol de cualquiera de las dos maneras, primero se verifica que el usuario esté autenticado en el orden de los middleware entonces nunca va a generar conflicto
        // dd(auth()->user()->rol);
        if ($request->user()->rol !== 2){
            // En caso de que no sea el rol 2, redireccionar al usuario a home
            return redirect()->route('home');
        }
        return $next($request);
    }
}
