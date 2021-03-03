<?php

namespace App\Http\Middleware;

use App\Models\Usuarios;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $user = Auth::user();

        if ($user->role_id == 1 && $_SERVER['REMOTE_ADDR'] == '127.0.0.1')
            setcookie('origin_sesion');

        return $next($request);
    }
}
