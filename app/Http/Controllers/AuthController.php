<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public static function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->id_rol == 2){
                return redirect()->intended('admin');
            }else{
                return redirect()->intended('home');
            }
        }
        return back()->with('error', 'Las credenciales proporcionadas no coinciden con nuestros registros.');
    }
}
