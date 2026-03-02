<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credenciales = $request->validate([
            'documento' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credenciales)) {

            $request->session()->regenerate();

            
            Bitacora::create([
                'id_login' => Auth::id(),
                'file' => null
            ]);

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'documento' => 'Credenciales incorrectas',
        ]);
    }

    
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'documento' => 'required|unique:users,documento',
            'name' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'documento' => $request->documento,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}