<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller {
    
    public function create() {

        return view('auth.login');
    }

    public function store(Request $request) {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            
            $request->session()->regenerate();
            
            return redirect()->intended('/');
        }
        return back()->withErrors([
                'message' => 'El email o la contraseña es incorrecta',
            ]);
    }

    public function logout(Request $request) {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
