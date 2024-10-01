<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class IsGestion
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */

    public function handle($request, Closure $next)
    {
        if (Auth::user()){
            if(Auth::user()->role == 'gestion' || Auth::user()->role == 'contable' ||Auth::user()->role == 'admin') {
                return $next($request);
            }
        }
        return redirect()->route('inicio'); // If user is not an admin.
    }
}
