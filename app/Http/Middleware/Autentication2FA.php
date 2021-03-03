<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use PragmaRX\Google2FA\Google2FA;
use RealRashid\SweetAlert\Facades\Alert;

class Autentication2FA
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
        // Fecha actual  EJ: 2021-02-03 00:40:00
        $date_now = Carbon::now();
        $difference_minutes = $date_last->diffInMinutes($date_now);

        if ($difference_minutes > 30) {
            if ((new Google2FA())->verifyKey(\Auth::user()->token_login, $request->code_verification)) {
                return $next($request);
            }else{
                Alert::warning('', __('Clave dinamica errada'));
                return redirect()->route('authenticator.view');
            }
        }
    }
}
