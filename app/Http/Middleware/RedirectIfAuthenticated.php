<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
          if(Auth::User()->account_type=="client"){
            return redirect('/client_home');
          }
          else if(Auth::User()->account_type=="admin"){
            return redirect('/admin_home');
          }
          else if(Auth::User()->account_type=="manager"){
            return redirect('/manager_home');
          }
          else if(Auth::User()->account_type=="employee"){
            return redirect('/employee_home');
          }
        }

        return $next($request);
    }
}
