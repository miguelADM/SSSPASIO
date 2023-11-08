<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        if(Auth::check()){
            if(auth()->user()->id_rol == 2){
                return $next($request);
            }else{
                return redirect()->route('home')->with('error','No tienes permisos para acceder a esta sección');
            }
        }
        return redirect()->route('login')->with('error','No tienes permisos para acceder a esta sección');
    }
}

 