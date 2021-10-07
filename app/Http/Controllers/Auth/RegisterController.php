<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function rForm()
    {

        return view('auth.register');
    }

    public function registerUser(Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

        if ($request) {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                //    'user_type' => $request->user_type,
                'password' => Hash::make($request->password)
            ]);

            return redirect()->route('auth.loginForm');
        }
    }
}