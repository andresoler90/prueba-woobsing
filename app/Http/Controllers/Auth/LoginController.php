<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuarios;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {

        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }
        $credentials = $request->only($this->username(), 'password');

        if (Auth::validate($credentials)) {

            $user = Usuarios::where($this->username(), '=', $request->username)->first();

            if ($user->role_id == 1 && $_SERVER['REMOTE_ADDR'] == '127.0.0.1')
                setcookie('origin_sesion');

            //Verificamos si este usuario posee activo la a2fa
            if ($user->token_login) {
                return view("Authentication.auth-2fa", compact('user'));
            } else {
                $request->session()->regenerate();
                Auth::login($user);
                return redirect()->intended($this->redirectPath());
            }
        }


        $this->incrementLoginAttempts($request);
        Alert::warning(__('Credenciales inválidas'), __('El usuario y/o contraseña ingresados son inválidos'));
        return $this->sendFailedLoginResponse($request);
    }
}
