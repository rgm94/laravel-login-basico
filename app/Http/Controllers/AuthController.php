<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:8'
            ],
            [
                'email.required' => 'Por favor, indica un email',
                'email.email' => 'El formato del email no es válido',
                'password.required' => 'Introduce la contraseña',
                'password.min' => 'La contraseña tiene que tener más de 7 caracteres'
            ]
        );

        if(Auth::attempt($credentials))
        {
            
            $request->session()->regenerate();
            return redirect()->intended(route('welcome'));
        }

        return back()
        ->withErrors(['error' => 'Las credenciales proporcionadas no coinciden con nuestros registros'])
        ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function welcome()
    {
        return view('auth.dashboard');
    }
}
