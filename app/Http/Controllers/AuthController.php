<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        //
    }

    public function logout(Request $request)
    {
        //
    }

    public function welcome()
    {
        return view('auth.dashboard');
    }
}
