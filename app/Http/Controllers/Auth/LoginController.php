<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function get_login(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials))
        {
           if (Auth::user()->tipo === 'Paciente') {
               echo 'Hola paciente';
           }
        }

        return back()
            ->withErrors(['email' => trans('auth.failed')])
            ->withErrors(['password' => trans('auth.failed')]);
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }

    public function get_register(){
        return view('auth.register');
    }

    public function register(){
        echo "Login user...";
    }
}
