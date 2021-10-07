<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function lForm(){
        
        return view('auth.login');
        
    }

    public function loginUser(Request $request){

        $request->validate([
           'email' => 'required',
           'password' => 'required|min:8' 
        ]);

        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
            
            if (Auth::user()->user_type === "sham-don") {
                
                return redirect()->route('admin.index');
                
            }elseif (Auth::user()->user_type === "student") {
                
                return redirect()->route('dashboard.index');
                
            }
            
        }else{
            
            return redirect()->back();
            
        }
        

    }
}