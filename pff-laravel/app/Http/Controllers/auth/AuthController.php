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
                return redirect(route('driver.deliveries'));
            } else if (auth()->user()->role == 'client') {
                return redirect(route('client.index'));
            }
        } else {
            return redirect(route('auth.login'))->withErrors(['password'=>'Incorrect Password', 'email' => 'Incorrect Email']);
        }
    }
    public function signup(Request $request)
    {
  $validated = $request->validate([
            'Firstname' => 'required',
            'Lastname' => 'required',
            'phonenumber' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required',
        ]);
    if($validated){
        User::create([
            'Firstname' => $request->Firstname,
            'Lastname' => $request->Lastname,
            'phonenumber' => $request->phonenumber,
            'role' => 'client',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect(route('auth.login'));
    }else{
        return redirect(route('auth.signup'))->withErrors('ema','ooopsy');
    }
    }
    public function logout(){
        session()->flush();
        auth()->logout();
        return redirect(route('auth.login'));
    }
}