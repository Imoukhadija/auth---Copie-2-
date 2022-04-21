<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class adminmiddleware
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
            if(Auth::user()->role_as=='0') // 1 dyal admin 0 dyal user
            {
                return $next($request);

            }
            else{
                redirect('/home')->with('statut','access refuser , car voun n etes pas un admin');
            }
        }
        else{
            redirect('/login')->with('statut','connecter vous');

        }
    }
}
