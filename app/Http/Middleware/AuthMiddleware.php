<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
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
        if (Auth::check()) {
            switch (Auth::user()->role) {
                case 'admin':
                    return redirect(route('admin'));
                    break;
                case 'driver':
                    return
                        redirect(route('driver.index'));
                    return $next($request);
                    break;
                default:
                session()->flush();
                    redirect(route('auth.login'))->with('Error', 'Unexpected err ');
                    return $next($request);
                    break;
            }
        }
    }
}
