<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

    protected function authenticated(Request $request, $user)
{
if ( $user->account_type=="client" ) {// do your margic here
    return redirect('/client_home');
}
else if ( $user->account_type=="admin" ) {// do your margic here
    return redirect('/admin_home');
}
else if ( $user->account_type=="employee" ) {// do your margic here
    return redirect('/employee_home');
}
else if ( $user->account_type=="manager" ) {// do your margic here
    return redirect('/manager_home');
}
 return redirect('/login');
}

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

  //protected $redirectTo = '/client_home';

    /**
     * Create a new controller instance.
     *
     * @return void
    *
     */




    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
