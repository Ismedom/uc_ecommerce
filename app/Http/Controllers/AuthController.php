<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showRegisterForm(){
        return view('pages.auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'  => ['required', 'string', 'max:255'],
            'email'      => ['required', 'email', 'unique:users'],
            'password'   => ['required', 'min:6', 'confirmed']
        ]);
        $user = User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function showLoginForm(){
        return view('pages.auth.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records'
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
