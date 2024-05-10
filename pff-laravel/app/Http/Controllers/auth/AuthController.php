<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }
    public function signupPage()
    {
        return view('auth.signup');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($request->only(['email','password']))) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'admin') {
                return redirect(route('admin'));
            } else if (auth()->user()->role == 'driver') {
                return redirect(route('driver.index'));
            } else if (auth()->user()->role == 'client') {
                return redirect(route('client.index'));
            }
        } else {
            return redirect(route('auth.login'))->withErrors(['password'=>'Incorrect Password', 'email' => 'Incorrect Email']);
        }
    }
    public function signup(Request $request)
    {
  $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
        ]);
        User::create([
            'firstname' => $request->fname,
            'lastname' => $request->lname,
            'phone' => $request->phone,
            'role' => 'client',
            'email' => $request->email,
            'phonenumber' => $request->phone,
            'password' => Hash::make($request->password),
            'address' => $request->address,
        ]);
        return redirect(route('auth.login'));
    }
    public function logout(){
        session()->flush();
        auth()->logout();
        return redirect(route('auth.login'));
    }
}
