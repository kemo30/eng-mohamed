<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index(){

        return view('dashboard.auth.login');
    }
    public function Login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::guard('admins')->attempt($credentials ,$request->remember)) {

            $request->session()->regenerate();
            return redirect()->route('dashboard.home');
        }




        return back()->withErrors([
            'credentials' => 'The provided credentials do not match our records.',
        ]);
    }
}
