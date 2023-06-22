<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|confirmed',
            'role' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successful. Please login.');
    }
    
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validatedData)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect('/movies')->with('success', 'Login successfully as Admin');
                return redirect('/genres')->with('succes', 'Login successfully as Admin');
                return redirect('/reviews')->with('succes', 'Login successfully as Admin');
            } else {
                return redirect('/')->with('success', 'Login successfully as user');
            }
            return redirect('/')->with('success', 'Login successfully');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ]);
    }
}