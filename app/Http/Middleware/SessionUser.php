<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class SessionUser
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     * @throws \Exception
     */
    public function handle(Request $request, Closure $next)
    {

        // Ultima session de usuario EJ: 2021-02-03 00:00:00
        $last_login = \Auth::user()->last_login;
        $date_last = new Carbon($last_login);
        // Fecha actual  EJ: 2021-02-04 00:00:00
        $date_now = Carbon::now();
        $difference_days = $date_last->diffInDays($date_now);

        if ($difference_days > 1) {
            return redirect('sesiones');
        }

        return $next($request);
    }
}
