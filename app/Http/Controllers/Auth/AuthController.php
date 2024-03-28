<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        // auth::logout();
        return view('login');
    }

    public function login() {
        $validateData = request()->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        
        if(Auth::attempt($validateData))
        {
            dd('logged in');
        }
        else{
            dd('invalid credentials');

            return back()->withErrors('Unsuccessful');
        }
    }
}
