<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        // Vérifier d'abord si l'utilisateur existe
        $user = DB::table('users')->where('email', $credentials['email'])->first();
        
        if (!$user) {
            return back()->withErrors([
                'email' => 'Cet email n\'existe pas dans notre système.',
            ])->onlyInput('email');
        }

        // Si l'utilisateur existe mais l'authentification échoue
        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'password' => 'Le mot de passe est incorrect.',
            ])->onlyInput('email');
        }

        $request->session()->regenerate();
        return redirect()->intended('/admin/dashboard');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
