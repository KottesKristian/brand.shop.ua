<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param null $guard
     * @return mixed
     * @internal param null|string $guard
     */
    public function handle($request, Closure $next, $guard = null)
    {

        //dd(Auth::user()->admin_role);
        //dd(Auth::guard($guard)->attempt(['password' => 'kristo123', 'admin_role' => 1]));
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->admin_role == 1) {
                return redirect('admin');
            }else {
                return redirect('admin/login');
            }
        }else {
            return $next($request);
        }
    }
}
