<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SeekerAuth
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
        if($request->path()=='login' && $request->session()->has('seeker'))
        {
            return redirect('/seekerHome');
        }
        if($request->path()=='providerHome' && $request->session()->has('seeker'))
        {
            return redirect('/seekerHome');
        }
        if($request->path()=='admin' && $request->session()->has('seeker'))
        {
            return redirect('/seekerHome');
        }
        return $next($request);
    }
}
