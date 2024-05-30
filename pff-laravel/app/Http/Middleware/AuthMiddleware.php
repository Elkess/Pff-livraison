<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            switch (Auth::user()->role) {
                case 'admin':
                    return redirect()->route('admin');
                case 'driver':
                    return redirect()->route('driver.deliveries');
                default:
                    Auth::logout();
                    return redirect()->route('auth.login')->with('Error', 'Unexpected error');
            }
        }else{
            session()->flush();
            auth()->logout();
            return redirect(route('auth.login'))->with('Error', 'You are not Allowed');
        }

    }
}
