<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class authUsuarioNegocio
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
      $usuario = Auth::user();
      if ($usuario->rol_id != 2) {
        return redirect('/login');
      }

      return $next($request);
    }
}
